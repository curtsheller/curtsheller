<x-card class="card-racewalk">
    @include('partials/racewalking/medals_and_links')
</x-card>

@include('partials/racewalking/history_world_cup')

<x-card class="card-racewalk" nav=true>
    <h2>The World Athletics Race Walking Team Championships Results</h2>
    <p>From the <strong>Lugano Cup</strong> (1961) to <strong>IAAF World Race Walking Cup</strong> to (2016), and now the <strong>World Athletics Race Walking Team Championships</strong>.</p>
    <div class="grid grid-cols-2 gap-12 mt-6">
        <div class="col-span-2 sm:col-span-1">
            <ul class="list-none text-xs leading-loose ml-24">
                <li class="SUI"><a href="#1961-1963">1961 Lugano, Ticino, Switzerland (SUI) @svg('link')</a></li>
                <li class="ITA"><a href="#1961-1963">1963 Varese, Lombardy, Italy (ITA) @svg('link')</a></li>
                <li class="ITA"><a href="#1965-1967">1965 Pescara, Abruzzo, Italy (ITA) @svg('link')</a></li>
                <li class="GER"><a href="#1965-1967">1967 Bad Saarow, Bezirk Frankfurt (Oder), German Democratic Republic (GDR) @svg('link')</a></li>
                <li class="FRA"><a href="#1970-1973">1970 Eschborn, Hessen, Federal Republic of Germany (FRG) @svg('link')</a></li>
                <li class="SUI"><a href="#1970-1973">1973 Lugano, Ticino, Switzerland  (SUI) @svg('link')</a></li>
                <li class="FRA"><a href="#1975-1977">1975 Le Grand-Quevilly, Haute-Normandie, France France (FRA) @svg('link')</a></li>
                <li class="GBR"><a href="#1975-1977">1977 Milton Keynes, Buckinghamshire, United Kingdom (GBR) @svg('link')</a></li>
                <li class="FRA"><a href="#1979-1981">1979 Eschborn, Hessen, Federal Republic of Germany  (FRG) @svg('link')</a></li>
                <li class="ESP"><a href="#1979-1981">1981 Valencia, Valencia, Spain (ESP) @svg('link')</a></li>
                <li class="NOR"><a href="#1983-1985">1983 Bergen, Vestlandet, Norway (NOR) @svg('link')</a></li>
                <li class="GBR"><a href="#1983-1985">1985 St. John's, Isle of Man (GBR) @svg('link')</a></li>
                <li class="USA"><a href="#1987-1989">1987 New York City, New York, United States (USA) @svg('link')</a></li>
                <li class="ESP"><a href="#1987-1989">1989 L'Hospitalet, Catalunya, Spain Spain (ESP) @svg('link')</a></li>
            </ul>
        </div>
        <div class="col-span-2 sm:col-span-1">
            <ul class="list-none text-xs leading-loose mr-12">
                <li class="USA"><a href="#1991-1993">1991 San Jose, California, United States (USA) @svg('link')</a></li>
                <li class="MEX"><a href="#1991-1993">1993 Monterrey, Nuevo León, Mexico (MEX) @svg('link')</a></li>
                <li class="CHN"><a href="#1995-1997">1995 Beijing, China (CHN) @svg('link')</a></li>
                <li class="CZE"><a href="#1995-1997">1997 Poděbrady, Central Bohemia, Czech Republic (CZE) @svg('link')</a></li>
                <li class="FRA"><a href="#1999-2002">1999 Mézidon-Canon, Basse-Normandie, France (FRA) @svg('link')</a></li>
                <li class="ITA"><a href="#1999-2002">2002 Turin, Piemonte, Italy (ITA) @svg('link')</a></li>
                <li class="GER"><a href="#2004-2006">2004 Naumburg, Sachsen-Anhalt, Germany (GER) @svg('link')</a></li>
                <li class="ESP"><a href="#2004-2006">2006  A Coruña, Galicia, Spain (ESP) @svg('link')</a></li>
                <li class="RUS"><a href="#2008-2010">2008 Cheboksary, Chuvashia, Russia (RUS) @svg('link')</a></li>
                <li class="MEX"><a href="#2008-2010">2010 Chihuahua, Chihuahua, Mexico Mexico (MEX) @svg('link')</a></li>
                <li class="RUS"><a href="#2012-2014">2012 Saransk, Mordovia, Russia  (RUS) @svg('link')</a></li>
                <li class="CHN"><a href="#2012-2014">2014 Taicang, Jiangsu, China (CHN) @svg('link')</a></li>
                <li class="ITA"><a href="#2016">2016 Rome, Italy (ITA) @svg('link')</a></li>
                <li class="CHN"><a href="#2018">2018 Taicang, Jiangsu, China (CHN) @svg('link')</a></li>
                <li class="BEL"><a href="#2020">2020 <strike>Minsk,  Belarus (BEL)</strike> @svg('link')</a> &bull; Being Moved to 2022 - TBA</li>
                <li class="OMA"><a href="#2022">2022 Muscat, Oman @svg('link')</a> &bull; Moved from Minsk, Belarus (BEL), Postponed from 2020 (COVID-19) and finally held March 2022.</li>
                <li class="TUR"><a href="#2024">2024 Antalya, Turkiye (TUR) @svg('link')</a></li>
            </ul>
        </div>
    </div>
</x-card>

<div id="1961-1963">
    <x-card class="card-racewalk" nav=true>

        <div class="grid grid-cols-2 gap-8">
            <div class="col-span-1">
                <a name="1961"></a>
                <h2>
                    @svg('flags/ch', 'border') {{-- Switzerland --}}
                    1961 Lugano (SUI)
                </h2>
                    <p class="text-sm"><a href=//en.wikipedia.org/wiki/1961_IAAF_World_Race_Walking_Cup" target="_blank">The 1961 IAAF World Race Walking Cup @svg('link')</a> was held in Lugano, Ticino, Switzerland, on October 15–16, 1961. The event was also known as Lugano Trophy.</p>

                <h5>20 Km Walk Men</h5>
                    <ul class="text-xs leading-loose links-bold ml-12">
                        <li class="GOLD">Ken Matthews GBR 1:30:55</li>
                        <li class="SILVER">Lennart Back SWE 1:32:12</li>
                        <li class="BRONZE">George Williams GBR 1:34:02</li>
                    </ul>
                <h5>50 Km Walk Men</h5>
                    <ul class="text-xs leading-loose links-bold ml-12">
                      <li class="GOLD">Abdon Pamich ITA 4:25:38</li>
                        <li class="SILVER">Thompson GBR 4:30:35</li>
                        <li class="BRONZE">&Aring;ke S&ouml;derlund SWE 4:36:48</li>
                    </ul>
            </div>
            <div class="col-span-1">
                <a name="1963"></a>
                <h2>
                    @svg('flags/it', 'border')
                    1963 Varese (ITA)
                </h2>

                <p class="text-sm"><a href=//en.wikipedia.org/wiki/1963_IAAF_World_Race_Walking_Cup" target="_blank">The 1963 IAAF World Race Walking Cup @svg('link')</a> was held in Varese, Italy, on October 12–13, 1963.</p>

                 <h5>20 Km Walk Men</h5>
                    <ul class="text-xs leading-loose links-bold ml-12">
                        <li class="GOLD">Ken Matthews GBR 1:30:11</li>
                        <li class="SILVER">Paul Nihill GBR 1:33:19</li>
                        <li class="BRONZE">Antal Kiss HUN 1:33:38</li>
                    </ul>
                <h5>50 Km Walk Men</h5>
                    <ul class="text-xs leading-loose links-bold ml-12">
                        <li class="GOLD">Istv&aacute;n Havasi HUN 4:14:25</li>
                        <li class="SILVER">Ray Middleton GBR 4:17:16</li>
                        <li class="BRONZE">Ingvar Pettersson SWE 4:19:11</li>
                    </ul>
            </div>
        </div>

</x-card>

<div id="1965-1967">
    <x-card class="card-racewalk" nav=true>

        <div class="grid grid-cols-2 gap-8">
        <div class="col-span-1">
            <a name="1965"></a>
            <h2>
                @svg('flags/it', 'border')
                1965 Pescara (ITA)
            </h2>
                <p class="text-sm"><a href=//en.wikipedia.org/wiki/1965_IAAF_World_Race_Walking_Cup" target="_blank">The 1965 IAAF World Race Walking Cup @svg('link')</a> was held in Pescara, Italy, on October 9–10, 1965.</a></p>
            <h5>20 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Dieter Lindner GDR 1:28:10</li>
                    <li class="SILVER">Antal Kiss HUN 1:29:09</li>
                    <li class="BRONZE">Gerhard Sperling GDR 1:31:30</li>
                </ul>
            <h5>50 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Christoph H&ouml;hne GDR 4:03:14</li>
                    <li class="SILVER">Burkhard Leuschke GDR 4:06:02</li>
                    <li class="BRONZE">Abdon Pamich ITA 4:06:41</li>
                </ul>
        </div>
        <div class="col-span-1">
            <a name="1967"></a>
            <h2>
                @svg('flags/de', 'border')
                1967 Bad Saarow (GDR)
            </h2>
                <p class="text-sm"><a href=//en.wikipedia.org/wiki/1967_IAAF_World_Race_Walking_Cup" target="_blank">The 1967 IAAF World Race Walking Cup @svg('link')</a> was held in Bad Saarow, German Democratic Republic, on October 15, 1967</p>
             <h5>20 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Nikolay Smaga URS 1:28:39</li>
                    <li class="SILVER">Vladimir Golubnichiy URS 1:28:58</li>
                    <li class="BRONZE">Ron Laird USA 1:29:13</li>
                </ul>
             <h5>50 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Christoph H&ouml;hne GDR 4:09:09</li>
                    <li class="SILVER">Peter Selzer GDR 4:11:40</li>
                    <li class="BRONZE">Aleksandr Shcherbina URS 4:13:07</li>
                </ul>
        </div>
    </div>
</x-card>

<div id="1970-1973">
    <x-card class="card-racewalk" nav=true>

        <div class="grid grid-cols-2 gap-8">
        <div class="col-span-1">
            <a name="1970"></a>
            <h2>
                @svg('flags/fr', 'border')
                1970 Eschborn (FRA)
            </h2>
                <p class="text-sm"><a href=//en.wikipedia.org/wiki/1970_IAAF_World_Race_Walking_Cup" target="_blank">The 1970 IAAF World Race Walking Cup @svg('link')</a> was held in Eschborn, Federal Republic of Germany, on October 10, 1970</p>

            <h5>20 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Hans-Georg Reimann GDR 1:26:55</li>
                    <li class="SILVER">Vladimir Golubnichiy URS 1:27:22</li></li>
                    <li class="BRONZE">Peter Frenkel GDR 1:27:33</li>
                </ul>
            <h5>50 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Christoph H&ouml;hne GDR 4:04:36</li>
                    <li class="SILVER">Veniamin Soldatenko URS 4:09:52</li>
                    <li class="BRONZE">Burkhard Leuschke GDR 4:11:10</li>
                </ul>
        </div>
        <div class="col-span-1">
            <a name="1973"></a>
            <h2>
                @svg('flags/ch', 'border') {{-- Switzerland --}}
                1973 Lugano (SUI)
            </h2>
                <p class="text-sm"><a href=//en.wikipedia.org/wiki/1970_IAAF_World_Race_Walking_Cup" target="_blank">The 1973 IAAF World Race Walking Cup @svg('link')</a> was held in Lugano, Switzerland, on October 12–13, 1973</p>
                <h5>20 Km Walk Men</h5>
                    <ul class="text-xs leading-loose links-bold ml-12">
                        <li class="GOLD">Hans-Georg Reimann GDR 1:29:31</li>
                        <li class="SILVER">Karl-Heinz Stadtm&uuml;ller GDR 1:29:36</li></li>
                        <li class="BRONZE">Ron Laird USA 1:30:45</li>
                    </ul>
                <h5>50 Km Walk Men</h5>
                    <ul class="text-xs leading-loose links-bold ml-12">
                        <li class="GOLD">Bernd Kannenberg FRG 3:56:51</li>
                        <li class="SILVER">Otto Barch URS 3:57:11</li>
                        <li class="BRONZE">Christoph H&ouml;hne GDR 3:57:26</li>
                    </ul>
        </div>
    </div>
</x-card>

<div id="1977-1977">
    <x-card class="card-racewalk" nav=true>

        <div class="grid grid-cols-2 gap-8">
        <div class="col-span-1">
            <a name="1975"></a>
            <h2>
                @svg('flags/fr', 'border') {{-- Switzerland --}}
                1975 Grand-Quevilly (FRA)
            </h2>
                <p class="text-sm"><a href=//en.wikipedia.org/wiki/1975_IAAF_World_Race_Walking_Cup" target="_blank">The 1975 IAAF World Race Walking Cup @svg('link')</a> was held in Le Grand-Quevilly, France, on October 11–12, 1975. For the first time, there was a women's 5 km race held as invitation event</p>

            <h5>20 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Karl-Heinz Stadtm&uuml;ller GDR 1:26:12</li>
                    <li class="SILVER">Bernd Kannenberg FRG 1:26:20</li>
                    <li class="BRONZE">Peter Frenkel GDR 1:26:54</li>
                </ul>
            <h5>50 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Yevgeniy Lyungin URS 4:03:42</li>
                    <li class="SILVER">Gerhard Weidner FRG 4:09:58</li>
                    <li class="BRONZE">Vladimir Svetnikov URS 4:11:31</li>
                </ul>
        </div>
        <div class="col-span-1">
            <a name="1977"></a>
            <h2>
                @svg('flags/gb', 'border') {{-- Switzerland --}}
                1977 Milton Keynes (GBR)
            </h2>
                <p class="text-sm"><a href=//en.wikipedia.org/wiki/1977_IAAF_World_Race_Walking_Cup" target="_blank">The 1977 IAAF World Race Walking Cup @svg('link')</a> was held in Milton Keynes, United Kingdom, on 24–25 September 1977. For the first time, a new competition name IAAF Race Walking World Cup was introduced replacing the former Lugano Trophy. As in 1975, there was a women's 5 km race held as invitation event. Mexico was dominant in the men's events, taking the team title and the top two spots in the 20 km and 50 km events through Daniel Bautista, Domingo Colín, Raúl González and Pedro Aroche. Sweden's Siv Gustavsson won the invitational women's event</p>

            <h5>20 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Daniel Bautista MEX 1:24:02</li>
                    <li class="SILVER">Domingo Col&iacute;n MEX 1:24:31</li>
                    <li class="BRONZE">Karl-Heinz Stadtm&uuml;ller GDR 1:24:51</li>
                </ul>
            <h5>50 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Ra&uacute;l Gonz&aring;lez MEX 4:04:16</li>
                    <li class="SILVER">Pedro Aroche MEX 4:04:55</li>
                    <li class="BRONZE">Paolo Grecucci ITA 4:06:27</li>
                </ul>
        </div>
    </div>
</x-card>

<div id="1979-1981">
<x-card class="card-racewalk" nav=true>
    <div class="grid grid-cols-2 gap-8">
        <div class="col-span-1">
            <a name="1979"></a>
            <h2>
                @svg('flags/de', 'border')
                1979 Eschborn (GDR)
            </h2>
                <p class="text-sm"><a href=//en.wikipedia.org/wiki/1979_IAAF_World_Race_Walking_Cup" target="_blank">The 1979 IAAF World Race Walking Cup @svg('link')</a> was held in Eschborn, Federal Republic of Germany, on September 29–30, 1979. The event was also known as <b>IAAF Race Walking World Cup</b>. The women's 5 km race was now officially introduced into the competition with the women's teams competing for the Eschborn Cup</p>

            <h5>20 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Daniel Bautista MEX 1:18:49</li>
                    <li class="SILVER">Boris Yakovlev URS 1:19:46</li>
                    <li class="BRONZE">Nikolay Vinnichenko URS 1:20:05</li>
                </ul>
              <h5>50 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Mart&iacute;n Berm&uacute;dez MEX 3:43:36</li>
                    <li class="SILVER">Enrique Vera MEX 3:43:59</li>
                    <li class="BRONZE">Viktor Dorovskikh URS 3:45:51</li>
                </ul>
              <h5>5 Km Walk Women</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Marion Fawkes GBR 22:51</li>
                    <li class="SILVER">Carol Tyson GBR 22:59</li>
                    <li class="BRONZE">Thorill Gylder NOR 23:08</li>
                </ul>
        </div>
        <div class="col-span-1">
            <a name="1981"></a>
            <h2>
                @svg('flags/es', 'border')
                1981 Valencia (ESP)
            </h2>
                <p class="text-sm"><a href=//en.wikipedia.org/wiki/1981_IAAF_World_Race_Walking_Cup" target="_blank">The 1981 IAAF World Race Walking Cup @svg('link')</a> was held on 3 and 4 October 1981 in the streets of Valencia, Spain</p>

            <h5>20 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Ernesto Canto MEX 1:23:52</li>
                    <li class="SILVER">Roland Wieser GDR 1:24:12</li>
                    <li class="BRONZE">Alessandro Pezzatini ITA 1:24:24</li>
                    </ul>
              <h5>50 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Ra&uacute;l Gonz&aring;lez MEX 3:48:30</li>
                    <li class="SILVER"><a href="http://en.WikipediA.org/wiki/Hartwig_Gauder" target="_blank">Hartwig Guader</a> GDR 3:52:18</li>
                    <li class="BRONZE">Sandro Bellucci ITA 3:54:57</li>
                    </ul>
              <h5>5 Km Walk Women</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Siv Gustavsson SWE 22:57</li>
                    <li class="SILVER">Aleksandra Derevinskaya URS 23:18</li>
                    <li class="BRONZE">Lyudmila Khrushchova URS 23:26</li>
                </ul>
            </ul>
        </div>
    </div>
</x-card>
<!-- 1979 - 1981 -->

<div id="1983-1985">
<x-card class="card-racewalk" nav=true>
    <div class="grid grid-cols-2 gap-8">
        <div class="col-span-1">
            <a name="1983"></a>
            <h2>
                @svg('flags/no', 'border')
                1983 Bergen (NOR)
            </h2>

                <p class="text-sm"><a href=//en.wikipedia.org/wiki/1983_IAAF_World_Race_Walking_Cup" target="_blank">The 1983 IAAF World Race Walking Cup @svg('link')</a> was held on 24 and 25 September 1983 in the streets of Bergen, Norway</p>

                <h5>20 Km Walk Men</h5>
                    <ul class="text-xs leading-loose links-bold ml-12">
                        <li class="GOLD">Jozef Pribilinec TCH 1:19:30</li>
                        <li class="SILVER">Ernesto Canto MEX 1:19:41</li>
                        <li class="BRONZE">Anatoliy Solomin URS 1:19:43</li>
                    </ul>
                <h5>50 Km Walk Men</h5>
                    <ul class="text-xs leading-loose links-bold ml-12">
                        <li class="GOLD">Ra&uacute;l Gonz&aring;lez MEX 3:45:37</li>
                        <li class="SILVER">Sergey Yung URS 3:48:26</li>
                        <li class="BRONZE">Viktor Dorovskikh URS 3:49:47</li>
                    </ul>
                <h5>10 Km Walk Women</h5>
                    <ul class="text-xs leading-loose links-bold ml-12">
                        <li class="GOLD">Xu Yongjiu CHN 45:14</li>
                        <li class="SILVER">Natalya Sharipova URS 45:26</li>
                        <li class="BRONZE">Sue Cook AUS 45:27</li>
                    </ul>
            </ul>
        </div>
        <div class="col-span-1">
            <a name="1985"></a>
            <h2>
                @svg('flags/gb', 'border')
                1985 St. John's/Isle of Man (GBR)
            </h2>
                <p class="text-sm"><a href=//en.wikipedia.org/wiki/1983_IAAF_World_Race_Walking_Cup" target="_blank">The 1985 IAAF World Race Walking Cup @svg('link')</a> was held on 28 and 29 September 1985 in the streets of St John's, Isle of Man</p>

            <h5>20 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Jos&eacute; Mar&iacute;n ESP 1:21:42</li>
                    <li class="SILVER"><a href="http://en.WikipediA.org/wiki/Maurizio_Damilano" target="_blank">Maurizio Damilano</a> ITA 1:21:43</li>
                    <li class="BRONZE">Victor Mostovic URS 1:22:01</li>
                </ul>
             <h5>50 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD"><a href="http://en.WikipediA.org/wiki/Hartwig_Gauder" target="_blank">Hartwig Guader</a> GDR 3:47:31</li>
                    <li class="SILVER">Andrey Perlov URS 3:49:23</li>
                    <li class="BRONZE">Axel Noack GDR 3:56:53</li>
                </ul>
            <h5>10 Km Walk Women</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Yan Hong CHN 46:22</li>
                    <li class="SILVER">Guan Ping CHN 46:23</li>
                    <li class="BRONZE">Olga Krishtop URS 46:24</li>
                </ul>
        </div>
    </div>
</x-card>
<!-- 1983 - 1985 -->

<div id="1987-1989">
    <x-card class="card-racewalk" nav=true>

        <div class="grid grid-cols-2 gap-8">
        <div class="col-span-1">
            <a name="1987"></a>
            <h2>
                @svg('flags/us', 'border')
                1987 New York (USA)
            </h2>
                <p class="text-sm"><a href=//en.wikipedia.org/wiki/1987_IAAF_World_Race_Walking_Cup" target="_blank">The 1987 IAAF World Race Walking Cup @svg('link')</a> was held on 2 and 3 May 1987 in the streets of New York City, USA</p>

            <h5>20 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Carlos Mercenario MEX 1:19:24</li>
                    <li class="SILVER">Victor Mostovic URS 1:19:32</li>
                    <li class="BRONZE">Anatoliy Gorshkov URS 1:20:04</li>
                </ul>
             <h5>50 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD"><a href="http://en.WikipediA.org/wiki/Ronald_Weigel" target="_blank">Ronald Weigel</a> GDR 3:42:26</li>
                    <li class="SILVER"><a href="http://en.WikipediA.org/wiki/Hartwig_Gauder" target="_blank">Hartwig Guader</a> GDR 3:42:52</li>
                    <li class="BRONZE">Dietmar Meisch GDR 3:43:14</li>
                </ul>
            <h5>10 Km Walk Women</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Olga Krishtop URS 43:45</li></li>
                    <li class="SILVER">Irina Strakhova URS 43:35</li>
                    <li class="BRONZE">Jin Bingjie CHN 43:22</li>
                </ul>
        </div>
        <div class="col-span-1">
            <a name="1989"></a>
            <h2>
                @svg('flags/es', 'border')
                1989 L'Hospitalet (ESP)
            </h2>
                <p class="text-sm"><a href=//en.wikipedia.org/wiki/1989_IAAF_World_Race_Walking_Cup" target="_blank">The 1989 IAAF World Race Walking Cup @svg('link')</a> was held on 27 and 28 May 1989 in the streets of L'Hospitalet de Llobregat, suburb of Barcelona, Catalunya, Spain</p>

            <h5>20 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Frants Kostyukevich URS 1:20:21</li>
                    <li class="SILVER">Mikhail Shchennikov URS 1:20:34</li>
                    <li class="BRONZE">Yevgeniy Misyulya URS 1:20:47</li>
                </ul>
            <h5>50 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Simon Baker AUS 3:43:13</li>
                    <li class="SILVER">Andrey Perlov URS 3:44:12</li>
                    <li class="BRONZE">Stanislav Vezhel URS 3:44:50</li>
                </ul>
            <h5>10 Km Walk Women</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Beate Anders GDR 43:08</li>
                    <li class="SILVER">Kerry Saxby AUS 43:12</li>
                    <li class="BRONZE">Ileana Salvador ITA 43:24</li>
                </ul>
        </div>
    </div>
</x-card>
<!-- 1987 - 1989 -->

<div id="1991-1993">
    <x-card class="card-racewalk" nav=true>

        <div class="grid grid-cols-2 gap-8">
        <div class="col-span-1">
            <a name="1991"></a>
            <h2>
                @svg('flags/us', 'border')
                1991 San Jose (USA)
            </h2>
                <p class="text-sm"><a href=//en.wikipedia.org/wiki/1991_IAAF_World_Race_Walking_Cup" target="_blank">The 1991 IAAF World Race Walking Cup @svg('link')</a> was held on 1 and 2 June 1991 in the streets of San Jose, California, USA. The course followed a loop along Park Avenue and Almaden Boulevard, north and east of the intersection</p>

            <h5>20 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Mikhail Shchennikov URS 1:20:43</li>
                    <li class="SILVER">Ernesto Canto MEX 1:20:46</li>
                    <li class="BRONZE">Thierry Toutain FRA 1:20:56</li>
                    </ul>
             <h5>50 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Carlos Mercenario MEX 3:42:03</li>
                    <li class="SILVER">Simon Baker AUS 3:46:36</li>
                    <li class="BRONZE"><a href="http://en.WikipediA.org/wiki/Ronald_Weigel" target="_blank">Ronald Weigel</a> GER 3:47:50</li>
                </ul>
            <h5>10 Km Walk Women</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Irina Strakhova URS 43:55</li>
                    <li class="SILVER">Graciela Mendoza MEX 44:09</li>
                    <li class="BRONZE">Yelena Sayko URS 44:11</li>
                </ul>
        </div>
        <div class="col-span-1">
            <a name="1993"></a>
            <h2>
                @svg('flags/mx', 'border')
                1993 Monterrey (MEX)
            </h2>
                <p class="text-sm"><a href=//en.wikipedia.org/wiki/1993_IAAF_World_Race_Walking_Cup" target="_blank">The 1993 IAAF World Race Walking Cup @svg('link')</a> was held on 24 and 25 April 1993 in the streets of Monterrey, Mexico. For the first time, event specific team standings were introduced for the men's 20 km and 50 km competitions</p>

            <h5>20 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Daniel Garc&iacute;a MEX 1:24:26</li>
                    <li class="SILVER">Valent&iacute; Massana ESP 1:24:32</li>
                    <li class="BRONZE">Alberto Cruz MEX 1:24:37</li>
                    </ul>
            <h5>50 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Carlos Mercenario MEX 3:50:28</li>
                    <li class="SILVER">Jes&uacute;s &Aacute;ngel Garc&iacute;a ESP 3:39:54</li>
                    <li class="BRONZE">Germ&aacute;n S&aacute;nchez MEX 3:54:15</li>
                </ul>
            <h5>10 Km Walk Women</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Wang Yan CHN 45:10</li>
                    <li class="SILVER">Sari Essayah FIN 45:18</li>
                    <li class="BRONZE">Yelena Nikolayeva RUS 45:22</li>
                </ul>
        </div>
    </div>

</x-card>
<!-- 1991 - 1993 -->

<div id="1995-1997">
    <x-card class="card-racewalk" nav=true>

        <div class="grid grid-cols-2 gap-8">
        <div class="col-span-1">
            <a name="1995"></a>
            <h2>
                {{-- @svg('flags/cn', 'border') --}}
                1995 Beijing (CHN)
            </h2>
                <p class="text-sm"><a href=//en.wikipedia.org/wiki/1995_IAAF_World_Race_Walking_Cup" target="_blank">The 1995 IAAF World Race Walking Cup @svg('link')</a> was held on 29 and 30 April 1995 in the streets of Beijing, China</p>

            <h5>20 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Li Zewen  CHN   1:19:44</li>
                    <li class="SILVER">Mikhail Shchennikov  RUS    1:19:58</li>
                    <li class="BRONZE">Bernardo Segura  MEX    1:20:32</li>
                </ul>
            <h5>50 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Zhao Yongsheng CHN</li>
                    <li class="SILVER">Jes&uacute;s &Aacute;ngel Garc&iacute;a ESP 3:39:54</li>
                    <li class="BRONZE"> Valentin Kononen FIN
                </ul>
            <h5>10 Km Walk Women</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Gao Hongmiao CHN 42:19</li>
                    <li class="SILVER">Yelena Nikolayeva RUS 42:32</li>
                    <li class="BRONZE">Liu Hongyu CHN 42:49</li>
                </ul>
        </div>
        <div class="col-span-1">
            <a name="1997"></a>
            <h2>
                @svg('flags/cz', 'border')
                1997 Podebrady, (CZE)
            </h2>
                <p class="text-sm"><a href=//en.wikipedia.org/wiki/1997_IAAF_World_Race_Walking_Cup" target="_blank">The 1997 IAAF World Race Walking Cup @svg('link')</a> was held on 19 and 20 April 1997 in the streets of Poděbrady, Czech Republic. The course followed a loop around L&aacute;zeňsk&yacute; park</p>

            <h5>20 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD"><a href="http://en.WikipediA.org/wiki/Jefferson_Pe%CC%81rez" target="_blank">Jefferson P&eacute;rez</a> ECU ECU 1:18:24</li>
                    <li class="SILVER">Daniel Garc&iacute;a MEX 1:18:27</li>
                    <li class="BRONZE">Ilya Markov RUS 1:18:30</li>
                </ul>
              <h5>50 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Jes&uacute;s &Aacute;ngel Garc&iacute;a ESP 3:39:54</li>
                    <li class="SILVER">Nikolay Matyukhin RUS 3:40:08</li>
                    <li class="BRONZE">Valentin Kononen FIN 3:40:13 </li>
                </ul>
            <h5>10 Km Walk Women</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Irina Stankina RUS 41:52</li>
                    <li class="SILVER">Olimpiada Ivanova RUS 41:59</li>
                    <li class="BRONZE">Gu Yan CHN 42:15</li>
                </ul>
            </ul>
        </div>
    </div>

</x-card>
<!-- 1995 - 1997 -->

<div id="1999-2002">
    <x-card class="card-racewalk" nav=true>
        <div class="grid grid-cols-2 gap-8">
            <div class="col-span-1">
                <a name="1999"></a>
                <h2>
                    @svg('flags/fr', 'border')
                    1999 M&eacute;zidon-Canon, (FRA)
                </h2>
                    <p class="text-sm"><a href=//en.wikipedia.org/wiki/1999_IAAF_World_Race_Walking_Cup" target="_blank">The 1999 IAAF World Race Walking Cup @svg('link')</a> was held on 1 and 2 May 1999 in the streets of Mézidon-Canon, France. From this year on, there was no combined men's team trophy (Lugano Trophy), just the separate standings for the two races, and the women's team trophy was no longer called "Eschborn Cup" as before with their distance being increased from 10 km to 20 km</p>

                    <h5>20 Km Walk Men</h5>
                        <ul class="text-xs leading-loose links-bold ml-12">
                            <li class="GOLD">Bernardo Segura MEX 1:20:20</li>
                            <li class="SILVER">Yu Guohui CHN 1:20:21</li>
                            <li class="BRONZE">Vladimir Andreyev RUS 1:20:29</li>
                            <li class="BRONZE">Korzeniowsi Robert POL 1:20:52</li>
                        </ul>
                    <h5>50 Km Walk Men</h5>
                        <ul class="text-xs leading-loose links-bold ml-12">
                            <li class="GOLD">Sergey Korepanov KZK 3:39:22</li>
                            <li class="SILVER">Tomasz Lipiec POL 3:40:08&nbsp;&nbsp; 0:46</li>
                            <li class="BRONZE">Nikolay Matyukhin RUS 3:40:13&nbsp;&nbsp; 0:51</li>
                        </ul>
                    <h5>20 Km Walk Women</h5>
                        <ul class="text-xs leading-loose links-bold ml-12">
                            <li class="GOLD">Liu Hongyu CHN 1:27:32</li>
                            <li class="SILVER">Natalya Fedoskina RUS 1:27:35&nbsp;&nbsp; 0:03</li>
                            <li class="BRONZE">Norica C&icirc;mpean ROM 1:27:48&nbsp; 0:16</li>
                        </ul>
            </div>
            <div class="col-span-1">
                <a name="2002"></a>
                <h2>
                    @svg('flags/it', 'border')
                    2002 Turin, (ITA)
                </h2>
                    <p class="text-sm"><a href=//en.wikipedia.org/wiki/2002_IAAF_World_Race_Walking_Cup" target="_blank">The 2002 IAAF World Race Walking Cup @svg('link')</a> was held on 12 and 13 October 2002 in the streets of Turin, Italy</p>

                <h5>20 Km Walk Men</h5>
                    <ul class="text-xs leading-loose links-bold ml-12">
                        <li class="GOLD"><a href="http://en.WikipediA.org/wiki/Jefferson_Pe%CC%81rez" target="_blank">Jefferson P&eacute;rez</a> 1:21:26 Equador</li>
                        <li class="SILVER">Vladimir Andreyev 1:21:50 Russia</li>
                        <li class="BRONZE">Alejandro Lopez 1:22:01 Mexico</li>
                    </ul>
                <h5>50 Km Walk Men</h5>
                    <ul class="text-xs leading-loose links-bold ml-12">
                        <li class="GOLD">Aleksey Voyevodin 3:40:59 Russia</li>
                        <li class="SILVER">German Skurygin 3:42:08 Russia</li>
                        <li class="BRONZE">Tomasz Lipiec 3:45:37 Poland</li>
                    </ul>
                <h5>20 Km Walk Women</h5>
                    <ul class="text-xs leading-loose links-bold ml-12">
                        <li class="GOLD">Erica Alfridi 1:28:55 Italy</li>
                        <li class="SILVER">Olimpiada Ivanova 1:28:57 Russia</li>
                        <li class="BRONZE">Natalya Fedoskina 1:28:59 Russia</li>
                    </ul>
            </div>
        </div>
</x-card>

<div id="2004-2006">
    <x-card class="card-racewalk" nav=true>
        <div class="grid grid-cols-2 gap-8">
            <div class="col-span-1">
                <a name="2004"></a>
                <h2>
                    @svg('flags/de', 'border')
                    2004 Naumburg, (DEU)
                </h2>
                    <p class="text-sm"><a href=//en.wikipedia.org/wiki/2006_IAAF_World_Race_Walking_Cup" target="_blank">The 2004 IAAF World Race Walking Cup @svg('link')</a> was held on 1 and 2 May 2004 in the streets of Naumburg, Germany</p>
                    <p>A junior 10 Km for men and women is introduced.</p>

                <h5>10 Km Walk Men</h5>
                    <ul class="text-xs leading-loose links-bold ml-12">
                        <li class="GOLD">Sergey MOROZOV  RUS  40:26   CR</li>
                        <li class="SILVER">Miguel &Aacute;ngel L&Oacute;PEZ    ESP  41:41   PB</li>
                        <li class="BRONZE">Aleksey GRIGORYEV   RUS  41:52</li>
                    </ul>
                  <h5>20 Km Walk Men</h5>
                    <ul class="text-xs leading-loose links-bold ml-12">
                        <li class="GOLD"><a href="http://en.WikipediA.org/wiki/Jefferson_Pe%CC%81rez" target="_blank">Jefferson P&eacute;rez</a> ECU 1:18:42</li>
                        <li class="SILVER"><a href="http://en.WikipediA.org/wiki/Robert_Korzeniowski" target="_blank">Robert&nbsp;Korzeniowski</a> POL 1:19:02</li>
                        <li class="BRONZE">Nathan Deakes AUS 1:19:11</li>
                    </ul>
                  <h5>50 Km Walk Men</h5>
                    <ul class="text-xs leading-loose links-bold ml-12">
                        <li class="GOLD">Aleksey Voyevodin RUS 3:42:44</li>
                        <li class="SILVER">Yu Caohong CHN 3:43:47</li>
                        <li class="BRONZE">Yuriy Andronov RUS 3:46:49</li>
                    </ul>
                <h5>10 Km Walk Women</h5>
                    <ul class="text-xs leading-loose links-bold ml-12">
                        <li class="GOLD">Tatyana KALMYKOVA   RUS  42:44   CR</li>
                        <li class="SILVER">Irina YUMANOVA  RUS  43:23</li>
                        <li class="BRONZE">Elmira ALEMBEKOVA   RUS  44:39</li>
                    </ul>
                <h5>20 Km Walk Women</h5>
                    <ul class="text-xs leading-loose links-bold ml-12">
                        <li class="GOLD">Yelena Nikolayeva RUS 1:27:24</li>
                        <li class="SILVER">Jiang Jing CHN 1:27:34</li></li>
                        <li class="BRONZE">Mar&iacute;a Vasco ESP 1:27:36</li>
                    </ul>
                </ul>
            </div>
            <div class="col-span-1">
                <a name="2006"></a>
                <h2>
                    @svg('flags/es', 'border')
                    2006 La Coru&ntilde;a, (ESP)
                </h2>
                    <p class="text-sm"><a href=//en.wikipedia.org/wiki/2006_IAAF_World_Race_Walking_Cup" target="_blank">The 2006 IAAF World Race Walking Cup @svg('link')</a> was held on 13 and 14 May 2006 in the streets of A Coruña, Spain</p>

                <h5>10 Km Walk Men</h5>
                    <ul class="text-xs leading-loose links-bold ml-12">
                        <li class="GOLD">Sergey MOROZOV  RUS  40:26   CR</li>
                        <li class="SILVER">Miguel &Aacute;ngel L&Oacute;PEZ    ESP  41:41   PB</li>
                        <li class="BRONZE">Aleksey GRIGORYEV   RUS  41:52</li>
                    </ul>
                <h5>20 Km Walk Men</h5>
                    <ul class="text-xs leading-loose links-bold ml-12">
                        <li class="GOLD">Francisco Javier Fern&aacute;ndez ESP 1:18:31</li>
                        <li class="SILVER"><a href="http://en.WikipediA.org/wiki/Jefferson_Pe%CC%81rez" target="_blank">Jefferson P&eacute;rez</a> ECU</li> 1:19:08&nbsp;
                        <li class="BRONZE">Yucheng Han CHN 1:19:10</li>
                    </ul>
               <h5>50 Km Walk Men</h5>
                    <ul class="text-xs leading-loose links-bold ml-12">
                        <li class="GOLD">Denis Nizhegorodov RUS 3:38:02</li>
                        <li class="SILVER">Trond Nymark NOR 3:41:30</li>
                        <li class="BRONZE">Yuriy Andronov RUS 3:42:38</li>
                    </ul>
               <h5>10 Km Walk Women</h5>
                    <ul class="text-xs leading-loose links-bold ml-12">
                        <li class="GOLD">Tatyana KALMYKOVA   RUS  42:44   CR</li>
                        <li class="SILVER">Irina YUMANOVA  RUS  43:23/li>
                        <li class="BRONZE">Elmira ALEMBEKOVA   RUS  44:39</li>
                    </ul>
               <h5>20 Km Walk Women</h5>
                    <ul class="text-xs leading-loose links-bold ml-12">
                        <li class="GOLD">Ryta Turava BLR 1:26:27</li>
                        <li class="SILVER">Olimpiada Ivanova RUS 1:27:26</li>
                        <li class="BRONZE">Irina Petrova RUS 1:27:46</li>
                    </ul>
                </ul>
            </div>
        </div>
</x-card>
<!-- 2004 - 2006 -->

<div id="2008-2010">
    <x-card class="card-racewalk" nav=true>

        <div class="grid grid-cols-2 gap-8">
        <div class="col-span-1">
            <a name="2008"></a>
            <h2>
                @svg('flags/ru', 'border')
                2008 Cheboksary, (RUS)
            </h2>
                <p class="text-sm"><a href=//en.wikipedia.org/wiki/2006_IAAF_World_Race_Walking_Cup" target="_blank">The 2008 IAAF World Race Walking Cup @svg('link')</a> was held on 10 and 11 May 2008 in the streets of Cheboksary, Chuvashia, Russia</p>

            <h5>10 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Eider AR&Eacute;VALO    COL  42:13   NR</li>
                    <li class="SILVER">Zelin CAI   CHN  42:22   PB</li>
                    <li class="BRONZE">Valery FILIPCHUK    RUS  42:58</li>
                </ul>
            <h5>20 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Francisco Javier Fernández   ESP    1:18:15 (CR)</li>
                    <li class="SILVER">Valeriy Borchin  RUS    1:18:21</li>
                    <li class="BRONZE">Eder Sánchez     MEX    1:18:34 (PB)</li>
                </ul>
            <h5>50 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Denis Nizhegorodov   RUS    3:34:14 (WR)</li>
                    <li class="SILVER">Alex Schwazer    ITA    3:37:04 (SB)</li>
                    <li class="BRONZE">Trond Nymark     NOR    3:44:59 (SB)</li>
                </ul>
            <h5>10 Km Walk Women</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Tatyana KALMYKOVA   RUS  42:44   CR</li>
                    <li class="SILVER">Irina YUMANOVA  RUS  43:23</li>
                    <li class="BRONZE">Elmira ALEMBEKOVA   RUS  44:39</li>
                </ul>
            <h5>20 Km Walk Women</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">136 Olga Kaniskina   RUS    1:25:42 (CR)</li>
                    <li class="SILVER">Tatyana Sibileva     RUS    1:26:29</li>
                    <li class="BRONZE">124 Vera Santos  POR    1:28:17 (PB)</li>
                </ul>
            </ul>
        </div>
        <div class="col-span-1">
            <a name="2010"></a>
            <h2>
                @svg('flags/mx', 'border')
            </h2>
                <p class="text-sm"><a href=//en.wikipedia.org/wiki/2010_IAAF_World_Race_Walking_Cup" target="_blank">The 2010 IAAF World Race Walking Cup @svg('link')</a> was held on 15 and 16 May 2010 in the streets of Chihuahua, Mexico</p>

            <h5>10 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Eider AR&Eacute;VALO    COL  42:13   NR</li>
                    <li class="SILVER">Zelin CAI   CHN  42:22   PB</li>
                    <li class="BRONZE">Valery FILIPCHUK    RUS  42:58</li>
                </ul>
            <h5>20 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Hao Wang     CHN    1:22:35 (SB)</li>
                    <li class="SILVER">Yafei Zhu    CHN    1:22:46</li>
                    <li class="BRONZE">Andrey Krivov    RUS    1:22:54 (SB)</li>
                </ul>
            <h5>50 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Matej T&oacute;th SVK   3:53:30 (SB)</li>
                    <li class="SILVER">Horacio Nava MEX    3:54:16 (SB)</li>
                    <li class="BRONZE">Jared Tallent AUS   3:54:55 (SB</li>
                </ul>
            <h5>10 Km Walk Women</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Sandra ARENAS   COL  45:57</li>
                    <li class="SILVER">Alejandra ORTEGA    MEX  46:00   AJ</li>
                    <li class="BRONZE">Nadezhda LEONTYEVA  RUS  46:02</li>
                </ul>
            <h5>20 Km Walk Women</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">María Vasco  ESP    1:31:55</li>
                    <li class="SILVER">Vera Santos  POR    1:32:06</li>
                    <li class="BRONZE">Inês Henriques   POR    1:33:28</li>
                </ul>
        </div>
    </div>
</x-card>
<!-- 2008 - 2010 -->

<div id="2012-2014">
<x-card class="card-racewalk" nav=true>
    <div class="grid grid-cols-2 gap-8">
        <div class="col-span-1">
            <a name="2012"></a>
            <h2>
                @svg('flags/ru', 'border')
                2012 Saransk, (RUS)
            </h2>
                <p class="text-sm"><a href=//en.wikipedia.org/wiki/2012_IAAF_World_Race_Walking_Cup" target="_blank">The 2012 IAAF World Race Walking Cup @svg('link')</a> was held in Saransk, Russia, on 12–13 May 2012.[1] The track of the Cup runs in the central streets of the city</p>

           <h5>10 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Eider AR&Eacute;VALO    COL  41:17   SB</li>
                    <li class="SILVER">Alexander IVANOV    RUS  41:42</li>
                    <li class="BRONZE">Jes&uacute;s VEGA   MEX  41:56</li>
                </ul>
            <h5>20 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Zhen WANG   CHN  1:19:13</li>
                    <li class="SILVER">Andrey KRIVOV   RUS  1:19:27</li>
                    <li class="BRONZE">Vladimir KANAYKIN   RUS  1:19:43     SB</li>
                </ul>
              <h5>50 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Sergey KIRDYAPKIN   RUS  3:38:08     WL</li>
                    <li class="SILVER">Igor EROKHIN    RUS  3:38:10     SB</li>
                    <li class="BRONZE">Jared TALLENT   AUS  3:40:32     SB</li>
                </ul>
            <h5>10 Km Walk Women</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Sandra ARENAS   COL  45:57</li>
                    <li class="SILVER">Alejandra ORTEGA    MEX  46:00   AJ</li>
                    <li class="BRONZE">Nadezhda LEONTYEVA  RUS  46:02</li>
                </ul>
            <h5>20 Km Walk Women</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Elena LASHMANOVA    RUS  1:27:38</li>
                    <li class="SILVER">Olga KANISKINA  RUS  1:28:33 SB</li>
                    <li class="BRONZE">Mar&iacute;a Jos&eacute; POVES  ESP  1:29:10</li>
                </ul>
        </div>
        <div class="col-span-1">
            <a name="2014"></a>
            <h2>
                {{-- @svg('flags/cn', 'border') --}}
                2014 Taicang, (CHN)
            </h2>
                <p class="text-sm"><a href=//en.wikipedia.org/wiki/2014_IAAF_World_Race_Walking_Cup" target="_blank">The 2014 IAAF World Race Walking Cup @svg('link')</a> was held in Taicang, China, on 3–4 May 2014. The course was a 2 km loop along Shanghai Road between Banjing Road and Loujiang Road in the centre of the city. It has already been used for the annual IAAF World Race Walking Challenge event</p>

            <h5>10 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Wenkui GAO  CHNCHN   39:40   CR</li>
                    <li class="SILVER">Daisuke MATSUNAGA   JPNJPN   39:45   NJR</li>
                    <li class="BRONZE">Nikolay MARKOV  RUSRUS   39:55   PB</li>
                </ul>
              <h5>20 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Ruslan DMYTRENKO    UKRUKR   1:18:37     NR</li>
                    <li class="SILVER">Zelin CAI   CHNCHN   1:18:52     SB</li>
                    <li class="BRONZE">Andrey RUZAVIN  RUSRUS   1:18:59     SB</li>
                </ul>
              <h5>50 Km Walk Men</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Mikhail RYZHOV  RUSRUS   3:39:05     WL</li>
                    <li class="SILVER">Ivan NOSKOV RUSRUS   3:39:38     PB</li>
                    <li class="BRONZE">Jared TALLENT   AUSAUS   3:42:48     SB</li>
                </ul>
            <h5>10 Km Walk Women</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">DUAN    CHNCHN   43:05   WJL</li>
                    <li class="SILVER">Jiayu YANG  CHNCHN   43:37   PB</li>
                    <li class="BRONZE">Anežka DRAHOTOVÁ    CZECZE   43:40   NJR</li>
                </ul>
            <h5>20 Km Walk Women</h5>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Anisya KIRDYAPKINA  RUSRUS   1:26:31     WL</li>
                    <li class="SILVER">Hong LIU    CHNCHN   1:26:58     SB</li>
                    <li class="BRONZE">Elmira ALEMBEKOVA   RUSRUS   1:27:02     SB</li>
                </ul>
            </ul>
        </div>
    </div>
</x-card>
<!-- 2012 - 2014 -->

<a name="2016"></a>
<x-card class="card-racewalk" nav=true>
    <a name="2016"></a>
    <h2>
        @svg('flags/it', 'border')
        2016 Rome, Italy (ITA)
    </h2>
        <p class="text-sm">The 2016 Cup was due to be held in Cheboksary, Russia. However the IAAF's suspension of the All-Russia Athletic Federation prohibits Russia from hosting international competitions. This event was relocated.</p>

        <p class="text-sm"><a class="" href=//en.wikipedia.org/wiki/2014_IAAF_World_Race_Walking_Cup" target="_blank">The 2016 IAAF World Race Walking Team Championships @svg('link')</a> (Italian: Campionati del mondo a squadre di marcia 2016) was the 27th edition of the global team racewalking competition organized by the International Association of Athletics Federations. It was held in Rome, Italy from 7 to 8 May 2016. <b>This was the first edition of the tournament under its new name, having previously been known as the IAAF World Race Walking Cup since 1989.</b></p>

        <ul class="list-disc">
            <li><a href="http://www.iaaf.org/competitions/iaaf-world-race-walking-team-championships" target="_blank"><b>IAAF World Race Walking Team Championships</b> @svg('link')</a></li>
        </ul>

        <div class="grid grid-cols-2 gap-8">
            <div class="col-span-1">
                <h5 class="mt-2">10 Km Walk Men</h5>
                     <ul class="text-xs leading-loose links-bold ml-12">
                        <li class="GOLD">Jun ZHANG CHN 40:23</li>
                        <li class="SILVER">Manuel BERM&Uacute;DEZ ESP  40:27 PB</li>
                        <li class="BRONZE">Noel Al&iacute; CHAMA MEX 40:29</li>
                    </ul>
                <h5 class="mt-2">20 Km Walk Men</h5>
                     <ul class="text-xs leading-loose links-bold ml-12">
                        <li class="GOLD">Zhen WANG CHN 1:19:22</li>
                        <li class="SILVER">Zelin CAI CHN 1:19:34 SB</li>
                        <li class="BRONZE">&Aacute;lvaro MART&Iacute;N ESP 1:19:36 PB</li>
                    </ul>
                  <h5 class="mt-2">50 Km Walk Men</h5>
                     <ul class="text-xs leading-loose links-bold ml-12">
                        <li class="GOLD">Alex SCHWAZER ITA 3:39:00</li>
                        <li class="SILVER">Jared TALLENT AUS 3:42:36</li>
                        <li class="BRONZE">Igor GLAVAN UKR 3:44:02</li>
                    </ul>
            </div>
            <div class="col-span-1">
                <h5 class="mt-2">10 Km Walk Women</h5>
                     <ul class="text-xs leading-loose links-bold ml-12">
                        <li class="GOLD">Zhenxia MA CHN 45:25</li>
                        <li class="SILVER">Li MA CHN 45:25</li>
                        <li class="BRONZE">Valeria ORTU&Ntilde;O MEX</li>
                    </ul>
                <h5 class="mt-2">20 Km Walk Women</h5>
                     <ul class="text-xs leading-loose links-bold ml-12">
                        <li class="GOLD">Hong LIU CHN 1:25:59</li>
                        <li class="SILVER">Maria Guadalupe GONZ&Aacute;LEZ MEX 1:26:17 AR</li>
                        <li class="BRONZE">Shenjie QIEYANG CHN 1:26:49 SB</li>
                    </ul>
            </div>
        </div>
</x-card>

<a name="2018"></a>
<x-card class="card-racewalk" nav=true>
    <a name="2018"></a>
    <h2>
        {{-- @svg('flags/cn', 'border') --}}
        2018 Taicang, China (CHN)
    </h2>
        <p class="text-sm"><a class="" href=//en.wikipedia.org/wiki/2018_IAAF_World_Race_Walking_Cup" target="_blank">The 2018 IAAF World Race Walking Team Championships @svg('link')</a> was the 28th edition of the global team racewalking competition organized by the International Association of Athletics Federations.</p>

        <div class="grid grid-cols-2 gap-8">
            <div class="col-span-1">
                <h5 class="mt-2">10 Km Walk Men</h5>
                     <ul class="text-xs leading-loose links-bold ml-12">
                        <li class="GOLD">Yao Zhang CHN 40:07 NU20R</li>
                        <li class="SILVER">Zhaozhao Wang CHN 40:12 PB</li>
                        <li class="BRONZE">José Eduardo Ortiz GUA 40:17 NU20R</li>
                    </ul>

                  <h5 class="mt-2">20 Km Walk Men</h5>
                     <ul class="text-xs leading-loose links-bold ml-12">
                        <li class="GOLD">Koki Ikeda JPN 1:21:13</li>
                        <li class="SILVER">Kaihua Wang CHN 1:21:22</li>
                        <li class="BRONZE">Massimo Stano ITA 1:21:33</li>
                    </ul>

                  <h5 class="mt-2">50 Km Walk Men</h5>
                     <ul class="text-xs leading-loose links-bold ml-12">
                        <li class="GOLD">Hirooki Arai JPN 3:44:25 SB</li>
                        <li class="SILVER">Hayato Katsuki JPN 3:44:31 PB</li>
                        <li class="BRONZE">Satoshi Maruo JPN 3:44:52 SB</li>
                    </ul>
            </div>
            <div class="col-span-1">
                <h5 class="mt-2">10 Km Walk Women</h5>
                     <ul class="text-xs leading-loose links-bold ml-12">
                        <li class="GOLD">Alegna González MEX 45:08 AU20R</li>
                        <li class="SILVER">Glenda Morejón ECU 45:13</li>
                        <li class="BRONZE">Nanako Fujii JPN 45:29 PB</li>
                    </ul>

                  <h5 class="mt-2">20 Km Walk Women</h5>
                     <ul class="text-xs leading-loose links-bold ml-12">
                        <li class="GOLD">Maria Guadalupe González MEX 1:26:38 SB</li>
                        <li class="SILVER">Shijie Qieyang CHN 1:27:06 SB</li>
                        <li class="BRONZE">Jiayu Yang CHN 1:27:22 SB</li>
                    </ul>

                <h5 class="mt-2">50 Km Walk Women</h5>
                     <ul class="text-xs leading-loose links-bold ml-12">
                        <li class="GOLD">Rui Liang  CHN 4:04:36 WR</li>
                        <li class="SILVER">Hang Yin CHN 4:09:09 SB</li>
                        <li class="BRONZE">Claire Tallent AUS 4:09:33 AR</li>
                    </ul>
                </ul>
            </div>
        </div>
</x-card>

<a name="2022"></a>
<a name="2024"></a>
<x-card class="card-racewalk" nav=true>
    <div class="grid grid-cols-2 gap-8">
        <div class="col-span-1">
            <a name="2020"></a>
            <a name="2022"></a>
            <h2>
                @svg('flags/om', 'border')
                2022 Muscat, Oman</strike>
            </h2>

            <p class="text-sm">
                After a lot of movement and COVID-19 pandemic starting in 2020. The event, which was schedule to happen Belarus took place Marc 2022 in Muscat, Oman.
            </p>

            <h5 class="mt-2">10 Km Walk Women</h5>
                <p>Held: 04 Mar 2022</p>
                 <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Hongren WANG 44:06 (SB)</li>
                    <li class="SILVER">Diego GIAMPAOLO (ITA) 44:14</li>
                    <li class="BRONZE">Yu ZENG (CHN) 44:14 (SB)</li>
                    <li><a href=//www.worldathletics.org/competitions/world-athletics-race-walking-team-championshi/world-athletics-race-walking-team-championshi-7138851/results/men/10-kilometres-race-walk/final/team" target="_blank">Complete Results <x-ui.icons.link /></a></li>
                    <li><strong>Team Results:</strong> PR of China, Italy, Spain</li>
                </ul>

              <h5 class="mt-2">20 Km Walk Men</h5>
                <p>Held: 04 Mar 2022</p>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Zhenxia MA (CHN) 1:30:22</li>
                    <li class="SILVER">Jiayu YANG (CHN) 1:31:54</li>
                    <li class="BRONZE">Kimberly GARCÍA LEÓN (PER) 1:32:27</li>
                    <li><a href="//www.worldathletics.org/competitions/world-athletics-race-walking-team-championshi/world-athletics-race-walking-team-championshi-7138851/results/women/20-kilometres-race-walk/final/result" target="_blank">Complete Results <x-ui.icons.link /></a></li>
                    <li><strong>Team Results:</strong> PR of China, Greece, India</li>
                </ul>

              <h5 class="mt-2"35>35 Km Walk Men</h5>
                <p>Held: 05 Mar 2022</p>
                 <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Glenda MOREJÓN (ECU 2:48:33 (CR)</li>
                    <li class="SILVER">Maocuo LI (CHN) 2:50:26 (NR)</li>
                    <li class="BRONZE">Katarzyna ZDZIEBŁO (POL) 2:51:48 (SB)</li>
                    <li><a href="//www.worldathletics.org/competitions/world-athletics-race-walking-team-championshi/world-athletics-race-walking-team-championshi-7138851/results/women/35-kilometres-race-walk/final/result" target="_blank">Complete Results <x-ui.icons.link /></a></li>
                    <li><strong>Team Results:</strong> Ecuador, Spain, PR of China</li>
                </ul>
        </div>
        <div class="col-span-1">
            <h2>
                @svg('flags/tr', 'border')
                2024 Antalya, Turkiye</strike>
            </h2>

            <p class="text-sm">
                The 2024 IAAF World Race Walking Team Championships
            </p>

            <h5 class="mt-2">20 Km Walk Women</h5>
                <p>Held: 21 April 2024</p>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Erica SENA 44:06 (ESP) 1:27:12</li>
                    <li class="SILVER">Kimberly GARCÍA LEÓN (ESP) 1:27:55</li>
                    <li class="BRONZE">Zhenxia MA (CHN) 1:29:22</li>
                    <li><a href="https://worldathletics.org/competitions/world-athletics-race-walking-team-championshi/antalya-24/news/report/antalya-24-senior-women-20km-report" target="_blank">Complete Results <x-ui.icons.link /></a></li>
                    <li><strong>Team Results:</strong> China, Peru, Spain</li>
                </ul>

              <h5 class="mt-2">20 Km Walk Men</h5>
                <p>Held: 21 April 2024</p>
                <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Perseus KARLSTRÖM 1:18:49</li>
                    <li class="SILVER">Diego GARCÍA CARRERA (ESP) 1:19:14</li>
                    <li class="BRONZE">Paul MCGRATH (ESP) 1:19:54</li>
                    <li><a href="https://worldathletics.org/competitions/world-athletics-race-walking-team-championshi/antalya-24/results/women/20-kilometres-race-walk/final/team" target="_blank">Complete Results <x-ui.icons.link /></a></li>
                    <li><strong>Team Results:</strong> China, Peru, Spain</li>
                </ul>

              <h5 class="mt-2">Marathon Mixed Relay</h5>
                <p>Held: 21 April 2024</p>
                 <ul class="text-xs leading-loose links-bold ml-12">
                    <li class="GOLD">Italy 2 (Francesco Fortunato and Valentina Trapletti) (ITA) 2:56:45</li>
                    <li class="SILVER">Japan (Koki Ikeda and Kumiko Okada) (JPN) 2:57:04</li>
                    <li class="BRONZE">Spain (Alvaro Martin and Laura Garcia-Caro) (ESP) 2:57:47</li>
                    <li><a href="https://worldathletics.org/en/competitions/world-athletics-race-walking-team-championshi/antalya-24/results/mixed/marathon-race-walk-mixed-relay/final/result" target="_blank">Complete Results <x-ui.icons.link /></a></li>
                    <li><strong>Team Results:</strong> Italy, Japan, Spain</li>
                </ul>
        </div>
    </div>
</x-card>
