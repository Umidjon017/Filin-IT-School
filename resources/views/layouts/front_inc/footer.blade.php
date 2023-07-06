<div class="footer__container">
    <div class="container">
        <footer class="footer">
            <div class="footer__top">
                <div class="logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('front/assets/img/logo/logo_nav.png') }}" alt="">
                    </a>
                </div>
                <div class="footer__top__title">
                    ШКОЛА ПРОГРАММИРОВАНИЯ И РОБОТОТЕХНИКИ «ФИЛИН IT»
                </div>
                <div class="footer__info">
                    @foreach($telephoneAddress as $telAddress)
                        <a href="tel: {{$telAddress->telephone}}" class="_phone">{{ $telAddress->telephone }}</a>
                        <p class="_address">{{ $telAddress->address }}</p>
                    @endforeach
                </div>
            </div>
            <ul class="footer__bottom">
                @foreach($footerButtons as $footerButton)
                <li>
                    <a href="{{ $footerButton->url }}" class="active"> {{ $footerButton->name }} </a>
                </li>
                @endforeach
            </ul>
        </footer>
    </div>
</div>
