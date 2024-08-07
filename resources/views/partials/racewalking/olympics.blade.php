<x-card class="card-racewalk">
    @include('partials/racewalking/medals_and_links')
</x-card>

<x-card class="card-racewalk">
    <h2>In the Olympics Since the 1906 Athens Games</h2>
        <p class=""><strong>Walking</strong> as an Olympic event was introduced in the 1906 Athens games. The 1906 games where staged two years after the 1904 St Louis games and are considered the Interim games. A 1500 meter and 3,000 meter walk was held. In 1908 theses two walk were replaced with a 3500 meter walk as well as a 10 mile walk.</p>

        <p class="">1912 saw the 10,000 meter walk as the only walking event. In 1932 the Los Angeles games saw the 50 kilometer distance contested for the first time. It wasn't until the 1956 Melbourne games the the 20 kilometer was introduced. The 20 and 50 kilometer walks have been the two distance contested by the men in every Olympiad since Melbourne except when the 50k walk was the only walk in Montreal. A 10,000 meter women's walk was added in the Barcelona games for 1992. And moved up to the 20 km mark in the 2000 Olympics for the women.</p>

        <p class="text-sm"><strong>2021 Update</strong> - The <strong>2020/2021 Tokyo Olympics</strong> is the last year for the 50km Men's Walk and is being replaced with a 35km Walk for future Olympics and World Championships.</p>
</x-card>

<x-card class="card-racewalk">
    <h2 class="text-brand-500 | mb-0">Olympic Medalists and Records @svg('certificate', 'text-gold')
        @svg('medal', 'text-gold-500')
        @svg('medal', 'text-silver-500')
        @svg('medal', 'text-bronze-500')</h2>

    <div class="grid grid-cols-2 gap-8">
        <div class="col-span-1">
            <h3 class="text-secondary-500">Olympic Medalists</h2>
            <x-ui.list textSize="sm" leading="relaxed">
                <li><a href="http://en.wikipedia.org/wiki/List_of_Olympic_medalists_in_athletics_(men)#20_kilometres_walk" target="_blank">20km Men @svg('globe', 'text-gray-500') @svg('link')</a></li>
                <li><a href="http://en.wikipedia.org/wiki/List_of_Olympic_medalists_in_athletics_(men)#20_kilometres_walk" target="_blank">50km Men @svg('globe', 'text-gray-500') @svg('link')</a> * <span class="text-xs"><strong>2020</strong> is the last year the 50km is being contested as an Olympic event. It's being replaced but the 35km.</span></li>
                <li><a href="http://en.wikipedia.org/wiki/List_of_Olympic_medalists_in_athletics_(women)#20_kilometres_walk" target="_blank">20km Women @svg('globe', 'text-gray-500') @svg('link')</a></li>
                <li><a href="http://en.wikipedia.org/wiki/List_of_Olympic_medalists_in_athletics_(women)#10_kilometres_walk" target="_blank">10km Women @svg('globe', 'text-gray-500') @svg('link')</a> - <span class="text-xs">The 10km women's races was discontinued and replaced by the the 20km Walk at the 2000 Sydney games.</span></li>
            </x-ui.list>
        </div>
        <div class="col-span-1">
            <h3 class="text-secondary-500">Olympic Records - Men</h3>
                <x-ui.list textSize="sm" leading="relaxed">
                    <li class="POL"><strong>20 KILOMETRES WALK</strong> 1:18:59 <a href="http://en.WikipediA.org/wiki/Robert_Korzeniowski" target="_blank">Robert&nbsp;Korzeniowski @svg('link')</a>  POL Sydney Olympics September 22, 2000</li>
                    <li class="RUS"><strong>50 KILOMETRES WALK</strong> 3:38:29 <a href="http://en.WikipediA.org/wiki/Vyacheslav_Ivanenko" target="_blank">Vyacheslav Ivanenko @svg('link')</a> RUS at Seoul Olympics September 30, 1988</li>
                </x-ui.list>

            <h3 class="text-secondary-500">Olympic Records - Women</h3>
                <x-ui.list textSize="sm" leading="relaxed">
                    <li class="RUS">20 KILOMETRES WALK <strong>1:29:05</strong> <strong>Olga Kaniskina</strong> RUS at Beijing Olympics August 21, 2008</li>
                </x-ui.list>
        </div>
    </div>
</x-card>

<x-card id="Olympic-Standards" class="card-racewalk">
    <h2>2024 Olympic Entry Standards</h2>
    <p>A little early for the entry standards. Here, are the standards used for the 2024 Paris Olympics.</p>
    <div class="grid grid-cols-2 gap-8">
        <div class="col-span-1">
            <x-ui.list textSize="xs" leading="relaxed">
                <li>20 Km Walk &ndash; Men <strong>1:20:10</strong></li>
                <li>20 Km Walk &ndash; Women <strong>1:29:30 </strong></li>
            </x-ui.list>
        </div>
        <div class="col-span-1">
            <p class="text-sm text-grey-500">Automatic entry for IAAF World Championship medal winners from the previous championships and entry to fill x number for spots based on world standings.</p>
        </div>
    </div>
</x-card>

<div id="Olympic-Results">
    <x-card class="card-racewalk">
        <h2 class="">Olympic Results</h2>

        <div class="flex items-center justify-center space-x-4 my-4">
            @svg('certificate', 'icon-4x text-gold-500')
            @svg('certificate', 'icon-4x text-silver-500')
            @svg('certificate', 'icon-4x text-bronze-500')
        </div>

        <div class="grid grid-cols-3 gap-8">
            <div class="col-span-3 sm:col-span-1">
                <x-ui.list textSize="sm" leading="loose">
                    <li class="GRE"><a  class="" href="#1896-1900"><strong>1896</strong> Athens</a></li>
                    <li class="FRA"><a  class="" href="#1896-1900"><strong>1900</strong> Paris</a></li>
                    <li class="USA"><a  class="" href="#1904-1906"><strong>1904</strong> St. Louis</a></li>
                    <li class="GRE"><a  class="" href="#1904-1906"><strong>1906</strong> Athens</a></li>
                    <li class="GBR"><a  class="" href="#1908-1912"><strong>1908</strong> London</a></li>
                    <li class="SWE"><a  class="" href="#1908-1912"><strong>1912</strong> Stockholm</a></li>
                    <li class="NED"><a  class="" href="#1920-1924"><strong>1920</strong> Antwerp</a></li>
                    <li class="FRA"><a  class="" href="#1920-1924"><strong>1924</strong> Paris</a></li>
                    <li class="NED"><a  class="" href="#1928-1932"><strong>1928</strong> Amsterdam</a></li>
                    <li class="USA"><a  class="" href="#1928-1932"><strong>1932</strong> Los Angeles</a></li>
                    <li class="GER"><a  class="" href="#1936-1948"><strong>1936</strong> Berlin</a></li>
                </x-ui.list>
            </div>
            <div class="col-span-3 sm:col-span-1">
                <x-ui.list textSize="sm" leading="loose">
                    <li class="GBR"><a class="" href="#1936-1948"><strong>1948</strong> London</a></li>
                    <li class="SWE"><a class="" href="#1952-1956"><strong>1952</strong> Helsinki</a></li>
                    <li class="AUS"><a class="" href="#1952-1956"><strong>1956</strong> Melbourne</a></li>
                    <li class="ITA"><a class="" href="#1960-1964"><strong>1960</strong> Rome</a></li>
                    <li class="JPN"><a class="" href="#1960-1964"><strong>1964</strong> Tokyo</a></li>
                    <li class="MEX"><a class="" href="#1969-1972"><strong>1968</strong> Mexico City</a></li>
                    <li class="GER"><a class="" href="#1969-1972"><strong>1972</strong> Munich</a></li>
                    <li class="CAN"><a class="" href="#1976-1980"><strong>1976</strong> Montreal</a></li>
                    <li class="RUS"><a class="" href="#1976-1980"><strong>1980</strong> Moscow</a></li>
                    <li class="USA"><a class="" href="#1984-1988"><strong>1984</strong> Los Angeles</a></li>
                    <li class="KOR"><a class="" href="#1984-1988"><strong>1988</strong> Seoul</a></li>
                </x-ui.list>
            </div>
            <div class="col-span-3 sm:col-span-1">
                <x-ui.list textSize="sm" leading="loose">
                    <li class="ESP"><a class="" href="#1992-1996"><strong>1992</strong> Barcelona</a></li>
                    <li class="USA"><a class="" href="#1992-1996"><strong>1996</strong> Atlanta</a></li>
                    <li class="AUS"><a class="" href="#2000-2004"><strong>2000</strong> Sydney</a></li>
                    <li class="GRE"><a class="" href="#2000-2004"><strong>2004</strong> Athens</a></li>
                    <li class="CHN"><a class="" href="#2008-2012"><strong>2008</strong> Beijing</a></li>
                    <li class="GBR"><a class="" href="#2008-2012"><strong>2012</strong> London</a></li>
                    <li class="BRA"><a class="" href="#2016-2020"><strong>2016</strong> Rio de Janeiro</a></li>
                    <li class="JPN"><a class="" href="#2016-2020"><strong>2020</strong> (<em>Jul-Aug 2021</em>) Tokyo</a></li>
                    <li class="FRA">
                        <a class="" href="#2024-2028"><span class="text-xl font-display"><strong>2024</strong> Paris</span></a>
                    </li>
                    <li class="USA"><a class="" href="#2024-2028"><strong>2028</strong> Los Angeles</a></li>
                    <li class="AUS"><a class="" href="#2032-2036"><strong>2032</strong> Brisbande</a></li>
                </x-ui.list>
            </div>
        </div>
    </x-card>
</div>

<div id="1896-1900">
    <x-card class="card-racewalk" nav=true>
        <div class="grid grid-cols-2 gap-8">
            <div class="col-span-2 sm:col-span-1">
                <h2 class="">@svg('flags/gr', 'border') 1896 Athens</h2>
                <p class="text-sm">The <strong>1896 Summer Olympics</strong>, officially known as the Games of the I Olympiad, was a multi-sport event held in Athens, Greece, from 6 to 15 April 1896. It was the first international Olympic Games held in the Modern era. Because Ancient Greece was the birthplace of the Olympic Games, Athens was considered to be an appropriate choice to stage the inaugural modern Games. It was unanimously chosen as the host city during a congress organized by Pierre de Coubertin, a French pedagogue and historian, in Paris, on 23 June 1894. The International Olympic Committee (IOC) was also instituted during this congress.</p>

                @include('partials/racewalking/summer_olympics', ['olympic_year' => '1896'])

                <h4>No Walks</h4>
            </div>
            <div class="col-span-2 sm:col-span-1">
                <h2 class="">@svg('flags/fr', 'border') 1900 Paris</h2>
                <p class="text-sm">The <strong>1900 Summer Olympics</strong>, today officially known as the Games of the II Olympiad, was an international multi-sport event which was celebrated in 1900 in Paris, France. No opening or closing ceremonies were held; competitions began on May 14 and ended on October 28. The Games were held as part of the 1900 World's Fair. 997 competitors took part in 19 different sports. Women took part in the games for the first time and sailor Hélène de Pourtalès became the first female Olympic champion. The decision to hold competitions on a Sunday brought protests from many American athletes, who travelled as representatives of their colleges and were expected to withdraw rather than compete on their religious day of rest.</p>

                @include('partials/racewalking/summer_olympics', ['olympic_year' => '1900'])

                <h4>No Walks</h4>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-8">
            <img class="block mx-auto" src="/images/racewalking/olympic_logos/175px-Athens_1896_report_cover.jpg" style="width: 84px; height: 120px;" alt="Olympic poster 1896">
            <img class="block mx-auto" src="/images/racewalking/olympic_logos/200px-JOParis_1900.jpg" style="width: 85px; height: 120px;" alt="Olympic poster 1900">
        </div>
    </x-card>
</div>

<div id="1904-1906">
    <x-card class="card-racewalk" nav=true>
        <div class="grid grid-cols-2 gap-8">
            <div class="col-span-2 sm:col-span-1">
                <h2 class="">@svg('flags/us', 'border') 1904 St. Louis</h2>
                <p class="text-sm">The <strong>1904 Summer Olympics</strong>, officially known as the Games of the III Olympiad, was an international multi-sport event which was celebrated in St. Louis, Missouri, in the United States from August 29 until September 3, 1904, as part of an extended sports program lasting from July 1 to November 23, 1904, at what is now known as Francis Field on the campus of Washington University in St. Louis. It was the first time that the Olympic Games were held in a majority English language nation, and the first time that they were held outside of Europe.</p>

                @include('partials/racewalking/summer_olympics', ['olympic_year' => '1904'])

                <h4>No Walks for 1906</h4>

                <img class="block mx-auto" src="/images/racewalking/olympic_logos/200px-1904summerolympicsposter.jpg" style="width: 80x; height: 120px;" alt="Olympic poster 1904">
            </div>
            <div class="col-span-2 sm:col-span-1">
                <h2 class="">@svg('flags/gr', 'border') 1906 Athens</h2>
                <p class="text-sm">The <strong>1906 Intercalated Games</strong> or <em>1906 Olympic Games</em> was an international multi-sport event which was celebrated in Athens, Greece. They were at the time considered to be Olympic Games and were referred to as the "Second International Olympic Games in Athens" by the International Olympic Committee</p>

                @include('partials/racewalking/summer_olympics', ['olympic_year' => '1906'])
                <h4>1500m Walk</h4>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD"><strong>George Bonhag USA</strong> 7:12.6 (Olympic record)</li>
                        <li class="SILVER"><strong>Donald Linden</strong> CAN 7:19.8</li>
                        <li class="BRONZE"><strong>Konstantin Spetsiotis</strong> GRE 7:22.0</li>
                    </x-ui.list>

                <h4>3000 Walk</h4>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD"><strong>Gy&ouml;rgy Sztantics</strong> HUN 15:13.2</li>
                        <li class="SILVER"><strong>Hermann M&uuml;ller</strong> GER 15:20.0</li>
                        <li class="BRONZE"><strong>Georgios Saridakis</strong> GRE 15:33.0</li>
                    </x-ui.list>

                <img class="block mx-auto w-1/3 my-6" src="/svg/Olympic-Rings.svg" alt="Olympic-Rings.svg">
            </div>
        </div>
    </x-card>
</div>

<div id="1908-1912">
    <x-card class="card-racewalk" nav=true>
        <div class="grid grid-cols-2 gap-8">
            <div class="col-span-2 sm:col-span-1">
                <h2 class=""><a name="1908London"></a>@svg('flags/gb', 'border') 1908 London</h2>
                <p class="text-sm">The <strong>1896 Summer Olympics</strong>, officially known as the Games of the I Olympiad, was a multi-sport event held in Athens, Greece, from 6 to 15 April 1896. It was the first international Olympic Games held in the Modern era. Because Ancient Greece was the birthplace of the Olympic Games, Athens was considered to be an appropriate choice to stage the inaugural modern Games. It was unanimously chosen as the host city during a congress organised by Pierre de Coubertin, a French pedagogue and historian, in Paris, on 23 June 1894. The International Olympic Committee (IOC) was also instituted during this congress.</p>

                @include('partials/racewalking/summer_olympics', ['olympic_year' => '1908'])

                <h4>3500 Walk</h4>

                <x-ui.list textSize="sm" leading="loose">
                     <li class="GOLD"><a href="http://en.WikipediA.org/wiki/George_Larner" target="_blank"><strong>George Larner</strong> @svg('link')</a> GBR 14:55.0</li>
                     <li class="SILVER"><a href="http://en.WikipediA.org/wiki/Ernest_Webb" target="_blank"><strong>Ernest Webb</strong> @svg('link')</a> GBR 15:07.4</li>
                     <li class="BRONZE"><a href="http://en.WikipediA.org/wiki/Harry_Kerr" target="_blank"><strong>Harry Kerr</strong> @svg('link')</a> NZL 15:43.4</li>
                  </x-ui.list>

                 <h4>10 Miles Walk</h4>

                <x-ui.list textSize="sm" leading="loose">
                     <li class="GOLD"><a href="http://en.WikipediA.org/wiki/George_Larner" target="_blank"><strong>George Larner</strong> @svg('link')</a> GBR 1:15:57.4</li>
                     <li class="SILVER"><a href="http://en.WikipediA.org/wiki/Ernest_Webb" target="_blank"><strong>Ernest Webb</strong> @svg('link')</a> GBR 1:17:31.0</li>
                     <li class="BRONZE"><a href="http://en.WikipediA.org/wiki/Edward_Spencer" target="_blank"><strong>Edward Spencer</strong> @svg('link')</a> GBR 1:21:20.2</li>
                  </x-ui.list>
            </div>
            <div class="col-span-2 sm:col-span-1">
                <h2 class=""><a name="1912Stockholm"></a>@svg('flags/se', 'border') 1912 Stockholm</h2>
                <p class="text-sm">The <strong>1912 Summer Olympics</strong>, officially known as the Games of the V Olympiad, were an international multi-sport event held in Stockholm, Sweden, between 5 May and 27 July 1912. Twenty-eight nations and 2,408 competitors, including 48 women, competed in 102 events in 14 sports. With the exception of tennis (starting on 5 May) and football and shooting (both starting on 29 June), the games were held within a month with an official opening on 6 July. It was the last Olympics to issue solid gold medals and, with Japan's debut, the first time an Asian nation participated. Stockholm was the only bid for the games, and was selected in 1909.</p>

                @include('partials/racewalking/summer_olympics', ['olympic_year' => '1912'])
                <h4>10,000m Walk</h4>

                <x-ui.list textSize="sm" leading="loose">
                     <li class="GOLD"><strong>George Goulding</strong> CAN 46:28.4</li>
                     <li class="SILVER"><a href="http://en.WikipediA.org/wiki/Ernest_Webb" target="_blank"><strong>Ernest Webb</strong></a> GBR 46:50.4</li>
                     <li class="BRONZE"><strong>Frenando Altimani</strong> ITA 47:37.6</li>
                </x-ui.list>
                <x-ui.list textSize="sm" leading="loose">
                    <li>DNF Frank Kaiser USA</li>
                </x-ui.list>

                <h4>USA Walkers</h4>
                <x-ui.list textSize="sm" leading="loose">
                    <li>1st Heat: 6. Sam Schwarts USA 50:30.8</li>
                    <li>1st Heat: 7. Edward Renz USA 50:30.8</li>
                    <li>2nd Heat: 5. Frank Kaiser USA 50:30.8</li>
                    <li>2nd Heat: 6. Arthur Voelmeke USA 50:30.8</li>
                </x-ui.list>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-8">
            <img class="block mx-auto" src="/images/racewalking/olympic_logos/220px-Olympic_games_1908_London.jpg" style="width: 80x; height: 120px;" alt="Olympic poster 1912">
            <img class="block mx-auto" src="/images/racewalking/olympic_logos/1912_Summer_Olympics_poster.jpg" style="width: 89px; height: 120px;" alt="Olympic poster 1912">
        </div>
    </x-card>
</div>

<div id="1920-1924">
    <x-card class="card-racewalk" nav=true>
        <div class="grid grid-cols-2 gap-8">
            <div class="col-span-2 sm:col-span-1">
                <h2 class=""><a name="1920Antwerp"></a>@svg('flags/be', 'border') 1920 Antwerp</h2>
                @include('partials/racewalking/summer_olympics', ['olympic_year' => '1920'])
                <h3>3,000m Walk</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD"><a href="http://en.WikipediA.org/wiki/Ugo_Frigerio" target="_blank">Ugo Frigerio @svg('link')</a> ITA 13:14.2 (Olympic record)</li>
                        <li class="SILVER"><strong><a href="http://en.WikipediA.org/wiki/George_Parker" target="_blank">George Parker @svg('link')</a></strong> USA 13:20.6</li>
                        <li class="BRONZE"><strong>Richard Remer</strong> USA 13:23.6</li>
                    </x-ui.list>

                    <h4>USA Walkers</h4>
                        <ol class="list-decimal text-sm | ml-8" start="5">
                            <li>Thomas Maroney USA 13:26.8</li>
                        </ol>
                        <x-ui.list textSize="sm" leading="loose">
                            <li>1st Heat: 3. Thomas Maroney USA</li>
                            <li>1st Heat: 11. Joe Pearman USA</li>
                            <li>2nd Heat: 3. Richard Remer USA</li>
                            <li>2nd Heat: 4. William Roelker USA</li>
                        </x-ui.list>

                  <h3>10,000m Walk</h3>
                      <x-ui.list textSize="sm" leading="loose">
                            <li class="GOLD"><a href="http://en.WikipediA.org/wiki/Ugo_Frigerio" target="_blank">Ugo Frigerio @svg('link')</a> ITA</li>
                            <li class="SILVER"><a href="http://en.WikipediA.org/wiki/Joseph_Pearman" target="_blank">Joseph Pearman @svg('link')</a> USA 49:40.8</li>
                            <li class="BRONZE"><a href="http://en.WikipediA.org/wiki/Charles_Gunn_%28athlete%29" target="_blank">Charles Gunn @svg('link')</a> GBR 49:44.4</li>
                      </x-ui.list>

                      <h4>USA Walkers</h4>
                        <ol class="list-decimal text-sm | ml-8" start="6">
                            <li>Thomas Maroney USA 50:20.6</li>
                        </ol>
                      <x-ui.list textSize="sm" leading="loose">
                         <li>1st Heat: 2. Joe Pearman USA 47:30.2</li>
                         <li>1st Heat: 7. William Roelker USA</li>
                         <li>2nd Heat: 3. Thomas Maroney USA</li>
                         <li>2nd Heat: 4. Willie Plant USA</li>
                      </x-ui.list>
            </div>
            <div class="col-span-2 sm:col-span-1">
                <h2 class=""><a name="1924Paris"></a>@svg('flags/fr', 'border') 1924 Paris</h2>
                @include('partials/racewalking/summer_olympics', ['olympic_year' => '1924'])
                  <h3>10,000m Walk</h3>
                      <x-ui.list textSize="sm" leading="loose">
                            <li class="GOLD"><a href="http://en.WikipediA.org/wiki/Ugo_Frigerio" target="_blank">Ugo Frigerio @svg('link')</a> ITA 47:49.0</li>
                            <li class="SILVER">Reginald Goodwin GBR 48:37.9</li>
                            <li class="BRONZE">Cecil McMaster SAF 49:08.0</li>
                      </x-ui.list>

                      <h4>USA Walkers</h4>
                        <ol class="list-decimal text-sm | ml-8" start="9">
                            <li>Harry Hinkel USA</li>
                        </ol>

                      <h4>USA Walkers</h4>
                        <x-ui.list textSize="sm" leading="loose">
                            <li>1st Heat: 3 - Harry Hinkel USA</li></li>
                            <li>2nd Heat: 9 - Charles Foster USA</li>
                        </x-ui.list>

                        <x-ui.list textSize="sm" leading="loose">
                            <li>Final: 9 - Harry Hinkel USA</li>
                        </x-ui.list>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-8">
            <img class="block mx-auto w-1/3 my-6" src="/images/racewalking/olympic_logos/250px-1920_olympics_poster.jpg"alt="250px-1920_olympics_poster.jpg">
            <img class="block mx-auto w-1/3 my-6" src="/images/racewalking/olympic_logos/1924_1.png" alt="1924_1.png">
        </div>
    </x-card>
</div>

<div id="1928-1932">
    <x-card class="card-racewalk" nav=true>
        <div class="grid grid-cols-2 gap-8">
            <div class="col-span-2 sm:col-span-1">
                <h2 class=""><a name="1928Amsterdam"></a>@svg('flags/ne', 'border') 1928 Amsterdam</h2>
                @include('partials/racewalking/summer_olympics', ['olympic_year' => '1928'])

                <h4>No Walks</h4>
            </div>
            <div class="col-span-2 sm:col-span-1">
                <h2 class=""><a name="1932LosAngeles"></a>@svg('flags/us', 'border') 1932 Los Angeles</h2>

                @include('partials/racewalking/summer_olympics', ['olympic_year' => '1935'])

                <h3>50K Walk</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD">Tommy Green GBR 4:50:10</li>
                        <li class="SILVER">Janis Dalinch LAT 4:57:20</li>
                        <li class="BRONZE"><a href="http://en.WikipediA.org/wiki/Ugo_Frigerio" target="_blank">Ugo Frigerio @svg('link')</a> ITA 4:59:06</li>
                    </x-ui.list>

                    <h4>USA Walkers</h4>
                        <ol class="list-decimal text-sm | ml-8" start="5">
                            <li>Ernie Crosbie USA 5:28:01</li>
                            <li>Bill Chisholm USA 5:51:00</li>
                        </ol>
                    <x-ui.list textSize="sm" leading="loose">
                        <li>DNF Harry Hinkel USA</li>
                    </x-ui.list>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-8">
            <img class="block mx-auto w-1/3 my-6" src="/images/racewalking/olympic_logos/1928_1.png"alt="250px-1920_olympics_poster.jpg">
            <img class="block mx-auto w-1/3 my-6" src="/images/racewalking/olympic_logos/1932_1.png" alt="1924_1.png">
        </div>
    </x-card>
</div>

<div id="1936-1948">
    <x-card class="card-racewalk" nav=true>

        <div class="grid grid-cols-2 gap-8">
            <div class="col-span-2 sm:col-span-1">
                <h2 class=""><a name="1936Berlin"></a>@svg('flags/de', 'border') 1936 Berlin</h2>

                @include('partials/racewalking/summer_olympics', ['olympic_year' => '1936'])

                <h3>50K Walk</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD">Harold Whitlock GBR 4:30:41.4 (Olympic record)</li>
                        <li class="SILVER">Arthur Schwab SUI 4:32:10</li>
                        <li class="BRONZE">Adalberts Bubenko LAT 4:32:43</li>
                    </x-ui.list>

                    <h4>USA Walkers</h4>
                    <ol class="list-decimal text-sm | ml-8" start="21">
                        <li>Albert Mangan USA 5:12:00.0</li>
                    </ol>
                    <ol class="list-decimal text-sm | ml-8" start="23">
                        <li>Ernest Koehler USA 5:20:18.4</li>
                    </ol>
                    <ol class="list-decimal text-sm | ml-8" start="26">
                        <li>Ernie Crosbie USA 5:31:44.2</li>
                    </ol>
            </div>
            <div class="col-span-2 sm:col-span-1">
                <h2 class=""><a name="1948London"></a>@svg('flags/gb', 'border') 1948 London</h2>

                @include('partials/racewalking/summer_olympics', ['olympic_year' => '1948'])

                <h3>10K Walk</h3>

                <x-ui.list textSize="sm" leading="loose">
                    <li class="GOLD">John Mikaelsson SWE 45:13.2</li>
                    <li class="SILVER">Ingemar Johansson SWE 45:43.8</li>
                    <li class="BRONZE">Fritz Schwab SUI 46:00.2</li>
                </x-ui.list>

                <x-ui.list textSize="sm" leading="loose">
                    <li>1st Heat: disq Ernest Weber USA</li>
                    <li>1st Heat: disq Fred Sharaga USA</li>
                    <li>2nd Heat: 7 - <a href="http://www.usatf.org/athletes/hof/laskau.asp" target="_blank">Henry Laskau @svg('link')</a> USA</li>
                 </x-ui.list>

                <h3>50K Walk</h3>

                <x-ui.list textSize="sm" leading="loose">
                     <li class="GOLD">John Ljunggren SEW 4:41:52</li>
                     <li class="SILVER">Gaston Godel SUI 4:48:17</li>
                     <li class="BRONZE">Tebbs Lloyd Johnson* GBR 4:48:31 - <em>Tebbs at 48 became the oldest Olympic atheletics medalist. (So there is hope.)</em></li>
                </x-ui.list>

                <h4>USA Walkers</h4>
                <ol class="list-decimal text-sm | ml-8" start="12">
                     <li>Ernie Crosbie USA 5:15:16.0</li>
                </ol>
                <ol class="list-decimal text-sm | ml-8" start="15">
                    <li>John Deni USA 5:28:33.0</li>
                    <li>Adolph Weinacker USA 5:30:14.0</li>
               </ol>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-8">
            <img class="block mx-auto w-1/3 my-6" src="/images/racewalking/olympic_logos/1936_1.png"alt="250px-1920_olympics_poster.jpg">
            <img class="block mx-auto w-1/3 my-6" src="/images/racewalking/olympic_logos/1948_1.png" alt="1924_1.png">
        </div>

    </x-card>
</div>

<div id="1952-1956">
    <x-card class="card-racewalk" nav=true>

        <div class="grid grid-cols-2 gap-8">
            <div class="col-span-2 sm:col-span-1">
                <h2 class=""><a name="1952Helsinki"></a>@svg('flags/fi', 'border') 1952 Helsinki</h2>

                @include('partials/racewalking/summer_olympics', ['olympic_year' => '1952'])

                <h3>10K Walk</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD">John Mikaelsson SWE 45:02.8</li>
                        <li class="SILVER">Fritz Schwab SUI 45:41.0</li>
                        <li class="BRONZE">Bruno Junk URS 45:41.0</li>
                    </x-ui.list>
                    <x-ui.list textSize="sm" leading="loose">
                        <li>1st Heat: disq <a href="http://www.usatf.org/athletes/hof/laskau.asp" target="_blank">Henry Laskau @svg('link')</a> USA
                        <li>2nd Heat: 9 - Price King USA 51:08.6
                    </x-ui.list>

                <h3>50K Walk</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD">Giuseppe Dordoni ITA 4:28:07.8 (Olympic record)</li>
                        <li class="SILVER">Josef Dolezal TCH 4:30:18</li>
                        <li class="BRONZE">Antal Roka HUN 4:32:28</li>
                    </x-ui.list>

                    <h4>USA Walkers</h4>
                    <ol class="list-decimal text-sm | ml-8" start="22">
                        <li>Adolph Weinacker USA 5:01:00.4</li>
                    </ol>
                     <x-ui.list textSize="sm" leading="loose">
                        <li>DNF Leo Sjogren USA</li>
                        <li>DNF John Deni USA</li>
                    </x-ui.list>
            </div>
            <div class="col-span-2 sm:col-span-1">
                <h2 class=""><a name="1956Melborne"></a>@svg('flags/au', 'border') 1956 Melborne</h2>

                @include('partials/racewalking/summer_olympics', ['olympic_year' => '1956'])

                <h3>20K Walk</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD">Leonid Spirin URS 1:31:27.4</li>
                        <li class="SILVER">Antanas Mikenas URS 1:32:03</li>
                        <li class="BRONZE">Burno Junk URS 1:32:12</li>
                    </x-ui.list>

                    <h4>USA Walkers</h4>
                        <ol class="list-decimal text-sm | ml-8" start="12">
                            <li><a href="http://www.usatf.org/athletes/hof/laskau.asp" target="_blank">Henry Laskau @svg('link')</a> USA 1:38:46.8</li>
                        </ol>
                        <ol class="list-decimal text-sm | ml-8" start="16">
                            <li>Bruce McDonald USA 1:43:25.6</li>
                            <li>Jim Hewson USA 1:46:24.8</li>
                        </ol>

                <h3>50K Walk</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD">Norman Read NZL 4:30:42.8</li>
                        <li class="SILVER">Yevgeniy Maskinskov URS 4:32:57</li>
                        <li class="BRONZE">John Ljunggren SWE 4:35:02</li>
                    </x-ui.list>

                    <h4>USA Walkers</h4>
                    <ol class="list-decimal text-sm | ml-8" start="7">
                        <li>Adolph Weinacker USA 5:00:16</li>
                    </ol>
                    <ol class="list-decimal text-sm | ml-8" start="11">
                        <li><a href="//en.wikipedia.org/wiki/Elliott_Denman" target="_blank"><strong>Elliott Denman @svg('link')</strong></a> USA 5:12:14</li>
                        <li>Leo Sjogres USA 5:12:34</li>
                    </ol>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-8">
            <img class="block mx-auto w-1/3 my-6" src="/images/racewalking/olympic_logos/1952_1.png"alt="250px-1920_olympics_poster.jpg">
            <img class="block mx-auto w-1/3 my-6" src="/images/racewalking/olympic_logos/1956_1.png" alt="1924_1.png">
        </div>

    </x-card>
</div>

<div id="1960-1964">
    <x-card class="card-racewalk" nav=true>
        <div class="grid grid-cols-2 gap-8">
            <div class="col-span-2 sm:col-span-1">
                <h2 class=""><a name="1960Rome"></a>@svg('flags/it', 'border') 1960 Rome</h2>

                @include('partials/racewalking/summer_olympics', ['olympic_year' => '1960'])

                <h3>20k Walk</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD"><a href="http://en.WikipediA.org/wiki/Vladimir_Golubnichy" target="_blank">Vladimir Golubnichiy @svg('link')</a> URS 1:33:07.2</li>
                        <li class="SILVER">Noel Freeman AUS 1:34:17</li></li>
                        <li class="BRONZE">Stan Vickers GBR 1:34:57</li>
                    </x-ui.list>

                    <h4>USA Walkers</h4>
                    <ol class="list-decimal text-sm | ml-8" start="12">
                        <li>Ron Zinn USA 1:42:47.0</li>
                    </ol>
                    <ol class="list-decimal text-sm | ml-8" start="23">
                        <li>Bob Mimm USA 1:45:09.0</li>
                        <li>Rudy Haluza USA 1:45:11.0</li>
                    </ol>

                <h3>50k Walk</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD">Donald Thompson GBR 4:25:30 (Olymipc record)</li>
                        <li class="SILVER">John Ljunggren SWE 4:25:47</li>
                        <li class="BRONZE">Abdon Parnich ITA 4:27:56</li>
                    </x-ui.list>

                    <h4>USA Walkers</h4>
                    <ol class="list-decimal text-sm | ml-8" start="19">
                        <li><a href="http://www.usatf.org/athletes/hof/laird.asp" target="_blank">Ron Laird @svg('link')</a> USA 4:53:21.6</li>
                    </ol>
                    <ol class="list-decimal text-sm | ml-8" start="23">
                        <li>Bruce McDonald USA 5:00:47.6</li>
                        <li>John Allen USA 5:03:15.2</li>
                    </ol>
            </div>
            <div class="col-span-2 sm:col-span-1">
                <h2 class=""><a name="1964Tokyo"></a>@svg('flags/jp', 'border') 1964 Toyko</h2>

                @include('partials/racewalking/summer_olympics', ['olympic_year' => '1964'])

                <h3>20k Walk</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD">Kenneth Mathews GBR 1:29:34.0 (Olympic record)</li>
                        <li class="SILVER">Dieter Linder GER (GDR) 1:31:14</li>
                        <li class="BRONZE"><a href="http://en.WikipediA.org/wiki/Vladimir_Golubnichy" target="_blank">Vladimir Golubnichiy</a> URS 1:32:00</li>
                    </x-ui.list>

                    <h4>USA Walkers</h4>
                    <ol class="list-decimal text-sm | ml-8" start="6">
                         <li>Ron Zinn USA 1:32:43</li>
                    </ol>
                    <ol class="list-decimal text-sm | ml-8" start="17">
                        <li>Jack Mortland USA 1:36:35</li>
                    </ol>
                    <x-ui.list textSize="sm" leading="loose">
                        <li>DQ  <a href="http://www.usatf.org/athletes/hof/laird.asp" target="_blank">Ron Laird @svg('link')</a> USA</li>
                    </x-ui.list>

                <h3>50k Walk</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD">Abdon Parnich ITA 4:11:12.4 (world best)</li>
                        <li class="SILVER">Paul Nahill GBR 4:11:32</li>
                        <li class="BRONZE">Ingvar Pettersson SWE 4:14:18</li>
                    </x-ui.list>

                    <h4>USA Walkers</h4>
                    <ol class="list-decimal text-sm | ml-8" start="21">
                        <li>Chris McCarthy USA 4:35:41.6</li>
                    </ol>
                    <ol class="list-decimal text-sm | ml-8" start="26">
                        <li>Bruce McDonald USA 4:45:10.4</li>
                    </ol>
                    <ol class="list-decimal text-sm | ml-8" start="29">
                        <li>Mike Brodie USA 4:57:41.0</li>
                    </ols>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-8">
            <img class="block mx-auto w-1/3 my-6" src="/images/racewalking/olympic_logos/1960_1.png"alt="250px-1920_olympics_poster.jpg">
            <img class="block mx-auto w-1/3 my-6" src="/images/racewalking/olympic_logos/1964_1.png" alt="1924_1.png">
        </div>
    </x-card>
</div>

<div id="1968-1972">
    <x-card class="card-racewalk" nav=true>
        <div class="grid grid-cols-2 gap-8">
            <div class="p-2">
                <h2 class=""><a name="1968MexicoCity"></a>@svg('flags/mx', 'border') 1968 Mexico City</h2>

                @include('partials/racewalking/summer_olympics', ['olympic_year' => '1968'])

                <h3>20k Walk</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD"><a href="http://en.WikipediA.org/wiki/Vladimir_Golubnichy" target="_blank">Vladimir Golubnichiy @svg('link')</a> URS 1:33:58.4</li>
                        <li class="SILVER"><a href="http://en.WikipediA.org/wiki/Jose%CC%81_Pedraza" target="_blank">Jose Pedraza @svg('link')</a> MEX 1:34:00
                        <li class="BRONZE">Nikolay Smaga URS 1:34:04</li>
                        <li>Rudy Haluza USA 1:35:01</li>
                    </x-ui.list>

                    <h4>USA Walkers</h4>
                    <ol class="list-decimal text-sm | ml-8" start="17">
                        <li>Tom Dooley USA 1:40:08</li>
                    </ol>
                    <ol class="list-decimal text-sm | ml-8" start="25">
                        <li><a href="http://www.usatf.org/athletes/hof/laird.asp" target="_blank">Ron Laird</a> USA 1:44:38</li>
                    </ol>

                <h3>50k Walk</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD"><a href="http://en.WikipediA.org/wiki/Christoph_Ho%CC%88hne" target="_blank">Christoph H&ouml;hne @svg('link')</a> GDR 4:20:13.6</li>
                        <li class="SILVER">Antal Kiss HUN 4:30:17</li>
                        <li class="BRONZE"><strong><a href="http://www.usatf.org/athletes/hof/Young_Larry.asp" target="_blank">Larry Young @svg('link')</a> USA</strong> 4:31:56 (<em><a href="http://en.WikipediA.org/wiki/Larry_Young_%28athlete%29" target="_blank">WikipediA link @svg('link')</a></em>)</li>
                    </x-ui.list>

                    <h4>USA Walkers</h4>
                        <ol class="list-decimal text-sm | ml-8" start="10">
                            <li>Goetz Klopfer USA 4:39:13.8</li>
                        </ol>

                        <ol class="list-decimal text-sm | ml-8" start="26">
                            <li>Dave Romansky USA 5:38:03.4 *With a fever over 100&deg;</li>
                        </ol>
            </div>
            <div class="col-span-2 sm:col-span-1">
                <h2 class=""><a name="1972Munich"></a>@svg('flags/de', 'border') 1972 Munich</h2>

                 @include('partials/racewalking/summer_olympics', ['olympic_year' => '1972'])

                <h3>20k Walk</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD">Peter Frankel GDR 1:26:42.4 (Olympic record)</li>
                        <li class="SILVER"><a href="http://en.WikipediA.org/wiki/Vladimir_Golubnichy" target="_blank">Vladimir Golubnichiy @svg('link')</a> URS 1:26:56</li>
                        <li class="BRONZE">Hans Reimann GDR 1:27:17</li>
                    </x-ui.list>

                    <h4>USA Walkers</h4>
                    <ol class="list-decimal text-sm | ml-8" start="10">
                        <li><a href="http://www.usatf.org/athletes/hof/Young_Larry.asp" target="_blank">Larry Young @svg('link')</a> USA 1:32:53.4 (<em><a href="http://en.WikipediA.org/wiki/Larry_Young_%28athlete%29" target="_blank">WikipediA link @svg('link')</a></em>)</li>
                    </ol>
                    <ol class="list-decimal text-sm | ml-8" start="15">
                        <li>Tom Dooley USA 1:34:58.8</li>
                    </ol>
                    <ol class="list-decimal text-sm | ml-8" start="19">
                        <li>Goetz Klopfer USA 1:38:33.6</li>
                    </ol>

                <h3>50k Walk</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD">Bernd Kannengerg FRG 3:56:11.6 (Olympic record)</li>
                        <li class="SILVER">Venaimin Soldatenko URS 3:58:24</li>
                        <li class="BRONZE"><strong><a href="http://www.usatf.org/athletes/hof/Young_Larry.asp" target="_blank">Larry Young @svg('link')</a> USA</strong> 4:00:46 (<em><a href="http://en.WikipediA.org/wiki/Larry_Young_%28athlete%29" target="_blank">WikipediA link @svg('link')</a></em>)</li>
                    </x-ui.list>

                    <h4>USA Walkers</h4>
                    <ol class="list-decimal text-sm | ml-8" start="17">
                        <li>Bill Weigle USA 4:22:53.2</li>
                    </ol>
                    <ol class="list-decimal text-sm | ml-8" start="27">
                        <li>Steve Hayden USA 4:36:07.2</li>
                    </ol>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-8">
            <img class="block mx-auto w-1/3 my-6" src="/images/racewalking/olympic_logos/1968_1.png"alt="250px-1920_olympics_poster.jpg">
            <img class="block mx-auto w-1/3 my-6" src="/images/racewalking/olympic_logos/1972_1.png" alt="1924_1.png">
        </div>
    </x-card>
</div>

<div id="1976-1980">
    <x-card class="card-racewalk" nav=true>
        <div class="grid grid-cols-2 gap-8">
            {{-- 1976 --}}
            <div class="col-span-2 sm:col-span-1">
                <h2 class=""><a name="1976Montreal"></a>@svg('flags/gb', 'border') 1976 Montreal</h2>

                @include('partials/racewalking/summer_olympics', ['olympic_year' => '1976'])

                <h3>20k Walk</h3>
                  <x-ui.list textSize="sm" leading="loose">
                     <li class="GOLD"><a href="http://www.home.ch/%7Espaw1786/bautistd.htm">Danial Bautista @svg('link')</a> MEX 1:24:40.6 (Olympic record)</li>
                     <li class="SILVER">Hans-Georg Reimann GDR 1:25:14</li>
                     <li class="BRONZE">Peter Frankel GDR 1:25:30</li>
                  </x-ui.list>

                  <h4>USA Walkers</h4>
                  <ol class="list-decimal text-sm | ml-8" start="20">
                     <li><a href="http://www.usatf.org/athletes/hof/laird.asp" target="_blank">Ron Laird</a> USA 1:33:27.6</li>
                  </ol>
                  <ol class="list-decimal text-sm | ml-8" start="22">
                     <li>Larry Walker USA 1:34:19.4</li>
                  </ol>
                  <ol class="list-decimal text-sm | ml-8" start="29">
                     <li>Todd Scully 1:36:37.4</li>
                  </ol>

                <h3>50k Walk Not Held</h3>
                    <p class="text-xs text-grey-500 leading-snug | mx-2"><a href="{{ route('racewalking', 'world_championships') }}">The World Championships @svg('link')</a> was started in 1976 in response to the International Olympic Committee dropping the men's 50 km walk from the Olympic athletics program for the 1976 Montreal Olympics, despite its constant presence at the games since 1932.</p>

                   <p class="text-xs text-grey-500 leading-snug | mx-2">(<strong>2020 Update</strong>) - The International Olympic Committee is <a href="//www.corkathletics.org/news/1924-50km-race-walk-dropped-from-paris-2024.html" target="_blank">dropping the men's 50 km walk from the Olympic &amp; World Championships athletics program @svg('link')</a> and replacing it with a 35 km.</p>
            </div>
            {{-- 1980 --}}
            <div class="col-span-2 sm:col-span-1">
                <h2 class=""><a name="1980Moscow"></a>@svg('flags/ru', 'border') 1980 Moscow</h2>
                <p class="text-sm">Eighty nations were represented at the Moscow Games, the smallest number since 1956. Led by the United States, 66 countries boycotted the games entirely because of the Soviet–Afghan War. Several alternative events were held outside of the Soviet Union. Some athletes from some of the boycotting countries (not included in the list of 66 countries that boycotted the games entirely) participated in the games under the Olympic Flag.</p>

                @include('partials/racewalking/summer_olympics', ['olympic_year' => '1980'])

                <h3>20k Walk</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD"><a href="http://en.WikipediA.org/wiki/Maurizio_Damilano" target="_blank">Maurizio Damilano @svg('link')</a> ITL 1:23:35.5 (Olympic record)</li>
                        <li class="SILVER">Pyotr Pochinchuk USR 1:24:46</li>
                        <li class="BRONZE">Ronald Wieser GDR 1:25:59</li>
                    </x-ui.list>

                <h3>50k Walk</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li><a href="http://en.WikipediA.org/wiki/Hartwig_Gauder" target="_blank">Hartwig Guader @svg('link')</a> GDR 3:49:24.0 (Olympic record)</li>
                        <li><a href="//en.wikipedia.org/wiki/Jordi_Llopart" target="_blank">Jorge Llopart @svg('link')</a> ESP 3:51:25</li>
                        <li><a href="//en.wikipedia.org/wiki/Yevgeniy_Ivchenko" target="_blank">Yevgeniy Ivchenko @svg('link')</a> URS 3:56:32</li>
                    </x-ui.list>

                  <p class="text-sm">USA boycotted the 1980 Olympics.</p>
            </div>
        </div>
        {{-- Logos --}}
        <div class="grid grid-cols-2 gap-8">
            <img class="block mx-auto w-1/3 my-6" src="/images/racewalking/olympic_logos/1976_1.png"alt="250px-1920_olympics_poster.jpg">
            <img class="block mx-auto w-1/3 my-6" src="/images/racewalking/olympic_logos/1980_1.png" alt="1924_1.png">
        </div>
    </x-card>
</div>

<div id="1984-1988">
    <x-card class="card-racewalk" nav=true>
        <div class="grid grid-cols-2 gap-8">
            {{-- 1984 --}}
            <div class="col-span-2 sm:col-span-1">
                <h2 class=""><a name="1984LosAngeles"></a>@svg('flags/us', 'border') 1984 Los Angeles</h2>
                <p class="text-sm">The 1984 Games were boycotted by a total of fourteen Eastern Bloc countries, including the Soviet Union and East Germany, in response to the American-led boycott of the 1980 Summer Olympics in Moscow in protest of the Soviet invasion of Afghanistan; Romania was the only Eastern Bloc state that opted to attend the Games. Iran and Libya also chose to boycott the Games for unrelated reasons.</p>

                @include('partials/racewalking/summer_olympics', ['olympic_year' => '1984'])

                <h3>20k Walk</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD"><a href="http://en.WikipediA.org/wiki/Ernesto_Canto">Ernesto Canto</a> MEX 1:23:13.0 (Olympic record)</li>
                        <li class="SILVER"><a href="http://en.WikipediA.org/wiki/Ra&uacute;l_Gonz&aacute;lez_%28walker%29">Raul Gonzalez @svg('link')</a> MEX 1:23:20</li>
                        <li class="BRONZE"><a href="http://en.WikipediA.org/wiki/Maurizio_Damilano" target="_blank">Maurizio Damilano @svg('link')</a> ITA 1:23:26</li>
                    </x-ui.list>

                    <h4>USA Walkers</h4>
                    <ol class="list-decimal text-sm | ml-8" start="7">
                        <li>Marco Evoniuk USA 1:25:42</li>
                    </ol>
                    <ol class="list-decimal text-sm | ml-8" start="23">
                        <li>Jim Heiring USA 1:30:20</li>
                    </ol>
                    <ol class="list-decimal text-sm | ml-8" start="33">
                        <li>Dan O'Connor USA 1:35:12</li>
                    </ol>

                <h3>50k Walk</h3>
                    <x-ui.list textSize="sm" leading="loose">
                         <li class="GOLD"><a href="http://www.home.ch/%7Espaw1786/gonzalzr.htm">Raul Gonzalez @svg('link')</a> MEX 3:47:26.0 (Olympic record)</li>
                         <li class="SILVER"><a href="http://en.WikipediA.org/w/index.php?title=Bo_Gustafsson&amp;action=edit" target="_blank">Bo Gustafsson @svg('link')</a> SWE 3:52:19</li>
                         <li class="BRONZE"><a href="http://en.WikipediA.org/wiki/Sandro_Bellucci" target="_blank">Sandro Bellucci @svg('link')</a> ITA 3:53:45</li>
                    </x-ui.list>

                    <h4>USA Walkers</h4>
                    <ol class="list-decimal text-sm | ml-8" start="6">
                         <li>Carl Schueler USA 3:59:46</li>
                    </ol>
                    <ol class="list-decimal text-sm | ml-8" start="14">
                         <li>Vince O'Sullivan USA 4:22:51</li>
                    </ol>
                    <x-ui.list textSize="sm" leading="loose">
                        <li>DNF Marco Evoniuk USA</li>
                    </x-ui.list>
            </div>
            {{-- 1988 --}}
            <div class="col-span-2 sm:col-span-1">
                <h2 class=""><a name="1988Seoul"></a>@svg('flags/kr', 'border') 1988 Seoul</h2>

                @include('partials/racewalking/summer_olympics', ['olympic_year' => '1988'])

                <h3>20k Walk</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD"><a href="http://en.WikipediA.org/wiki/Jozef_Pribilinec" target="_blank">Jozef Pribilinec @svg('link')</a> CEA 1:19:57.0 (Olympic record)</li>
                        <li class="SILVER"><a href="http://en.WikipediA.org/wiki/Ronald_Weigel" target="_blank">Ronald Weigel @svg('link')</a> GDR ???</li>
                        <li class="BRONZE"><a href="http://en.WikipediA.org/wiki/Maurizio_Damilano" target="_blank">Maurizio Damilano @svg('link')</a> ITA 1:20:14</li>
                    </x-ui.list>

                    <h4>USA Walkers</h4>
                    <ol class="list-decimal text-sm | ml-8" start="37">
                         <li>Gary Morgan USA 1:27:26</li>
                        <li>Jim Heiring USA 1:27:30</li>
                    </ol>
                    <ol class="list-decimal text-sm | ml-8" start="44">
                        <li>Tim Lewis USA 1:31:00</li>
                    </ol>

                <h3>50k Walk</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD"><a href="http://en.WikipediA.org/wiki/Vyacheslav_Ivanenko" target="_blank">Vyacheslav Ivanenko @svg('link')</a> URS 3:38:29.0 (Olympic record)</li>
                        <li class="SILVER"><a href="http://en.WikipediA.org/wiki/Ronald_Weigel" target="_blank">Ronald Weigel @svg('link')</a> GDR 3:38:56</li>
                        <li class="BRONZE"><a href="http://en.WikipediA.org/wiki/Hartwig_Gauder" target="_blank">Hartwig Guader @svg('link')</a> GDR 3:39:45</li>
                    </x-ui.list>

                    <h4>USA Walkers</h4>
                    <ol class="list-decimal text-sm | ml-8" start="22">
                        <li>Marco Evoniuk USA</li>
                        <li>Carl Schueler USA</li>
                    </ol>
                    <ol class="list-decimal text-sm | ml-8" start="34">
                        <li>Andy Kaestner USA 4:12:49</li>
                    </ol>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-8">
            <img class="block mx-auto w-1/3 my-6" src="/images/racewalking/olympic_logos/1984_1.png"alt="250px-1920_olympics_poster.jpg">
            <img class="block mx-auto w-1/3 my-6" src="/images/racewalking/olympic_logos/1988_1.png" alt="1924_1.png">
        </div>
    </x-card>
</div>

<div id="1992-1996">
    <x-card class="card-racewalk" nav=true>
        <div class="grid grid-cols-2 gap-8">
            <div class="col-span-2 sm:col-span-1">
                <h2 class=""><a name="1992Barcalona"></a>@svg('flags/es', 'border') 1992 Barcalona</h2>

                @include('partials/racewalking/summer_olympics', ['olympic_year' => '1992'])

                <h3>20k Walk - Men</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD"><a href="http://en.WikipediA.org/wiki/Daniel_Plaza">Daniel Plaza @svg('link')</a> ESP 1:21:45
                        <li class="SILVER"><a href="http://en.WikipediA.org/wiki/Guillaume_LeBlanc">Guillaume LeBlanc @svg('link')</a> CAN 1:22:25
                        <li class="BRONZE"><a href="http://en.WikipediA.org/wiki/Giovanni_De_Benedictis">Gionvanni De Benedictis @svg('link')</a> ITA 1:23:11</li>
                    </x-ui.list>

                    <h4>USA Walkers</h4>
                    <ol class="list-decimal text-sm | ml-8" start="30">
                        <li>Allen James USA 1:35:12</li>
                    </ol>

                <h3>50k Walk - Men</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD"><a href="http://en.WikipediA.org/wiki/Andrey_Perlov">Andrey Perlov @svg('link')</a> EUN 3:50:13</li>
                        <li class="SILVER"><a href="http://en.WikipediA.org/wiki/Carlos_Mercenario">Carlos Mercenario @svg('link')</a> MEX 3:52:09</li></li>
                        <li class="BRONZE"><a href="http://en.WikipediA.org/wiki/Ronald_Weigel" target="_blank">Ronald Weigel @svg('link')</a> GDR 3:53:45</li>
                    </x-ui.list>

                    <h4>USA Walkers</h4>
                    <ol class="list-decimal text-sm | ml-8" start="23">
                        <li>Carl Schueler USA 4:13:38</li>
                    </ol>
                    <ol class="list-decimal text-sm | ml-8" start="33">
                        <li>Herman Nelson USA 4:25:49</li>
                    </ol>
                    <x-ui.list textSize="sm" leading="loose">
                        <li>Marco Evoniuk USA DNF</li>
                    </x-ui.list>

                <h3>10k Walk - Women</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD">Chen Yueling CHN 44:32</li>
                        <li class="SILVER">Yelana Nikolaeva EUN 44:33</li>
                        <li class="BRONZE">Li Chinxiu CHN 44:41</li>
                    </x-ui.list>

                    <h4>USA Walkers</h4>
                    <ol class="list-decimal text-sm | ml-8" start="20">
                        <li>Michelle Rohl USA 46:45</li>
                    </ol>
                    <ol class="list-decimal text-sm | ml-8" start="26">
                        <li>Debbi Lawrence USA 48:23</li>
                        <li>Victoria Herazo USA 48:26</li>
                    </ol>
            </div>
            <div class="col-span-2 sm:col-span-1">
                <h2 class=""><a name="1996Alantla"></a>@svg('flags/us', 'border') 1996 Atlanta</h2>

                @include('partials/racewalking/summer_olympics', ['olympic_year' => '1996'])

                <h3>20k Walk - Men</h3>
                    <x-ui.list textSize="sm" leading="loose">
                         <li class="GOLD"><a href="http://en.WikipediA.org/wiki/Jefferson_Perez" target="_blank">Jefferson Perez @svg('link')</a>, (ECU) 1:20:07</li>
                         <li class="SILVER"><a href="http://www.home.ch/%7Espaw1786/makarova.htm">Ilya Markov @svg('link')</a> (RUS) 1:20:16</li>
                         <li class="BRONZE"><a href="http://www.home.ch/%7Espaw1786/segurab.htm">Bernardo Segura @svg('link')</a> (MEX) 1:20:23</li>
                         <li>Nick A'Hern (AUS) 1:20:31</li>
                         <li>Rishat Shafikov (RUS) 1:20:41</li>
                         <li>Aigars Fadejevs (LAT) 1:20:47</li>
                         <li><a href="http://www.home.ch/%7Espaw1786/shchnkvm.htm">M. Shchennikov @svg('link')</a> (RUS) 1:21:09
                         <li><a href="http://en.WikipediA.org/wiki/Robert_Korzeniowski" target="_blank">Robert&nbsp;Korzeniowski @svg('link')</a> (POL) 1:21:13</li>
                    </x-ui.list>

                    <h4>USA Walkers</h4>
                    <ol class="list-decimal text-sm | ml-8" start="50">
                        <li><a href="https://en.wikipedia.org/wiki/Curt_Clausen" target="_blank"><a href="https://en.wikipedia.org/wiki/Curt_Clausen" target="_blank">Curt Clausen @svg('link')</a> @svg('link')</a> USA 1:31:30</li>
                    </ol>

                <h3>50k Walk - Men</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD"><a href="http://en.WikipediA.org/wiki/Robert_Korzeniowski" target="_blank">Robert&nbsp;Korzeniowski @svg('link')</a> (POL) 3:43:46</li>
                        <li class="SILVER"><a href="http://www.home.ch/%7Espaw1786/shchnkvm.htm">M. Shchennikov @svg('link')</a> (RUS) 3:43:46</li>
                        <li class="BRONZE"><a href="http://www.home.ch/%7Espaw1786/massanav.htm">Valentin Massana @svg('link')</a> (ESP) 3:44:19</li>
                        <li>Arturo Di Mezza (ITA) 3:44:52</li>
                        <li>Viktor Ginko (BLR) 3:45:27</li>
                        <li><a href="http://www.home.ch/%7Espaw1786/zamudioi.htm">Ignacio Zamudio @svg('link')</a> (MEX) 3:46:07</li>
                    </x-ui.list>
                    <x-ui.list textSize="sm" leading="loose">
                        <li>Andrew Herman USA</li>
                        <li>Allen James USA</li>
                        <li>Andrez Chlenshky USA</li>
                    </x-ui.list>

                <h3>10k Walk - Women</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD">Yelena Nikolayeva (RUS) 41:49 (OR)</li>
                        <li class="SILVER"><a href="http://www.home.ch/%7Espaw1786/perronee.htm">Elisabetta Perrone @svg('link')</a> (ITA) 42:12</li>
                        <li class="BRONZE">Yan Wang (CHN) 42:19</li>
                        <li>Yan Gu (CHN) 42:34</li>
                        <li>Rossella Giordano (ITA) 42:43</li>
                        <li>Kardapoltseva (BLR) 43:0214</li>
                    </x-ui.list>

                    <h4>USA Walkers</h4>
                    <ol class="list-decimal text-sm | ml-8" start="14">
                        <li>Michelle Rohl USA 44:29</li>
                    </ol>
                    <ol class="list-decimal text-sm | ml-8" start="20">
                        <li>Debbie Larwence USA 45:32</li>
                    </ol>
                    <x-ui.list textSize="sm" leading="loose">
                        <li>Victoria Herazo USA (DQ)</li>
                    </x-ui.list>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-8">
            <img class="block mx-auto w-1/3 my-6" src="/images/racewalking/olympic_logos/1992_1.png"alt="250px-1920_olympics_poster.jpg">
            <img class="block mx-auto w-1/3 my-6" src="/images/racewalking/olympic_logos/1996_1.png" alt="1924_1.png">
        </div>
    </x-card>
</div>

<div id="2000-2004">
    <x-card class="card-racewalk" nav=true>
        <div class="grid grid-cols-2 gap-8">
            <div class="col-span-2 sm:col-span-1">
                <h2 class=""><a name="2000Sydney"></a>@svg('flags/au', 'border') 2000 Sydney</h2>

                @include('partials/racewalking/summer_olympics', ['olympic_year' => '2000'])

                <h3>20k Walk - Men</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD"><a href="http://en.WikipediA.org/wiki/Robert_Korzeniowski" target="_blank">Robert&nbsp;Korzeniowski @svg('link')</a> (POL) 1:18:59 (Olympic record)</li>
                        <li class="SILVER">Noe Hern&aacute;ndez (MEX) 1:19:03</li>
                        <li class="BRONZE">Vladimir Andreyev (RUS) 1:19:27</li>
                    </x-ui.list>

                    <h4>USA Walkers</h4>
                    <ol class="list-decimal text-sm | ml-8" start="40">
                        <li>Timothy Seaman USA 1:30:32</li>
                    </ol>

                <h3>50k Walk - Men</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD"><a href="http://en.WikipediA.org/wiki/Robert_Korzeniowski" target="_blank">Robert&nbsp;Korzeniowski @svg('link')</a> (POL) 3:42:22
                        <li class="SILVER">Aigars Fadejevs (LAT) 3:43:40
                        <li class="BRONZE">Joel S&aacute;nchez (MEX) 3:44:36
                    </x-ui.list>

                    <h4>USA Walkers</h4>
                        <ol class="list-decimal text-sm | ml-8" start="22">
                            <li><a href="https://en.wikipedia.org/wiki/Curt_Clausen" target="_blank"><a href="https://en.wikipedia.org/wiki/Curt_Clausen" target="_blank">Curt Clausen @svg('link')</a> @svg('link')</a> USA 3:58:39</li>
                        </ol>
                        <ol class="list-decimal text-sm | ml-8" start="28">
                            <li>Phillip Dunn USA 4:03:05</li>
                        </ol>
                        <ol class="list-decimal text-sm | ml-8" start="31">
                            <li>Andrew Hermann USA 4:07:18</li>
                        </ol>

                <h3>20k Walk - Women</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD">Wang, Liping (CHN) 1:29:05</li>
                        <li class="SILVER">Tysse-Pl&auml;tzer, Kjersti (NOR) 1:29:33</li>
                        <li class="BRONZE">Vasco, Mar&iacute;a (ESP) 1:30:23</li>
                    </x-ui.list>

                    <h4>USA Walkers</h4>
                        <ol class="list-decimal text-sm | ml-8" start="17">
                            <li>Michelle Rohl (USA) 1:34:26</li>
                        </ol>
                        <ol class="list-decimal text-sm | ml-8" start="38">
                            <li>Yueling Chen (USA) 1:39:36</li>
                        </ol>
                        <ol class="list-decimal text-sm | ml-8" start="44">
                            <li>Debbi Lawrence (USA) 1:47:20</li>
                        </ol>
            </div>
            <div class="col-span-2 sm:col-span-1">
                <h2 class=""><a name="2004Athens"></a>@svg('flags/gr', 'border') 2004 Athens</h2>
                @include('partials/racewalking/summer_olympics', ['olympic_year' => '2004'])

                <x-ui.list textSize="sm" leading="loose">
                    <li><a href="http://www.athens2004.com/athens2004" target="_blank">Official Site @svg('link')</a>
                </x-ui.list>

                <h3>20k Walk - Men</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD"><a href="http://en.WikipediA.org/wiki/Ivano_Brugnetti" target="_blank">Buugnetti&nbsp;Ivano @svg('link')</a> (ITA) 1:19:40  (PB)</li>
                        <li class="SILVER"><a href="http://en.WikipediA.org/wiki/Francisco_Javier_Ferna%CC%81ndez" target="_blank">Frenandez Francisco&nbsp;Javier @svg('link')</a> &nbsp;(ESP) 1:19:45</li>
                        <li class="BRONZE"><a href="http://en.WikipediA.org/wiki/Nathan_Deakes" target="_blank">Deakes Nathan @svg('link')</a> (AUS) 1:20:02</li>
                    </x-ui.list>

                    <h4>USA Walkers</h4>
                        <ol class="list-decimal text-sm | ml-8" start="20">
                            <li>Timothy Seaman (USA) 1:25:17</li>
                            <li>Kevin Eastler (USA) 1:25:20</li>
                        </ol>
                        <ol class="list-decimal text-sm | ml-8" start="26">
                            <li>John Nunn (USA) 1:27:38</li>
                        </ol>

                <h3>50k Walk - Men</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD"><a href="http://en.WikipediA.org/wiki/Robert_Korzeniowski" target="_blank">Robert&nbsp;Korzeniowski @svg('link')</a> (POL) 3:38:46 (<em><a href="http://en.WikipediA.org/wiki/Robert_Korzeniowski" target="_blank">WikipediA @svg('link')</a></em>)</li>
                        <li class="SILVER">Denis Nizhegorodov (RUS) 3:42.50</li>
                        <li class="BRONZE">Aleksey Voyevodin (RUS) 3:43.34</li>
                    </x-ui.list>

                    <h4>USA Walkers</h4>
                        <ol class="list-decimal text-sm | ml-8" start="32">
                            <li><a href="https://en.wikipedia.org/wiki/Curt_Clausen" target="_blank">Curt Clausen @svg('link')</a> (USA) 4:11:31</li>
                        </ol>
                        <ol class="list-decimal text-sm | ml-8" start="34">
                            <li>Phillip Dunn (USA) 4:12:49</li>
                        </ol>

                <h3>20k Walk - Women</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD">Tsoumel&eacute;ka&nbsp;Athanas&iacute;a (GRE) 1:29:12 (PB)</li>
                        <li class="SILVER">Ivanova&nbsp;Olimpiada (RUS) 1:29:16</li>
                        <li class="BRONZE">Saville&nbsp;Jane (AUS) 1:29:25</li>
                    </x-ui.list>

                    <h4>USA Walkers</h4>
                        <ol class="list-decimal text-sm | ml-8" start="43">
                            <li>Vaill&nbsp;Teresa (USA) 1:38:47</li>
                        </ol>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-8">
            <img class="block mx-auto w-1/3 my-6" src="/images/racewalking/olympic_logos/2000_1.png"alt="250px-1920_olympics_poster.jpg">
            <img class="block mx-auto w-1/3 my-6" src="/images/racewalking/olympic_logos/2004_1.png" alt="1924_1.png">
        </div>
    </x-card>
</div>

<div id="2008-2012">
    <x-card class="card-racewalk" nav=true>
        <div class="grid grid-cols-2 gap-8">
            <div class="col-span-2 sm:col-span-1">
                <h2 class=""><a name="2008Beijing"></a>2008 Beijing</h2>

                @include('partials/racewalking/summer_olympics', ['olympic_year' => '2008'])
                <x-ui.list textSize="sm" leading="loose">
                    <li><a href="http://www.beijing-2008.org" target="_blank">Official Site @svg('link')</a>
                    <li><a href="http://www.beijing2008china.com" target="_blank">Beijing 2008 China Summer Olympics UnOfficial</a>
                </x-ui.list>

                <h3>20k Walk - Men</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD">Valeriy BORCHIN (RUS) 1:19:01</li>
                        <li class="SILVER"><a href="http://en.WikipediA.org/wiki/Jefferson_Perez" target="_blank">Jefferson Perez @svg('link')</a>, (ECU) 1:19:15 (SB)
                        <li class="BRONZE"><a href="https://en.wikipedia.org/wiki/Jared_Tallent" target="_blank">Jared TALLENT @svg('link')</a> (AUS) 1:19:42</li>
                    </x-ui.list>

                    <h4>USA Walkers</h4>
                    <ol class="list-decimal text-sm | ml-8" start="43">
                        <li>Kevin EASTLER (USA) 1:28:44</li>
                    </ol>

                <h3>50k Walk - Men</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD">Alex SCHWAZER (ITA) 3:37:09 (OR)</li>
                        <li class="SILVER"><a href="https://en.wikipedia.org/wiki/Jared_Tallent" target="_blank">Jared TALLENT @svg('link')</a> (AUS) 3:39:2 (PB)
                        <li class="BRONZE">Denis Nizhegorodov&nbsp;(RUS) 3:40:14</li>
                    </x-ui.list>

                    <h4>USA Walkers</h4>
                    <ol class="list-decimal text-sm | ml-8" start="39">
                        <li>Phillip DUNN (USA) 4:08:32</li>
                    </ol>

                <h3>20k Walk - Women</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD">Olga KANISKINA  (RUS) 1:26:31 (OR)</li>
                        <li class="SILVER">Kjersti Tysse PLATZER (NOR) 1:27:07 (NR)</li>
                        <li class="BRONZE">Elisa RIGAUDO ITA 1:27:12 (PB)</li>
                    </x-ui.list>

                    <h4>USA Walkers</h4>
                    <ol class="list-decimal text-sm | ml-8" start="30">
                        <li>Joanne DOW (USA) 1:34:15 (SB)</li>
                    </ol>
            </div>
            <div class="col-span-2 sm:col-span-1">
                <h2 class=""><a name="2012London"></a>@svg('flags/gb', 'border')  2012 London</h2>

                @include('partials/racewalking/summer_olympics', ['olympic_year' => '2012'])

                <x-ui.list textSize="sm" leading="loose">
                    <li><a href="http://www.london2012.org" target="_blank">Official Site @svg('link')</a>
                </x-ui.list>

                <h3>20k Walk - Men</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD">Ding CHEN CHN 1:18:46</li>
                        <li class="SILVER">Erick BARRONDO GUA 1:18:57</li>
                        <li class="BRONZE">Zhen WANG CHN 1:19:25</li>
                    </x-ui.list>

                    <h4>USA Walkers</h4>
                    <ol class="list-decimal text-sm | ml-8" start="26">
                        <li>Trevor BARRON USA 1:22:46</li>
                    </ol>

                <h3>50k Walk - Men</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD leading-none"><strike>Sergey KIRDYAPKIN RUS 3:35:59</strike> <span class="text-xs"><strong>DSQ</strong> - Stripped of medal 24 March 2016 due to doping violations</span></li>
                        <li class="GOLD"><a href="https://en.wikipedia.org/wiki/Jared_Tallent" target="_blank">Jared TALLENT @svg('link')</a> AUS 3:36:53</li>
                        <li class="SILVER">Tianfeng SI CHN 3:37:16</li>
                        <li class="BRONZE">Robert HEFFERNAM IRL 3:37:54</li>
                    </x-ui.list>
                    <ol class="list-decimal text-sm | ml-8" start="43">
                        <li>John NUNN USA 4:03:28</li>
                    </ol>

                <p class="text-sm text-grey leading-snug | my-6"><strong>NOTE Mar 25, 2016</strong>: Australian <strong>Jared Tallent</strong> will be acknowledged as the gold medallist in the 50km walk at the 2012 London Olympics after a decision by sport’s top court in Switzerland to uphold the suspension of Sergey Kirdyapkin.</p>

                <h3>20k Walk - Women</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD">Elena LASHMANOVA RUS 1:25:02</li>
                        <li class="SILVER">Olga KANISKINA RUS 1:25:09</li>
                        <li class="BRONZE">Shenjie QIEYANG CHN 1:25:16</li>
                    </x-ui.list>

                    <h4>USA Walkers</h4>
                    <ol class="list-decimal text-sm | ml-8" start="29">
                        <li>Maria MICHTA USA 1:32:27</li>
                    </ol>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-8">
            <img class="block mx-auto w-1/3 my-6" src="/images/racewalking/olympic_logos/2008_1.png"alt="250px-1920_olympics_poster.jpg">
            <img class="block mx-auto w-1/3 my-6" src="/images/racewalking/olympic_logos/2012_1.png" alt="1924_1.png">
        </div>
    </x-card>
</div>

<div id="2016-2020">
    <x-card class="card-racewalk" nav=true>
        <div class="grid grid-cols-2 gap-8">
            <div class="col-span-2 sm:col-span-1">
                <h2 class=""><a name="2016RioDeJaneiro"></a>@svg('flags/br', 'border') 2016 Rio de Janeiro</h2>
                <p class="text-sm">The <b>2016 Summer Olympics</b> (Portuguese: Jogos Olímpicos de Verão de 2016), officially known as the Games of the XXXI Olympiad and as Rio 2016, is a major international multi-sport event due to be celebrated in the tradition of the Olympic Games, as governed by the International Olympic Committee (IOC).They are scheduled to be held from August 5 to 21, 2016.</p>

                @include('partials/racewalking/summer_olympics', ['olympic_year' => '2016'])

                <x-ui.list textSize="sm" leading="loose">
                    <li><a href="https://www.olympic.org/rio-2016" target="_blank">Official Site @svg('link')</a>
                </x-ui.list>

                <h3>20k Walk - Men</h3>
                        <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD">Zhen WANG CHN 1:19:14</li>
                        <li class="SILVER">Zelin CAI WANG CNH 1:19:26</li>
                        <li class="BRONZE">Dane BIRD-SMITH AUS 1:19:37</li>
                    </x-ui.list>
                <h3>50k Walk - Men</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD">Matej TOTH SVK 3:40:58</li>
                        <li class="SILVER">Jared TALENT AUS 3:41:16</li>
                        <li class="BRONZE">Hirooki ARAI JPN 3:41:24</li>
                    </x-ui.list>

                    <h4>USA Walkers</h4>
                    <ol class="list-decimal text-sm | ml-8" start="43">
                        <li>John NUNN USA 4:16:12</li>
                    </ol>
                <h3>20k Walk - Women</h3>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD">Hong LIU CHN 1:28:35</li>
                        <li class="SILVER">maria Guadalape CONZALEZ MEX 1:28:37</li>
                        <li class="BRONZE">Xiuzhi LU CHN 1:28:42</li>
                    </x-ui.list>

                    <h4>USA Walkers</h4>
                    <ol class="list-decimal text-sm | ml-8" start="22">
                        <li>Maria MICHTA-COFFEY USA 1:33:36</li>
                    </ol>
                    <ol class="list-decimal text-sm | ml-8" start="34">
                        <li>Miranda MELVILLE USA 1:35:48</li>
                    </ol>
            </div>
            <div class="col-span-2 sm:col-span-1">
                <h2 class=""><a name="2020Tokyo"></a>@svg('flags/jp', 'border') 2020 Tokyo</h2>
                <p class="text-sm">The <b>2020 Summer Olympics</b>, officially known as the Games of the XXXII Olympiad (Japanese: 第三十二回オリンピック競技大会 Hepburn: Dai Sanjūni-kai Orinpikku Kyōgi Taikai) and commonly known as Tokyo 2020, is an upcoming international multi-sport event that is scheduled to take place from July 24 to August 9 2020 in Tokyo, Japan.</p>

                <x-card class="card-racewalk">
                    <p class="text-brand text-base leading-tight font-black mb-2">July 21 to August 8, 2021</p>
                    <p class="text-brand text-xs mb-0">Originally due to take place from 24 July to 9 August 2020, the event was postponed in March 2020 as a result of the COVID-19 pandemic. Despite being rescheduled for 2021, the Games have retained the "Tokyo 2020" name for marketing and branding purposes. This marks the first time that the Olympic Games have been postponed rather than canceled altogether.</p>
                </x-card>

                @include('partials/racewalking/summer_olympics', ['olympic_year' => '2020'])
                <x-ui.list textSize="sm" leading="loose">
                    <li><a href="//tokyo2020.org" target="_blank">Official Site @svg('link')</a>
                </x-ui.list>

                <h3>20k Walk - Men</h3>
                    <p class="text-sm"><a href="https://olympics.com/tokyo-2020/olympic-games/en/results/athletics/result-men-s-20km-race-walk-fnl-000100-.htm" target="_blank">20km Walk - Men Results @svg('link')</a></p>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD">Massimo Stano ITL 1:21:05</li>
                        <li class="SILVER">Koki Ikeda JPN 1:21:05</li>
                        <li class="BRONZE">Toshikazu Yamanishi JPM 1:21:28</li>
                    </x-ui.list>


                    <h4>USA Walkers</h4>

                    <ol class="list-decimal text-sm | ml-8" start="50">
                        <li class="">Nick Christie USA 1:34:37</li>
                    </ol>

                <h3>50k Walk - Men</h3>
                    <p class="text-sm"><a href="https://olympics.com/tokyo-2020/olympic-games/en/results/athletics/result-men-s-50km-race-walk-fnl-000100-.htm" target="_blank">50km Walk - Men Results @svg('link')</a></p>

                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD">David Tomala (POL) 3:50:08</li>
                        <li class="SILVER">Jonathan Hilbert (GER) 3:50:44</li>
                        <li class="BRONZE"><a href="https://en.wikipedia.org/wiki/Evan_Dunfee" target="_blank">Evan Dunfee @svg('link')</a> (CAN) 3:50.59 SB</li>
                    </x-ui.list>

                    <p class="text-xs text-grey">This is the last year for a 50km Mens race to be contested as an Olympic event and is being replaced with a 35km (21.2 Miles. As <a href="https://olympic.ca/team-canada/evan-dunfee/" target="_blank"><b>Evan Dunfee</b> of Canada @svg('link')</a> has said. They can't figure our how to make money off of spectators at the walks as well as the Marathon are is one of the only events track and field events that is free for spectators. The IOC claims it too long of an event.</p>

                <h3>20k Walk - Women</h3>
                    <p class="text-sm"><a href="https://olympics.com/tokyo-2020/olympic-games/en/results/athletics/result-women-s-20km-race-walk-fnl-000100-.htm" target="_blank">20km Walk - Women Results @svg('link')</a></p>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class="GOLD">Antonalla Palmisano (ITL) 1:29:12</li>
                        <li class="SILVER">Sandra Lorena Arenas (COL) 1:29:37</li>
                        <li class="BRONZE"><a href="https://en.wikipedia.org/wiki/Liu_Hong_(racewalker)" target="_blank">Hong Lui @svg('link')</a> (CHN) 1:28:57</li>
                    </x-ui.list>

                <h4>US Walker</h4>
                    <x-ui.list textSize="sm" leading="loose">
                        <li class=""> 33. Robyn Stevens (USA) 1:37:42</li>
                    </x-ui.list>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-8">
            <img class="block mx-auto w-1/3 my-6" src="/images/racewalking/olympic_logos/2016_1.png"alt="250px-1920_olympics_poster.jpg">
            <img class="block mx-auto w-1/3 my-6" src="/images/racewalking/olympic_logos/2020_1.png" alt="1924_1.png">
        </div>
    </x-card>
</div>

<x-card class="card-racewalk">
    <h4>No More 50 km Walk in the Olympics &amp; World Championships</h4>
    <p class="text-brand-500">The International Olympic Committee is dropping the men's 50 km walk from the Olympics and World Cup/World Championships program and replaced it with the 35Km for the World Cup/World Championships. The Olympics 50km has been replaced with the Half-marathon Mixed Relay.</p>

    <p class="text-sm text-brand"><strong>2022 Update:</strong> Actually has been replaced with a <strong>35 km</strong> (21.748 Miles).</p>
</x-card>

<div id="2024-2028">
    <x-card class="card-racewalk" nav=true>
        <div class="grid grid-cols-2 gap-8">
            <div class="col-span-2 sm:col-span-1">
                <h2 class="mb-0"><a name="2024Paris"></a>@svg('flags/fr', 'border') 2024 Paris</h2>
                    <p class="font-medium | mt-1">Dates: <strong>26 July</strong> to <strong>11 August</strong></p>
                    <p class="text-sm">The 2024 Summer Olympics (French: Jeux olympiques d'été de 2024), officially known as the <strong>Games of the XXXIII Olympiad</strong> (French: <em>Jeux de la XXXIIIe Olympiade</em>), and commonly known as Paris 2024, is a forthcoming international multi-sport event that is scheduled to take place from <em>26 July</em> to <em>11 August 2024</em> in Paris, France.</p>

                @include('partials/racewalking/summer_olympics', ['olympic_year' => '2024'])
                <x-ui.list textSize="sm" leading="loose">
                    <li><a href="//www.paris2024.org/" target="_blank">Official Site @svg('link')</a>
                </x-ui.list>

                <h4 class="mb- mt-6">20km Walk Men</h4>
                    <p>Final: <strong>2024-08-01</strong><br>
                       Qualifying Standard: <strong>1:20:10</strong><br>
                       <em>No USA walkers have made the qualifying times.</em>
                   </p>
                    <ul class="text-sm leading-loose links-bold ml-12">
                        <li class="GOLD">Brian Daniel PINTADO (ECU) 1:18:22</li>
                        <li class="SILVER">Caio BONFIM (BRA) 1:19:09</li>
                        <li class="BRONZE">Alvaro MARTIN (ESP) 1:19:11</li>
                        <li class=""><a href="https://olympics.com/en/paris-2024/results/athletics/men-s-20km-race-walk/fnl-000100--" target="_blank">Complete Results <x-ui.icons.link /></a></li>
                    </ul>

                <h4 class="mb- mt-6">20km Walk Women</h4>
                    <p>Final: <strong>2024-08-01</strong><br>
                       Qualifying Standard: <strong>1:29:20</strong><br>
                       <em>No USA walkers have made the qualifying times.</em>
                   </p>
                    <ul class="text-sm leading-loose links-bold ml-12">
                        <li class="GOLD">Jiayu` YANG (CHN) 1:25:54 SB  </li>
                        <li class="SILVER">Maria PEREZ (ESP) 1:26:19 SB</li>
                        <li class="BRONZE">Jemima MONTAG (AUS) 1:26:25 AR</li>
                        <li class=""><a href="https://olympics.com/en/paris-2024/results/athletics/women-s-20km-race-walk/fnl-000100--" target="_blank">Complete Results <x-ui.icons.link /></a></li>
                    </ul>

                <h4 class="mb- mt-6">35km Team Race Walk <span class="text-base font-display font-medium italic">(mixed Men &amp; Women)</h4>
                    <p>Final: <strong>2024-08-07</strong></p>
                    <p class="text-base">This is a new event taking the place of the Mens 50 km walk that was last held at 2019 Doha World Championships and the 2020(21) Toyko Olympics.</p>
                    <p>There are alternating male and female legs of 11.45km, 10km, 10km, 10.75km</p>
                    <ul class="text-sm leading-loose cccld ml-12">
                        <li class="GOLD">MARTIN Alvaro / Maria PEREZ (ESP) 2:50:32 (Leg Times: 11.45km 43:33 (M), 10km 42:56 (F), 10km 38:11 (M), 10.75km 45:51 (F))</li>
                        <li class="SILVER">Brian Daniel PINTADO / Glenda MOREJON (ECU) 2:51:22</li>
                        <li class="BRONZE">Rhydian COWLEY / Jemima MONTAG (AUS) 2:52:38</li>
                        <li class="https://olympics.com/en/paris-2024/results/athletics/marathon-race-walk-relay-mixed/fnl-000100--" target="_blank"><strong>Complete Results</strong> <x-ui.icons.link /></li>
                    </ul>

            </div>
            <div class="col-span-2 sm:col-span-1">
                <h2 class="mb-0"><a name="2028LosAngeles"></a>@svg('flags/us', 'border') 2028 Los Angeles, USA</h2>
                    <p class="mt-1">Dates: <strong>14 July</strong> to <strong>30 July</strong></p>
                    <p class="text-sm">The <b>2028 Summer Olympics</b>, officially known as the <strong>Games of the XXXIV Olympiad</strong>, and commonly known as <strong>LA 2028</strong>, is a forthcoming international multi-sport event that is scheduled to take place from <em>July 21</em> to <em>August 6, 2028</em>, in Los Angeles, California, United States. This is the third time the Olympics are being held in Los Angeles.</p>

                <h5>Links</h5>
                @include('partials/racewalking/summer_olympics', ['olympic_year' => '2028'])

                <x-ui.list textSize="sm" leading="loose">
                    <li><a href="//la28.org/" target="_blank">Official Site @svg('link')</a>
                </x-ui.list>


                <h4 class="mb- mt-6">20km Walk Men</h4>
                    <p>Final: <strong>2024-08-01</strong><br>
                       Qualifying Standard: <strong>1:20:10</strong><br>
                       <em>No USA walkers have made the qualifying times.</em>
                   </p>
                    <ul class="text-sm leading-loose links-bold ml-12">
                        <li class="GOLD"></li>
                        <li class="SILVER"></li>
                        <li class="BRONZE"></li>
                        <li class=""><a href="" target="_blank">Complete Results <x-ui.icons.link /></a></li>
                    </ul>

                <h4 class="mb- mt-6">20km Walk Women</h4>
                    <p>Final: <strong></strong><br>
                       Qualifying Standard: <strong>TBA</strong><br>
                       <em></em>
                   </p>
                    <ul class="text-sm leading-loose links-bold ml-12">
                        <li class="GOLD"></li>
                        <li class="SILVER"></li>
                        <li class="BRONZE"></li>
                        <li class=""><a href="" target="_blank">Complete Results <x-ui.icons.link /></a></li>
                    </ul>

                <h4 class="mb- mt-6">35km Team Race Walk <span class="text-base font-display font-medium italic">(mixed Men &amp; Women)</span></h4>
                    <p>Final: <strong></strong></p>
                    <p>There are alternating male and female legs of 11.45km, 10km, 10km, 10.75km</p>
                    <ul class="text-sm leading-loose links-bold ml-12">
                        <li class="GOLD"></li>
                        <li class="SILVER"></li>
                        <li class="BRONZE"></li>
                        <li class="" target="_blank"><strong>Complete Results</strong> <x-ui.icons.link /></li>
                    </ul>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-8">
            <img class="block mx-auto w-1/3 my-6" src="/images/racewalking/olympic_logos/2024_1.png"alt="2024_1.png">
            <img class="block mx-auto w-1/3 my-6" src="/images/racewalking/olympic_logos/2028_1.png" alt="2028_1.png">
        </div>
    </x-card>
</div>

<div id="2032-2036">
    <x-card class="card-racewalk" nav=true>
        <div class="grid grid-cols-2 gap-8">
            <div class="col-span-2 sm:col-span-1">
                <h2 class=""><a name="2024Paris"></a>@svg('flags/au', 'border') 2032 Brisbane, Queensland, Australia</h2>
                <p class="text-sm">The <b>2032 Summer Olympics</b>, officially known as the <b>Games of the XXXV Olympiad</b>, 23 July to 8 August 2032, in Brisbane, Queensland, Australia.</p>

                <p class="text-sm">It will be the third Summer Games to be held in Australia after the 1956 Summer Olympics in Melbourne, Victoria, and the 2000 Summer Olympics in Sydney, New South Wales. It will also be the fourth Summer Games to be held in the Southern Hemisphere, after the aforementioned games in Australia in Melbourne, and Sydney, and the 2016 Summer Olympics in Rio de Janeiro, Brazil. This will also be the second Summer Games to be held entirely in a host city’s meteorological winter after Rio.</p>

                @include('partials/racewalking/summer_olympics', ['olympic_year' => '2032'])
            </div>
            <div class="col-span-2 sm:col-span-1">
                <h2 class=""><a name="2028LosAngeles"></a>2036</h2>

                @include('partials/racewalking/summer_olympics', ['olympic_year' => '2036'])
            </div>
        </div>
        <div class="grid grid-cols-2 gap-8">
            <img class="mx-auto w-1/3 my-6" src="/svg/Olympic-Rings.svg" alt="Olympic-Rings.svg">
            <img class="mx-auto w-1/3 my-6" src="/svg/Olympic-Rings.svg" alt="Olympic-Rings.svg">
       </div>
    </x-card>
</div>
