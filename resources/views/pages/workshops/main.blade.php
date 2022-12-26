<x-app-layout>
    <x-slot name="header">
        <x-page-header>
            <x-slot name="section">
                {{ config('csp.site.name') }}
            </x-slot>
            <x-slot name="title">
                Available Workshops
            </x-slot>
            <x-slot name="description">
                Available Clinics, Workshops and Master Classes by Curt Sheller.
            </x-slot>
            <x-slot name="updated">
                19 July 2022
            </x-slot>
            @svg('user', 'text-brand-icon')
        </x-page-header>
    </x-slot>

    <x-slot name="mininav">
        @include('layouts/nav/section/study')
    </x-slot>

    <x-card>
        <p>I have presented these and other workshops at various ukulele festivals across the country over the past several years, since 2004. These workshops are also presented several times a year at <a href="//www.funkyfrets.com">Funky Frets <x-ui.icons.link /></a>  music store in {{ config('ff.contact') }}.</p>

        <p>As you might guess from the massive number and wide range of topics and lessons covered on my <strong>{{ config('lu.site') }}</strong> site,  I (Curt Sheller) can pretty much put together a great workshop for you from a wide range of topics. Any workshop can be customized to your particular needs.</p>

        <p class="italic">All workshops include professional prepared material and handouts.</p>
    </x-card>

    <x-card>
        <h3 class="">Available Workshops</h3>
        <div class="flex justify-start">
            <x-ui.list>
                <li><a href="#workshop-getting_started">Getting Started - A Recipe for Success</a> <x-ui.icons.link /></li>
                <li><a href="#workshop-going_it_alone">Just What Do I study When Going It Alone?</a> <x-ui.icons.link /> <x-NEW /></li>
                <li><a href="#workshop-playing_by_ear">Common Chord Progressions and Remembering Songs</a> <x-ui.icons.link /> <x-NEW /></li>
                <li><a href="#workshop-theory">The Principles of Music</a> <x-ui.icons.link /></li>
                <li><a href="#workshop-essential_strums">Essential Strums for Ukulele - A Guide to Ukulele Strums</a> <x-ui.icons.link /></li>
                <li><a href="#workshop-fingerstyle">Exploring Fingerstyle on Ukulele</a> <x-ui.icons.link /></li>
                <li><a href="#workshop-jazz_chords">Exploring Jazz Chords on Ukulele</a> <x-ui.icons.link /></li>
                <li><a href="#workshop-triads">Triads - You Already Know More Than You Think</a> <x-ui.icons.link /></li>
                <li><a href="#workshop-doodling">Introduction to Scales and Soloing on Ukulele</a> <x-ui.icons.link /></li>
                <li><a href="#workshop-left_hand_tecchnique">Building Left Hand Technique</a> <x-ui.icons.link /></li>
                <li><a href="#workshop-right_hand_tecchnique">Building Right Hand Technique</a> <x-ui.icons.link /></li>
                <li><a href="#workshop-blues">Exploring the Blues for Ukulele</a> <x-ui.icons.link /></li>
                <li><a href="#workshop-reading_primer">Reading Music on the Ukulele - Primer</a> <x-ui.icons.link /></li>
                <li><a href="#workshop-rhythm">Rhythm</a> <x-ui.icons.link /> <x-NEW /></li>
                <li><a href="#workshop-learning_the_fingerboard">Learning the Ukulele Fingerboard</a> <x-ui.icons.link /></li>
                <li><a href="#workshop-bass_for_ukulele_players">Bass for Ukulele Players</a> <x-ui.icons.link /> <x-NEW /></li>
                <li><a href="#workshop-ukulele_for_guitar_players">Ukulele for Guitar Players</a> <x-ui.icons.link /></li>
            </x-ui.list>
        </div>
        <p class="text-2xl text-brand-500 text-center leading-loose font-light m-12">Contact <a href="{{ route('booking') }}"> <strong>Curt</strong> or <strong>Kelly</strong> <x-ui.icons.link /> </a> to have anyone of these workshops presented to your club, at your ukulele event or jam, festival. Or, ask about creating that custom workshop you always wanted to attend.</p>
    </x-card>

    @php
        $workshops = ['getting_started','going_it_alone', 'playing_by_ear','principles_of_music','essential_strums','fingerstyle','jazz_chords','triads', 'doodling','left_hand_tecchnique','right_hand_tecchnique','blues','reading_primer','rhythm','learning_the_fingerboard','bass_for_ukulele_players','ukulele_for_guitar_players'];
    @endphp

    @foreach ($workshops as $workshop)
        <div id="workshop-{{$workshop}}">
            <x-card>

                    @include('partials/workshops/ukulele/'. $workshop)

            </x-card>
        </div>
    @endforeach

</x-app-layout>
