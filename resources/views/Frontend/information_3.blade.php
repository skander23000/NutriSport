@extends('frontend.layouts.master')

@section('title','Information')
<head> <link rel="stylesheet" href="frontend/css/information.css" /></head>
@section('content')

    <main class="information">
      <div class="container">
        <div class="card">
          <form action="{{url("/storedb")}}" class="card-form" method="POST">
            @csrf
            <h3 class="page3_h3">YOUR CURRENT ACTIVITY RATE :</h3>
            <input type="hidden" name="genre" value="{{ $data['genre'] }}">
            <input type="hidden" name="age" value="{{ $data['age'] }}">
            <input type="hidden" name="poids" value="{{ $data['poids'] }}">
            <input type="hidden" name="taille" value="{{ $data['taille'] }}">
            <input type="hidden" name="objectif" value="{{ $data['objectif'] }}">
            <div class="input-container">
              <input type="radio" name="taux_activite" id="option-1" value="sedentaire" required/>
              <div class="radio-tile">
                <label for="option-1">Sedentary</label>
              </div>
            </div>
            <div class="input-container">
              <input type="radio" name="taux_activite" id="option-2" value="modere" required/>
              <div class="radio-tile">
                <label for="option-2">Moderately active</label>
              </div>
            </div>
            <div class="input-container">
              <input type="radio" name="taux_activite" id="option-3" value="continue" required />
              <div class="radio-tile">
                <label for="option-3">Very active</label>
              </div>
            </div>
            <div class="action">
              <button type="submit" class="action-button">
                Generate my diet
              </button>
            </div>
          </form>
          <img src="frontend/img/progressionbar_3.png" alt="" />
        </div>
      </div>
    </main>
@endsection