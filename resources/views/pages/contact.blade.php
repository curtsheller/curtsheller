<x-app-layout>
    <x-slot name="header">
        <x-page-header>
            <x-slot name="title">
                Contact Curt
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
        @include('layouts/nav/section/about')
    </x-slot>


    <x-card>

            <p>If you interested in booking Curt or the Trio call; <b>484-942-8040</b> and talk directly to Curt. OR, visit the <a href="{{ route('booking') }}"><b>Booking page</b> @svg('link')</a>.</p>

    </x-card>

</x-app-layout>

