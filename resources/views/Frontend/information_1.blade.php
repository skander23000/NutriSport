@extends('frontend.layouts.master')

@section('title','Information')
<head>  <link rel="stylesheet" href="frontend/css/information.css" /></head>
@section('content')

    <main class="information">
      <div class="container">
        <!-- code here -->
        <div class="card">
          <form action="{{route('information_2')}}" class="card-form" method="get">
            <input type="hidden" name="genre" value="{{ $data['genre'] }}">
            <h3>ENTER YOUR INFORMATION :</h3>
            <div class="input">
              <input type="number" min="16" max="80" name="age" class="input-field" required />
              <label class="input-label">Age</label>
            </div>
            <div class="input">
              <input type="number" min="50" max="200" name="poids" class="input-field" required />
              <label class="input-label">weight (kg)</label>
            </div>
            <div class="input">
              <input type="number" min="140" max="210" name="taille" class="input-field" required />
              <label class="input-label">height (cm)</label>
            </div>
            <div class="action">
              <button type="submit" class="action-button">Next</button>
            </div>
          </form>
          <img src="frontend/img/progressionbar_1.png" alt="" />
        </div>
      </div>
    </main>

  @endsection