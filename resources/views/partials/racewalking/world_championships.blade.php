<x-card class="card-racewalk">
    @include('partials/racewalking/medals_and_links')
</x-card>

<x-card class="card-racewalk" nav=true>
    <p>The <a href="//worldathletics.org/" target="_blank">IAAF World Championships @svg('link', 'text-brand-300')</a>, commonly referred to as the <em>World Championships in Athletics</em>, is a biennial athletics event organized by the International Association of Athletics Federations (IAAF). <strong>The World Championships was started in 1976 in response to the International Olympic Committee dropping the men's 50 km walk from the Olympic athletics program for the 1976 Montreal Olympics, despite its constant presence at the games since 1932.</strong> The IAAF chose to host its own world championship event instead, a month and a half after the Olympics. It was the first World Championships that the IAAF had hosted separate from the Olympic Games (<em>traditionally the main championship for the sport</em>). A second limited event was held in 1980, and a major expansion in 1983 is considered the official start of the event. It was then held every four years until 1991, when it switched to a two year cycle. </p>

    <h3 class="">Previous World Results</h3>
    <div class="grid grid-cols-2 gap-8">
        <div class="col-span-2 md:col-span-1">
            <x-ui.list textSize="text-sm" leading="relaxed" class="my-0">
                <li class="SWE"><a href="#1976Malmo">1976 Malmö, Sweden</a></li>
                <li class="NED"><a href="#1980Sittard">1980 Sittard, Netherlands</a></li>
                <li class="SWE"><a href="#1983Helsinki">1983 Helsinki, Sweden</a></li>
                <li class="ITA"><a href="#1987Rome">1987 Rome, Italy</a></li>
                <li class="JPN"><a href="#1991Toyko">1991 Toyko, Japan</a></li>
                <li class="GER"><a href="#1993Stuttgart">1993 Stuttgart, Germany</a></li>
                <li class="SWE"><a href="#1995Gotteborg">1995 Gotteborg</a></li>
                <li class="GRE"><a href="#1997Athens">1997 Athens, Greece</a></li>
                <li class="ESP"><a href="#1999Sevilla">1999 Sevilla, Spain</a></li>
                <li class="CAN"><a href="#2001Edmonton">2001 Edmonton, Alberta, Canada</a></li>
                <li class="FRA"><a href="#2003Paris">2003 Paris, France</a></li>
            </x-ui.list>
        </div>
        <div class="col-span-2 md:col-span-1">
            <p class="text-base text-brand-400 italic | block sm:hidden">more World Results &hellip;</p>
            <x-ui.list textSize="text-sm" leading="relaxed" class="mt-2">
                <li class="SWE"><a href="#2005Helsinki">2005 Helsinki, Sweden</a></li>
                <li class="JPN"><a href="#2007Osaka">2007 Osaka, Japan</a></li>
                <li class="GER"><a href="#2009Berlin">2009 Berlin, Germany</a></li>
                <li class="KOR"><a href="#2011Daegu">2011 Daegu, South Korea</a></li>
                <li class="RUS"><a href="#2013Moscow">2013 Moskva, Russia</a></li>
                <li class="CHN"><a href="#2015Beijing">2015 Beijing, China</a></li>
                <li class="GBR"><a href="#2017London">2017 London, United Kingdom</a></li>
                <li class="QAT"><a href="#2019Doha">2019 Doha, Qatar</a></li>
                <li class="USA"><a href="#2022Eugene">2022 Eugene, Oregon, United States</a></li>
                <li class="HUN"><a href="#2023Budapest">2023 Budapest, Hungary</a></li>
                <li class="JPN"><a href="#2025Toyko">2025 Toyko, Japan</a></li>
            </x-ui.list>
        </div>
    </div>
</x-card>

<!-- 1976 Malmö - 1980 Sittard, Netherlands-->
<x-card class="card-racewalk" nav=true>
    <div class="grid grid-cols-5 gap-8">
        <div class="col-span-5 sm:col-span-3">
            <a name="1976Malmo"></a>
            <h2 class="mb-4">@svg('flags/se', 'border') 1976 Malmö, Sweden</h2>
            <p class="text-sm"><strong>The World Championships was started in 1976 in response to the International Olympic Committee dropping the men's 50 km walk from the Olympic athletics program for the 1976 Montreal Olympics, despite its constant presence at the games since 1932.</strong></p>
            <p class="text-sm">The <strong>1976 World Championships in Athletics</strong> was the first global, international athletics competition organized by the International Association of Athletics Federations (IAAF). Hosted on 18 September 1976 in Malmö, Sweden, it featured just one event: a men's 50 kilometres race walk contest. The course passed through the streets of the city and the start and finish points were within Malmö Stadion. </p>

            {{-- <x-ui.world-athletic-yr-results-link $year="1976" /> --}}
            @include('partials/racewalking/link_results', [ 'results_year' => '1976'])

            <h4 class="mb-2">50 Km Walk Men</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Veniamin Soldatenko USR 3:54:40 (CR)</li>
                    <li class="SILVER"> Enrique Vera MEX 3:58:14 </li>
                    <li class="BRONZE"> Reima Salonen FIN 3:58:53</li>
                </ul>
        </div>
        <div class="col-span-5 sm:col-span-2">
            <a name="1980Sittard"></a>
            <h2 class="mb-4">@svg('flags/nl', '') 1980 Sittard, Netherlands</h2>
            <p class="text-sm">The 1980 World Championships in Athletics was the second global, international athletics competition organised by the International Association of Athletics Federations (IAAF). Hosted from 14 to 16 August 1980 at the De Baandert in Sittard, Netherlands, it featured two events: the women's 400 metres hurdles and the women's 3000 metres run. West Germany's Birgit Friedmann took the first women's world title in the 3000 m, while her East German counterpart Bärbel Broschat became the first women's 400 m hurdles world champion.</p>

            <h4 class="mb-2">NO Walks</h4>

        </div>
    </div>
</x-card>

<!-- Helsinki 1983 - 1987 Rome -->
<x-card class="card-racewalk" nav=true>
    <div class="grid grid-cols-2 gap-8">
        <div class="col-span-2 sm:col-span-1">
            <a name="1983Helsinki"></a>
            <h3 class="mb-4">@svg('flags/fi', 'border') 1983 Helsinki</h3>
                <p class="text-sm">The <strong>Inaugural 1983 World Championships in Athletics</strong> were run under the auspices of the International Association of Athletics Federations and were held at the Olympic Stadium in Helsinki, Finland between 7 and 14 August 1983. </p>

            {{-- <x-ui.world-athletic-yr-results-link $year="1983" /> --}}
            @include('partials/racewalking/link_results', [ 'results_year' => '1983'])

            <h4 class="mb-2">20 Km Walk Men</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Ernesto  Canto MEX 1:20:49M</li>
                    <li class="SILVER">Jozef  Pribilinec TCH 1:20:59</li>
                    <li class="BRONZE">Yevgeniy Yevsyukov URS 1:21:08</li>
                </ul>
            <h4 class="mb-2">50 Km Walk Men</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD"><a href="http://en.WikipediA.org/wiki/Ronald_Weigel" target="_blank">Ronald Weigel</a> GDR 3:43:08</li>
                    <li class="SILVER">Jos&eacute; Mar&iacute;n ESP 3:46:42</li>
                    <li class="BRONZE">Sergey Lung URS 3:49:03</li>
                </ul>

                <img class="mx-auto h-24 my-8" src="/images/racewalking/wold_championship_logos/1983-Helsinki.png" alt="Helsinki_IAAF_1983">
        </div>
        <div class="col-span-2 sm:col-span-1">
            <a name="1987Rome"></a>
            <h3 class="mb-4">@svg('flags/it', 'border') 1987 Rome</h3>
                <p class="text-sm">The <strong>2nd World Championships in Athletics</strong> under the auspices of the International Association of Athletics Federations were held in the Stadio Olimpico in Rome, Italy between August 28 and September 6, 1987.</p>

            @include('partials/racewalking/link_results', [ 'results_year' => '1987'])

            <h4 class="mb-2">20 Km Walk Men</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD"><a href="http://en.WikipediA.org/wiki/Maurizio_Damilano" target="_blank">Maurizio Damilano</a> ITA 1:20:45 (CR)</li>
                    <li class="SILVER">Pribilinec&nbsp;Jozef TCH    1:21:07</li>
                    <li class="BRONZE">Mar&iacute;n&nbsp;Jos&eacute;    ESP 1:21:24</li>
                </ul>
            <h4 class="mb-2">50 Km Walk Men</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD"><a href="http://en.WikipediA.org/wiki/Hartwig_Gauder" target="_blank">Hartwig Guader @svg('link')</a> GDR 3:40:53</li>
                    <li class="SILVER"><a href="http://en.WikipediA.org/wiki/Ronald_Weigel" target="_blank">Ronald Weigel @svg('link')</a> GDR 3:41:30</li>
                    <li class="BRONZE"><a href="http://en.WikipediA.org/wiki/Vyacheslav_Ivanenko" target="_blank">Vyacheslav Ivanenko @svg('link')</a> URS 3:44:02</li>
                </ul>
            <h4 class="mb-2">10 Km Walk Women</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Strakhova&nbsp;Irina URS   44:12 (CR)</li>
                    <li class="SILVER">Saxby-Junna&nbsp;Kerry AUS   44:23</li>
                    <li class="BRONZE">Yan&nbsp;Hong CHN    44:42</li>
                </ul>

                <img class="mx-auto h-24 my-8" src="/images/racewalking/wold_championship_logos/1987-Rome.png" alt="Rome_IAAF_1987">
        </div>
    </div>
</x-card>

<!-- Toyko 1991 - 1993 -->
<x-card class="card-racewalk" nav=true>
    <div class="grid grid-cols-2 gap-8">
        <div class="col-span-2 sm:col-span-1">
            <a name="1991Toyko"></a>
            <h2 class="mb-4">@svg('flags/jp', 'border') 1991 Toyko</h2>
                <p class="text-sm">The <strong>3rd World Championships in Athletics</strong>, under the auspices of the International Association of Athletics Federations, were held in the Olympic Stadium in Tokyo, Japan between August 23 and September 1 and athletes from 167 countries participated in the event. The event is best-remembered for the men's long jump competition, when Carl Lewis made the best six-jump series in history, only to be beaten by Mike Powell, whose 8.95 m (29 ft 4.36 in) jump broke Bob Beamon's long-standing world record from the 1968 Summer Olympics.</p>

            @include('partials/racewalking/link_results', [ 'results_year' => '1991'])

            <h4 class="mb-2">20 Km Walk Men</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD"><a href="http://en.WikipediA.org/wiki/Maurizio_Damilano" target="_blank">Maurizio Damilano</a> ITA 1:19.37</li>
                    <li class="SILVER">Mi`khail  Schenikov URS 1:19:46</li>
                    <li class="BRONZE">Evgeny  Misjula URS 1:20:22</li>
                </ul>
            <h4 class="mb-2">50 Km Walk Men</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Aleksander  Potachov URS 3:53:09</li>
                    <li class="SILVER">Andrei Perlov URS 3:53:09</li>
                    <li class="BRONZE"><a href="http://en.WikipediA.org/wiki/Hartwig_Gauder" target="_blank">Hartwig Guader @svg('link')</a> GER 3:55:14</li>
                </ul>

                <img class="mx-auto h-24 my-8" src="/images/racewalking/wold_championship_logos/1991-Toyko.png" alt="Tokyo_IAAF_1991">
        </div>
        <div class="col-span-2 sm:col-span-1">
            <a name="1993Stuttgart"></a>
            <h2 class="mb-4">@svg('flags/de', 'border') 1993 Stuttgart</h2>
                <p class="text-sm">The 4th World Championships in Athletics, under the auspices of the International Association of Athletics Federations, were held in the Gottlieb Daimler Stadium, Stuttgart, Germany between 13 and 22 August with the participation of 187 nations. Having originally being held every four years in 1983, 1987 and 1991 these championships began a two-year cycle between events. The 1993 World Championships was the final time the women's 3000 m would be contested. At subsequent Championships the race was replaced by the longer 5000 m. </p>

            @include('partials/racewalking/link_results', [ 'results_year' => '1993'])

            <h4 class="mb-2">20 Km Walk Men</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Valent&iacute;n  Massana ESP 1:22:31</li>
                    <li class="SILVER">Giovanni de  Benedictis ITA 1:23:06</li>
                    <li class="BRONZE">Daniel Plaza ESP 1:23:18</li>
                </ul>
            <h4 class="mb-2">50 Km Walk Men</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Jes&uacute;s  Garc&iacute;a Bragado ESP 3:41:41</li>
                    <li class="SILVER">Valentin  Kononen FIN 3:42:02</li>
                    <li class="BRONZE">Valery  Spitsyn RUS 3:42:50</li>
                </ul>

                <img class="mx-auto h-24 my-8" src="/images/racewalking/wold_championship_logos/1993-Stuttgart.png" alt="Stuttgart_IAAF_1993">
        </div>
    </div>
</x-card>

<!-- Gotteborg 1995 - 1997 Athens -->
<x-card class="card-racewalk" nav=true>
    <div class="grid grid-cols-2 gap-8">
        <div class="col-span-2 sm:col-span-1">
            <a name="1995Gotteborg">
            <h2 class="mb-4">@svg('flags/se', 'border') 1995 Gotteborg</h2>
                <p class="text-sm">The <strong>5th World Championships in Athletics</strong>, under the auspices of the International Association of Athletics Federations, were held at the Ullevi Stadium, Gothenburg, Sweden on 5–13 August 1995. This competition saw the women run the 5000 m event at the World Championships for the first time. The race replaced the 3000 m event which had been run at all previous World Championships.</p>

            @include('partials/racewalking/link_results', [ 'results_year' => '1995'])

            <h4 class="mb-2">20 Km Walk Men</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Michele  Didoni ITA 1:19:59</li>
                    <li class="SILVER">Valent&iacute;n  Massana ESP 1:20:23</li>
                    <li class="BRONZE">Eugeny  Misjula BLS 1:20:48</li>
                </ul>
            <h4 class="mb-2">50 Km Walk Men</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Valentin  Kononen FIN 3:43:42</li>
                    <li class="SILVER">Giovanni  Perricelli ITA 3:45:11</li>
                    <li class="BRONZE"><a href="http://en.WikipediA.org/wiki/Robert_Korzeniowski" target="_blank">Robert&nbsp;Korzeniowski @svg('link')</a> POL 3:45:57</li>
                </ul>

            <h4 class="mb-2">10 Km Walk Women</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Irina Stankina RUS 42:13:00</li>
                    <li class="SILVER">Elisabeta  Perrone ITA 42:16:00</li>
                    <li class="BRONZE">Elena  Nikolayeva RUS 42:20:00</li>
                </ul>

                <img class="mx-auto h-24 my-8" src="/images/racewalking/wold_championship_logos/1995-Gotteborg.png" alt="200p-1995_World_Championships_in_Athletics_logo.svg">
        </div>
        <div class="col-span-2 sm:col-span-1">
            <a name="1997Athens"></a>
            <h2 class="mb-4">@svg('flags/gr', 'border') 1997 Athens</h2>
                <p class="text-sm">The <strong>6th World Championships in Athletics</strong>, under the auspices of the International Association of Athletics Federations, were held at the Olympic Stadium, Athens, Greece between August 1 and August 10, 1997. In this event participated 1882 athletes from 198 participant nations. Athens used the successful organization of the World Championships the next month during the IOC Session in Lausanne during its campaign to host the 2004 Summer Olympics as proof positive of Athens' and Greece's ability and readiness to organize large-scale, international sporting events.</p>

                @include('partials/racewalking/link_results', [ 'results_year' => '1997'])

            <h4 class="mb-2">20 Km Walk Men</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Daniel Garcia          MEX 1:21:43</li>
                    <li class="SILVER">Mikhail Shchennikov  RUS 1:21:53</li>
                    <li class="BRONZE">Mikhail Khmelnitskiy     BLR 1:22:01</li>
                </ul>

            <h4 class="mb-2">50 Km Walk Men</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD"><a href="http://en.WikipediA.org/wiki/Robert_Korzeniowski" target="_blank">Robert&nbsp;Korzeniowski @svg('link')</a> POL 3:44:46</li>
                    <li class="SILVER">Jes&uacute;s  Garc&iacute;a Bragado ESP 3:44:59</li>
                    <li class="BRONZE">Miguel  Rodr&iacute;guez MEX 3:48:30</li>
                </ul>

            <h4 class="mb-2">10 Km Walk Women</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Anna Rita Sidoti       ITA 42:55</li>
                    <li class="SILVER">Olga Kardopoltseva       BLR 43:30</li>
                    <li class="BRONZE">ValentinaTsybulskaya     BLR 43:49</li>
                </li>

                <img class="mx-auto h-24 my-8" src="/images/racewalking/wold_championship_logos/1997-Athens.png" alt="Athens_IAAF_1997">
        </div>
    </div>
</x-card>

<!-- Sevilla 1999 - 2001 Edmonton, Alberta, Canada -->
<x-card class="card-racewalk" nav=true>
    <div class="grid grid-cols-2 gap-8">
        <div class="col-span-2 sm:col-span-1">
            <a name="1999Sevilla"></a>
            <h2 class="mb-4">@svg('flags/es', 'border') 1999 Sevilla</h2>
                <p class="text-sm">The <strong>7th World Championships in Athletics</strong>, under the auspices of the International Association of Athletics Federations, were held at the Estadio Olímpico, Seville, Spain, between the August 20 and August 29.</p>

                <p class="text-sm">One of the main highlights of the games was the world record set in the 400 metres by Michael Johnson of the United States in a time of 43.18 seconds.</p>

            @include('partials/racewalking/link_results', [ 'results_year' => '1999'])

            <h4 class="mb-2">20 Km Walk Men</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Ilya Markov RUS 1:23:34</li>
                    <li class="SILVER"><a href="http://en.WikipediA.org/wiki/Jefferson_Pe%CC%81rez" target="_blank">Jefferson P&eacute;rez</a> ECU 1:24:19</li>
                    <li class="BRONZE">Daniel Garc&iacute;a MEX 1:24:31</li>
                </ul>
            <h4 class="mb-2">50 Km Walk Men</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Ivano  Brugnetti ITA 3:47:54</li>
                    <li class="SILVER">Matyukhin&nbsp;Nikolay RUS 3:48:18</li>
                    <li class="BRONZE"><a href="//en.wikipedia.org/wiki/Curt_Clausen" target="_blank">Curt Clausen @svg('link')</a> USA 3:50:55</li>
                </ul>
            <h4 class="mb-2">20 Km Walk Women</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Hongyu Liu CHN 1:30:50</li>
                    <li class="SILVER">Yan Wang CHN 1:0:52</li>
                    <li class="BRONZE">Kerry  Saxby-Junna AUS 1:31:18</li>
                </ul>

                <img class="mx-auto h-24 my-8" src="/images/racewalking/wold_championship_logos/1999-Sevilla.png" alt="Seville_IAAF_1999">
            </div>
        <div class="col-span-2 sm:col-span-1">
            <a name="2001Edmonton"></a>
            <h2 class="mb-4">@svg('flags/ca', 'border') 2001 Edmonton, Alberta, Canada</h2>
                <p class="text-sm">The <strong>8th World Championships in Athletics</strong>, under the auspices of the International Association of Athletics Federations, were held at Commonwealth Stadium in Edmonton, Alberta, Canada between 3 August and 12 August and was the first time the event had visited North America.</p>

            @include('partials/racewalking.link_results', [ 'results_year' => '2001'])

            <h4 class="mb-2">20 Km Walk Men</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Roman Rasskazov RUS 1:20:31</li>
                    <li class="SILVER">Ilya Markov RUS 1:20:33</li>
                    <li class="BRONZE">Viktor Burayev RUS 1:20:36</li>
                </ul>
            <h4 class="mb-2">50 Km Walk Men</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD"><a href="http://en.WikipediA.org/wiki/Robert_Korzeniowski" target="_blank">Robert&nbsp;Korzeniowski @svg('link')</a> POL 3:42:08</li>
                    <li class="SILVER">Jes&uacute;s  Garc&iacute;a Bragado ESP 3:43:07</li>
                    <li class="BRONZE">Edgar  Hern&aacute;ndez MEX 3:46:12</li>
                </ul>
            <h4 class="mb-2">20 Km Walk Women</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Olimpiada Ivanova RUS 1h37:48</li>
                    <li class="SILVER">Valentina  Tsybulskaya BLR 1h38:49</li></li>
                    <li class="BRONZE">Elisabetta  Perrone ITA 1h38:56</li>
                </li>
            <img class="mx-auto h-24 my-8" src="/images/racewalking/wold_championship_logos/2001-Edmonton.png" alt="Edmonton_IAAF_2001">
        </div>
    </div>
</x-card>

<!-- 2003 Paris - 2005 Helsinki -->
<x-card class="card-racewalk" nav=true>
    <div class="grid grid-cols-2 gap-8">
        <div class="col-span-2 sm:col-span-1">
            <a name="2003Paris"></a>
            <h2 class="mb-4">@svg('flags/fr', 'border') 2003 Paris</h2>
                <p class="text-sm">The <strong>9th World Championships in Athletics</strong>, under the auspices of the International Association of Athletics Federations, were held from 23 August to 31 August 2003 in the Stade de France in Saint-Denis, Seine-Saint-Denis, France.</p>

                @include('partials/racewalking/link_results', [ 'results_year' => '2003'])

           <h4 class="mb-2">20 Km Walk Men</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD"><a href="http://en.WikipediA.org/wiki/Jefferson_Pe%CC%81rez" target="_blank">Jefferson P&eacute;rez</a> ECU 1:17:21 (WBP)</li>
                    <li class="SILVER">Paquillo Fernández ESP 1:18:00 (SB)</li>
                    <li class="BRONZE">Roman Rasskazov RUS 1:18:07</li>
                </ul>
            <h4 class="mb-2">50 Km Walk Men</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD"><a href="http://en.WikipediA.org/wiki/Robert_Korzeniowski" target="_blank">Robert&nbsp;Korzeniowski @svg('link')</a> POL 3:36:03 (WBP)</li>
                    <li class="SILVER">Skurygin&nbsp;German RUS 3:36:42</li>
                    <li class="BRONZE">Erm&nbsp;Andreas GE 3:37:46 (NR)</li>
                </ul>
            <h4 class="mb-2">20 Km Walk Women</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Yelena Ikolayeva RUS 1:26:52 (CR)</li>
                    <li class="SILVER">Gillian O'Sullivan IRL 1:27:34</li>
                    <li class="BRONZE">Valentina Tsybulskaya&nbsp; BLR 1:28:10</li>
                </ul>

            <img class="mx-auto h-24 my-8" src="/images/racewalking/wold_championship_logos/2003-Paris.png" alt="Paris_IAAF_2003">
        </div>
        <div class="col-span-2 sm:col-span-1">
            <a name="2005Helsinki"></a>
            <h3 class="mb-4">@svg('flags/fi', 'border') 2005 Helsinki</h3>
                <p class="text-sm">The <strong>10th World Championships in Athletics</strong>, under the auspices of the International Association of Athletics Federations (IAAF), were held in the Olympic Stadium, Helsinki, Finland (6 August 2005 – 14 August 2005), the site of the first IAAF World Championships in 1983.</p>

            @include('partials/racewalking/link_results', [ 'results_year' => '2005'])

            <h4 class="mb-2">20 Km Walk Men</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD"><a href="http://en.WikipediA.org/wiki/Jefferson_Pe%CC%81rez" target="_blank">Jefferson P&eacute;rez</a> ECU 1:18:35 (SB)</li>
                    <li class="SILVER">Paquillo Fernández ESP 1:19:36</li>
                    <li class="BRONZE">Molina&nbsp;Juan Manuel ESP 1:19:44 (PB)</li>
                </ul>
            <h4 class="mb-2">50 Km Walk Men</h4>
                <p class="text-xs">Sergey Kirdyapkin, the former junior world champion led from early on and secures the global title in a personal best time. At around the 20 km mark he was caught by Aleksey Voyevodin, but by 40 km Kirdyapkin had shaken off his fellow Russian, who went on to earn silver in 3:41.25. Italian Alex Schwazer powers through late on to claim the bronze in a national record 3:41.54. There were fourteen disqualifications, and seven athletes did not finish.</p>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Kirdyapkin&nbsp;Sergey RUS 3:38:08 (PB)</li>
                    <li class="SILVER">Voyevodin&nbsp;Aleksey RUS 3:41:25</li>
                    <li class="BRONZE">Schwazer&nbsp;Alex ITA 3:41:54 (NR)</li>
                </ul>
            <h4 class="mb-2">20 Km Walk Women</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Ivanova&nbsp;Olimpiada RUS 1:25:41 (WR)</li>
                    <li class="SILVER">Turava&nbsp;Ryta BLR 1:27:05 (NR)</li>
                    <li class="BRONZE">Feitor&nbsp;Susana POR 1:28:44 (SB)</li>
                </ul>

            <img class="mx-auto h-24 my-8" src="/images/racewalking/wold_championship_logos/2005-Helsinki.png" alt="200p-Helsinki_2005.svg">
        </div>
    </div>
</x-card>

<!-- 2007 Osaka - 2009 Berlin -->
<x-card class="card-racewalk" nav=true>
    <div class="grid grid-cols-2 gap-8">
        <div class="col-span-2 sm:col-span-1">
            <a name="2007Osaka"></a>
            <h2 class="mb-4">@svg('flags/jp', 'border') 2007 Osaka, Japan</h2>
                <p class="text-sm">The <strong>11th World Championships in Athletics</strong>, under the auspices of the International Association of Athletics Federations (IAAF), were held at Nagai Stadium in Osaka, Japan from 24 August to 2 September 2007. 200 of the IAAF's 212 member federations entered a total of 1,978 athletes, the greatest number of competitors at any World Championships to date.</p>

                @include('partials/racewalking/link_results', [ 'results_year' => '2007'])

            <h4 class="mb-2">20 Km Walk Men</h4>
                <p class="text-xs">After having led for most of the way, Italy's Ivano Brugnetti was disqualified after 12 km. Fernández was disqualified after having lifted inside the stadium, to overtake Ghoula metres before the line and fourth-place Eder Sánchez was awarded the bronze. However, the Spaniard was later reinstated. This was world record-holder Pérez's third straight title. </p>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD"><a href="http://en.WikipediA.org/wiki/Jefferson_Pe%CC%81rez" target="_blank">Jefferson P&eacute;rez @svg('link')</a> ECU 1:22:20</li>
                    <li class="SILVER">Francisco Javier Fern&aacute;ndez ESP 1:22:40</li>
                    <li class="BRONZE">Hatem Ghoula ITA TUN 1:22:40</li>
                </ul>
            <h4 class="mb-2">50 Km Walk Men</h4>
                <p class="text-xs">China's Yu Chaohong took an early lead in hot conditions, but was overtaken before the halfway mark by the leading group. Nathan Deakes broke away from the leading group around the 35 km mark and was never headed to secure the global title and add to the 50 km world record he set 10 months earlier. Deakes slowed in the final kilometre looking for family lining the route and to savour the win. </p>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Nathan Deakes AUS 3:43:53 (SB)</li>
                    <li class="SILVER"><a href="//en.wikipedia.org/wiki/Yohann_Diniz">Yohan Diniz @svg('link')</a> FRA 3:44:22 (SB)</li>
                    <li class="BRONZE">Alex Schwazer ITA 3:44:38</li>
                </ul>
            <h4 class="mb-2">20 Km Walk Women</h4>
                <p class="text-xs">Both Kaniskina and Shemyakina held on to their final places since they left the stadium for the first time, with the winner performing a very strong and consistent race. María Vasco raced from behind surpassing Tatyana Sibileva to prevent another Russian clean sweep.</p>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Olga Kaniskina RUS 1:30:09</li>
                    <li class="SILVER">Tatyana Shemyakina RUS 1:30:42</li>
                    <li class="BRONZE">Mar&iacute;a Vasco ESP 1:30:47</li>
                </ul>

            <img class="mx-auto h-24 my-8" src="/images/racewalking/wold_championship_logos/2007-Osaka.png" alt="195p-Osaka_2007.svg">
        </div>
        <div class="col-span-2 sm:col-span-1">
            <a name="2009Berlin"></a>
            <h2 class="mb-4">@svg('flags/de', 'border') 2009 Berlin</h2>
                <p class="text-sm">The <strong>12th IAAF World Championships in Athletics</strong> were held in Berlin, Germany from 15–23 August 2009. The majority of events took place in the Olympiastadion, while the marathon and racewalking events started and finished at the Brandenburg Gate. </p>

                <ul class="list-disc leading-normal | ml-12">
                    @include('partials/racewalking/link_results', [ 'results_year' => '2009'])
                    <li><a href="http://berlin.iaaf.org" target="_blank"><strong>berlin.iaaf.org</strong> @svg('link')</a></li>
                    <li><a href="http://berlin.iaaf.org/results/index.html" target="_blank"><strong>Complete Results</strong> @svg('link')</a></li>
                </ul>

            <h4 class="mb-2">20 Km Walk Men</h4>
                <p class="text-sm italic">Original Gold medalist stripped of result.</p>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Hao Wang CHN 1:19:06 (PB)</li>
                    <li class="SILVER">Eder S&aacute;nchez MEX 1:19:22 (SB)</li>
                    <li class="BRONZE">Giorgio Rubino ITL 1:19:50</li>
                </ul>
            <h4 class="mb-2">50 Km Walk Men</h4>
                <p class="text-sm italic">Original Gold medalist stripped of result.</p>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Trond Nymark NOR 3:41:16 (NR))</li>
                    <li class="SILVER">Jes&uacute;s Angel Garc&iacute;a ESP 3:41:37 (SB)</li>
                    <li class="BRONZE">Grzegorz Sudoł POL 3:43:34 (PB)</li>
                </ul>
            <h3 class="mb-4">20 Km Walk Women</h4>
                <p class="text-sm italic">Original Gold medalist stripped of result.</p>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Olive Loughnane IRL 1:28:58(SB)</li>
                    <li class="SILVER">Hong Liu CHN 1:29:10 (SB</li>
                    <li class="BRONZE">Anisya Kirdyapkina RUS 1:30:09</li>
                </ul>

            <img class="mx-auto h-24 my-8" src="/images/racewalking/wold_championship_logos/2009-Berlin.png" alt="240p-2009_World_Championships_in_Athletics_logo.svg">
        </div>
    </div>
</x-card>

<!-- 2011 Daegu, South Korea - 2013 Moscow, Russia -->
<x-card class="card-racewalk" nav=true>
    <div class="grid grid-cols-2 gap-8">
        <div class="col-span-2 sm:col-span-1">
            <a name="2011Daegu"></a>
            <h2 class="mb-4">@svg('flags/kr', 'border') 2011 Daegu, South Korea</h2>
                <p class="text-sm">The 13th IAAF World Championships in Athletics was an international athletics competition that was held in Daegu, South Korea. It started on 27 August 2011 and finished on 4 September 2011. </p>

                @include('partials/racewalking/link_results', [ 'results_year' => '2011'])

            <h4 class="mb-2">20 Km Walk Men</h4>
                <ul class="text-xs leading-loose ml-12">
                    <li class="GOLD">Luis Fernando López COL 1:20:38</li>
                    <li class="SILVER">Wang Zhen CHN 1:20:54</li>
                    <li class="BRONZE">Kim Hyun-sub KOR 1:1:17</li>
                </ul>
                <ul class="text-xs leading-loose">
                    <li>23. Trevor Barron, USA, 1:24:33</li>
                </ul>
              <h4 class="mb-2">50 Km Walk Men</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD"><strike> Sergey Bakulin RUS 3:41:24</strike> DSQ for doping offense.</li>
                    <li class="GOLD">Denis Nizhegorodov RUS 3:42:45 (SB)</li>
                    <li class="SILVER">Jared Tallent AUS 3:43:36 (SB)</li>
                    <li class="BRONZE">Si Tianfeng CHN 3:44:40</li>
                </ul>
              <h4 class="mb-2">20 Km Walk Women</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Liu Hong TUN 1:30:00</li>
                    <li class="SILVER">Elisa Rigaudo ITA 1:30:44</li>
                    <li class="BRONZE">Qieyang Shenjie CHN 1:31:14</li>
                </ul>
                {{-- <ol start="30">
                    <li>Maria Michta, USA, 1:38:</li>
                </ul> --}}

                <img class="mx-auto h-24 my-8" src="/images/racewalking/wold_championship_logos/2011-Daegu.png" alt="2011_iaaf_world_champs_logo">
        </div>
        <div class="col-span-2 sm:col-span-1">
            <a name="2013Moscow"></a>
            <h2 class="mb-4">@svg('flags/ru', 'border') 2013 Moscow, Russia</h2>
                <p class="text-sm">The <strong>14th IAAF World Championships in Athletics</strong> (Moscow 2013) was an international athletics competition held in Moscow, Russia, from 10–18 August 2013. Initially, Russia won the most gold medals to top the table for the first time since 2001. It was also the first time ever the host nation took the top of the medal table. However, after disqualification of Russian sprinter Antonina Krivoshapka for doping and following redistribution of medals in the Women's 4 × 400 metres relay (as well as after series of other disqualifications of Russian athletes for doping offences), United States topped the medal table with eight golds. In the overall medal count, the United States won 26 medals in total, followed by Kenya with 12. With 1,784 athletes from 203 countries it was the biggest single sports event of the year. The number of spectators for the evening sessions was 268,548 surpassing Daegu 2011.</p>

            <ul class="list-disc leading-normal | ml-12">
                @include('partials/racewalking/link_results', [ 'results_year' => '2013'])
                <li><a href="http://www.mos2013.ru/en/" target="_blank"><strong>Championships' Official site</strong> @svg('link')</a></li>
                <li ><a href="http://en.wikipedia.org/wiki/2013_World_Championships_in_Athletics" target="_blank"><strong>Championships' web site</strong> @svg('link')</a></li>
                <li><a href="http://www.iaaf.org/competitions/iaaf-world-championships/14th-iaaf-world-championships-4873/timetable/byday"  target="_blank"><strong>Complete Results by Day</strong> @svg('link')</a></li>
            </ul>

           <h4 class="mb-2">20 Km Walk Men ( Day 2, 11 AUG 2013)</h4>
                <p class="text-sm italic">Original Gold medalist stripped of result.</p>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Ding CHEN CHN 1:21:09 (SB)</li>
                    <li class="SILVER">Miguel &Aacute;ngel L&Oacute;PEZ ESP 1:21:21 (SB)</li>
                    <li class="SILVER">João Vieira POR 1:22:05</li>
                </ul>

            <h4 class="mb-2">50 Km Walk Men ( Day 5, 14 AUG 2013)</h4>
                <p class="text-sm italic">Original Gold medalist stripped of result.</p>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Robert HEFFERNAN IRL 3:37:56 WL</li>
                    <li class="SILVER">Jared TALLENT AUS 3:40:03 SB</li>
                    <li class="BRONZE">Ihor Hlavan UKR 3:40:39</li>
                </ul>

            <h4 class="mb-2">20 Km Walk Women ( Day 4, 13 AUG)</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                <p class="text-sm italic">Original Silver medalist stripped of result.</p>
                    <li class="GOLD">Elena LASHMANOVA RUS 1:27:08</li>
                    <li class="SILVER"><a href="//en.wikipedia.org/wiki/Liu_Hong_(racewalker)" target="_blank">Hong Lui @svg('link')</a> CHN 1:28:10</li>
                    <li class="BRONZE">Sun Huanhuan CHN 1:28:32</li>
                </ul>

                <img class="mx-auto h-24 my-8" src="/images/racewalking/wold_championship_logos/2013-Moscow.png" alt="2013_World_Championships_in_Athletics_logo">
        </div>
    </div>
</x-card>

<!-- 2015 Beijing, China - 2017 London, United Kingdom -->
<x-card class="card-racewalk" nav=true>
    <div class="grid grid-cols-2 gap-8">
        <div class="col-span-2 sm:col-span-1">
            <a name="2015Beijing"></a>
            <h2 class="mb-4">@svg('flags/cn', 'border') 2015 Beijing, China</h2>
                <p class="text-sm">The <strong>2015 IAAF World Championships</strong> (Chinese: 第十五届世界田径锦标赛), the fifteenth edition of the IAAF World Championships, were held from 22 to 30 August at the National Stadium in Beijing, China. Forty-three nations won medals, 144 of which were awarded. Kenya topped the medal table for the first time, with 7 gold, 6 silver and 3 bronze medals. The United States won 18 medals, six gold, six silver and six bronze, which was the highest tally. Host nation China, finished 11th on the medals table, while Russia finished ninth.</p>

                @include('partials/racewalking/link_results', [ 'results_year' => '2015'])

                <h4>YouTube Videos of the Races @svg('brands/youtube', 'text-youtube')</h4>
                <ul class="list-disc leading-normal">
                <x-ui.list>
                    <li><a href="//youtu.be/nSN6InUtD9k" target="_blank"><strong>Men's 20km Race Walk | World Athletics Championships Beijing 2015</strong> @svg('brands/youtube', 'text-youtube')@svg('link')</a></li>
                </x-ui.list>

            <h4 class="mb-0">20 Km Walk Men</h4>
                <p class="text-xs text-grey-500 mt-0">Qualifying Time: 1:25:000</p>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Miguel Ángel López ESP 1:19:14 PB</li>
                    <li class="SILVER">Wang Zhen CHN 1:19:29</li>
                    <li class="BRONZE">Benjamin Thorne CAN 1:19:57 NR</li>
                    <li><a class="text-grey-500 italic" href="//en.wikipedia.org/wiki/2015_World_Championships_in_Athletics_%E2%80%93_Men%27s_20_kilometres_walk" target="_blank">Complete Results @svg('link')</a></li>
                </ul>
            <h4 class="mb-0">50 Km Walk Men</h4>
                <p class="text-xs text-grey-500 mt-0">Qualifying Time: 4:06:00</p>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Matej Tóth SVK 3:40:32</li>
                    <li class="SILVER">Jared Tallent AUS 3:42:17</li>
                    <li class="BRONZE">Takayuki Tanii JPN 3:42:55</li>
                    <li><a class="text-grey-500 italic" href="//en.wikipedia.org/wiki/2015_World_Championships_in_Athletics_%E2%80%93_Men%27s_50_kilometres_walk" target="_blank">Complete Results @svg('link')</a></li>
                </ul>
              <h4 class="mb-2">20 Km Walk Women</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD"><a href="//en.wikipedia.org/wiki/Liu_Hong_(racewalker)" target="_blank">Hong Lui @svg('link')</a> CHN 1:27:45</li>
                    <li class="SILVER">Lü Xiuzhi CHN 1:27:45</li>
                    <li class="BRONZE">Lyudmyla Olyanovska UKR 1:28:13</li>
                    <li><a class="text-grey-500 italic" href="//en.wikipedia.org/wiki/2015_World_Championships_in_Athletics_%E2%80%93_Women%27s_20_kilometres_walk" target="_blank">Complete Results @svg('link')</a></li>
                </ul>

                <h4>USA Walkers</h4>
                <ul class="text-xs leading-loose">
                    <li class="">20. Maria Michta-Coffey 1:33:24</li>
                    <li class="">26. Miranda Melville 1:19:24</li>
                </ul>

            <img class="mx-auto h-24 my-8" src="/images/racewalking/wold_championship_logos/2015-Beijing.png" alt="200p-Beijing2015Bid-1">
        </div>
        <div class="col-span-2 sm:col-span-1">
            <a name="2017London"></a>
            <h2 class="mb-4">@svg('flags/gb-eng', 'border') 2017 London, United Kingdom</h2>
                <p class="text-sm">The <strong>2017 IAAF World Championships</strong>, the sixteenth edition of the IAAF World Championships, were held from 4 to 13 August at London Stadium in London, UK. London was officially awarded the championships on 11 November 2011.</p>

                @include('partials/racewalking/link_results', [ 'results_year' => '2017'])

          <h4>YouTube Videos of Races @svg('brands/youtube', 'text-youtube')</h4>
          <ul class="list-disc leading-normal">
              <li><a href="//youtu.be/2FIyxl_I__Q" target="_blank"><strong>50km Race Walk Finals | IAAF World Championships London 2017 @svg('brands/youtube', 'text-youtube') @svg('link')</strong></a></li>
          </ul>

           <h4 class="mb-2">20 Km Walk Men</h4>
                <p class="text-xs">As is typical, this race started off as a pack. By 5K, the pack still numbered 32, exactly half the starters, walking a leisurely (for them) 19:54. The second 5K was exactly the same, passed in 39:48 but the pack had worn down to 17. British champion, walking before the home crowd, accelerated the pace, dropping many off the pack. But out in front, Bosworth was given more scrutiny and earned the deadly red card disqualifying him from the race. By 15K in 59:33 (19:45), the pack was down to eight and defending champion Miguel Ángel López (Spain) was no longer one of them. Rallying from a 23 second deficit at 10K, South African Lebogang Shange came back to the group as others dropped off. By the last 2K loop, the leaders Éider Arévalo (Colombia) and Sergey Shirobokov, an Authorised Neutral Athlete were in racewalking's version of a sprint finish, dropping Shange, Christopher Linke (Germany), Dane Bird-Smith (Australia), Wang Kaihua (China) and Caio Bonfim (Brazil) to fight for bronze. Arévalo broke the race open enough to get a Colombian flag from the audience, holding it around his neck as he made sure he had enough of a gap on Shirobokov, then crossing the finish line with the flag held high two seconds ahead. 9 second behind them, Bonfim had broken away from Shange to secure bronze. Arévalo, Bonfim and Shange all set national records.</p>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Eider AR&Eacute;VALO   COL 1:18:53 NR</li>
                    <li class="SILVER">Sergei SHIROBOKOV   ANA 1:18:55</li>
                    <li class="BRONZE">Caio BONFIM BRA BRA</li>
                    <li><a class="text-grey-500 italic" href="//en.wikipedia.org/wiki/2017_World_Championships_in_Athletics_%E2%80%93_Men%27s_20_kilometres_walk" target="_blank">Complete Results @svg('link')</a></li>
                </ul>
            <h4 class="mb-2">50 Km Walk Men</h4>
                <p class="text-xs">Four days before the event, three time World Championship medallist, Australia's Jared Tallent was forced to withdraw from the event due to a hamstring injury. From the start, world record holder, 39 year old Yohann Diniz (FRA) walked with a sense of purpose. Save a silver medal in 2007, the World Championships had resulted in disqualifications and failure for him as had the Olympics. On this course in 2012, Diniz became disoriented and was left by the lead pack lying on the ground after he tripped over a barricade. /p>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD"><a href="//en.wikipedia.org/wiki/Yohann_Diniz">Yohan Diniz @svg('link')</a> FRA 3:33:12 CR</li>
                    <li class="SILVER">Hirooki ARAI JPN 3:41:17 SB</li>
                    <li class="BRONZE">Kai KOBAYASHI JPN 3:41:19 PB</li>
                    <li><a class="text-grey-500 italic" href="//en.wikipedia.org/wiki/2017_World_Championships_in_Athletics_%E2%80%93_Men%27s_50_kilometres_walk" target="_blank">Complete Results @svg('link')</a></li>
                </ul>
           <h4 class="mb-2">20 Km Walk Women</h4>
                <p class="text-xs">Defending champion, Olympic champion and defending champion <a href="//en.wikipedia.org/wiki/Liu_Hong_(racewalker)" target="_blank">Hong Lui @svg('link')</a> was absent. Still the race started faster than the Olympics. A pack of 20 formed on the front. That pack was whittled down to 10 by the halfway point. After Kimberly García (Peru) fell off the pace, the group was reduced to just five by the 12-kilometre mark: two Chinese, Yang Jiayu and Lü Xiuzhi; María Guadalupe González (Mexico); Antonella Palmisano (Italy); and Erica de Sena (Brazil).[3] de Sena fell off the pace when the other four accelerated the pace at 16K. Another lap later, Palmisano couldn't handle the pace which looked like the break for the three medalists. Yang didn't have the same awards, but she was leading the group with the Olympic silver and bronze medalists.</p>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Jiayu YANG  CHN 1:26:18 PB</li>
                    <li class="SILVER">Lupita González  MEX 1:26:19 SB</li>
                    <li class="BRONZE">Antonella PALMISANO ITA 1:26:36 PB</li>
                    <li><a class="text-grey-500 italic" href="//en.wikipedia.org/wiki/2017_World_Championships_in_Athletics_%E2%80%93_Women%27s_20_kilometres_walk" target="_blank">Complete Results @svg('link')</a></li>
                </ul>
            <h4 class="mb-0">50 Km Walk Women</h4>
                <p class="text-xs text-grey-500 mt-0">Qualifying Time: 4:30:00</p>

                <p class="text-xs">This was the first time women were offered this event in the world championships, finally equalizing all events for both genders. Only seven women toed the start line. With the event in its infancy, Inês Henriques (POR) had set the world record in January.</p>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">In&ecirc;s HENRIQUES  POR 4:05:56 WR</li>
                    <li class="SILVER">Yin Hang CHN 4:08:58 AR</li>
                    <li class="BRONZE">Yang Shuqing CHN 4:20:49 (PB)</li>
                    <li><a class="text-grey-500 italic" href="//en.wikipedia.org/wiki/2017_World_Championships_in_Athletics_%E2%80%93_Women%27s_50_kilometres_walk" target="_blank">Complete Results @svg('link')</a></li>
                </ul>

                <h5>USA Walkers</h5>
                <ul class="text-xs leading-loose mt-0">
                    <li class="">4. Kathleen Burnett 4:21:51 (AR)</li>
                    <li class="">Susan Randall, DNF (Beyond time limit)</li>
                    <li class="">Erin Taylor-Talcott, DQ</li>
                </ul>

            <img class="mx-auto h-24 my-8" src="/images/racewalking/wold_championship_logos/2017-London.png" alt="200p-London_2017_World_Championships_in_Athletics-1">
        </div>
    </div>
</x-card>

<!-- 2019  Doha, Qatar - 2022  Eugene, Oregon, United States -->
<x-card class="card-racewalk" nav=true>
    <div class="grid grid-cols-2 gap-8">
        <div class="col-span-2 sm:col-span-1">
            <a name="2019Doha"></a>
            <h2 class="mb-4">@svg('flags/qa', 'border') 2019  Doha, Qatar</h2>
                <p class="text-sm">The <strong>2019 IAAF World Athletics Championships</strong> was the seventeenth edition of the biennial, global athletics competition organized by the International Association of Athletics Federations (IAAF), since renamed World Athletics. It was held between 27 September and 6 October 2019 in Doha, Qatar, at the renovated multi-purpose Khalifa International Stadium, but reduced to 21,000 available seats.</p>

                <p class="text-sm"><strong>NOTE:</strong> The Doha race, in Qatar was held in the evening after the sun went down and was still a survival race as the temperatures in the middle east can be brutal. This is the first 50K World Championship race that the winner did not break 4 hours.</p>

                @include('partials/racewalking/link_results', [ 'results_year' => '2019'])

            <h4>YouTube Videos of Three Races @svg('brands/youtube', 'text-youtube')</h4>
            <p class="text-sm">These are great videos to checkout. The temperatures in Dohar where 32°C 90°F for the Mens's 50km. AI'm sure they where not any better for the other races.</p>
            <ul class="list-disc text-xs leading-normal">
                <li><a href="//youtu.be/4fExcIaDMGU"><strong>Women's 20km Race Walk | World Athletics Championships Doha 2019 @svg('brands/youtube', 'text-youtube') @svg('link')</strong></a></li>
                <li><a href="//youtu.be/e74uZHbbmGQ"><strong>Men's 20km Race Walk | World Athletics Championships Doha 2019 @svg('brands/youtube', 'text-youtube') @svg('link')</strong></a></li>
                <li><a href="//youtu.be/Z3rzwdBiho4"><strong>50km Race Walk | World Athletics Championships Doha 2019 @svg('brands/youtube', 'text-youtube') @svg('link')</strong></a></li>
            </ul>

            <h4 class="mb-2">20 Km Walk Men</h4>
                <p class="text-sm">Full Results: <a href="//www.worldathletics.org/competitions/world-athletics-championships/iaaf-world-athletics-championships-doha-2019-6033/results/men/20-kilometres-race-walk/final/result#resultheader">20 Km Walk Men @svg('link')</a></p>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Toshikazu Yamanishi (JPN) 1:26.34</li>
                    <li class="SILVER">Vasiliy Mizinov (ANA*) 1:26.49</li>
                    <li class="BRONZE">Perseus Karlström (SWE) 1:27.00</li>
                    <li class=""><a class="text-grey-500 italic" href="//en.wikipedia.org/wiki/2019_World_Athletics_Championships_%E2%80%93_Men%27s_20_kilometres_walk" target="_blank">Complete Results @svg('link')</a></li>
                </ul>
                <p class="text-xs test-grey-500 italic">*<strong>ANA</strong> is Authorized Neutral Athletes. Athletes from banned countries allow to compete as <em>neutral</em></p>


            <h4 class="mb-2">50 Km Walk Men</h4>
                <p class="text-xs mx-4">This race marked the eleventh world championships for João Vieira, tying his contemporary teammate Susana Feitor for the second most. Feitor was only 16 at her first appearance, Vieira was 23 at his.

                <p class="text-xs mx-4">Based on the previous evening's marathon, the desert heat was going to affect the outcome. This race too started at midnight in order to avoid the heat of the day in Doha, that would mean temperatures hovered around 32°C 90°F throughout the race. Most walkers were wary of starting too fast, only 20K world record holder Yusuke Suzuki went out fast, opening up a gap just a few minutes into the race. <a href="//en.wikipedia.org/wiki/2019_World_Athletics_Championships_%E2%80%93_Men%27s_50_kilometres_walk"><span class="italic">more on WikipediA @svg('link')</span> </a></p>

                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Yusuke Suzuki (JPN) 4:04.20</li>
                    <li class="SILVER">Jo&atilde;o Vieira (POR) 4:04.59</li>
                    <li class="BRONZE"><a href="//en.wikipedia.org/wiki/Evan_Dunfee" target="_blank">Evan Dunfee @svg('link')</a> (CAN) 4:05.02</li>
                    <li class=""><a class="text-grey-500 italic" href="//www.worldathletics.org/competitions/world-athletics-championships/iaaf-world-athletics-championships-doha-2019-6033/results/men/50-kilometres-race-walk/final/result#resultheader" target="_blank">Complete Results @svg('link')</a></li>
                </ul>
              <h4 class="mb-2">20 Km Walk Women</h4>
                <p class="text-sm">Full Results: <a href="//www.worldathletics.org/competitions/world-athletics-championships/iaaf-world-athletics-championships-doha-2019-6033/results/women/20-kilometres-race-walk/final/result#resultheader">20 Km Walk Women @svg('link')</a></p>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD"><a href="//en.wikipedia.org/wiki/Liu_Hong_(racewalker)" target="_blank">Hong Lui @svg('link')</a> (CHN) 1:32.53</li>
                    <li class="SILVER">Qieyang Shenjie (CHN) 1:33.10</li>
                    <li class="BRONZE">Yang Liujing (CHN) 1:33.17</li>
                    <li class=""><a class="text-grey-500 italic" href="//en.wikipedia.org/wiki/2019_World_Athletics_Championships_%E2%80%93_Women%27s_20_kilometres_walk" target="_blank">Complete Results @svg('link')</a></li>
                </ul>

                <h4>USA Walkers</h4>
                    <ul class="text-xs leading-loose links-bold ml-12">
                        <li>35. Maria Michta-Coffey 1:46:02 (SB)</li>
                    </ul>

              <h4 class="mb-2">50 Km Walk Women</h4>
                <p class="text-sm">Full Results: <a href="//www.worldathletics.org/competitions/world-athletics-championships/iaaf-world-athletics-championships-doha-2019-6033/results/women/50-kilometres-race-walk/final/result#resultheader">50 Km Walk Women @svg('link')</a></p>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Liang Rui China (CHN) 4:23.26</li>
                    <li class="SILVER">Li Maocuo China (CHN) 4:26.40</li>
                    <li class="BRONZE">Eleonora Giorgi Italy (ITA) 4:29.13</li>
                    <li class=""><a class="text-grey-500 italic" href="//en.wikipedia.org/wiki/2019_World_Athletics_Championships_%E2%80%93_Women%27s_50_kilometres_walk" target="_blank">Complete Results @svg('link')</a></li>
                </ul>

                <h4>USA Walkers</h4>
                    <ul class="text-xs leading-loose links-bold ml-12">
                        <li>17. Katie Burnett 5:23:05</li>
                    </ul>

            <img class="mx-auto my-8" src="/images/racewalking/wold_championship_logos/2019-Doha.png" alt="2019-Doha">
        </div>
        <div class="col-span-2 sm:col-span-1">
            <a name="2022Eugene"></a>
            <h2 class="mb-4">@svg('flags/us', 'border') 2022 Eugene, Oregon, United States</h2>
                <p class="text-sm">The <strong>2022 World Athletics Championships</strong>, the eighteenth edition of the World Athletics Championships, are scheduled to be held in 2022 in Eugene, Oregon, United States. Originally scheduled to be held from August 6–15, 2021, after the postponement of the 2020 Summer Olympics, World Athletics raised the possibility of changing the date of the 2021 Championships, including the possibility of moving into 2022. On April 8, 2020, the World Athletics Championships announced that the event would take place from <strong>July 15–24, 2022</strong>.</p>

                <p class="text-sm"><strong>Venue:</strong> The championships will be held at the newly renovated University of Oregon Hayward Field in Eugene, Oregon, which has a capacity of 30,000 and hosted the 2021 NCAA Division I Outdoor Track and Field Championships and 2020 United States Track and Field Olympic Trials.</p>

                @include('partials/racewalking/link_results', [ 'results_year' => '2022'])

           <h4 class="mb- mt-6">20km Walk Men</h4>
           <p>Qualifying Standard: <strong>1:21:0</strong>. Being held Friday, 15 July 2022, 15:10 (PST).</p>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Toshikazu Yamanishi (JPN) 1:19.07 (SB)</li>
                    <li class="SILVER">Koki IKEDA (JPN) 1:19:14</li>
                    <li class="BRONZE">Perseus KARLSTRÖM (SWE) 1:19:18 (SB)</li>
                    <li class=""><a class="text-grey-500 italic" href="//www.worldathletics.org/competitions/world-athletics-championships/oregon22/results/men/20-kilometres-race-walk/final/result" target="_blank">Complete Results <x-ui.icons.link /></a></li>
                </ul>

                <h4>USA Walkers</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="">31. USA Nick CHRISTIE (USA) 1:28:28</li>
                    <li class="">43. Dan NEHNEVAJ (USA) 1:43:07</li>
                </ul>

           <h4 class="mb- mt-6">20km Walk Women</h4>
           <p>Qualifying Standard: <strong>1:31:0</strong>. Being held Friday, 15 July 2022, 13:10 (PST).</p>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Kimberly GARCÍA LEÓN (PER) 1:26:58 (NR)</li>
                    <li class="SILVER">Katarzyna ZDZIEBŁO POL 1:27:31 (NR)</li>
                    <li class="BRONZE">Shijie QIEYANG (CHN) 1:27:56</li>
                    <li class=""><a class="text-grey-500 italic" href="//www.worldathletics.org/competitions/world-athletics-championships/oregon22/results/women/20-kilometres-race-walk/final/result" target="_blank">Complete Results <x-ui.icons.link /></a></li>
                </ul>

                <h4>USA Walkers</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="">24. Robyn STEVENS (USA) 1:26:16</li>
                    <li class="">35. Miranda MELVILLE (USA) 1:39:58</li>
                </ul>

            <x-card class="bg-green-100 p-6 pb-0">
                <p class="text-sm text-green-700 font-bold">The International Olympic Committee is <a class="text-green-700" href="//www.corkathletics.org/news/1924-50km-race-walk-dropped-from-paris-2024.html" target="_blank">dropping the men's 50km walk from the Olympics and World Cup/World Championships program @svg('link')</a>. <a class="text-green-700" href="//www.corkathletics.org/news/1924-50km-race-walk-dropped-from-paris-2024.html" target="_blank">The 50km has been replaced with the 35km (21.1km) distance for the Olympics and World Cup/World Championships @svg('link')</a>.</p>
            </x-card>

            <h4 class="mb- mt-6">35km Walk Men</h4>
            <p>Qualifying Standard: <strong>2:33:00</strong> (3:50:00 for 50 km). Being held Sunday, 24 July 2022, 06:15 (PST).</p>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Massimo STANO (ITA) 2:23:14 (CR)</li>
                    <li class="SILVER">Masatora KAWANO (JPN) 2:23:15 (AR)</li>
                    <li class="BRONZE">Perseus KARLSTRÖM (SWE) 2:23:44 (PB)</li>
                </ul>
                <h4>USA Walkers</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="">36. USA Nick CHRISTIE (USA) 2:41:08 (SB)</li>
                </ul>

           <h4 class="mb- mt-6">35km Walk Women</h4>
           <p>Qualifying Standard: <strong>2:54:00</strong> (4:25:00 for 50 km). Being held Friday, 22 July 2022, 06:15 (PST).</p>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Kimberly GARCÍA LEÓN (PER) 2:39:16 (CR)</li>
                    <li class="SILVER">Katarzyna ZDZIEBŁO (POL) 2:40:03 PM</li>
                    <li class="BRONZE">Shijie QIEYANG (CHN) 2:40:37 AR</li>
                </ul>

                <h4>USA Walkers</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="">22. Maria MICHTA-COFFEY (USA) 2:58:51 (PB)</li>
                    <li class="">24. Stephanie CASEY (USA) 3:00:54 (PB)</li>
                    <li class="">29. Miranda MELVILLE (USA) 3:05:31</li>
                </ul>

            <img class="mx-auto my-8" src="/images/racewalking/wold_championship_logos/2021-Eugene.png" alt="2021-Eugene">
        </div>
    </div>
</x-card>

<!-- Budapest, Hungary, 2025 Touko, Japan  -->
<x-card class="card-racewalk" nav=true>
    <div class="grid grid-cols-2 gap-8">
        <div class="col-span-2 sm:col-span-1">
            <a name="2023Budapest"></a>
            <h2 class="mb-4">@svg('flags/hu', 'border') 2023  Budapest, Hungary</h2>
                <p class="text-sm">The <strong>2023 World Athletics Championships</strong>, the nineteenth edition of the World Athletics Championships, are scheduled to be held from 19 August to 27 August, 2023 in Budapest, Hungary.</p>

                @include('partials/racewalking/link_results', [ 'results_year' => '2023'])

           <h4 class="mb- mt-6">20km Walk Men </h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD"></li>
                    <li class="SILVER"></li>
                    <li class="BRONZE"></li>
                </ul>

           <h4 class="mb- mt-6">20km Walk Women</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD"></li>
                    <li class="SILVER"></li>
                    <li class="BRONZE"></li>
                </ul>

           <h4 class="mb- mt-6">35km Walk Men</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD"></li>
                    <li class="SILVER"></li>
                    <li class="BRONZE"></li>
                </ul>

           <h4 class="mb- mt-6">35km Walk Women</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD"></li>
                    <li class="SILVER"></li>
                    <li class="BRONZE"></li>
                </ul>
        </div>
        <div class="col-span-2 sm:col-span-1">
            <a name="2025Toyko"></a>
            <h2 class="mb-4"> 2025 Yoyko</h2>
                <p class="text-sm">The <strong>2025 World Athletics Championships</strong> will be the twentieth edition of the World Athletics Championships, and are scheduled to be held in Summer 2025 in Tokyo, Japan. The championships will use the National Stadium, rebuilt for the Tokyo 2020 Olympic and Paralympic Games.</p>
                <p class="text-sm">This is the third time that the championships will be held in Japan, following the 2007 event in Osaka, and the 1991 event in Tokyo at the same venue</p>

           <h4 class="mb- mt-6">20km Walk Men </h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD"></li>
                    <li class="SILVER"></li>
                    <li class="BRONZE"></li>
                </ul>

           <h4 class="mb- mt-6">20km Walk Women</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD"></li>
                    <li class="SILVER"></li>
                    <li class="BRONZE"></li>
                </ul>

           <h4 class="mb- mt-6">35km Walk Men</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD"></li>
                    <li class="SILVER"></li>
                    <li class="BRONZE"></li>
                </ul>

           <h4 class="mb- mt-6">35km Walk Women</h4>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD"></li>
                    <li class="SILVER"></li>
                    <li class="BRONZE"></li>
                </ul>        </div>
    </div>
</x-card>
