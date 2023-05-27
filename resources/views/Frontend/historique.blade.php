@extends('frontend.layouts.master')

@section('title','History')
<head>  <link rel="stylesheet" href="frontend/css/information.css" /></head>
@section('content')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<main>
<h1 class="historique">Tracking your weight </h1>

<div class="chart-container">
    <canvas id="myChart"></canvas>
</div>

</main>
<script>
    // Récupérer les données depuis PHP et les convertir en JSON
    var poids = {!! json_encode($poids) !!};
    var created_at = {!! json_encode($created_at) !!};

    // Créer un nouveau graphique Chart.js
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: created_at, // les âges en tant qu'étiquettes pour l'axe X
            datasets: [{
                label: 'Weight',
                data: poids, // les poids pour l'axe Y
                borderColor: 'rgb(255, 99, 132)',
                fill: false
            }]
        },
        options: {
      
  scales: {
    y: {
        ticks: {
        padding: 20 // add 10 pixels of padding to the y-axis values
      },
      title: {
        display: true,
        text: 'Weight',
        padding: {
                    top: 10,
                    bottom: 30
                },
        font:{weight: 'bold',size:20},
        size:20
      }
    },
    x: {
        ticks: {
        padding: 20 // add 10 pixels of padding to the y-axis values
      },
      title: {
        display: true,
        text: 'Date',
        padding: {
                    top: 30,
                    bottom: 10
                },
        font:{weight: 'bold',size:20},
        
      }
    }
   
}
        }
  
    });
</script>
@endsection