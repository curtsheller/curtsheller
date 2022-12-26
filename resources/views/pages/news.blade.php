<x-app-layout>
    <x-slot name="header">
        <x-page-header>
            <x-slot name="section">
                {{ config('csp.site.name') }}
            </x-slot>
            <x-slot name="title">
                The Latest News
            </x-slot>
            <x-slot name="description">
                All The Latest NewsWith so many media outlets available today. I tend to use facebook, twitter, etc.. for posting news. Mostly twitter.
                <br><br>Finally got around to updating my CurtSheller.com site for 2021. Take a trip along and let me know what you think.
            </x-slot>
            <x-slot name="updated">
                19 July 2022
            </x-slot>
            @svg('newspaper')
        </x-page-header>
    </x-slot>

    <x-slot name="mininav">
        @include('layouts/nav/section/about')
    </x-slot>

    <x-card>
        <p class="">Making a push to perform out more. So, if your festival or event needs some great workshops, a great Ukulele performance, let me know and <a href="{{ route('booking') }}"><em>we can set something up</em> @svg('link')</a>.</p>
        <p class="mb-0">Added results for the <a href="{{ route('racewalking.olympics') }}"><b>2020(2021) Tokyo Olympic Walks.</b> @svg('link')</a>. This is the last time the 50km will be contested for the men in the Olympics, World Championships, and Team Challenge (<em>World Cup</em>)</p>
    </x-card>

    <x-card>
        <p>Checkout the <a class="underline-brand" href="{{ route('calendar') }}">Calendar</a> @svg('link') for the latest schedule.</p>
        <p>Or any of the social media links below.</p>

        <!-- Social media -->
        @include('partials/btns_social', ['show_email' => false])
    </x-card>

</x-app-layout>

