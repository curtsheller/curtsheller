<x-app-layout>
    <x-slot name="header">
        <x-page-header>
            <x-slot name="title">
                Eric Schreiber - Bass
            </x-slot>
            <x-slot name="description">
                Eric Schreiber is a Philadelphia area based musician and composer. He currently performs regularly in numerous jazz, rock, and classical ensembles … and has released several CDs and DVDs in various styles. Most
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
        <img class="img-thumbnail center-block mb-4" src="/images/Eric.jpg" alt="">

        <div class="mx-4">
            @include('partials/bios/eric')
        </div>

        <p class="text-center text-gray-500 text-2xl my-8">
             @svg('star') Eric is the go to bassist for the Curt Sheller Trio  @svg('star')
         </p>

        <hr>

        <p class="text-center">
            @svg('globe', 'text-brand-lightest') <a href="http://ericschreiberbass.com/music/">EricSchreiberBass.com @svg('link', 'text-brand-lightest')</a><br>
            @svg('brands/facebook', 'text-brand-lightest') <a href="//facebook.com/eric.schreiber.332">facebook @svg('link', 'text-brand-lightest')</a><br>
            @svg('brands/twitter', 'text-brand-lightest') <a href="//twitter.com/@eschreiberbass">twitter @svg('link', 'text-brand-lightest')</a><br>
            @svg('globe', 'text-brand-lightest') <a href="//reverbnation.com/ericschreiber">ReverbNation @svg('link', 'text-brand-lightest')</a><br>
            @svg('globe', 'text-brand-lightest') <a href="//www.getthenerve.com/">The Nerve @svg('link', 'text-brand-lightest')</a>
        </p>
    </x-card>

</x-app-layout>
