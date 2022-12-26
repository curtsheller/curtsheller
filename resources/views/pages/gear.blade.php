<x-app-layout>
    <x-slot name="header">
        <x-page-header>
            <x-slot name="title">
                Curt's Gear
            </x-slot>
            <x-slot name="description">
                Here is all the gear and music products that I use on a dad-to-day basis for practice, teaching and performance.
            </x-slot>
            <x-slot name="updated">
                May 5 , 2021
            </x-slot>
            @svg('user')
        </x-page-header>
    </x-slot>

    <x-slot name="mininav">
        @include('layouts/nav/section/about')
    </x-slot>

    @include('partials/about/gear')
    @include('partials/about/gear_latest')

</x-app-layout>
