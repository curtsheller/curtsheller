<x-app-layout>
    <x-slot name="header">
        <x-page-header>
            <x-slot name="title">
                Curt Sheller Publications Testing Page
            </x-slot>
            <x-slot name="description">
                This is the testing page for the NEW 2021 Curt Sheller Publications web site.
            </x-slot>
            <x-slot name="updated">
                8 July 2022
            </x-slot>
            {{--  This is the "$slot" in page-header --}}
            @svg('solid/swatchbook', 'text-brand-icon')
        </x-page-header>
    </x-slot>

    <x-slot name="mininav">
        @include('layouts/nav/section/testing')
    </x-slot>


    <x-card>
        <h2>Site Colors</h2>
        <h4>Grays</h4>

            <h4>Brand Colors</h4>
            <x-color-shades-tw color="brand" />

            <h4>Secondary Colors</h4>
            <x-color-shades-tw color="secondary" />

            <h4>Primary Colors</h4>
            <x-color-shades-tw color="red" />
            <x-color-shades-tw color="green" />
            <x-color-shades-tw color="blue" />
            <x-color-shades-tw color="yellow" />
            <x-color-shades-tw color="orange" />

            <x-color-shades-tw color="gray" title="gray" />
            <x-color-shades-tw color="grey" title="grey" />

            <h4>Secondary Colors</h4>

            <h4>Medal Colors</h4>
                <div class="relative my-1 overflow-hidden rounded shadow-md">
                    <div class="relative shadow bg-brand-500 text-gray-100 px-3 py-4 md:py-1 text-sm font-semibold">bronze &bull; silver &bull; gold</div>
                    <div class="md:flex">
                        <div class="text-gray-100 bg-bronze-500 px-2 py-4 text-xs flex-1 leading-tight">
                            <div class="font-black">bronze-500</div>
                       </div>
                       <div class="text-gray-100 bg-silver-500 px-2 py-4 text-xs flex-1 leading-tight">
                            <div class="font-black">silver-500</div>
                       </div>
                       <div class="text-gray-100 bg-gold-500 px-2 py-4 text-xs flex-1 leading-tight">
                            <div class="font-black">gold-500</div>
                       </div>
                    </div>
                </div>
    </x-card>

</x-app-layout>
