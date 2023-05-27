<?php

namespace App\Http\Controllers;

use App\Models\Exercices;
use Illuminate\Http\Request;


class ExercicesController extends Controller
{
  public function index()
    {
        $exercices = Exercices::paginate(9);
        $focusList = $this->getFocus();
        return view('frontend.exercices', compact('exercices', 'focusList'));
    }



    public function getFocus()
    {
        $focusList = Exercices::distinct()->pluck('focus');
        return $focusList;
    }

    public function learnMore($id)
    {
        $exercices = Exercices::find($id);
        if(!$exercices){
            return redirect()->action([AuthController::class,'logout']);
        }
        return view('learn', compact('exercices'));
    }
 
    public function search(Request $request)
{
  $query = $request->input('query');
  $exercices = Exercices::where('focus', 'LIKE',   $query . '%')->
  orwhere('name', 'LIKE',   $query . '%')->paginate(9);
  $focusList = $this->getFocus();

    $exercices->appends($request->all());

    return view('frontend.exercices')->with('exercices', $exercices)->with('focusList', $focusList);
}


}