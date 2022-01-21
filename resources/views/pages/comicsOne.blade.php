@extends('layouts.main-layout')
@section('content')
    <div class="comics">
        <section class="comic-bar">
            {{-- top section --}}
            <div class="box" >
                <div class="up">
                    <a href="{{route('body')}}">
                        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="Comic">
                        
                    </a>
                </div>
            </div>
        </section>
        <section class="description">
            {{-- descrizione oggetto --}}
            <h2>
                blablabla
            </h2>
            <span>
                <div>
                    <span>
                        Price:19.56
                    </span>
                    <span>
                        AVABILE
                    </span>
                </div>
                <div>
                    Check Availability
                </div>
            </span>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi rerum est adipisci accusamus cum incidunt enim non reprehenderit. Perferendis laboriosam, quasi exercitationem temporibus eos quam suscipit. Laudantium accusantium quos corporis.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, modi. Quisquam tempore animi ducimus est. Aperiam id laudantium ipsum obcaecati ab voluptates veritatis repellat, odio neque voluptate impedit velit beatae.
            </p>
        </section>
        <section class="more-info">
            {{-- more info for the comic --}}
            <div class="display-flex-v">
                <div class="sub-display">
                    <h2>
                        Talent
                    </h2>
                    <hr>
                    <div class="text-display">
                        <span>
                            Art by:
                        </span>
                        <p class="text-blu">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam illum culpa quos perspiciatis tenetur laudantium incidunt pariatur repellat. Vero dolore laboriosam pariatur dignissimos. Necessitatibus labore sed impedit sapiente sit eveniet.
                        </p>
                    </div>
                    <hr>
                    <div class="text-display"> 
                        <span>
                            Written by:
                        </span>
                        <p class="text-blu">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam illum culpa quos perspiciatis tenetur laudantium incidunt pariatur repellat. Vero dolore laboriosam pariatur dignissimos. Necessitatibus labore sed impedit sapiente sit eveniet.
                        </p>
                    </div>
                    <hr>
                </div>
                <div class="sub-display">
                    <h2>
                        Specs
                    </h2>
                    <hr>
                    <div class="text-display">
                        <span>
                            Series:
                        </span>
                        <p class="text-blu">
                            ACTION COMICS
                        </p>
                    </div>
                    <hr>
                    <div class="text-display">
                        <span>
                            U.S. Price:
                        </span>
                        <p>
                            $19.99
                        </p>
                    </div>
                    <hr>
                    <div class="text-display">
                        <span>
                            On Sale Date:
                        </span>
                        <p>
                            oct 02 2018
                        </p>
                    </div>
                    <hr>
                </div>
            </div>
        </section>
        @include('components.sub_shop')
    </div>
@endsection