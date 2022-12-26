<x-app-layout>
    <x-slot name="header">
        <x-page-header>
            <x-slot name="title">
                The Elements of a Successful Music Study Program
            </x-slot>
            <x-slot name="description">
                &ldquo;You&rsquo;re born with a spark... to search for the truth, for the best you can be. Practice. Discipline. Preparation. Try and try again. Then one day you&lsquo;re on top and they say you're an overnight success, &rdquo;a &ldquo;natural.&rdquo; You smile, you know.&rdquo; - <b>Anonymous</b>
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
                <h3 class="">Technique</h3>
                <p><b>Technique</b> is the physical control and coordination needed to play an instrument or sing. It is involves position, efficiency of motion and effort, as well as exercises to develop specific physical skills.</p>
                <h3 class="">Theory</h3>
                <p><b>Theory</b> is the body of principles behind music. It includes scales and chord building, intervals, progressions, resolution, harmony, motion, power, color, chord substitution, keys and time signatures, rhythm, melody, etc.</p>
                <h3 class="">Ear Training</h3>
                <p><b>Ear Training</b> is the development of the active and passive capacity to relate to music aurally. It includes the ability to regains melodic and harmonic intervals, chords, chord progression, rhythm, melody and harmony.</p>
                <h3 class="">Reading</h3>
                <p><b>Reading</b> is the ability to reproduce music from written notation. It includes five phases; note recognition / alternate note locations, rhythm recognition, fingering considerations, communication terminology and interpretation.</p>
                <h3 class="">Repertoire</h3>
                <p><b>Repertoire</b> includes the songs within the performance ability of the student. These songs maybe memorized or read. They may be literal reproductions or creative interpretations.</p>
                <h3 class="">Improvisation</h3>
                <p><b>Improvisation</b> is the ability to spontaneous to create melody over a predetermined chord progression. It involves scales, alternate fingerings, arpeggios, intervalic development, sequences, embellishments, superimposition, rhythm, motifs, development techniques and idiomatic considerations.</p>
            </div>
            <div class="col-span-2 lg:col-span-1">
                <h3 class="">Musical Idioms</h3>
                <p><b>Musical Idioms</b> is the study of music musical style it involves well developed categories as; Rock, Blues, Country, Jazz, Bluegrass, Classical, Folk, Urban and Fusion. It also includes subdivisions of specializations.</p>
                <h3 class="">Songwriting</h3>
                <p><b>Songwriting</b> is the creation of original music based on a single melodic line with a chord progression. Lyrics may or may not be included.
                <h3 class="">Arranging</h3>
                <p><b>Arranging</b> involves the choice of instruments, tempo, rhythmic feel, form, intro, ending, interludes, solos, harmonies, and instrumental accompaniment of a song.</p>
                <h3 class="">Composition</h3>
                <p><b>Composition</b> is the creation of original music based on multiple simultaneous and compatible melodies. It historically involves the classical forms but frequently includes more sophisticated levels of contemporary music.</p>
                <h3 class="">Orchestration</h3>
                <p><b>Orchestration</b> involves the choice of instruments for a composition. This choice is based on the ranges and colors of the instruments which best represent the mood and creative intent of the composer.</p>
                <h3 class="">Interpretation</h3>
                <p><b>Interpretation</b> involves the ability to perform a song or composition in a unique and personal way. These skills involve a interrelated set of disciplines which include, theory, ear training, technique, dynamics, embellishments, phrasing, and rhythmic flexibility.</p>
            </div>
        </div>
        <p class="text-center text-gray-500 small"><b><em>Thanks to <a href="http://www.ChuckAndersonJazzGuitar.com" target="_blank">Chuck Anderson @svg('link')</a> for permission to use the above copy</em></b></p>
    </x-card>

</x-app-layout>
