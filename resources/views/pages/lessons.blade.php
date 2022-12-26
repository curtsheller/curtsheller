<x-app-layout>
    <x-slot name="header">
        <x-page-header>
            <x-slot name="title">
                Private Lessons
            </x-slot>
            <x-slot name="description">
                Finally got around to updating my CurtSheller.com site for 2031. Take a trip along and let me know what you think.
            </x-slot>
            <x-slot name="updated">
                May 5 , 2021
            </x-slot>
            {{--  This is the "$slot" in page-header --}}
            @svg('newspaper')
        </x-page-header>
    </x-slot>

    <x-slot name="mininav">
        @include('layouts/nav/section/study')
    </x-slot>


    <x-card>

            <div class="grid grid-cols-5 gap-8">
                <div class="hidden sm:block sm:col-span-1">
                    <img class="block mx-auto" src="/images/badges/LearningUkulele-Badge.png" alt="">
                </div>
                <div class="col-span-5 sm:col-span-3">
                    <p>Private one-on-one lessons are available with Curt at their family music store <a href="//www.funkyfrets.com"><b>{{ config('ff.contact') }}</b> @svg('link')</a> in Boyertown, PA USA. As seasoned musician and a virtuoso player on guitar and ukulele Curt can definitely help with your goals. Checkout the <a href="/cds"></a>CD pages for his playing and the <a href="//learningukulele.com/books/instrument/ukulele"><b>books section on the LearningUkulele.com site @svg('link')</b></a> for PDF versions of all of Curt's books. hard copy version of most of the books are available on the <a href="https://squareup.com/store/funky-frets"><b>Funky Frets on-line store</b> @svg('link')</a>.</p>
                </div>
                <div class="col-span-5 sm:col-span-1">
                    <img class="block mx-auto" src="/images/logos/FunkyFretsMusicStore.png" alt="">
                </div>
            </div>

    </x-card>

    {{-- 3 Ways to Study with Curt --}}
    <x-card>

            <h2>Three (3) Ways to Study with Curt</h2>
            <p>Don't live in the area you can take on-line lessons using Skype or Apple Facetime.</p>

            <p>Before the advent of the Internet and high-speed connections to study with a top teacher you had to live relatively close to and take the time to get to the lessons on a regularly scheduled basis. If you lived near a big city with a vibrant music scene and a bit of luck in finding that teacher that might have been possible</p>

            <p>With the Internet these limitations of time and distance are no longer an obstacle to gaining access to studying with a top, experienced and professional teacher anywhere in the world. Taking advantage of the latest technologies and practices, I have  developed a program of online study that targets specific skills for aspiring ukulele players and music in general.</p>

            <p>Here are three options for a more structured approach to learning the ukulele. In addition to simply going it along and figuring it out yourself with what is available right here on {{ config('csp.site.name') }} and the wider Internet in general.</p>

    </x-card>

    <x-card>

            <h3>Private One-on-One Lessons <i class="fa fa-user"></i></h3>
            <p><i class="fa fa-user"></i> <b>PRIVATE LESSONS</b> - Private lessons are available at our family music store, <a href="//funkyfrets.com"><b>Funky Frets</b></a>, 600 E. Philadelphia Ave.,  Boyertown, PA 19512 USA. These lessons are the tradition one-on-one approach where you sign up and show up each week, and with the customized lessons, you progress towards your goals.</p>

                <div class="flex justify-center my-4">
                    <a class="btn btn-main" href="//funkyfrets.com"><i class="fa fa-globe"></i> <b>Go to Funky Frets Website...</b></a>
                </div>

    </x-card>
    <div class="card card-block">
    </div>

    <x-card>

            <h3>One-on-One Video Lessons Using Skype of Facetime <i class="fa fa-skype"></i></h3>
            <p><i class="fa fa-skype"></i> <b>SKYPE LESSONS</b> - This is the closest to face to face private lessons as we use the Internet and a simple web camera built in t most computers, tablets and smartphones. There is not distance barrier, and all that is need is to schedule the lessons frequency and time. Skype and Apple FaceTime is the same as in-person lessons at Funky Frets.</p>

    </x-card>

    <x-card>

            <h3>Email Correspondence <i class="fa fa-at"></i></h3>
            <p><i class="fa fa-at"></i> <b>EMAIL CORRESPONDENCE</b> - This is a go at your pace, and I send you the custom lessons. This option can accommodate any schedule as the communications involve email, phone and video exchange. Lessons with me are an excellent way to have me identify the lessons that are available right here and guide you through the many available lessons.</p>

            <p>Email correspondence lessons are a great option for people that can't commit to a schedule due to a job, family, etc..</p>

    </x-card>

    <x-card>

            <p>For more information, you can reach me by email at: <b>{{ config('csp.curt.email.gmail') }}</b> or by call me at <b>{{ config('csp.curt.phone') }}</b>.</p>

            <p>We can discuss your goals, current level, a schedule and the program that will be best suited to maximize your progress.</p>

    </x-card>

    {{-- What Are the Lessons Like? --}}
    <x-card>

            <h2>What Are the Lessons Like?</h2>

    </x-card>
    <x-card>

            <h4>What Are the Lessons Like?</h4>

            <p>You might be wonder just that. "What are the lessons like?"</p>

            <p>Both the <i class="fa fa-user"></i> in-person and <i class="fa fa-skype"></i> skype, and email correspondence lessons are custom lessons based on your goals as well as what every player should know.</p>

            <p>Typical lessons contains the following topic areas: Chords and Chord Progression, Single Notes, Rhythm and Strums, The Principles of Music, Learning the `Ukulele Fingerboard, and Developing a Repertoire.</p>

    </x-card>

    {{-- My Personal Philosophy? --}}
    <x-card>

            <h2>My Personal Teaching Philosophy?</h2>
            <p>After many, many years of serious study with world renowned musician, education, and jazz guitarist Chuck Anderson I've adopted his teaching philosophy and methods.</p>

    </x-card>
    <x-card>

            @include('partials/bios/philosophy')

    </x-card>

</x-app-layout>
