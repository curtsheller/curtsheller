@extends('layouts/app')

@section('content')
    <x-card>

        	<div class="grid grid-cols-4 gap-6">
        	          <div class="col-span-1">
							<img class="block mx-auto" src="/images/mpr/MPRS-Cards(collage-logo).png" alt="">
        	          </div>
        	          <div class="col-span-3">
                            <h2>Modular Phonetic Rhythm</h2>

                            <p><img class="float-right ml-2" src="/images/mpr/MPRS-FW1-cover.jpg" alt="" width="98" height="127"><span class="font-extrabold">Modular Phonetic Rhythm</span> represents a significant advance in the teaching and application of rhythm. Eliminating many inefficient aspects of rhythm education, Modular Phonetic Rhythm streamlines the traditional educational approach, resulting in a reflexive reaction to rhythm.</p>

                            <p>This approach is applicable to all ages and to all styles of music. It has applications for the individual musician as well as for groups such as orchestra, jazz band, marching band, small groups etc.</p>
                    </div>
        	      </div>

    </x-card>

    @card(['card' => 'card-quote'])

			<h2 class="">About Chuck Anderson</h2>

			<p>As an <span class="font-extrabold">AUTHOR</span>, Chuck has been published by several companies. Publications include: Music Pursuing the Horizon, An Improvisational Approach to Rock and Blues Guitar, Reflections for Guitar, Modular Phonetic Rhythm, Master Picking and The 6 Secrets of Guitar Fingering including Scale Charting. Other books include: Mastering the Modes, The Private Music Teacher&rsquo;s Guide, Hi Tech Guitar and Advertising Music - The Business, A series called Unlocking the Guitar features topics such as learning the notes on the neck, strums and tunings. He also developed and was featured in an 8 hour video series called Harmonic Tonalities, the Songwriter&rsquo;s Master Classes.</p>
            <p class="text-center"><a href="mailto:chuck@chuckandersonjazzguitar.com"> @svg('at') chuck@chuckandersonjazzguitar.com @svg('link')</a></p>

    </x-card>

    <x-card>

			<h3>Comments</h3>
			<p>&ldquo;Modular Phonetic Rhythm represents a fresh and innovative approach that helps bring the abstract into focus, examining  the core of the real, linguistically aligned processes  actually involved in reading, understanding, interpreting, and executing rhythm.&rdquo;</p>
			<p><b>Arthur Bernstein, Senior Lecturer Liverpool Institute for Performing Arts</b></p>

			<p>&ldquo;Since it's inception, Chuck Anderson's Modular Phonetic Rhythm System has been an essential in understanding and perfecting the intricacies of rhythm. As a music teacher and school owner this system is as necessary for our students as the instrument they choose to learn. The rhythmic levels breakdown and mix of pattern options are revolutionary.&rdquo;</p>
			<p><b>Scott Silver, Silver Music Studios</b></p>

    </x-card>

@endsection
