<x-app-layout>
    <x-slot name="header">
        <x-page-header>
            <x-slot name="title">
                The Study of Music Today
            </x-slot>
            <x-slot name="description">
                Here is all the gear and music products that I use on a dad-to-day basis for practice, teaching and performance.
            </x-slot>
            <x-slot name="updated">
                May 5 , 2021
            </x-slot>
            @svg('user')
        </x-page-header>
    </x-slot>

    <x-slot name="mininav">
        @include('layouts/nav/section/study')
    </x-slot>

    <x-card>
        <div class="grid grid-cols-2 gap-4">
            <div class="col-span-2 lg:col-span-1">
                  <h4 class="">Beginning Music</h4>
                     <p>Many people feel that they cannot begin music after a certain age. This is a common myth. Age proves no obstacle to the enjoyable pursuit of music. The mature person has a better sense of his or her own needs, makes better use of time and understands the value and need for self-expression.</p>

                <h4 class="">Practice Time</h4>
                     <p>It is commonly thought that the study of music requires hours a day of boring practice. Rather than long, tedious practice, what is needed is a very efficient and interesting lesson plan in which students can develop their musical ability within the framework of their own available time.</p>

                     <p class="indent">It actually, simply comes down to doing the <span class="XBold text-red">WORK!!!</span></p>

                <h4 class="">Leisure Time</h4>
                     <p>How does anyone spend their leisure time? There is certainly no shortage of alternatives. The experience of music is a most satisfying pastime. It grows even more satisfying as students begin to develop their ability to play.</p>

                <h4 class="">Creative Capacity</h4>
                     <p>Since music provides an opportunity to develop one's creative capacities, it should be part of everyone's educational experience. The concentration and discipline developed through the study of music is particularly valuable to children or adults who have never been exposed to creative music in the traditional school setting.</p>
            </div>
            <div class="col-span-2 lg:col-span-1">
                <h4 class="">Bridge to the Generation Gap</h4>
                     <p>Music, so popular with youth, is an excellent bridge to the so-called &quot;generation gap&quot;. Music favors neither male or female, adult or child. It provides a unique opportunity for communication between parents and children. Though few take advantage of it, participation in music is one of the finest possible family activities.</p>

                <h4 class="">The Study of Music Today</h4>
                     <p>Few people are aware of the many new developments in music education today. It is quite common to identify music lessons with the boring and repetitive exercises of many years ago. In contrast to this, our approach and material are uniquely suited to the needs of the contemporary student.</p>

                     <ul class="list-disc leading-normal m-8">
                            <li><strong><a href="{!! route('elements') !!}">The Elements of a Successful Study Program... @svg('link')</a></strong></li>
                     </ul>

                <h4 class="">Relaxation with Music</h4>
                    <p>Anyone who has accepted responsibility in life has unavoidable pressure. It is most necessary to have a way to relax from the pressures of daily life. Music, with its emphasis on the relaxed exploration of sound, provides an excellent opportunity to escape from the tension and pressures of daily responsibility.</p>
            </div>
        </div>
        <p class="text-center text-gray-500 small"><b><em>Thanks to <a href="http://www.ChuckAndersonJazzGuitar.com" target="_blank">Chuck Anderson @svg('link')</a> for permission to use the above copy</em></b></p>
    </x-card>

    <x-card>
        <p class="tpm">Here are two flyers ( PDF files for download <i class="fa fa-download"></i> ) that I have as handouts for potential students and their parents. These have been very successful with new students.</p>

        <ul class="list-disc leading-loose ml-8">
            <li>@svg('file-pdf', 'text-brand-light') <b>The Study of Music</b> - <em><a href="/assets/pdf/TheStudyOfMusic.pdf">download @svg('download', 'text-brand-light')</a></em> </li>
            <li>@svg('file-pdf', 'text-brand-light') <b>Curriculum</b> - This is the flyer that I created and use at tour family music a.k.a. Ukulele store in Boyertown, PA USA. <em><a href="/assets/pdf/CurriculumFlyer.pdf">download @svg('download', 'text-brand-light')</a></em></li>
        </ul>
    </x-card>

    <x-card>
        <h4>How Playing an Instrument Benefits Your Brain - Anita Collins</h4>

        <div class="grid grid-cols-2 gap-4">
            <div class="col-span-1">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/R0JKCYZ8hng" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-span-1">
                <p class="indent">When you listen to music, multiple areas of your brain become engaged and active. But when you actually play an instrument, that activity becomes more like a full-body brain workout. What's going on? Anita Collins explains the fireworks that go off in musicians' brains when they play, and examines some of the long-term positive effects of this mental workout.</p>
            </div>
        </div>

        <p class="indent text-center m-t-1">Lesson by Anita Collins, animation by Sharon Colman Graham.
            View full lesson: <a href="http://ed.ted.com/lessons/how-playing-an-instrument-benefits-your-brain-anita-collins">How Playing an Instrument Benefits Your Brain - Anita Collins</a></p>
    </x-card>

</x-app-layout>
