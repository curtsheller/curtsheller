<x-app-layout>
    <x-slot name="header">
        <x-page-header>
            <x-slot name="title">
                Ukulele, Guitar, and Music Workshops / Clinics by Curt Sheller
            </x-slot>
            <x-slot name="description">
               A selection of ukulele, guitar and music workshops presented by Curt Sheller. These can be presented at your club, festival, store or anywhere you would like. Custom workshop can also be presented based on your needs.
            </x-slot>
            <x-slot name="updated">
                11 December 2023
            </x-slot>
            {{--  This is the "$slot" in page-header --}}
            @svg('user')
        </x-page-header>
    </x-slot>

    <x-slot name="mininav">
        @include('layouts/nav/section/about')
    </x-slot>

    <x-card>
        <div class="grid grid-cols-4 gap-4">
            <div class="col-span-3">
                <p class=""><strong>Curt Sheller</strong> and <strong>Curt Sheller Publications</strong> were founded by <em>Curt Sheller</em> in 1995 and have maintained an online presence since then. With over 40 years of playing experience, Curt has been actively engaged in private music education for over two decades.</p>

                <p>Curt has cultivated an international reputation as an ukulele expert, authoring more than 30 books and creating 800 lessons specifically for the ukulele. Additionally, Curt has authored several books covering music and guitar.</p>

                <p>The author's website, <a href="//learningukulele.com" target>LearningUkulele.com</a>, showcases his extensive work as an author and educator. Curt Sheller conducts ukulele workshops and, in collaboration with his wife Bernadette and daughter Kelly, organizes the annual Funky Frets Ukulele Festival.</p>

                <p>Remaining a professional musician, Curt recently released a jazz ukulele CD titled <q>How About More Uke?</q> The album explores the ukulele through traditional and contemporary jazz repertoire, featuring some of his original compositions. Notably, Chuck Anderson played a crucial role in preparing the charts for the CD and contributed the song <q>Rain Shine.</q></p>

                <p>Curt continues to perform live concerts and, along with his family, owns the <a href="//funkyfrets.com" target="_blank">Funky Frets Music Store</a> in Boyertown, PA, where they sell ukuleles and offer music lessons. Additionally, he provides music instruction via Skype.</p>
            </div>
            <div class="col-span-1">
                <img class="img-thumbnail p-2" src="/images/photos/Curt-EM.png" alt="Curt Sheller">
            </div>
        </div>
        @svg('ukulele-horiz', 'icon-lg text-gray-400 my-6')
        <div class="grid grid-cols-6 gap-4">
            <div class="col-span-5">
                <p class="text-2xl text-gray-500 leading-normal">Checkout an article in the summer 2019 issue of Ukulele magazine by Lil' Rev about yours truly titled:
                    <span class="font-heading text-red-600">Don't</span>
                    <span class="font-heading text-green-500">Get Around</span>
                    <span class="font-heading text-blue-600">Much</span>
                    <span class="font-heading text-blue-800">Anymore</span>
                <span class="font-heading text-red-600"> - the MUSE and MAGIC of JAZZ UKULELE MAVEN</span>
                <span class="font-heading text-blue-600">CURT SHELLER</span></p>

                <p>If the ukulele world had its own trading cards, there would be no shortage of superheroes. We know their names and have heard many of them at festivals and on YouTube, except perhaps one, whose humble and unassuming manner might have caused you to overlook his cool jazz stylings. Ladies and gentlemen, allow me to introduce to you, Curt Sheller. By day—and often into the night—Sheller plies his trade teaching an impressive load of private lessons (over 60 stu- dents a week) from Funky Frets, a music store he opened with his wife Bernadette and daughter Kelly Thompson in Boyertown, Pennsylvania.</p>
            </div>
            <div class="col-span-1">
                <img class="img-thumbnail block mx-auto" src="/images/UkuleleMagazine-Summer-2019.png" alt="">
                <p class="text-sm text-center italic mt-2">“You can learn a ton just hanging out with this guy!”
                — <b>Victoria Vox</b></p>
            </div>
        </div>
    </x-card>

    <x-card class="rounded text-white bg-gray-800 mb-2 p-2">
        <div class="grid grid-cols-6 gap-2">
            <div class="col-span-1">
                    <a href="/cds"><img class="border border-white" src="/images/HAMU-cover.png" alt=""></a>
            </div>
            <div class="col-span-5">
                <p class="text-center my-4">Curt, your CD was fantastic. You are amongst the ukulele masters of our day.<br><b>John K.</b></p>
                <script type="text/javascript" src="https://transactions.sendowl.com/assets/sendowl.js"></script>
                <audio class="mx-auto d-block" controls="controls">
                    <source src="/assets/mp3/hamu/How-About-More-Uke-10-Minute-Demo.mp3" type="video/mp4">
                    Your browser does not support HTML5 video.
                </audio>

            </div>
        </div>
    </x-card>

    <x-card nav=true>
            @svg('music', 'icon-4x text-gray-300 block mx-auto')

            For Performance and Workshop Bookings
            @svg('at') For booking information visit the <a href="{{ route('booking') }}"><em><b>booking info</b></em> @svg('link')</a> page.
    </x-card>

    <x-card nav=true>
        <h2>The Curt Sheller Jazz Trio is:</h2>
         @include('partials/bios/three-images')
    </x-card>

    <x-card nav=true>
        <h2>Featured Video: Summer's Dawn</h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/175730264" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
    </x-card>

    <x-card nav=true>
        <h2>10 Minute Demo of How About More Uke CD?</h2>
        <div class="div-center">
            @include('partials/tracks/ten_minute_demo')
        </div>
   </x-card>

</x-app-layout>
