<x-front-layout>
    <x-slot name="title">
        {{ $route->title }}
    </x-slot>

    <!-- Header start -->
    @include('layouts.front_inc.navbar')
    <!-- Header end-->

    <!-- Text-page start -->
    <div class="container">
        <div class="text__page">
            <div class="text__page__info">
                <div class="tpi__content">
                    <p class="tpi__title">{{ $route->title }}</p>
                    <div class="tpi__item">
                        <p>
                            {!! $route->body !!}
                        </p>
                    </div>
                </div>
                <div class="tp_images1"><img src="{{ asset('front/assets/img/static/text-page/medical-book.png') }}" alt=""></div>
                <div class="tp_images2"><img src="{{ asset('front/assets/img/static/text-page/moon.png') }}" alt=""></div>
                <div class="tp_images3"><img src="{{ asset('front/assets/img/static/text-page/satellite.png') }}" alt=""></div>
                <div class="tp_images4"><img src="{{ asset('front/assets/img/static/text-page/rocket.png') }}" alt=""></div>
                <div class="tp_images5"><img src="{{ asset('front/assets/img/static/text-page/gear.png') }}" alt=""></div>
            </div>
{{--            <div class="text__page__photo">--}}
{{--                <p class="tpf__title">--}}
{{--                    {{ __('может, фото, а может и нет') }}--}}
{{--                </p>--}}
{{--                <div class="tp__photos">--}}
{{--                    @foreach($route->images as $image)--}}
{{--                    <div class="tp__photo">--}}
{{--                        <img src="{{ asset('admin/images/pages/'.$image['image']) }}" alt="">--}}
{{--                    </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
    <!-- Text-page end -->

    <!-- Footer start -->
    @include('layouts.front_inc.footer')
    <!-- Footer end -->

</x-front-layout>
