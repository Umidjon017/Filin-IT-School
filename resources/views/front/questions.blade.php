<x-front-layout>
    <x-slot name="title">
        {{ __('Questions Page') }}
    </x-slot>

    <!-- Header start -->
    @include('layouts.front_inc.navbar')
    <!-- Header end-->

    @livewire('pages.questions')

    <!-- Footer start -->
    @include('layouts.front_inc.footer')
    <!-- Footer end -->

</x-front-layout>
