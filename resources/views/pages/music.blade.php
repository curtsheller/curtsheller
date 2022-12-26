<x-app-layout>
    <x-slot name="header">
        <x-page-header>
            <x-slot name="title">
                Music
            </x-slot>
            <x-slot name="description">

            </x-slot>
            <x-slot name="updated">
                May 5 , 2021
            </x-slot>
            {{--  This is the "$slot" in page-header --}}
            @svg('user')
        </x-page-header>
    </x-slot>

    <x-slot name="mininav">
        @include('layouts/nav/section/store')
    </x-slot>


    <x-card>
        @include('partials/music/cds/hamu')
    </x-card>

    </x-app-layout>
