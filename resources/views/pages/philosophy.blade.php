<x-app-layout>
    <x-slot name="header">
        <x-page-header>
            <x-slot name="title">
                Curt\'s Personal Teaching Philosophy
            </x-slot>
            <x-slot name="description">
                After many, many years of serious study with world renowned musician, education, and jazz guitarist Chuck Anderson I\'ve adopted his teaching philosophy and methods.
            </x-slot>
            <x-slot name="updated">
                May 5 , 2021
            </x-slot>
            @svg('user')
        </x-page-header>
    </x-slot>

    <x-slot name="mininav">
        @include('layouts/nav/section/study')
    </x-slot>


    <x-card>

            @include('partials/bios/philosophy')

    </x-card>

</x-app-layout>
