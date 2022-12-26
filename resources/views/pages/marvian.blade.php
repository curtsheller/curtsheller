x<x-app-layout>
    <x-slot name="header">
        <x-page-header>
            <x-slot name="title">
                J Marvian Paintings
            </x-slot>
            <x-slot name="description">
                **J Marvian** local Chester County artist. Paintings range from 1976 to 1982 dates. All oil paintings.
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
        <p><b>J Marvian</b> local Chester County artist. Paintings range from 1976 to 1982 dates. All oil paintings.</p>

        <p>I believe he worked at Wyeth Pharmaceuticals in West Chester with my Dad, Robert J. Sheller. My dad passed away early 2016 and we have the paintings. And are looking to sell, action off or consignment them. Thought the West Chester area would be a good place to start and see if there is any interest and/or get more information on the artist, J. Marvian</p>

        <p class="text-center text-xl text-green-700 font-bold">All the paintings are available for purchase.</p>
    </x-card>

    <x-card>
        <h2>Bridge "Twilight City"</h2>
        <p>w24" x h20" (circa 1976)</p>
        <img class="img-thumbnail mb-1" src="/images/marvin/Bridge-w24xh20.jpg">
    </x-card>

    <x-card>
        <h2>Montmornet "Paris"</h2>
        <p>w36" x h24" (circa 1977)</p>
        <img class="img-thumbnail mb-1" src="/images/marvin/Montmornet-w36xh24.jpg">
    </x-card>

    <x-card>
        <h2>Mountain "Celeboil, Reflection"</h2>
        <p>w20" x h16" (circa 1977)</p>
        <img class="img-thumbnail mb-1" src="/images/marvin/Mountains-w20xh16.jpg">
    </x-card>

    <x-card>
        <h2>Nude "Anne"</h2>
        <p>w24" x h26" (circa 1980)</p>
        <img class="img-thumbnail mb-1" src="/images/marvin/Nude-w24xh36.jpg">
    </x-card>

    <x-card>
        <h2>Ships</h2>
        <p>w48" x h24" (circa 1977)</p>
        <img class="img-thumbnail mb-1" src="/images/marvin/Ships-w48xh24.jpg">
    </x-card>

    <x-card>
        <h2>Snow "Country Snow"</h2>
        <p>w24" x h20" (circa 1976)</p>
        <img class="img-thumbnail mb-1" src="/images/marvin/Snow-w24xh20.jpg">
    </x-card>

    <x-card>
        <h2>Still Life "Fruit Basket</h2>
        <p>w10" x h8" (circa 1982)</p>
        <img class="img-thumbnail mb-1" src="/images/marvin/StillLife-w10xh8.jpg">
    </x-card>

</x-app-layout>
