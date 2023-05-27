@extends('frontend.layouts.master')

@section('title','Information missing')
<head> <link rel="stylesheet" href="frontend/css/sweetalert.css"/></head> 
@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.13.2/dist/sweetalert2.min.css">
<main>
<div class="sweet_alert">
  <img src="{{ asset('frontend/img/croix_rouge.png') }}?{{ time() }}" alt="">
  <h2>Oops...</h2>
  <p>Please enter your informations first!</p>
  <a href="/information">Enter my informations</a>
</div>
</main>

@endsection


 


 
