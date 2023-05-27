@extends('frontend.layouts.master')

@section('title',$exercices->name)
<head>
    <link rel="stylesheet" href="{{ asset('frontend/css/exercices.css') }}?{{ time() }}" />  
  </head>
@section('content')


<main>
  <div class="container">
  <div class="row">
      <div class="learn_container">
          <h1 class="exercise-title">{{ $exercices->name }}</h1>
          <div class="video-wrapper">
              <video controls muted poster="{{ url($exercices->images)}}">
                  <source src="{{ $exercices->video }}" type="video/mp4" >
                  Votre navigateur ne supporte pas la balise vidéo.
              </video>
          </div>
          <div class="description">
              <h2> Description </h2>
              <p>{!! preg_replace("/(\.|:)/", "$1<br><br>", $exercices->description) !!}</p>
              @if(!empty($exercices->conseil))
                  <h2> Tips </h2> 
                  <p>{!! str_replace('.', '.<br><br>', $exercices->conseil) !!}</p>
              @endif
          </div>
      </div>
  </div>
</div>
</main>
@endsection