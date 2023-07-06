<div class="green__container">
    <div class="container">
        <div class="result">
            <p class="result__title">
                Результаты школы «филин it»
            </p>
            <div class="results">
                @foreach($schoolResults as $schoolResult)
                <div class="result__card rc{{$loop->iteration}}">
                    <div class="result__img">
                        <img src="{{ asset('/admin/images/school-results/'.$schoolResult->icon) }}" alt="">
                    </div>
                    <p class="result__card__title"> {!! $schoolResult->title !!} </p>
                    <p class="result__text"> {!! $schoolResult->description !!} </p>
                </div>
                @endforeach
                <div class="rc6">
                    <button class="result__modal__btn" id="modal__btn">ОСТАВИТЬ ЗАЯВКУ</button>
                    <div class="result__modal">
                        <div class="rm__close"></div>
                        <div class="rm__container">
                            <div class="modal__close">
                                <span></span>
                                <span></span>
                            </div>
                            <div class="gear gear_modal1 gear__spin">
                                <img class="gear_img1" src="{{ asset('front/assets/img/animation/gear.png') }}" alt="">
                                <img class="gear_img2" src="{{ asset('front/assets/img/animation/gear.png') }}" alt="">
                                <img class="gear_img3" src="{{ asset('front/assets/img/animation/gear.png') }}" alt="">
                            </div>
                            <div class="gear gear_modal2 gear__spin">
                                <img class="gear_img1" src="{{ asset('front/assets/img/animation/gear.png') }}" alt="">
                                <img class="gear_img2" src="{{ asset('front/assets/img/animation/gear.png') }}" alt="">
                                <img class="gear_img3" src="{{ asset('front/assets/img/animation/gear.png') }}" alt="">
                            </div>
                            <form action="">
                                <p>Оставьте Ваш номер телефона, и мы обязательно перезвоним</p>
                                <input type="text" name="name" placeholder="Имя" class="rm__input">
                                <input type="number" name="phone" placeholder="Номер телефона" class="rm__input">
                                <label for="check1" class="checkbox__label">
                                    Я согласен с политикой конфиденциальности
                                    <input type="checkbox" name="checkbox" id="check1">
                                    <span class="checkmark"></span>
                                </label>
                                <div class="submit__btn">
                                    <button class="result__modal__btn">ОСТАВИТЬ ЗАЯВКУ</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__title">ДЕТИ — НАШЕ БУДУщЕЕ</div>
</div>
