<x-app-layout>
    <x-slot name="header">
        <x-page-header>
            <x-slot name="title">
                Booking Info
            </x-slot>
            <x-slot name="description">
                **Curt Sheller** is available for concerts, workshops, book signings, festivals, etc. Contact Curt directly or Kelly for the quickest response or more information. Contact Kelly, Bern or Curt directly for booking a concert, workshop or an event for your club.
            </x-slot>
            <x-slot name="updated">
                8 July 2022
            </x-slot>
            {{--  This is the "$slot" in page-header --}}
            @svg('user')
        </x-page-header>
    </x-slot>

    <x-slot name="mininav">
        @include('layouts/nav/section/about')
    </x-slot>

    <x-card class="card-csp">
        @include('partials/booking')
    </x-card>

</x-app-layout>
