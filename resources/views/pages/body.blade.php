@extends('layouts.main-layout')
@section('content')
    <div id="page">
        <div id="container">
            <div id="button-up">
                <button>
                    CURRENT SERIES
                </button>
            </div>
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
                    <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/default_images/DC_placeholder_comic-active_573b3c133ef580.76442500.jpg?itok=dyx9Ozzs" alt="">
                    <h3>
                        DIGITAL COMICS
                    </h3>
                </div>
        </section>
    </div>
@endsection