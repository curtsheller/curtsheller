<x-app-layout>
    <x-slot name="header">
        {{-- @include('layouts/page/header') --}}
        <x-page-header>
            <x-slot name="title">
                Racewalking
            </x-slot>
            <x-slot name="description">
                Racewalking, or race walking, is a long-distance discipline within the sport of athletics. Although it is a foot race, it is different from running in that one foot must appear to be in contact with the ground at all times. This is assessed by race judges. Typically held on either roads or on running tracks, common distances vary from 3000 metres (1.8 mi) up to 100 kilometres (62.1 mi).
            </x-slot>
            <x-slot name="updated">
                18 July 2022
            </x-slot>
            @svg('user', 'text-brand-icon')
        </x-page-header>
    </x-slot>

    <x-slot name="mininav">
        @include('layouts/nav/section/racewalking')
    </x-slot>

    @include('partials/racewalking/main')
    @push('scripts')
        @include('scripts/toggleDiv')
    @endpush
</x-app-layout>
