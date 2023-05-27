<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
Use Hash;
Use Session;

class AuthController extends Controller
{
    public function login(){
return view("auth.login");
    }
    public function registration(){
return view("auth.registration");
    }
    public function registerUser(Request $request){

    $request->validate(
    [
        'name'=>'required|unique:users',
        'email'=>'required|email|unique:users',
        'password'=>'required|min:5|max:12|confirmed'
    ]
    );
    $user = new User();
    $user->name=$request->name;
    $user->email=$request->email;
    $user->password=Hash::make($request->password);
    $res = $user ->save();
    if($res){
        return back()->with('success','you have registred successfuly');
    }
    else{
        return back()->with('fail','your registration has failed');
    }
}
public function loginUser(Request $request){
    $request->validate(
        [
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]
        );
        $user=User::where('email','=',$request->email)->first();
        if($user){      
            if(Hash::check($request->password,$user->password)){
                $request->Session()->put('loginId',$user->name);
                if($request->email=="admin@gmail.com"){
                    return redirect('/users');
                }else{
                    return redirect('/');
                }
              
            }else{
                return back()->with('fail','Password not matches');
            }
        }else{            
             return back()->with('fail','This email is not registred');
        }
}


public function logout(){
    if(Session::has('loginId')){
        Session::pull('loginId');
        return redirect('/');
    }
}
}