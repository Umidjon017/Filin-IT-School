<header class="navbar">
    <div class="burger__btn">
        <button>
            <div></div>
            <div></div>
            <div></div>
        </button>
    </div>
    <div class="logo">
        <a href="{{ url('/') }}">
            <img src="{{ asset('front/assets/img/logo/logo_nav.png') }}" alt="Logo">
        </a>
    </div>
    <nav class="nav">
        <div class="nav__top">
            @foreach($telephoneAddress as $telAddress)
            <p class="_address">{{ $telAddress->address }}</p>
            <a href="tel: {{$telAddress->telephone}}" class="_phone">{{ $telAddress->telephone }}</a>
            @endforeach
        </div>
        <ul class="nav__bottom">
            @foreach($headerButtons as $headerButton)
            <li>
                <a href="{{ $headerButton->url }}" class="active"> {{ $headerButton->name }} </a>
            </li>
            @endforeach
        </ul>
    </nav>
    <div class="navbar__right">
        <a href="tel: +7(495) 707-04-39" class="nav__phone">
            <img src="{{ asset('front/assets/img/call.png') }}" alt="">
        </a>
        <span class="nav__user">
            <img src="{{ asset('front/assets/img/user.png') }}" alt="">
        </span>
    </div>
</header>
