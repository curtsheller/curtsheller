<x-app-layout>
    <x-slot name="header">
        <x-page-header>
            <x-slot name="title">
                Curt Sheller - Solo
            </x-slot>
            <x-slot name="description">
                Curt is professional musician, graphic artist, author, private ukulele and guitar teacher etc... As a musician Curt has over 40 years experience and over 20 years as a private teacher.
            </x-slot>
            <x-slot name="updated">
                11 December 2023
            </x-slot>
            @svg('user')
        </x-page-header>
    </x-slot>

    <x-slot name="mininav">
        @include('layouts/nav/section/about')
    </x-slot>

    <x-card>

            @include('partials/bios/three-images')

    </x-card>

    <x-card>

            @include('partials/bios/solo')

            <p class="text-center">@svg('compact-disc') Checkout the <strong>Curt Sheller Jazz Trio</strong> 2015 CD, <a href="{{ route('cds') }}"><strong>How About More Uke?</strong> @svg('link')</a> CD.</p>

    </x-card>

</x-app-layout>
