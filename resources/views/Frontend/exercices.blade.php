@extends('frontend.layouts.master')

@section('title','Exercises')
<head>
  <link rel="stylesheet" href="{{ asset('frontend/css/exercices.css') }}?{{ time() }}" />  
</head>
@section('content')

<main>   
  <form action="{{ route('exercices.search') }}" method="GET" class="search_bar" id="search-form" >
    <select id="focus-select" class="search_text" name="query" aria-label="Search">
      <option value="">Search by body parts</option>
      @foreach($focusList as $focus)
        <option value="{{ $focus }}">{{ $focus }}</option>
      @endforeach
    </select>
    <button class="search_btn" type="submit">Search</button>
  </form>

  <div class="exercises" id="exercises">
      @foreach($exercices as $exercice)
        <div class="exercise">
          <img src="{{ asset($exercice->images) }}?{{ time() }}" >
          <h4>{{$exercice->focus}}</h4>
          <h2>{{ $exercice->name }}</h2>
          <p>{{ substr($exercice->description, 0, 100) }}...</p>
          <a href="{{ route('learn', $exercice->id)}}" class="btn btn-primary">Learn more</a>
        </div>
      @endforeach
  </div>
  <div class="pagination">
  {{ $exercices->links() }}
  </div>
</main>
@endsection