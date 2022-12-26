<x-app-layout>
    <x-slot name="header">
        <x-page-header>
            <x-slot name="title">
                2021 Site Template
            </x-slot>
            <x-slot name="description">
                This is the new 2021 layout using more blade components. Goal is to get better sidebar handling on different sized screens.
            </x-slot>
            <x-slot name="updated">
                May 5 , 2021
            </x-slot>
            {{--  This is the "$slot" in page-header --}}
            @svg('user')
        </x-page-header>
    </x-slot>

    <x-slot name="mininav">
        @include('layouts/nav/section/about')
    </x-slot>

</x-app-layout>
