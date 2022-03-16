@extends('layouts.main')

@section('content')
<main>
    <div class="jumbo">
    </div>
    <div class="current-series" >current series</div>
    <div class="comics container">
        @foreach ($comics as $comic)
        <a href="{{ route('comic.show',['id'=>$loop->index])}}" class="serie">
                <figure>
                    <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                </figure>
                <div class="info">
                    {{$comic['series']}}
                </div>
        </a>
        @endforeach
    </div>
    <div class="load-more">
        <button>load more</button>
    </div>
    <div class="actions">
        <div class="action"> 
            <div class="action-image">
                <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="buy-comics-digital-comics">
            </div>
            <div class="action-name">
                digital comics
            </div>
        </div>
        <div class="action"> 
            <div class="action-image">
                <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="buy-comics-digital-comics">
            </div>
            <div class="action-name">
                dc merchandaise
            </div>
        </div>
        <div class="action"> 
            <div class="action-image">
                <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="buy-comics-digital-comics">
            </div>
            <div class="action-name">
                subscription
            </div>
        </div>
        <div class="action"> 
            <div class="action-image">
                <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="buy-comics-digital-comics">
            </div>
            <div class="action-name">
                comic shop locator
            </div>
        </div>
        <div class="action"> 
            <div class="action-image">
                <img src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="buy-comics-digital-comics">
            </div>
            <div class="action-name">
                dc power visa
            </div>
        </div>
    </div>
</main>
@endsection