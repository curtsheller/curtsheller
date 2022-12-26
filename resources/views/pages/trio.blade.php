<x-app-layout>
    <x-slot name="header">
        <x-page-header>
            <x-slot name="title">
                Curt Sheller Jazz Trio
            </x-slot>
            <x-slot name="description">
                The trio is Curt Sheller - `Ukulele, Eric Schreiber - Bass, Ed Rick - Drums. Inspired by their affection for jazz improvisation, the Curt Sheller Jazz Trio rework timeless classics on How About More Uke?, replacing the standard guitar backing with a ukulele, played with skill and creativity by Sheller himself. Alongside drummer Ed Rick on drums and Eric Schreiber on electric bass, Sheller reveals that the ukulele can be utilized as a serious and vibrant instrument.
            </x-slot>
            <x-slot name="updated">
                May 5 , 2021
            </x-slot>
            {{--  This is the "$slot" in page-header --}}
            @svg('user')
        </x-page-header>
    </x-slot>

    <x-slot name="mininav">
        @include('layouts/nav/section/trio')
    </x-slot>


    <x-card class="p-6">
        @include('partials/bios/three-images')
    </x-card>

    <x-card>
        <div class="grid grid-cols-3 gap-4">
            <div class="col-span-1">
                <img class="img-thumbnail" src="/images/photos/concerts/20160402/curt.jpg" alt="">
            </div>
            <div class="col-span-1">
                <img class="img-thumbnail" src="/images/photos/concerts/20160402/eric.jpg" alt="">
            </div>
            <div class="col-span-1">
                <img class="img-thumbnail" src="/images/photos/concerts/20160402/ed.jpg" alt="">
            </div>
        </div>
        @include('partials/photos/credits/KarlMcWherter')
        <p class="text-center">@svg('compact-disc') Checkout the <b>Curt Sheller Jazz Trio</b> 2015 CD, <a href="{{ route('cds') }}"><b>How About More Uke?</b> @svg('link')</a> CD.</p>
    </x-card>

</x-app-layout>
