@extends('layouts.main')

@section('content')

{{-- <h1>{{$comic['title']}}</h1> --}}
<div class="comic-show">
    <div class="jumbotron">
       <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}"> 
    </div>
    <div class="line"></div> 
    <div class="info">
        <div class="info-text">
            <h2>{{$comic['title']}}</h2>
            <div class="price">
                <div>
                    <span class="text-success">US.Price:</span>
                    <span class="text-light">$19.99</span>
                </div>
                <div class="disponibility">
                    <div class="text-success mx-3">AVALIABLE</div>
                    <div class="text-d-green">|</div>
                    <div class="text-light mx-3">Check Avaliability <i class="fas fa-caret-down"></i></div>
                </div> 
            </div>
            <div class="description mt-3">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi iure nostrum quibusdam nulla odit cum possimus ab accusantium? Eos voluptates voluptatum nostrum officiis unde ut nemo aut odit cumque similique?Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum nam voluptatibus vitae error voluptatem, quod quae animi culpa. Debitis laboriosam cum harum quasi officiis similique libero assumenda. Totam, magni vero.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi iure nostrum quibusdam nulla odit cum possimus ab accusantium? Eos voluptates voluptatum nostrum officiis unde ut nemo aut odit cumque similique?Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum nam voluptatibus vitae error voluptatem, quod quae animi culpa. Debitis laboriosam cum harum quasi officiis similique libero assumenda. Totam, magni vero.
                </p>
            </div>
        </div>
        <div class="info-ad">
            <h6 class="text-end">ADVERTISEMENT</h6>
            <img src="{{ asset('images/adv.jpg') }}" alt="ADV">
        </div>
    </div>
    

</div>

@endsection