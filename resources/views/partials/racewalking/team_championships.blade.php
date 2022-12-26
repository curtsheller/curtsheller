<x-card class="card-racewalk">
    @include('partials/racewalking/medals_and_links')
</x-card>

@include('partials/racewalking/history_world_cup')

<x-card class="card-racewalk" nav=true>
        <h4>IAAF World Race Walking Team Championships / IAAF World Race Walking CupResults</h4>

        <p>The World Race Walking Team Championships where previously know as the <a href="{{ route('racewalking', 'world_cup') }}"><b>IAAF World Race Walking Cup</b> @svg('link')</a> since 1989 now know as the <b>IAAF Race Walking Team Championships</b></a></p>

        <p>The IAAF World Race Walking Team Championships is a race walking event organized by the International Association of Athletics Federations. It has been held since 1961, and generally on a biennial basis. Women first entered the 1979 edition. It was formerly known as the Lugano Cup after the city that hosted the first event. In 2004, a Junior division was added, consisting of Men and Women which are 19 or younger.</p>

        <p>From 1975 to 1997 was awarded Lugano Trophy for combined team (20K + 50K). Since 1993 the medals have been awarded for the single events of the 20K and 50K teams, therefore in the 1993, 1995 and 1997 editions three team medals were assigned, from 1999 the combined was abolished and the team medals remained two until the present day.</p>

        <div class="grid grid-cols-2 gap-8">
            <div class="col-span-1">
                <ul class="list-disc leading-normal">
                    <li class="ITA"><a href="#2016">2016</a> Rome (ITA) <p class="leading-tight">The 2016 Cup was due to be held in Cheboksary, Russia. However the IAAF's suspension of the All-Russia Athletic Federation prohibits Russia from hosting international competitions. This event was relocated to Rome.</p></li>
                </ul>
            </div>
            <div class="col-span-1">
                <ul class="list-disc leading-normal">
                    <li class="CHN"><a href="#2018">2018</a> Taicang (CHN)</li>
                    <li class="BLR"><a href="#2020">2020</a> Minsk, (BLR)</li>
                </ul>
            </div>
        </div>

</x-card>

<a name="2016"></a>
<x-card class="card-racewalk" nav=true>
        <h4>{!! countryFlag("ITA") !!} 2016 Rome, Italy</h4>
        <p class="indent">@svg('link') <a href="http://www.iaaf.org/competitions/iaaf-world-race-walking-team-championships" target="_blank"><b>IAAF</b></a>
        <p>The 2016 Cup was due to be held in Cheboksary, Russia. However the IAAF's suspension of the All-Russia Athletic Federation prohibits Russia from hosting international competitions. This event was relocated.</p>
        <div class="grid grid-cols-2 gap-8">
            <div class="col-span-1">
                <h5 class="mt-2">10 Km Walk Men</h5>
                    <ol class="mb-4">
                        <li>Jun ZHANG CHN 40:23</li>
                        <li>Manuel BERM&Uacute;DEZ ESP  40:27 PB</li>
                        <li>Noel Al&iacute; CHAMA MEX 40:29</li>
                    </ol>
                <h5 class="mt-2">20 Km Walk Men</h5>
                    <ol class="mb-4">
                        <li>Zhen WANG CHN 1:19:22</li>
                        <li>Zelin CAI CHN 1:19:34 SB</li>
                        <li>&Aacute;lvaro MART&Iacute;N ESP 1:19:36 PB</li>
                    </ol>
                  <h5 class="mt-2">50 Km Walk Men</h5>
                    <ol class="mb-4">
                        <li>Alex SCHWAZER ITA 3:39:00</li>
                        <li>Jared TALLENT AUS 3:42:36</li>
                        <li>Igor GLAVAN UKR 3:44:02</li>
                    </ol>
            </div>
            <div class="col-span-1">
                <h5 class="mt-2">10 Km Walk Women</h5>
                    <ol class="mb-4">
                        <li>Zhenxia MA CHN 45:25</li>
                        <li>Li MA CHN 45:25</li>
                        <li>Valeria ORTU&Ntilde;O MEX</li>
                    </ol>
                <h5 class="mt-2">20 Km Walk Women</h5>
                    <ol class="mb-4">
                        <li>Hong LIU CHN 1:25:59</li>
                        <li>Maria Guadalupe GONZ&Aacute;LEZ MEX 1:26:17 AR</li>
                        <li>Shenjie QIEYANG CHN 1:26:49 SB</li>
                    </ol>
            </div>
        </div>

</x-card>

<a name="2018"></a>
<x-card class="card-racewalk" nav=true>

        <h4>{!! countryFlag("CHN") !!}2018 Taicang, China</h4>
        <div class="grid grid-cols-2 gap-8">
            <div class="col-span-1">
                <h5 class="mt-2">10 Km Walk Men</h5>
                    <ol class="mb-4">
                        <li>Yao Zhang CHN 40:07 NU20R</li>
                        <li>Zhaozhao Wang CHN 40:12 PB</li>
                        <li>José Eduardo Ortiz GUA 40:17 NU20R</li>
                    </ol>

                  <h5 class="mt-2">20 Km Walk Men</h5>
                    <ol class="mb-4">
                        <li>Koki Ikeda JPN 1:21:13</li>
                        <li>Kaihua Wang CHN 1:21:22</li>
                        <li>Massimo Stano ITA 1:21:33</li>
                    </ol>

                  <h5 class="mt-2">50 Km Walk Men</h5>
                    <ol class="mb-4">
                        <li>Hirooki Arai JPN 3:44:25 SB</li>
                        <li>Hayato Katsuki JPN 3:44:31 PB</li>
                        <li>Satoshi Maruo JPN 3:44:52 SB</li>
                    </ol>
            </div>
            <div class="col-span-1">
                <h5 class="mt-2">10 Km Walk Women</h5>
                    <ol class="mb-4">
                        <li>Alegna González MEX 45:08 AU20R</li>
                        <li>Glenda Morejón ECU 45:13</li>
                        <li>Nanako Fujii JPN 45:29 PB</li>
                    </ol>

                  <h5 class="mt-2">20 Km Walk Women</h5>
                    <ol class="mb-4">
                        <li>Maria Guadalupe González MEX 1:26:38 SB</li>
                        <li>Shijie Qieyang CHN 1:27:06 SB</li>
                        <li>Jiayu Yang CHN 1:27:22 SB</li>
                    </ol>

                <h5 class="mt-2">50 Km Walk Women</h5>
                    <ol class="mb-4">
                        <li>Rui Liang  CHN 4:04:36 WR</li>
                        <li>Hang Yin CHN 4:09:09 SB</li>
                        <li>Claire Tallent AUS 4:09:33 AR</li>
                    </ol>
                </ul>
            </div>
        </div><!-- row -->

</x-card>

<a name="2020"></a>
<x-card class="card-racewalk" nav=true>
        <h4>{!! countryFlag("CHN") !!}2020 Minsk, Belarus</h4>
        <p>POSTPONED</p>
        <p class="text-base text-red-700 font-black">
            Athletics-World Athletics to move race walking event from Belarus - TBA. New date: April 2022.<br>Note: In 2017, Minsk was awarded the 2020 World Race Walking Team Championships, which was then postponed from May 2020 to 23-24 April 2022 due to Covid-19.
        </p>

        <p class="text-sm text-red-700 font-normal">
            Belarus Athletic Federation and the Ministry of Sports and Tourism of the Republic of Belarus to postpone the World Athletics Race Walking Team Championships Minsk 2020 (May 2-3), due to the ongoing challenges created by the spread of new Coronavirus (COVID-19) internationally.
        </p>

        <div class="grid grid-cols-2 gap-8">
            <div class="col-span-1">
                <h5 class="mt-2">10 Km Walk Men</h5>
                    <ol class="mb-4">
                        <li class="GOLD"></li>
                        <li class="SILVER"></li>
                        <li class="BRONZE"></li>
                    </ol>

                  <h5 class="mt-2">20 Km Walk Men</h5>
                    <ol class="mb-4">
                        <li class="GOLD"></li>
                        <li class="SILVER"></li>
                        <li class="BRONZE"></li>
                    </ol>

                  <h5 class="mt-2">50 Km Walk Men</h5>
                    <ol class="mb-4">
                        <li class="GOLD"></li>
                        <li class="SILVER"></li>
                        <li class="BRONZE"></li>
                    </ol>
            </div>
            <div class="col-span-1">
                <h5 class="mt-2">10 Km Walk Women</h5>
                    <ol class="mb-4">
                        <li class="GOLD"></li>
                        <li class="SILVER"></li>
                        <li class="BRONZE"></li>
                    </ol>

                <h5 class="mt-2">20 Km Walk Women</h5>
                    <ol class="mb-4">
                        <li class="GOLD"></li>
                        <li class="SILVER"></li>
                        <li class="BRONZE"></li>
                    </ol>

                  <h5 class="mt-2">50 Km Walk Women</h5>
                    <ol class="mb-4">
                        <li class="GOLD"></li>
                        <li class="SILVER"></li>
                        <li class="BRONZE"></li>
                    </ol>
                </div>
        </div><!-- row -->

</x-card>
