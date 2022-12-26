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
                May 5 , 2021
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

            <p class="text-center">@svg('compact-disc') Checkout the <b>Curt Sheller Jazz Trio</b> 2015 CD, <a href="{{ route('cds') }}"><b>How About More Uke?</b> @svg('link')</a> CD.</p>

    </x-card>

</x-app-layout>
