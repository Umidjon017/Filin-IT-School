<x-front-layout>
    <x-slot name="title">
        {{ __('Questions Page') }}
    </x-slot>

    <!-- Header start -->
    @include('layouts.front_inc.navbar')
    <!-- Header end-->

    <!-- Quests start -->
    <div class="question__search__container">
        <div class="question__search">
            <form action="{{ route('questions.index') }}" class="search__form">
                <img src="{{ asset('front/assets/img/static/quests/search.svg') }}" alt="">
                <input type="search" name="search" placeholder="Задайте вопрос или введите ключевые слова">
            </form>
            <div class="search__result">
                @foreach($results as $result)
                    <a href="#">{{ $result->question }}</a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container">
        <div class="question__container">
            <p class="question__title">ЗАДАЙ СВОЙ ВОПРОС</p>
            <p class="question__subtitle">или найди нужный в списке</p>
            <div class="question__filter">
                <a href="#send-Quest" class="send__quest">ЗАДАТЬ ВОПРОС</a>
                <form id="filter-form" action="{{ route('questions.index') }}" method="get">
                    <div class="select" tabindex="1">
                        <input class="selectopt select__input" name="filter" value="latest" type="radio" id="latest" @if(isset(request()->query()['filter']) && request()->query()['filter'] == 'latest') checked @endif>
                        <label for="latest" class="option select__label">Сначала новые</label>
                        <input class="selectopt select__input" name="filter" value="oldest" type="radio" id="oldest" checked @if(isset(request()->query()['filter']) && request()->query()['filter'] == 'oldest') checked @endif>
                        <label for="oldest" class="option select__label">Сначала старые</label>
                    </div>
                    <script>
                        const radioInputs = document.querySelectorAll('input[name="filter"]');
                        const filterForm = document.getElementById('filter-form');

                        radioInputs.forEach((input) => {
                            input.addEventListener('change', () => {
                                filterForm.submit();
                            });
                        });
                    </script>
                </form>
            </div>
            <div class="questions">
                @foreach($questions as $question)
                <div class="question">
                    <div class="question__info">
                        <div class="qi__img">
                            <img src="{{ asset('front/assets/img/static/quests/default_user.png') }}" alt="">
                        </div>
                        <div>
                            <p class="qi__user"> {{ $question->name }}  {{ $question->created_at->format('d.m.Y') }}</p>
                            <p class="quest"> {{ $question->question }} </p>
                        </div>
                    </div>
                    <div class="answer">
                        <p class="answer__text">
                            {{ $question->answer }}
                        </p>
                        <img src="{{ asset('front/assets/img/static/quests/arrow2.svg') }}" alt="" class="answer__arrow">
                    </div>
                </div>
                @endforeach
            </div>
            <div class="pagination">
                <ul>
                    <li><a href="#prev" id="page__prev"></a></li>
                    <li><a href="#1">1,</a></li>
                    <li><span>...</span></li>
                    <li><a href="#4">4,</a></li>
                    <li><a href="#5" class="page__active">5,</a></li>
                    <li><a href="#6">6,</a></li>
                    <li><span>...</span></li>
                    <li><a href="#11">11</a></li>
                    <li><a href="#next" id="page__next"></a></li>
                </ul>
            </div>
        </div>

        <div class="gear__container container">
            <div class="gear__hidden2">
                <div class="gear gear3">
                    <img class="gear_img1" id="gear1" src="{{ asset('front/assets/img/animation/gear.png') }}" alt="">
                    <img class="gear_img2" id="gear2" src="{{ asset('front/assets/img/animation/gear.png') }}" alt="">
                    <img class="gear_img3" id="gear3" src="{{ asset('front/assets/img/animation/gear.png') }}" alt="">
                </div>
            </div>
        </div>

        <div class="quest__form" id="send-Quest">
            <div class="container">
                <form action="{{ route('questions.store') }}" method="post">
                    @csrf
                    <p class="quest__form__title">
                        Не нашли нужный вопрос? Напишите, мы ответим!
                    </p>
                    <input class="form__input" type="text" placeholder="Имя" name="name">
                    <input class="form__input" type="email" placeholder="Эл. почта" name="email">
                    <textarea name="question" id="" placeholder="Введите вопрос"></textarea>
                    <label for="form__check">
                        <input type="checkbox" id="form__check">
                        Я согласен с политикой конфиденциальности
                    </label>
                    <button class="send__quest" id="send__btn" disabled onclick="message()">задать вопрос</button>

                    <div class="gear gear_form gear__spin">
                        <img class="gear_img1" src="{{ asset('front/assets/img/animation/gear.png') }}" alt="">
                        <img class="gear_img2" src="{{ asset('front/assets/img/animation/gear.png') }}" alt="">
                        <img class="gear_img3" src="{{ asset('front/assets/img/animation/gear.png') }}" alt="">
                    </div>
                    <script>
                        form__check.onchange = (e) =>{
                            send__btn.disabled = !e.target.checked
                        }
                        function message() {
                            Swal.fire({
                                title:"Ваш вопрос успешно доставлен!",
                                text:"Ответ будет доставлен на почту в течение 3 дней, а также опубликован на сайте",
                                icon: "success",
                                showConfirmButton:false
                            });
                        }
                    </script>
                </form>

            </div>
        </div>

    </div>
    <!-- Quests end -->

    <!-- Footer start -->
    @include('layouts.front_inc.footer')
    <!-- Footer end -->

</x-front-layout>
