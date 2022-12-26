<x-card class="card-racewalk" nav=true>
    @include('partials/racewalking/medals_and_links')
</x-card>

<x-card class="card-racewalk" nav=true>
    <h2>Previous IAAF World Indoor Results</h2>
    <div class="grid grid-cols-2 gap-2">
        <ul class="text-sm leading-loose ml-12">
            <li class="FRA"><a href="#1985Paris">1985 Paris-Bercy (Palais Omnisports), France</a></li>
            <li class="USA"><a href="#1987Indianapolis">1987 Indianapolis (Hoosier Dome), IN, United States</a></li>
            <li class="HUN"><a href="#1989Budapest">1989 Budapest (Sportscárnok), Hungary</a></li>
        </ul>
        <ul class="text-sm leading-loose ml-12">
            <li class="ESP"><a href="#1991Sevilla">1991 Sevilla (Palacio de los Deportes), Spain</a></li>
            <li class="CAN"><a href="#1993Toronto">1993 Toronto (The Sky Dome), Canada</a></li>
        </ul>
    </div>
    <p class="text-center mx-12 mt-6">@svg('globe', 'text-brand-icon') From 1995 on NO indoor walk has been contested. Visit the <a href="https://www.worldathletics.org/competitions/world-athletics-indoor-championships/" target="_blank"> IAAF World Indoor Championships web site </em> @svg('link')</a> for results in other events. At the shorted distances it just get too hard to judge legal technique, they are simply moving soo fast. The worlds record for the mile is by British Olympian Tom Bosworth in 5:31.08.</p>

    <iframe class="block mx-auto img-thumbnail my-4" width="560" height="315" src="https://www.youtube.com/embed/EOYdS5QZasM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <p class="caption">Olympian Tom Bosworth in 5:31.08</p>
</x-card>

{{-- 1985 Paris - 1987 Indianapolis --}}
<x-card class="card-racewalk">

        <div class="grid grid-cols-2 gap-2">
            <div class="col-span-2 sm:col-span-1">
                <a name="1985Paris"></a>
                <h2>@svg('flags/fr', 'border') 1985 Paris-Bercy, France</h2>

                <h6>WOMEN 3000 Metres</h6>
                    <ol>
                        <li class="GOLD">Giuliana SALCE ITA 12:53.42 NR</li>
                        <li class="SILVER">Hong YAN CHN 13:05.56 AR</li>
                        <li class="BRONZE">Ann PEEL CAN 13:06.97</li>
                    </ol>
                    <ol class="list-decimal" start="6">
                        <li class="">Teresa VAILL USA 13:59.56</li>
                    </ol>
            </div>
            <div class="col-span-2 sm:col-span-1">
                <a name="1987Indianapolis"></a>
                <h2>@svg('flags/us', 'border') 1987 Indianapolis, IN, USA</h2>

                <h6>MEN 5000 Metres</h6>
                    <ol>
                        <li class="GOLD">Mikhail SHCHENNIKOV URS 18:27.79 WR</li>
                        <li class="SILVER">Jozef PRIBILINEC TCH 18:27.80 NR</li>
                        <li class="BRONZE">Ernesto CANTO MEX 18:38.71 AR</li>
                    </ol>
                    <ol class="list-decimal" start="8">
                        <li class="">Tim LEWIS USA  19:18.40 NR</li>
                    </ol>
                    <ol class="list-decimal" start="14">
                        <li class="">Ray SHARP USASA 20:13.19</li>
                    </ol>
                <h6>WOMEN 3000 Metres</h6>
                    <ol>
                        <li class="GOLD">Olga KRISHTOP URS 12:05.49 WR</li>
                        <li class="SILVER">Giuliana SALCE ITA 12:36.76</li>
                        <li class="BRONZE">Ann PEEL CAN 12:38.97 AR</li>
                    </ol>
                    <ol class="list-decimal" start="8">
                        <li class="">Maryanne TORRELLAS USA 13:10.30</li>
                    </ol>
                    <ol class="list-decimal" start="13">
                        <li class="">Teresa VAILL USA 13:32.82</li>
                    </ol>
            </div>
        </div>

</x-card>

{{-- 1985 Paris - 1987 Indianapolis --}}
<x-card class="card-racewalk">

        <div class="grid grid-cols-2 gap-2">
            <div class="col-span-2 sm:col-span-1">
                <a name="1989Budapest"></a>
                <h2>@svg('flags/hu', 'border') 1989 Budapest, Hungary</h2>

                <h6>MEN 5000 Metres</h6>
                    <ol>
                        <li class="GOLD">Mikhail SHCHENNIKOV URS 18:27.10 WR</li>
                        <li class="SILVER">Roman MRÁZEK TCH 18:27.80 PB</li>
                        <li class="BRONZE">Frants KOSTYUKEVICH URS 18:34.07 PB</li>
                    </ol>

                <h6>WOMEN 3000 Metres</h6>
                    <ol>
                        <li class="GOLD">Kerry SAXBY-JUNNA AUS  12:01.65 WR</li>
                        <li class="SILVER">Beate GUMMELT GDR 12:07.73</li>
                        <li class="BRONZE">Ileana SALVADOR ITA  12:11.33 NR</li>
                    </ol>
                    <p><b>Heat 2:</b> Teresa VAILL  USA 12:52.39</p>
            </div>
            <div class="col-span-2 sm:col-span-1">
                <a name="1991Sevilla"></a>
                <h2>@svg('flags/es', 'border') 1991 Sevilla, Spain</h2>

                <h6>MEN 5000 Metres</h6>
                    <ol>
                        <li class="GOLD">Mikhail SHCHENNIKOV URS 18:23.55 WR</li>
                        <li class="SILVER">Giovanni DE BENEDICTIS ITA 18:23.60 NR</li>
                        <li class="BRONZE">Frants KOSTYUKEVICH USR 18:47.05</li>
                    </ol>

                <h6>WOMEN 3000 Metres</h6>
                    <ol>
                        <li class="GOLD">Beate GUMMELT GER  11:50.90 WR</li>
                        <li class="SILVER">Kerry SAXBY-JUNNA AUS 12:03.21</li>
                        <li class="BRONZE">Ileana SALVADOR ITA 12:07.67 NR</li>
                    </ol>
                    <ol class="list-decimal" start="9">
                        <li class="">Victoria HERAZO USA 13:09.90</li>
                    </ol>
            </div>
        </div>

</x-card>

{{-- 1993 Toronto, Canada - 1987 Indianapolis --}}
<x-card class="card-racewalk">
    <div class="grid grid-cols-2 gap-4">
        <div class="col-span-2 sm:col-span-1">
            <a name="1993Toronto"></a>
            <h2>@svg('flags/ca', 'border') 1993 Toronto, Canada</h2>

            <h6>MEN 5000 Metres</h6>
                <ol>
                    <li class="GOLD">Mikhail SHCHENNIKOV URS 18:32.10 WR</li>
                    <li class="SILVER">Robert KORZENIOWSKI POL 18:35.91</li>
                    <li class="BRONZE">Mikhail ORLOV RUS 18:43.48</li>
                </ol>

            <h6>WOMEN 3000 Metres</h6>
                <ol>
                    <li class="GOLD">Yelena NIKOLAYEVA RUS 11:49.73 CR</li>
                    <li class="SILVER">Kerry SAXBY-JUNNA AUS 11:53.82 AR</li>
                    <li class="BRONZE">Ileana SALVADOR ITA 11:55.35</li>
                </ol>
                <ol class="list-disc">
                    <li>Debbi LAWRENCE USA DQ</li>
                </ol>
        </div>
        <div class="col-span-2 sm:col-span-1">
            <p class="text-center mx-12">@svg('globe', 'text-brand-icon') From 1995 on NO walk have been contested. Visit the <a href="http://www.iaaf.org/competitions/iaaf-world-indoor-championships/history"> IAAF World Indoor Championships web site </em> @svg('link')</a> for results in other events</p>
        </div>
    </div>
</x-card>
