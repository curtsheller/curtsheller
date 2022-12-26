<x-app-layout>
    <x-slot name="header">
        <x-page-header>
            <x-slot name="title">
                American Archtop Collector Custom 7 String Guitar - SOLD
            </x-slot>
            <x-slot name="description">
            My 7 string guitar, since going full time ukulele and not getting time it deserves has found a new home.
            </x-slot>
            <x-slot name="updated">
                May 5 , 2021
            </x-slot>
            @svg('user')
        </x-page-header>
    </x-slot>

    <x-slot name="mininav">
        @include('layouts/nav/section/store')
    </x-slot>

    <x-card-header>
        <x-slot name="icon">
            @svg('music', 'icon-4x text-brand-300 block mx-auto')
        </x-slot>
        <x-slot name="title">
            Music
        </x-slot>
    </x-card-header>

        <x-card class="card-quote">
            <p>Just received your newest CD. I have listened to it three times now and, as a result have moved you into that group of excellent uke players I especially admire and know that I can learn a great deal from by listening repeatedly to their stylings (not to mention enjoying their fabulous ukulele music).&rdquo; - <b>Andy Andrews</b>, <em>founder of Ukulele Club of Santa Cruz &amp; the Puna Ukulele &amp; Kanikapila Association</em></p>
        </x-card>

        <x-card class="card-quote">
            <p>Wow! Got my copy. Superior uke playing. So smooth, so clean. You’ve got a wonderful CD here! — <b> Chris S.</b></p>
        </x-card>

        <x-card class="card-quote">
            <p>Curt, your CD was fantastic. You are amongst the ukulele masters of our day. — <b>John K.</b></p>
        </x-card>

    <x-card-header nav=true>
        <x-slot name="icon">
            @svg('music', 'icon-4x text-brand-300 block mx-auto')
        </x-slot>

        <x-slot name="title">
            Performances
        </x-slot>
    </x-card-header>

        @include('partials/comments/performance')

    <x-card-header nav=true>
        <x-slot name="icon">
            @svg('music', 'icon-4x text-brand-300 block mx-auto')
        </x-slot>

        <x-slot name="title">
            Teaching
        </x-slot>

        <x-slot name="description">
            Taking advantage of my jazz guitar skills and over 30 years of private study with internationally recognized virtuoso and master teacher Chuck Anderson, I began pursuing the potential of the ukulele. Researching the field I saw very little material organized at an intermediate or advanced level that really worked for players wanting to explore the ukulele beyond the basics. I have developed an international reputation as a ukulele educator having written many books on the subject of ukulele.
        </x-slot>

    </x-card-header>

    <x-card>
        <p>I run and maintain the very popular <b>www.LearningUkulele.com</b> web site with over 600 lessons. Check out the Workshops page for <a href="//www.learningUkulele.com/workshops/ukulele">available ukulele workshops @svg('link')</a> that Curt has presented across the country at various ukulele festivals over the past 10 years.
    </x-card>

        @include('partials/comments/teaching')

    <x-card-header>
        <x-slot name="icon">
            @svg('list', 'icon-4x text-gray-300 block mx-auto')
        </x-slot>
        <x-slot name="title">
            Books
        </x-slot>
        <x-slot name="description">
            Curt has written over 40 books for `Ukulele, Guitar, Bass, Mandolin, Lap Steel and Music.
        </x-slot>
    </x-card-header>

        @include('partials/comments/books')

</x-app-layout>
