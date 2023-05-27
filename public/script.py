import sqlalchemy
from sqlalchemy import create_engine, text
from sqlalchemy import select
import mysql.connector
import pandas as pd 
import numpy as np 
from pulp import *
import subprocess
import sys 


#######################################################################################################
user_db=sys.argv[1]
engine_user = create_engine("mysql://root@localhost/"+user_db)
con_user=engine_user.connect

# Se connecter à la base de données MySQL
db = mysql.connector.connect(
  host="localhost",
  user="root",
  password="",
  database= user_db
)

# Récupérer les informations de l'utilisateur à partir de la table "information"
cursor = db.cursor()
cursor.execute("SELECT genre, age, poids, taille, objectif ,taux_activite, user_id FROM informations WHERE id = (SELECT MAX(id) FROM informations)")
result = cursor.fetchone()

# Extraire les informations de l'utilisateur de la variable "result"
genre, age, poids, taille, objectif ,taux_activite , user_id = result

######################################################################################################
def calculate_calories(age, poids, taille, objectif, taux_activite):
    if genre == 'homme':
        bmr = 88.362 + (13.397 * poids) + (4.799 * taille) - (5.677 * age)
    else:
        bmr = 447.593 + (9.247 * poids) + (3.098 * taille) - (4.330 * age)
    if taux_activite == 'sedentaire':
        activity_factor = 1.2
    elif taux_activite == 'modere':
        activity_factor = 1.55
    else:
        activity_factor = 1.7
    bmr = bmr * activity_factor
    if objectif == 'perte' : 
        total_calories=bmr - (bmr*0.2) 
    elif objectif =='prise':
        total_calories=bmr + 500
    else: total_calories =bmr*1 
    return total_calories

total_calories = calculate_calories(age,poids, taille, objectif, taux_activite)

######################################################################################################

engine = create_engine("mysql://root@localhost/main_test")
con=engine.connect

query = 'select * from nutrition00'
pandas_dataframe=pd.DataFrame(engine.connect().execute(text(query)))

data = pandas_dataframe[['name','calories','carbohydrate','total_fat','protein']]

week_days = ['1_monday','2_tuesday','3_wednesday','4_thursday','5_friday','6_saturday','7_sunday']
split_values = np.linspace(0,len(data),8).astype(int)
split_values[-1] = split_values[-1]-1

def random_dataset():
    frac_data = data.sample(frac=1).reset_index().drop('index',axis=1)
    day_data = []
    for s in range(len(split_values)-1):
        day_data.append(frac_data.loc[split_values[s]:split_values[s+1]])
    return dict(zip(week_days,day_data))

def build_nutritional_values(kg,calories):
    protein_calories = kg*4
    carb_calories = calories/2.
    fat_calories = calories-carb_calories-protein_calories
    res = {'Protein Calories':protein_calories,'Carbohydrates Calories':carb_calories,'Fat Calories':fat_calories}
    return res

def extract_gram(table):
    protein_grams = table['Protein Calories']/4.
    carbs_grams = table['Carbohydrates Calories']/4.
    fat_grams = table['Fat Calories']/9.
    res = {'Protein Grams':protein_grams, 'Carbohydrates Grams':carbs_grams,'Fat Grams':fat_grams}
    return res
    
days_data = random_dataset()

def model(day,kg,calories):
    G = extract_gram(build_nutritional_values(kg,calories))
    E = G['Carbohydrates Grams']
    F = G['Fat Grams']
    P = G['Protein Grams']
    day_data =days_data[day]
    day_data = day_data[day_data.calories!=0]
    food = day_data.name.tolist()
    c  = day_data.calories.tolist()
    x  = pulp.LpVariable.dicts( "x", indices = food, lowBound=0, upBound=1.5, cat='Continuous', indexStart=[] )
    e = day_data.carbohydrate.tolist()
    f = day_data.total_fat.tolist()
    p = day_data.protein.tolist()
    prob  = pulp.LpProblem( "Diet", LpMinimize )
    prob += pulp.lpSum( [x[food[i]]*c[i] for i in range(len(food))]  )
    prob += pulp.lpSum( [x[food[i]]*e[i] for i in range(len(x)) ] )>=E
    prob += pulp.lpSum( [x[food[i]]*f[i] for i in range(len(x)) ] )>=F
    prob += pulp.lpSum( [x[food[i]]*p[i] for i in range(len(x)) ] )>=P
    prob.solve()
    variables = []
    values = []
    for v in prob.variables():
        variable = v.name
        value = v.varValue
        variables.append(variable)
        values.append(value)
    values = np.array(values).round(2).astype(float)
    sol = pd.DataFrame(np.array([food,values]).T, columns = ['Food','Quantity'])
    sol['Quantity'] = sol.Quantity.astype(float)
    return sol

for day in week_days :
 sol_monday=model(day,poids,total_calories)
 sol_monday = sol_monday[sol_monday['Quantity']!=0.0]
 sol_monday.Quantity = sol_monday.Quantity*100
 #sol_monday = sol_monday.rename(columns={'Quantity':'Quantity (g)'})
  
 sol_monday = sol_monday.assign(user_id=user_id)
 sol_monday.to_sql(day,engine_user,if_exists="replace",dtype={'Quantity': sqlalchemy.types.NUMERIC(10.1)},index=False)
 print(sol_monday)

