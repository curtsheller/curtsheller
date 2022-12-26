<x-app-layout>
    <x-slot name="header">
        <x-page-header>
            <x-slot name="title">
                Electronic Press Kit
            </x-slot>
            <x-slot name="description">
                All the low-down you every wanted on Curt and the Trio.
            </x-slot>
            <x-slot name="updated">
                May 5 , 2021
            </x-slot>
            @svg('user')
        </x-page-header>
    </x-slot>

    <x-slot name="mininav">
        @include('layouts/nav/section/epk')
    </x-slot>

    <x-card class="p-6">
        @include('partials/bios/three-images')
    </x-card>

    <a name="press"></a>
    <x-card class="card-quote" nav=true>
        @include('partials/interviews/list')
    </x-card>

    <x-card class="card-quote" nav=true>
        @include('partials/interviews/No_Depression_20160311')
    </x-card>

    <a name="demo"></a>
    <x-card nav=true>
        <h2>Demo</h2>
        @include('partials/tracks/ten_minute_demo')
    </x-card>

    <a name="video"></a>
    <x-card nav=true>
        <h2>Video</h2>

        <div class="grid grid-cols-3 gap-4">
            <div class="col-span-3 sm:col-span-1">
                <img class="img-thumbnail" src="/images/photos/epk/20160402/Curt-1.png" alt="">
            </div>
            <div class="col-span-3 sm:col-span-1">
                <img class="img-thumbnail" src="/images/photos/epk/20160402/Eric-2.png" alt="">
            </div>
            <div class="col-span-3 sm:col-span-1">
                <img class="img-thumbnail" src="/images/photos/epk/20160402/Ed-2.png" alt="">
            </div>
        </div>

        <p class="m-1">@svg('file') Here is a first cut of a performance of <b>The Curt Sheller Jazz Trio</b> from <a href="https://vimeopro.com/abominablefilms/curt-sheller-jazz-trio-live-2016/video/175710178" target="_blank"><b>The Berks Jazz Fest, 2016 at the Other Farm Brewing Company, Boyertown, PA USA</b> @svg('film-alt')</a>. This performance was filmed by the award winning video production team at Abominable Productions. The set list contained:</p>

        <div class="grid grid-cols-3 gap-4">
            <div class="col-span-3 sm:col-span-1">
                <ul class="list-disc leading-loose">
                    <li><a href="https://vimeopro.com/abominablefilms/curt-sheller-jazz-trio-live-2016/video/175710178" target="_blank">Milestones</a></li>
                    <li><a href="https://vimeopro.com/abominablefilms/curt-sheller-jazz-trio-live-2016/video/175730264" target="_blank">Summer's Dawn</a></li>
                    <li><a href="https://vimeopro.com/abominablefilms/curt-sheller-jazz-trio-live-2016/video/175731134" target="_blank">Sway</a></li>
                    <li><a href="https://vimeopro.com/abominablefilms/curt-sheller-jazz-trio-live-2016/video/175732277" target="_blank">I'll Remember April</a></li>
                </ul>
            </div>
            <div class="col-span-3 sm:col-span-1">
                <ul class="list-disc leading-loose">
                    <li><a href="https://vimeopro.com/abominablefilms/curt-sheller-jazz-trio-live-2016/video/175732901" target="_blank">Glen's Cove</a></li>
                    <li><a href="https://vimeopro.com/abominablefilms/curt-sheller-jazz-trio-live-2016/video/175740341" target="_blank">Blue Bossa</a></li>
                    <li><a href="https://vimeopro.com/abominablefilms/curt-sheller-jazz-trio-live-2016/video/175741197" target="_blank">A Spy in Love</a></li>
                    <li><a href="https://vimeopro.com/abominablefilms/curt-sheller-jazz-trio-live-2016/video/175742296" target="_blank">Rain Shine</a></li>
                </ul>
            </div>
            <div class="col-span-3 sm:col-span-1">
                <ul class="list-disc leading-loose">
                    <li><a href="https://vimeopro.com/abominablefilms/curt-sheller-jazz-trio-live-2016/video/175743655" target="_blank">My Favorite Things</a></li>
                    <li><a href="https://vimeopro.com/abominablefilms/curt-sheller-jazz-trio-live-2016/video/175746902" target="_blank">Satin Doll</a></li>
                    <li><a href="https://vimeopro.com/abominablefilms/curt-sheller-jazz-trio-live-2016/video/175747833" target="_blank">While My Guitar Gently Weeps</a></li>
                </ul>
            </div>
        </div>
    </x-card>

    <a name="workshops"></a>
    <x-card nav=true>
        <h2>Clinics, Workshops and Master Classes</h2>
        <ul>
            <li>Visit Curt's <a class="underline-brand" href="{{ route('workshops') }}"><b>Ukulele Clinics, Workshops and Master Classes</b></a> @svg('link')page for possible workshops that can be presented at your event.</li>
        </ul>
    </x-card>

    <a name="posters"></a>
    <x-card nav=true>
        @include('/partials/posters_solo')
    </x-card>

    <x-card nav=true>
        @include('/partials/posters_trio')
    </x-card>

    <a name="photos"></a>
    <x-card nav=true>
        <h3>Photos</h3>
        <div class="grid grid-cols-5 gap-12">
            <div class="col-span-2">
                <img src="/images/photos/Performance-Collage.png" alt="">
                <p class="text-center">Photos are High Resolution JPG format and can be cropped for your particular uses.</p>

                <h5>Smaller Lower Resolution Square Images - PNG 512 x 512</h5>
                <div class="flex flex-wrap items-center justify-center">
                    <a href="/images/photos/square/Curt-EM.png"><img class="w-12 border border-gray-500 m-1" src="/images/photos/square/Curt-EM.png" alt=""></a>
                    <a href="/images/photos/square/Curt.png"><img class="w-12 border border-gray-500 m-1" src="/images/photos/square/Curt.png" alt=""></a>
                    <a href="/images/photos/square/Eric.png"><img class="w-12 border border-gray-500 m-1" src="/images/photos/square/Eric.png" alt=""></a>
                    <a href="/images/photos/square/Eric.png"><img class="w-12 border border-gray-500 m-1" src="/images/photos/square/Ed.png" alt=""></a>
                </div>
                <p class="caption">.png format - click on image for larger view.</p>
                <h5>Smaller Lower Resolution Square Images - jpeg 512 x 512</h5>
                <div class="flex flex-wrap items-center justify-center">
                    <a href="/images/photos/square/Curt-EM.jpeg"><img class="w-12 border border-gray-500 m-1" src="/images/photos/square/Curt-EM.jpeg" alt=""></a>
                    <a href="/images/photos/square/Curt.jpeg"><img class="w-12 border border-gray-500 m-1" src="/images/photos/square/Curt.jpeg" alt=""></a>
                    <a href="/images/photos/square/Eric.jpeg"><img class="w-12 border border-gray-500 m-1" src="/images/photos/square/Eric.jpeg" alt=""></a>
                    <a href="/images/photos/square/Eric.jpeg"><img class="w-12 border border-gray-500 m-1" src="/images/photos/square/Ed.jpeg" alt=""></a>
                </div>
                <p class="caption">.jpeg format - click on image for larger view.</p>
            </div>
            <div class="col-span-3">
                <a href="/assets/epk/photos/Curt-EM.JPG"><img class="img-thumbnail" src="/images/photos/Curt-EM.png" alt=""></a>
                <p class="caption leading-solid">High Resolution JPG (11.8 MB) @svg('download', 'icon-brand')<br>
                Photo by Eric Max</p>
            </div>
        </div>

        <div class="grid grid-cols-3 gap-4">
            <div class="col-span-3 sm:col-span-1">
                <a href="/assets/epk/photos/Curt.jpg">
                    <img class="img-thumbnail" src="/assets/epk/photos/Curt.jpg" alt="">
                    <p class="caption">Curt - JPG (759 KB) @svg('download', 'icon-brand')</p>
                </a>
            </div>
            <div class="col-span-3 sm:col-span-1">
                <a href="/assets/epk/photos/Eric.jpg">
                    <img class="img-thumbnail" src="/assets/epk/photos/Eric.jpg" alt="">
                    <p class="caption">Eric - JPG (1.2 MB) @svg('download', 'icon-brand')</p>
                </a>
            </div>
            <div class="col-span-3 sm:col-span-1">
                <a href="/assets/epk/photos/Ed.jpg">
                    <img class="img-thumbnail" src="/assets/epk/photos/Ed.jpg" alt="">
                    <p class="caption">Ed - JPG (1 MB) @svg('download', 'icon-brand')</p>
                </a>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div class="col-span-2 sm:col-span-1">
                <a href="/assets/epk/photos/Trio-Shot-Stylized.jpg">
                    <img class="img-thumbnail" src="/assets/epk/photos/Trio-Shot-Stylized.jpg" alt="">
                    <p class="caption">Trio - Stylized JPG (1.4 MB) @svg('download', 'icon-brand')</p>
                </a>
            </div>
            <div class="col-span-2 sm:col-span-1">
                <a href="/assets/epk/photos/Trio-Shot-Non-Stylized.jpg">
                    <img class="img-thumbnail" src="/assets/epk/photos/Trio-Shot-Non-Stylized.jpg" alt="">
                    <p class="caption">Trio - Non-Stylized JPG (1.4 MB) @svg('download', 'icon-brand')</p>
                </a>
            </div>
        </div>
        <p class="caption leading-normal mt-2"><em>Click on images to download or view high resolution version (11.8MB)</em></p>
    </x-card>

    <a name="art"></a>
    <x-card nav=true>
        @include('/partials/art/cds/covers')
    </x-card>

    <a name="comments"></a>
    <x-card nav=true>
            <h2>Comments</h2>
            <x-card class="card-quote">
                <p>&ldquo;He’s generous, good-hearted and has empowered countless players to expand their view of the ukulele.&rdquo; — <b>James Hill</b>.</p>
            </x-card>

            <x-card class="card-quote">
                <p>Just received your newest CD. I have listened to it three times now and, as a result have moved you into that group of excellent uke players I especially admire and know that I can learn a great deal from by listening repeatedly to their stylings (not to mention enjoying their fabulous ukulele music).&rdquo; - <b>Andy Andrews</b>, <em>founder of Ukulele Club of Santa Cruz &amp; the Puna Ukulele &amp; Kanikapila Association</em></p>
            </x-card>

            <x-card class="card-quote">
                <p>Curt’s repertoire consistently stretches the ukulele envelope by incorporating jazz, blues, and pop into a pleasantly entertaining mix. — <b>Gerald </b>Ross</p>
            </x-card>

            <x-card class="card-quote">
                <p>Wow! Got my copy. Superior uke playing. So smooth, so clean. You’ve got a wonderful CD here! — <b> Chris S.</b></p>
            </x-card>

            <x-card class="card-quote">
                <p>Curt, your CD was fantastic. You are amongst the ukulele masters of our day. — <b>John K.</b></p>
            </x-card>

            <x-card class="card-quote">
                <p>Curt, I really enjoyed your set at The Whiskey--your low key intros, mic persona provided a cool contrast with your complex uke technique and ingenious arrangements! - Best wishes, <b>Jared Denhard</b></p>
            </x-card>


    </x-card>

    <a name="stage"></a>
    <x-card nav=true>
        <h2>Stage Plot and Tech</h2>

        <h3>Solo</h3>
            <p>For solo Curt is self-contained and venue can tap in the 'ukulele DI or amp DI out if required.</p>

            <h4>Additional Requirements</h4>
            <ul class="list-disc leading-loose ml-8">
               <li>One vocal mic on boom stand.</li>
               <li>2 electrical outlets minimum to power pedals and AER Compact 60 amplifier. For venues outside of USA please provide one AER Compact 60 amplifier.</li>
            </ul>

        <h3>Trio <small>Ukulele, Electric Bass and Drums</small></h3>
            <p>Self contained and venue can tap in to `ukulele DI or amplifier DI outs for <b>Bass</b> and <b>Ukulele</b>.</p>
            <p><b>Drums</b> can be miced by venue in needed ( <em>supplied by venue</em> ).</p>

            <ul class="list-disc leading-loose ml-8">
               <li>One vocal mic on boom stand for announcements and audience interaction.</li>
               <li>4 electrical outlets minimum to power pedals and amplifiers.</li>
            </ul>

            <p>We can supply a PA if required at an additional cost.</p>
    </x-card>

    <a name="performances"></a>
    <x-card nav=true>
        <h2>Past Performances</h2>
        <ul class="list-disc leading-loose ml-8">
            <li>View Past Performances on the @svg('calendar') <a class="underline-br" href="{{ route('calendar') }}">Calendar</a> @svg('link') page.</li>
        </ul>
    </x-card>

    <a name="booking"></a>
    <x-card nav=true>
         @include('/partials/booking')
    </x-card>

</x-app-layout>
