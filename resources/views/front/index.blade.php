<x-front-layout>

    <x-slot name="title">
        {{ __('ФИЛИН IT') }}
    </x-slot>

    <!-- Header start -->
    @include('layouts.front_inc.navbar')
    <!-- Header end -->

    <!-- Hero start -->
    @include('layouts.front_inc.hero')
    <!-- Hero end -->

    <!-- Steam start -->
    @include('layouts.front_inc.steam')
    <!-- Steam  end -->

    <!-- Programs start -->
    @include('layouts.front_inc.programs')
    <!-- Programs  end-->

    <!-- Mission start -->
    @include('layouts.front_inc.mission')
    <!-- Mission end -->

    <!-- Result start -->
    @include('layouts.front_inc.result')
    <!-- Result end -->

    <!-- Footer start -->
    @include('layouts.front_inc.footer')
    <!-- Footer end -->

</x-front-layout>
