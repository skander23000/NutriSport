@extends('frontend.layouts.master')

@section('title','Regime')
<head> <link rel="stylesheet" href="frontend/css/regime.css" /></head>  
@section('content')

<main>

<div class="slider">
    <h1>DIET</h1>
    <h3>Your personalized diet for a daily caloric intake of  <span>{{floor($total_calories)}}</span>  calories</h3>
    <div class="slide">
    <h2>Monday</h2>
    <table class="regime_table">
    <tr>
        <td class="th">Food</td>
        <td class="th">Quantity (g)</td>
    </tr>

    @foreach ($monday as $user)
    <tr>
        <td class="td1">{{ $user->Food }}</td> 
        <td class="td2">{{ $user->Quantity }} </td>
    </tr>
    @endforeach
    </table>
    </div>

    <div class="slide">
    <h2>Tuesday</h2>
    <table class="regime_table">
        <tr>
            <td class="th">Food</td>
            <td class="th">Quantity (g)</td>
        </tr>
        @foreach ($tuesday as $user)
        <tr>
            <td class="td1">{{ $user->Food }}</td> 
            <td class="td2">{{ $user->Quantity }}</td>
        </tr>
        @endforeach
        </table>
    </div>

    <div class="slide">
    <h2>Wednesday</h2>
    <table class="regime_table">
        <tr>
            <td class="th">Food</td>
            <td class="th">Quantity (g)</td>
        </tr>
        @foreach ($wednesday as $user)
        <tr>
            <td class="td1">{{ $user->Food }}</td> 
            <td class="td2">{{ $user->Quantity }} </td>
        </tr>
        @endforeach
        </table>
    </div>

    <div class="slide">
        <h2>Thursday</h2>
        <table class="regime_table">
            <tr>
                <td class="th">Food</td>
                <td class="th">Quantity (g)</td>
            </tr>
            @foreach ($thursday as $user)
            <tr>
                <td class="td1">{{ $user->Food }}</td> 
                <td class="td2">{{ $user->Quantity }} </td>
            </tr>
            @endforeach
            </table>
    </div>

    <div class="slide">
    <h2>Friday</h2>
    <table class="regime_table">
        <tr>
            <td class="th">Food</td>
            <td class="th">Quantity (g)</td>
        </tr>
        @foreach ($friday as $user)
        <tr>
            <td class="td1">{{ $user->Food }}</td> 
            <td class="td2">{{ $user->Quantity }}  </td>
        </tr>
        @endforeach
        </table>
    </div>

    <div class="slide">
    <h2>Saturday</h2>
    <table class="regime_table">
        <tr>
            <td class="th">Food</td>
            <td class="th">Quantity (g)</td>
        </tr>
        @foreach ($saturday as $user)
        <tr>
            <td class="td1">{{ $user->Food }}</td> 
            <td class="td2">{{ $user->Quantity }} </td>
        </tr>
        @endforeach
        </table>
    </div>

    <div class="slide">
        <h2>Sunday</h2>
        <table class="regime_table">
            <tr>
                <td class="th">Food</td>
                <td class="th">Quantity (g)</td>
            </tr>
            @foreach ($sunday as $user)
            <tr>
                <td class="td1">{{ $user->Food }}</td> 
                <td class="td2">{{ $user->Quantity }}</td>
            </tr>
            @endforeach
            </table>
    </div>
</div>
<div class="dots"></div>
      <button class="slider__btn slider__btn--left">&#8249;</button>
      <button class="slider__btn slider__btn--right">&#8250;</button>

<div class="program"><a href="/programme">My musculation program</a></div>
<script  src="frontend/js/slider.js"></script>
</main>  
@endsection
