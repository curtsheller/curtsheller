<x-app-layout>
    <x-slot name="header">
        <x-page-header>
            <x-slot name="title">
                Curt Sheller
            </x-slot>
            <x-slot name="description">
                Curt is professional musician, graphic artist, author, private ukulele and guitar teacher etc... As a musician Curt has over 40 years experience and over 20 years as a private teacher.
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
        <img class="img-thumbnail center-block mb-4" src="/images/Curt.jpg" alt="">

        <div class="mx-4">
            @include('partials/bios/curt')
        </div>

        <p class="text-center">
            @svg('globe', 'text-brand-lightest') <a href="//curtsheller.com">CurtSheller.com @svg('link', 'text-brand-lightest')</a><br>
            @svg('brands/facebook', 'text-brand-lightest') <a href="//facebook.com/curtsheller">facebook @svg('link', 'text-brand-lightest')</a><br>
            @svg('brands/twitter', 'text-brand-lightest') <a href="//twitter.com/curtsheller">twitter @svg('link', 'text-brand-lightest')</a><br>
            @svg('globe', 'text-brand-lightest') <a href="//reverbnation.com/curtsheller">ReverbNation @svg('link', 'text-brand-lightest')</a>

            <br><br>

            @svg('globe', 'text-brand-lightest') <a href="//funkyfrets.com">Funky Frets Music Store, Boyertown, PA USA @svg('link', 'text-brand-lightest')</a>
        </p>
    </x-card>

</x-app-layout>
