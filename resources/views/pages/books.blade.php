<x-app-layout>
    <x-slot name="header">
        <x-page-header>
            <x-slot name="title">
                Curt Sheller Publications Books
            </x-slot>
            <x-slot name="description">
                All of Curt's Books Are Available at [www.LearningUkulele.com/books](//www.LearningUkulele.com/books)
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

    <x-card class="p-6">
            <div class="flex flex-wrap">
                @foreach (['AGC1','AGC2','AGCP1','AGCPB1','AGCPB2','AGCPUKE1','AGCPUKE1','AGCPB1UKE','AGCUKE1STD','BC1UKE2','QS1-Blues','QS1BASS4','QSUAT-C','RMA1','UKEGTR','UKEREAD1','UKESTRUM1','ULUNN-C','ULUNN-G','UKEFP01','BC1UKE-L','6SUF','BC1UKE-C','UKEREAD1'] as $cover)
                    <img class="h-24 m-1 border border-gray-600" src="/images/covers/{{ $cover }}-cover.png" alt="">
                @endforeach
            </div>

            <div class="flex flex-wrap">
                @foreach (['6SUF-SEQ-BLANK-1','AGCCH1-1','GL08-FB6CH-1','RMA1CH_MajorKeyChart','UL42-TRIa-1','UL700a-1','UL700c-2','UL700d-2','UL700g-2','UL700b-1'] as $chart)
                    <img class="h-24 m-1 border border-gray-600" src="/images/charts/{{ $chart }}.png" alt="">
                @endforeach
            </div>

            <p class="caption"><em>All books by Curt are available on the <a class="underline-brand" href="//www.learningukulele.com"><b>LearningUkulele.com</b></a> @svg('link') site</em>.</p>

            <h3 class="mb-0">Ukulele Books</h3>
                <ul class="list-disc leading-normal ml-8 mt-0 mb-4">
                    <li>A Guide to Ukulele Chords</li>
                    <li>A Guide to Advanced Ukulele Chords - Volume I</li>
                    <li>A Guide to Blues Chord Progressions for Ukulele A to Z</li>
                    <li>A Guide to Ukulele Chords for Lefties</li>
                    <li>A Guide to Ukulele Chords, 2nd Edition</li>
                    <li>A Guide to Ukulele Strums</li>
                    <li>Exploring Jazz Chords on Ukulele</li>
                    <li>Fingerpicking for Ukulele - Alternating Thumb Style</li>
                    <li>Daily Practice Material for the Contemporary Ukulele</li>
                    <li>QuickStart Arpeggio Fingerings for Ukulele - Triads C Tuning</li>
                    <li>QuickStart Arpeggio Fingerings for Ukulele - Triads G Tuning</li>
                    <li>QuickStart Arpeggio Fingerings for Ukulele, C Tuning - Major Triad</li>
                    <li>QuickStart Scale Fingerings for Ukulele, C Tuning - Aeolian Scale</li>
                    <li>QuickStart Scale Fingerings for Ukulele, C Tuning - Blues Scale</li>
                    <li>QuickStart Scale Fingerings for Ukulele, C Tuning - Diminished Scale</li>
                    <li>QuickStart Scale Fingerings for Ukulele, C Tuning - Dorian Scale</li>
                    <li>QuickStart Scale Fingerings for Ukulele, C Tuning - Ionian Scale</li>
                    <li>QuickStart Scale Fingerings for Ukulele, C Tuning - Mixolydian Scale</li>
                    <li>QuickStart Scale Fingerings for Ukulele, C Tuning - Pentatonic Scale</li>
                    <li>QuickStart Scale Fingerings for Ukulele, C Tuning - WholeTone Scale</li>
                    <li>QuickStart Scale Fingerings for Ukulele, Volume I, C Tuning</li>
                    <li>QuickStartScale Fingerings for Tenor and Baritone Ukulele, Volume I, G Tuning</li>
                    <li>Six Secrets of Ukulele Fingering</li>
                    <li>The Advanced Guide to Chord Progressions for Ukulele - Volume I</li>
                    <li>Ukulele Chords</li>
                    <li>Ukulele for Guitar Players</li>
                    <li>Ukulele- Reading Music Series - Primer</li>
                    <li>Learning the Ukulele Fingerboard - C Tuning</li>
                    <li>Learning the Ukulele Fingerboard - D Tuning</li>
                    <li>Learning the Ukulele Fingerboard - G Tuning</li>
                </ul>
            <h3 class="mb-0">Guitar Books</h3>
                <ul class="list-disc leading-normal ml-8 mt-0 mb-4 mt-0 mb-4">
                    <li>A Guide to Guitar Chords</li>
                    <li>QuickStart Scale Fingerings for Lead Guitar - Blues Scale</li>
                    <li>QuickStart Scale Fingerings for Lead Guitar - Volume I</li>
                    <li>QuickStart - Chord Progressions for Lead Guitar - Vol I Book and CD</li>
                    <li>Daily Practice Material for the Contemporary Guitarist</li>
                    <li>The Advanced Guide to Blues Chord Progressions for Guitar - Volume I</li>
                    <li>The Advanced Guide to Blues Chord Progressions for Guitar - Volume II</li>
                    <li>The Advanced Guide to Chord Progressions for Guitar - Volume I</li>
                    <li>The Advanced Guide to Guitar Chords - Volume I</li>
                    <li>The Advanced Guide to Guitar Chords - Volume II</li>
                    <li>Ukulele for Guitar Players</li>
                </ul>
            <h3 class="mb-0">Music Books</h3>
                <ul class="list-disc leading-normal ml-8 mt-0 mb-4">
                    <li>Harmonic Analysis for Scale Selection and Chord Substitution</li>
                    <li>Daily Practice Material for the Contemporary Musician</li>
                </ul>

            <h3 class="mb-0">Bass Books</h3>
                <ul class="list-disc leading-normal ml-8 mt-0 mb-4">
                    <li>QuickStart Scale Fingerings for Bass Guitar - Blues Scale</li>
                    <li>Learning the 4 String Bass Guitar Fingerboard</li>
                </ul>

            <h3 class="mb-0">Learning the Fingerboard Books</h3>
                <ul class="list-disc leading-normal ml-8 mt-0 mb-4">
                    <li>Learning the Ukulele Fingerboard - C Tuning</li>
                    <li>Learning the Ukulele Fingerboard - D Tuning</li>
                    <li>Learning the Ukulele Fingerboard - G Tuning</li>
                    <li>Learning the 4 String Bass Guitar Fingerboard</li>
                    <li>Learning the Lap Steel Guitar Fingerboard, C6 Tuning</li>
                    <li>Learning the Mandolin Fingerboard</li>
                </ul>

    </x-card>

    <x-card>
        <h2>J Marvian Paintings For Sale</h2>
        <p><b>J Marvian</b> was a local Chester County, Pennsylvania artist. Paintings range from 1976 to 1982 dates. All oil paintings. These painting where my late father collection and are now for sale.</p>

        <p class="text-center text-2xl font-thin"><a href="{{ route('marvian') }}">View paintings @svg('link', 'icon-brand')</a></p>
    </x-card>

</x-app-layout>
