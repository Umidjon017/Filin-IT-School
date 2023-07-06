<div class="green__container">
    <div class="container">
        <div class="programm">
            <p class="programm__title">Программы ОБУЧЕНИЯ</p>
            <div class="programms">
                @foreach($trainingPrograms as $trainingProgram)
                <div class="programm__card">
                    <div class="card__img">
                        <img src="{{ asset('/admin/images/training-programs/'.$trainingProgram->icon) }}" alt="">
                    </div>
                    <button class="cart__text"> {{ $trainingProgram->name }} </button>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="gear__container container">
    <div class="gear gear1">
        <img class="gear_img1" id="gear1" src="{{ asset('front/assets/img/animation/gear.png') }}" alt="">
        <img class="gear_img2" id="gear2" src="{{ asset('front/assets/img/animation/gear.png') }}" alt="">
        <img class="gear_img3" id="gear3" src="{{ asset('front/assets/img/animation/gear.png') }}" alt="">
    </div>
</div>
