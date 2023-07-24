<form wire:submit.prevent="store" method="post">
    @csrf
    <p>Оставьте Ваш номер телефона, и мы обязательно перезвоним</p>
    <input type="text" name="name" placeholder="Имя" class="rm__input" wire:model="name">
    <input type="text" name="telephone" placeholder="Номер телефона" class="rm__input" wire:model="telephone">
    <label for="check1" class="checkbox__label">
        Я согласен с политикой конфиденциальности
        <input type="checkbox" name="checkbox" id="check1">
        <span class="checkmark"></span>
    </label>
    <div class="submit__btn">
        <button class="result__modal__btn" onclick="message()">ОСТАВИТЬ ЗАЯВКУ</button>
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
