<div class="container">
    <div class="mission">
        @foreach($blockTextTwo as $blockTwo)
        <p class="mission__title"> {!! $blockTwo->title !!} </p>
        <p class="mission__text"> {!! $blockTwo->body !!} </p>
        @endforeach
    </div>
</div>

<div class="gear__container container">
    <div class="gear__hidden1">
        <div class="gear gear2">
            <img class="gear_img1" id="gear1" src="{{ asset('front/assets/img/animation/gear.png') }}" alt="">
            <img class="gear_img2" id="gear2" src="{{ asset('front/assets/img/animation/gear.png') }}" alt="">
            <img class="gear_img3" id="gear3" src="{{ asset('front/assets/img/animation/gear.png') }}" alt="">
        </div>
    </div>
</div>
