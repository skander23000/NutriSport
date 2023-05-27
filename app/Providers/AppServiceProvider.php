<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Models\User;
Use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         View::composer('frontend.layouts.master',function($view){
            $data = array();
            if(Session::has('loginId')){
            $data = User::where('id','=',Session::get('loginId'))->first();
            $view->with('data',$data);
            }
            
         });
    }
}
