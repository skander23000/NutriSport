@extends('frontend.layouts.master')

@section('title','Information')
<head>  <link rel="stylesheet" href="frontend/css/information.css" /></head>
@section('content')

    <main class="information">
      <div class="container">
        <div class="card">
          <form action="{{route('information_3')}}" method="get" class="card-form">
            <h3>CHOOSE YOUR OBJECTIVE :</h3>
            <input type="hidden" name="genre" value="{{ $data['genre'] }}">
            <input type="hidden" name="age" value="{{ $data['age'] }}">
            <input type="hidden" name="poids" value="{{ $data['poids'] }}">
            <input type="hidden" name="taille" value="{{ $data['taille'] }}">
            <div class="input-container">
              <input type="radio" name="objectif" id="option-1" value="maintien" required/>
              <div class="radio-tile">
                <label for="option-1">Maintain current weight</label>
              </div>
            </div>

            <div class="input-container">
              <input type="radio" name="objectif" id="option-2" value="perte" required />
              <div class="radio-tile">
                <label for="option-2">weight loss</label>
              </div>
            </div>

            <div class="input-container">
              <input type="radio" name="objectif" id="option-3" value="prise" required />
              <div class="radio-tile">
                <label for="option-3">weight gain</label>
              </div>
            </div>
            <div class="action">
              <button type="submit" class="action-button">Next</button>
            </div>
          </form>
          <img src="frontend/img/progressionbar_2.png" alt="" />
        </div>
      </div>
    </main>
  @endsection

