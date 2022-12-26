<x-app-layout>
    <x-slot name="header">
        <x-page-header>
            <x-slot name="title">
                Ed Rick - Drums
            </x-slot>
            <x-slot name="description">
                Ed is a professional, full-time drummer with years of teaching and performance experience. Ed is a versatile and experienced drummer who has played in a wide range of professional situations. His solid timekeeping and ever evolving style brings a fresh, dynamic sound to any group he works with. Besides his playing, Ed devotes a good deal of time to his teaching practice.
            </x-slot>
            <x-slot name="updated">
                May 5 , 2021
            </x-slot>
            {{--  This is the "$slot" in page-header --}}
            @svg('user')
        </x-page-header>
    </x-slot>

    <x-slot name="mininav">
    </x-slot>

    <x-card class="p-6">
        @include('partials/bios/three-images')
    </x-card>

    <x-card>
        <img class="img-thumbnail block mx-auto mb-4" src="/images/Ed.jpg" alt="">

        <div class="mx-4">
            @include('partials/bios/ed')
        </div>

        <p class="text-center text-gray-500 text-2xl my-8">
            @svg('star') Ed is the go to drummer for the Curt Sheller Trio @svg('star')
        </p>
    </x-card>

</x-app-layout>
