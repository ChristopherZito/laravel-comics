<section class="sub-shop">
    {{-- shop grey --}}
    <hr>
    <section class="display-flex-v">
        @foreach ($shopSection as $item)
            <div>
                <h3>
                    {{$item['text']}}
                </h3>
                <img src="{{asset('storage/assets')}}/{{$item['img']}}" alt="{{$item['text']}}">
            </div>
            @endforeach
    </section>
</section>