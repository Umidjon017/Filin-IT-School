<div>
    
    <!-- Quests start -->
<div class="question__search__container">
    <div class="question__search">
        <form action="{{ route('questions.index') }}" class="search__form">
            <img src="{{ asset('front/assets/img/static/quests/search.svg') }}" alt="">
            <input type="search" name="search" placeholder="Задайте вопрос или введите ключевые слова" wire:model="key">
        </form>
        @if(!empty($key))
        <div class="search__result">
            @foreach($questions as $q)
                <a href="#">{{ $q->question }}</a>
            @endforeach
        </div>
        @endisset
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
                    <input class="selectopt select__input" name="filter" wire:model="sort" value="latest" type="radio" id="latest" checked>
                    <label for="latest" class="option select__label">Сначала новые</label>
                    <input class="selectopt select__input" wire:model="sort" value="oldest" type="radio" id="oldest">
                    <label for="oldest" class="option select__label">Сначала старые</label>
                </div>
                {{-- <script>
                    const radioInputs = document.querySelectorAll('input[name="filter"]');
                    const filterForm = document.getElementById('filter-form');

                    radioInputs.forEach((input) => {
                        input.addEventListener('change', () => {
                            filterForm.submit();
                        });
                    });
                </script> --}}
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
                @if($question->answer!='')
                <div class="answer">
                    <p class="answer__text">
                        {{ $question->answer }}
                    </p>
                    <img src="{{ asset('front/assets/img/static/quests/arrow2.svg') }}" alt="" class="answer__arrow">
                </div>
                @endif
            </div>
            @endforeach
        </div>
        {{ $questions->links('vendor.livewire.custom') }}
        
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
    <div  id="send-Quest"></div>
    <div class="quest__form">
        <div class="container">
            <form wire:submit.prevent="store" method="post">
                @csrf
                <p class="quest__form__title">
                    Не нашли нужный вопрос? Напишите, мы ответим!
                </p>
                <input class="form__input" type="text" placeholder="Имя" name="name" wire:model="name">
                @error('name') <span class="error">{{ $message }}</span> @enderror
                <input class="form__input" type="email" placeholder="Эл. почта" name="email" wire:model="email">
                @error('email') <span class="error">{{ $message }}</span> @enderror
                <textarea name="question" id="" placeholder="Введите вопрос" wire:model="question"></textarea>
                @error('question') <span class="error">{{ $message }}</span> @enderror
                <label for="form__check">
                    <input type="checkbox" id="form__check">
                    Я согласен с политикой конфиденциальности
                </label>
                <button class="send__quest" id="send__btn"  onclick="message()">задать вопрос</button>

                <div class="gear gear_form gear__spin">
                    <img class="gear_img1" src="{{ asset('front/assets/img/animation/gear.png') }}" alt="">
                    <img class="gear_img2" src="{{ asset('front/assets/img/animation/gear.png') }}" alt="">
                    <img class="gear_img3" src="{{ asset('front/assets/img/animation/gear.png') }}" alt="">
                </div>
                <script>
                    window.addEventListener('stored', event => {
                        Swal.fire({
                            title:"Ваш вопрос успешно доставлен!",
                            text:"Ответ будет доставлен на почту в течение 3 дней, а также опубликован на сайте",
                            icon: "success",
                            showConfirmButton:false
                        });
                    })

                </script>
            </form>

        </div>
    </div>

</div>
<!-- Quests end -->

</div>