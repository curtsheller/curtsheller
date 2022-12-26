<a name="ukulele_for_guitar_players"></a>
<h2 class="">Ukulele for Guitar Players</h2>
<p class="workshop-level">ANY GUITAR PLAYER</p>

<div class="clear">
    <img class="float-left img-thumbnail shadow mr-3 mt-2 mb-3" src="/assets/books/covers/UKEGTR-cover.png" width="196" alt="UKEGTR">

    <p class="text-2xl font-thin italic">You might already know more than you think!</p>

    <p>Ukulele for Guitar Players is a guide to transferring the accumulated experience and knowledge gained as a guitar player to the ukulele.</p>

    <p>Covers chords, scales, reading and the three most common ukulele tunings.</p>

    <p>Ukulele for Guitar Players is for current and former guitar players discovering the ukulele for the first time or returning to the instrument.</p>

    <p>Ukulele for Guitar Players is a guide to transferring the accumulated experience and knowledge gained as a guitar played to the ukulele. Or exploring the possibilities that the ukulele offer. Covers chords, scale and an introduction to reading standard music notation on ukulele.</p>

    <p>The ukulele is both a different instrument than the guitar and at the same time a lot like the guitar.</p>

    <p>Guitar players that also play the ukulele find that it gives them a different and fresh look at how they also approach the guitar.</p>
</div>

<div class="flex flex-wrap items-center justify-between">
    @auth
        <a class="" href="{{ Storage::disk('spaces')->url('workshops/UKEGTR-Ukulele-for-Guitar-Players.pdf') }}">
            <button type="button" class="btn btn-xs btn-main w-full m-2 mb-3">
                @svg('download', 'mr-2')
                UKEGTR-Ukulele-for-Guitar-Players.pdf
                @svg('file-pdf', 'ml-2')
            </button>
        </a>
    @else
        <p class="text-gray-300">@svg('file-pdf', 'mr-2') UKEGTR-Ukulele-for-Guitar-Players.pdf</p>
    @endauth
</div>
