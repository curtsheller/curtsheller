<x-app-layout>
    <x-slot name="header">
        {{-- @include('layouts/page/header') --}}
        <x-page-header>
            <x-slot name="section">
                Racewakling Competitions
            </x-slot>
            <x-slot name="title">
                IAAF World Indoor Championships in Athletics
            </x-slot>
            <x-slot name="description">
                <b>The International Association of Athletics Federations World Indoor Championships</b> were inaugurated as the World Indoor Games in 1985 in Paris, France and were subsequently renamed in 1987 as they are known today.
            </x-slot>
            <x-slot name="updated">
                July 21 , 2021
            </x-slot>
            @svg('stopwatch', 'text-brand-icon')
        </x-page-header>
    </x-slot>

    <x-slot name="mininav">
        @include('layouts/nav/section/racewalking-olympics-IAAF')
    </x-slot>

    @include('partials/racewalking/indoor')
</x-app-layout>
