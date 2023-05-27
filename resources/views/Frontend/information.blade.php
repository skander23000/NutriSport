@extends('frontend.layouts.master')

@section('title','Information')
<head>  <link rel="stylesheet" href="frontend/css/information.css" /></head>
@section('content')

    <main class="information">
      <form action="{{route('information_1')}}"  method="get">
      <div class="content">
        <h1>A NEW APPROACH <br> TO WEIGHT LOSS</h1>
        <h2>
          Enter your information to 
          generate your menu in 
          less than 60 seconds.
        </h2>
        <h3>Please select your gender :</h3>
        <button
          class="btn btn_homme"
          type="submit"
          name="genre"
          value="homme"
        >
          <p>MAN</p>
        </button>
        <br />
        <button
          class="btn btn_femme"
          type="submit"
          name="genre"
          value="femme"
        >
          <p>WOMAN</p>
        </button>
      </div>
    </form>
    </main>
@endsection

