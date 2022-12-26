<x-app-layout>
    <x-slot name="header">
        <x-page-header>
            <x-slot name="title">
                Curt Sheller | The Curt Sheller Trio
            </x-slot>
            <x-slot name="description">
                Musician, Graphic Artist, Author, Private Ukulele and Guitar Teacher, etc...
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
        <div class="grid grid-cols-2 gap-4">
            <div class="col-span-1">
                <h3>Curt Sheller - Solo</h3>
                <img src="/images/Curt.jpg" alt="Curt Bio" class="img-thumbnail mb-1">
                <p class="text-center mt-2">
                    <a href="{{ route('solo') }}
                    "><b>Curt Sheller</b> @svg('link')</a> - <span class="text-gray-500">Solo</span>
                </p>
            </div>
            <div class="col-span-1">
                <h3>The Curt Sheller Trio</h3>
                <img src="/images/Pickfest-2015-med.png" alt="Trio Bio" class="img-thumbnail m-b-1">
                <p class="text-center mt-2">
                    <a href="{{ route('trio') }}"><b>Curt Sheller Jazz Trio</b> @svg('link')</a> - <span class="text-gray-500">Curt &bull; Eric &bull; Ed</span>
                </p>
            </div>
        </div>
    </x-card>
</x-app-layout>
