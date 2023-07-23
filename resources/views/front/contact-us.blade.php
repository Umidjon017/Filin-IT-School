<x-front-layout>
    <x-slot name="title">
        {{ __('Контакты') }}
    </x-slot>

    <!-- Header start -->
    @include('layouts.front_inc.navbar')
    <!-- Header end-->

    <!-- Contacts start -->
    <div class="container">
        <p class="contact__title">
            контакты
        </p>
        <div class="contacts">
            <div class="contact">
                <div class="contact_ma">
                    <img src="{{ asset('front/assets/img/static/contacts/location.svg') }}" alt="">
                    <p>г. Москва, Алтуфьевское шоссе, 56</p>
                </div>
                <a href="mailto: dc@est5.ru"  class="contact_ma">
                    <img src="{{ asset('front/assets/img/static/contacts/mail.svg') }}" alt="">
                    <p>dc@est5.ru</p>
                </a>
                <div class="contact__phones">
                    <a href="tel: +7(495) 707 04 39">
                        <img src="{{ asset('front/assets/img/static/contacts/call.svg') }}" alt="">
                        +7(495) 707-04-39
                    </a>
                    <a href="https://wa.me/79999773468?text=" target="_blank">
                        <img src="{{ asset('front/assets/img/static/contacts/whatsapp.svg') }}" alt="">
                        +7(999) 977-34-68
                    </a>
                </div>
            </div>
            <div class="google__map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2237.9984748421375!2d37.584906677431455!3d55.88004107313152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b537151c3bca33%3A0x6972e442e52b65c6!2z0JDQu9GC0YPRhNGM0LXQstGB0LrQvtC1INGILiwgNTYsINCc0L7RgdC60LLQsCwg0KDQvtGB0YHQuNGPLCAxMjc1NDk!5e0!3m2!1sru!2s!4v1689913120842!5m2!1sru!2s"
                    style="border:0;" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
                <img src="{{ asset('front/assets/img/no-image.jpg') }}" class="vxod" alt="No Image">
            </div>
            <div class="contact__info">
                Юридический адрес: 127490, г. Москва, Студеный пр-д. дом 14
                Почтовый адрес: 127549 Москва, Алтуфьевское шоссе, д. 56
                <br><br>
                ИНН 771529139190<br>
                р/с 40802810638000003059 в ПАО Сбербанк России г. Москва,<br>
                к/с 30101810400000000225<br>
                БИК 044525225<br>
                ОКПО 0187288951<br>
                ОГРНИП 313774633700104
                <br><br>
                тел/факс (495) 707-04-59
            </div>
        </div>

        <div class="gear__container">
            <div class="gear gear4 gear__spin">
                <img class="gear_img1" src="{{ asset('front/assets/img/animation/gear.png') }}" alt="">
                <img class="gear_img2" src="{{ asset('front/assets/img/animation/gear.png') }}" alt="">
                <img class="gear_img3" src="{{ asset('front/assets/img/animation/gear.png') }}" alt="">
            </div>
        </div>

    </div>
    <!-- Contacts end -->

    <!-- Footer start -->
    @include('layouts.front_inc.footer')
    <!-- Footer end -->

</x-front-layout>
