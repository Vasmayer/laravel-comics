@extends('layouts.main')

@section('content')

{{-- <h1>{{$comic['title']}}</h1> --}}
<div class="comic-show">
    <div class="jumbotron">
       <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}"> 
    </div>
    <div class="line"></div> 
    

</div>

@endsection