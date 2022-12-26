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

    <x-card>
        <h1 class="text-red-700">SOLD</h1>
        <p>Built: 2007, finished and delivered to me <b>Sept 2007</b>.</p>
    </x-card>

    <x-card>
        <h2>2009 Photos From Dale Unger</h2>

        <div class="grid grid-cols-3 gap-none">
            <div class="col-span-1">
                <img class="img-thumbnail" src="/images/aa7/1-CurtsBodyFront.jpg">
            </div>
            <div class="col-span-1">
                <img class="img-thumbnail" src="/images/aa7/CurtsBackBody.jpg">
            </div>
            <div class="col-span-1">
                <img class="img-thumbnail" src="/images/aa7/CurtsBout.jpg">
            </div>
            <div class="col-span-1">
                <img class="img-thumbnail" src="/images/aa7/CurtsCutAway.jpg">
            </div>
            <div class="col-span-1">
                <img class="img-thumbnail" src="/images/aa7/CurtsFHole.jpg">
            </div>
            <div class="col-span-1">
                <img class="img-thumbnail" src="/images/aa7/CurtsFrontTop.jpg">
            </div>
            <div class="col-span-1">
                <img class="img-thumbnail" src="/images/aa7/CurtsFullBack.jpg">
            </div>
            <div class="col-span-1">
                <img class="img-thumbnail" src="/images/aa7/CurtsFullBodyFront.jpg">
            </div>
            <div class="col-span-1">
                <img class="img-thumbnail" src="/images/aa7/CurtsHeadstock.jpg">
            </div>
            <div class="col-span-1">
                <img class="img-thumbnail" src="/images/aa7/CurtsBackBody.jpg">
            </div>
        </div>
    </x-card>

</x-app-layout>
