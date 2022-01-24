@extends('layouts.main-layout')
@section('content')
    <div id="page">
        <div id="container">
            <div id="button-up">
                <button>
                    CURRENT SERIES
                </button>
            </div>
            @foreach ($comics as $item)
                <div class="box">
                    <div class="comics">
                        <a href="{{route('comicsOne')}}">
                            <img src="{{$item['thumb']}}" alt="Comics">
                        </a>
                    </div>
                    <h3>
                        {{$item['series']}}
                    </h3>
                </div>           
            @endforeach
        </div>
        <div id="button-down">
            <button>
                LOAD MORE
            </button>
        </div>
    </div>
    <div id="shop">
        <section>
            @foreach ($shopSection as $item)
            <div>
                <img src="{{asset('storage/assets')}}/{{$item['img']}}" alt="{{$item['text']}}">
                <h3>
                    DIGITAL COMICS
                </h3>
            </div>
            @endforeach
        </section>
    </div>
@endsection