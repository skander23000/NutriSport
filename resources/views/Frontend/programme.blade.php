@extends('frontend.layouts.master')

@section('title','Program')
<head> <link rel="stylesheet" href="frontend/css/programme.css" /></head> 
@section('content')
 
<main>
    <h1 class="exercice_h1">Musculation program</h1>
    <h3>Your personalized program for an objectif of <span>{{$objectif}}</span></h3>
<div class="slider">
    <div class="slide">
     
      <table class="exercice_table" >
        <h2>DAY 1</h2>
        <div class="div1">
        <tr>
            
                <th>Muscle</th>
                <th>Exercise</th>
                <th>Musculaire group</th>
                <th>Series and repetitions</th>
                <th>Rest time (sec)</th>
                <th>Video</th>
        </tr>
        @foreach ($exercice as $user)
        @if ($user->jour == "1")
            <tr>
                <td><img src="{{ $user->image }}" alt="" class="img"></td> 
                <td>{{ $user->exercise }}</td> 
                <td>{{ $user->groupe_musculaire }}</td>
                <td>{{ $user->series_et_repetitions }}</td>
                <td>{{ $user->temps_de_repos }}</td>
                <td><a href="{{ route('learn', $user->id)}}" class="btn btn-primary">Video</a></td>
            </tr>
        @endif
        </div>
        @endforeach
    </table>
</div>

<div class="slide">
    <table class="exercice_table">
        <div class="table2">
        <h2>DAY 2</h2>
        <tr>
            
                <th>Muscle</th>
                <th>Exercise</th>
                <th>Musculaire group</th>
                <th>Series and repetitions</th>
                <th>Rest time (sec)</th>
                <th>Video</th>
        </tr>
        @foreach ($exercice as $user)
        @if ($user->jour == "2")
            <tr>
                <td><img src="{{ $user->image }}" alt="" class="img"></td>  
                <td>{{ $user->exercise }}</td> 
                <td>{{ $user->groupe_musculaire }}</td>
                <td>{{ $user->series_et_repetitions }}</td>
                <td>{{ $user->temps_de_repos }}</td>
                <td><a href="{{ route('learn', $user->id)}}" class="btn btn-primary">Video</a></td>
                
            </tr>
        
        @endif
        </div>
        @endforeach
    </table>
</div>
    <div class="slide">
    <table class="exercice_table">
        <div class="table3">
        <h2>DAY 3</h2>
        <tr>
            
                <th>Muscle</th>
                <th>Exercise</th>
                <th>Musculaire group</th>
                <th>Series and repetitions</th>
                <th>Rest time (sec)</th>
                <th>Video</th>
        </tr>
        @foreach ($exercice as $user)
        @if ($user->jour == "3")
            <tr>
                <td><img src="{{ $user->image }}" alt="" class="img"></td> 
                <td>{{ $user->exercise }}</td> 
                <td>{{ $user->groupe_musculaire }}</td>
                <td>{{ $user->series_et_repetitions }}</td>
                <td>{{ $user->temps_de_repos }}</td>
                
                <td><a href="{{ route('learn', $user->id)}}" class="btn btn-primary">Video</a></td>
                
            </tr>
        @endif
        </div>
        @endforeach
    </table>
</div>
</div>
<div class="dots"></div>
    
      <button class="slider__btn slider__btn--left">&#8249;</button>
      <button class="slider__btn slider__btn--right">&#8250;</button>       
      <script  src="frontend/js/slider.js"></script>
</main>  
@endsection
