<x-card class="card-plain" nav=true>
    <div class="grid grid-cols-4 gap-8">
        <div class="col-span-4 sm:col-span-1">
            <img class="block mx-auto w-24 mb-2" src="/images/svg/Curtie.svg" alt="">
            <p class="text-sm text-center text-gray-500">Website brought to you by
                Curt Sheller<br>
                Curt Sheller Publications<br>
                www.CurtSheller.com</p>
        </div>
        <div class="col-span-4 sm:col-span-3">
            <p class="text-sm text-gray-500"><b>Curt Sheller</b> and <b>Curt Sheller Publications</b>. A small (me, myself and I) independent, by choice, publishing company catering to the needs of musicians, guitar players and ukulele players worldwide. Offering the resources and information needed to develop as a musician. Curt Sheller Publications, created in 1995, has been on the web for over 15 years. I have over 40 years of playing experience and have been involved in private music education for the past 20 years.</p>

            <p class="text-sm text-gray-500">Taking advantage of my jazz guitar skills, I began pursuing the potential of the ukulele. Researching the field, I saw very little material organized for the intermediate and advanced player. I have developed an international reputation as a ukulele expert having written over 30 books for ukulele and over 600 lessons.</p>

            @php
                $laravel = app();
                $laravel_ver = $laravel::VERSION;
            @endphp

            <p class="text-sm text-center text-gray-500 mt-8">&copy;1995-2021 <b>Curt Sheller</b>, <em>Curt Sheller Publications</em></b>, Suite 101, 2050 Orlando Rd., Pottstown, PA 19464<br> Phone: 484-942-8040 &bull; v{{ $laravel_ver }}-v{{ phpversion() }}</p>
            <p class="text-sm text-center text-gray-500"> @svg('globe') @svg('user') Site developed and maintained by Curt Sheller and hosted on <a href="https://m.do.co/c/84b83ce112f2"><b>DigitalOcean</b> @svg('link')</a> and managed using <a href="//laravel.com"><b>Laravel Forge</b> @svg('link')</a>.</p>
            </small>

            <a rel="me" href="https://mastodon.social/@curtsheller"></a>
            <a rel="me" href="https://fosstodon.org/@curtsheller"></a>
            <a rel="me" href="https://laravel.gg/@curtsheller"></a>
        </div>
    </div>
</x-card>
