<x-app-layout>
    <x-slot name="header">
        <x-page-header>
            <x-slot name="title">
                About Curt Sheller
            </x-slot>
            <x-slot name="description">
                Curt is professional musician, graphic artist, author, private ukulele and guitar teacher etc... As a musician Curt has over 40 years experience and over 20 years as a private teacher.
            </x-slot>
            <x-slot name="updated">
                May 4 , 2021
            </x-slot>
            @svg('user')
        </x-page-header>
    </x-slot>

    <x-slot name="mininav">
        @include('layouts/nav/section/about')
    </x-slot>

    <x-card class="card-racewalking">
        <div class="grid grid-cols-4 gap-8">
            <div class="col-span-4 sm:col-span-3">
                <h2>Publisher</h2>
                <p><b>Curt Sheller Publications</b> was created by <em>Curt Sheller</em> (me) in 1995 and has been on the web since. I have over 40 years of playing experience and have been actively involved in private music education for the past 20 plus years.</p>

                <h2>Musician</h2>
                <p>I began playing guitar at age 9. I always say that a valuable trait is to be persistent and never give up. "Stick with anything long enough, and you tend to get good at it. Hook up with the right teacher and mentors and get good at it.";</p>

                <p>A serious student of jazz guitar since 1978, I have been researching jazz and contemporary guitar, studying with the amazing and talented Chuck Anderson for over 30 years. My studies included arranging, private teaching, 20th-century harmony, and performing and working successfully with other musicians. Some years back, I started bringing a ukulele to the lessons, since I'd become, by then, totally turned on by the 'ukulele, and tuned-in to all its possibilities.</p>

                <p>My journey exploring the ukulele began in 2003 on a CampFire USA trip to South Dakota planned by my wife, Bernadette. I'd searched the Internet® for a small travel guitar to bring with us, and rediscovered the ukulele instead — an instrument I'd toyed with twenty years earlier. But now I felt I finally had some skills and knowledge to “figure it out,” and thus began my love affair with the 'ukulele.</p>

                <p>Finding little material organized at a level that works for intermediate to advanced players, I decided I could fill that gap and help the 'ukulele community as well. I've gone on to develop an international reputation as a ukulele expert, having written over 30 books and over 600 lessons for the ukulele and ten plus books for guitar.</p>

                <p>"Thanks to Chuck for his assistance in editing my books and on-line lesson material, and for being an invaluable asset leading up to the recording of this CD. Chuck helped me whip the charts into shape and allowed us to record his great song Rain Shine."</p>

                <p>I believe that the key to success in any field is, to a large extent, as simply as doing quality exploration over and over. And hooking up with the right teachers and mentors. And I thank and credit all who have helped round out his experiences and learning &ndash; especial Chuck Anderson.</p>

                <h2>Graphic Artist</h2>

                <p>I started my professional working career as a commercial graphic artist. I starting drawing from the Sunday comics at eight years old. After my stint in the Navy, I went to <b>The Studio School of Art and Design</b> in Philadelphia, PA, a two-year art school for Commercial Art. Then spent 12 years in a corporate art department generating junk mail, working my way up to senior designer and running the computerization of the art department.</p>

                <p>As a graphic designer and artist I now mainly focus my efforts in the music industry for a select group of fellow musicians, artists and myself.</p>

                <img class="block mx-auto m-8" src="/images/curtieAnim.gif" alt="">

                <h2>Programmer / Web Developer</h2>
                    <p>Teaching myself how to program starting with HyperTalk and Hypercard around 1987 and then proceeded with a few independent contracting assignments using C++, MacApp, and Java. Now I focus on PHP and JavaScript for my web development.  My CurtSheller.com, LearningUkulele.com and the Funky Frets sites are all hand-coded using PHP, HTML, CSS, Javascript and MySQL. <b>2015 Update</b> - LearningUkulele.com and all my public sites are now developed using <a href="//laravel.com"><b>Laravel</b></a> a MCV open source PHP framework. So that Smalltalk book I bought last century can finally pay off.</p>
            </div>
            <div class="col-span-4 sm:col-span-1">
                <img class="img-thumbnail mb-1" src="/images/photos/Curt-EM.png">
                <img class="img-thumbnail mb-1" src="/images/photos/2015_FEST-32.png">
                <img class="img-thumbnail mb-1" src="/images/photos/2015-Curt-MorningStar.png">
                <img class="img-thumbnail" src="/images/photos/Curt-1964-Electric.png">
                <small><p class="text-center text-gray-600 leading-normal m-4"><b>1964</b> - 10 yr old Curt gets his first electric guitar. Thanks Dad for getting me that first guitar.</p></small>
            </div>
        </div>
    </x-card>

    <x-card class="card-racewalking" nav=true>

            <h3 class="">Racewalking</h3>
            <div class="clear">
                <img class="float-left m-3 mt-2" src="/images/racewalking/rw_anim.gif" alt="">
                <img class="float-right m-3 mt-2" src="/images/racewalking/rw.vg.gif" alt="">
                <p> For a twenty year stretch starting in my 30s I was a <em>very</em> competitive racewalker. Even had a national master's 20km track record and was 1996 New Jersey Racewalker of the Year. I have won national age group medals and a few open national medals. With my best finish of 2nd place overall in the USATF National 40km Walk ( <em>24.6 miles</em> ). As well as a top 30 overall time of the year in the 20km walk. A long time member of the Shore AC. <em>Thank you Elliot Denman</em></p>

                <p class="text-center my-8"> @svg('info-circle') <a class="underline-brand" href="{{ route('racewalking', 'main') }}">Checkout the Racewalking Section ...</a> @svg('link')</p>
            </div>

    </x-card>

    <x-card nav=true>

        <h2>For Performance and Workshop Bookings</h2>
            <p>For <a href="/booking"><b>booking information</b></a> visit the booking info page.</p>

        <h2>Interview &bull; Articles &bull; Reviews</h2>
        @include('partials/interviews/list')

    </x-card>

</x-app-layout>
