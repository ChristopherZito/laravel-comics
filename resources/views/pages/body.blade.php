@extends('layouts.main-layout')
@section('content')
    <div id="page">
        <div id="container">
            <div id="button-up">
                <button>
                    CURRENT SERIES
                </button>
            </div>
            {{-- @foreach ($comics as $item)
                @foreach ($item as $monoitem)
                    <div class="box">
                        <div class="comics">
                            <a href="{{route('comicsOne')}}">
                                <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="Comics">
                            </a>
                        </div>
                        <h3>
                            {{$monoitem}}
                        </h3>
                    </div>
                @endforeach            
            @endforeach --}}
            <div class="box">
                <div class="comics">
                    <a href="{{route('comicsOne')}}">
                        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="Comics">
                    </a>
                </div>
                <h3>
                    ACTION COMICS
                </h3>
            </div>
        </div>
        <div id="button-down">
            <button>
                LOAD MORE
            </button>
        </div>
    </div>
    <div id="shop">
        <section>
            <div>
                <img src="{{asset('storage/assets/buy-comics-digital-comics.png')}}" alt="">
                <h3>
                    DIGITAL COMICS
                </h3>
            </div>
            <div>
                <img src="{{asset('storage/assets/buy-comics-merchandise.png')}}" alt="">
                <h3>
                    DC MERCHANDISE
                </h3>
            </div>
            <div>
                <img src="{{asset('storage/assets/buy-comics-shop-locator.png')}}" alt="">
                <h3>
                    SUBSCRIPTION
                </h3>
            </div>
            <div>
                <img src="{{asset('storage/assets/buy-comics-subscriptions.png')}}" alt="">
                <h3>
                    COMIC SHOP LOCATOR
                </h3>
            </div>
            <div>
                <img src="{{asset('storage/assets/buy-dc-power-visa.svg')}}" alt="">
                <h3>
                    DC POWER VISA
                </h3>
            </div>
        </section>
    </div>
@endsection