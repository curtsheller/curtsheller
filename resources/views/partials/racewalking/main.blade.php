<x-card class="card-racewalk">
    <h1>Racewalking</h1>
    <p>There are two racewalking distances contested at the Summer Olympics: the 20 kilometers race walk (men and women) and 50 kilometers race walk (men only). Both are held as road events. The biennial IAAF World Championships in Athletics also features the same events with the addition of a womens 50 kilometers walk. The IAAF World Race Walking Cup, first held in 1961, is a stand-alone global competition for the discipline and it has 10 kilometers race walks for junior athletes, in addition to the Olympic-standard events. The IAAF World Indoor Championships featured 5000 m and 3000 m race walk variations, but these were discontinued after 1993. Top level athletics championships and games typically feature 20 km racewalking events.</p>

    <p class="text-lg text-brand font-semibold | mx-12 my-6"><strong>2021 Update</strong>: Starting with the World Athletics Championships Oregon `22 and the 2024 Paris Summer Olympic the 50km distance has been dropped and changes to a 35km for both men and women.</p>

    <p>The sport emerged from a British culture of long-distance competitive walking known as pedestrianism, which began to develop the rule set that is the basis of the modern discipline around the mid-19th century. Watching people walk was America's favorite spectator sport in the late 19th century. Since the mid-20th century onwards, Russian and Chinese athletes have been among the most successful on the global stage, with Europe and parts of Latin America producing most of the remaining top level walkers.</p>

    <p>Compared to other forms of foot racing, stride length is reduced; to achieve competitive speeds racewalkers must attain cadence rates comparable to those achieved by world-class 800 meters runners.</p>

    <p>The learn all about racewalking in the US go the <a class="underline-brand" href="http://www.usatf.org/Sports/Race-Walking.aspx"><b>USATF Race Walking</b></a> @svg('link')site. For even more information beyond what is here on my site go to <a href="//racewalking.org/" target="_blank">Dave McGovern's World Class Racewalking/Power Walking <x-ui.icons.link /></a> or Racewalk.com.</p>
</x-card>


<x-card class="card-racewalk" nav=true>
    <h2>IAAF Introduction To Race Walking</h2>

    <p>Written by <a href="https://en.wikipedia.org/wiki/Maurizio_Damilano"><b>Maurizio Damilano</b> @svg('link')</a>; Technical Consultant Sandro Damilano (Saluzzo Race Walking School); produced by IAAF. Maurizio Damilano was the 1980 Olympic Champion and the 1987 and 1991 World Champion in the 20 km race walk.</p>
    <div class="img-center img-thumbnail">
        <iframe width="560" height="315" class="" src="https://www.youtube.com/embed/z47KyUUiQHU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</x-card>

<x-card class="card-racewalk" nav=true>
    <div class="img-center img-thumbnail">
        <iframe class="" src="//player.vimeo.com/video/2680340" width="500" height="282" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
</x-card>

<x-card class="card-racewalk" nav=true>
    <div class="grid grid-cols-12 gap-2">
        <div class="col-span-3">
            <div class="img-center"><img class="img-thumbnail bg-white shadow" src="/images/photos/racewalk/CS-PolarBear.png"></div>
            <p class="text-center text-xs leading-normal mt-3 mx-4"><b>Polar Bear 10 Mile Racewalk</b>, Asbury Park, NJ</p>
        </div>
        <div class="col-span-3">
            <div class="img-center"><img class="img-thumbnail bg-white shadow" src="/images/photos/racewalk/CS-20k-WAVA-1995.png" alt=""></div>
            <p class="text-center text-xs leading-normal mt-3 mx-4"><b>20 km, XI World Veterans Athletic Championships</b>, Niagara Falls, NY 1995 ( <em>bronze medal mx-4 40-45 age group</em> )</span></p>
        </div>
        <div class="col-span-3">
            <div class="img-center"><img class="img-thumbnail bg-white shadow" src="/images/photos/racewalk/CS-5k-WAVA-1995.png" alt=""></div>
            <p class="text-center text-xs leading-normal mt-3 mx-4"><b>5 km, XI World Veterans Athletic Championships</b>, Buffalo, NY 1995</p>
        </div>
        <div class="col-span-3">
            <div class="img-center"><img class="img-thumbnail bg-white shadow" src="/images/photos/racewalk/CS-Zinn-88.png" alt=""></div>
            <p class="text-center text-xs leading-normal mt-3 mx-4"><b>Ronn Zinn 10 Miler</b>, April 1988, Asbury Park, NJ</p>
        </div>
    </div>
</x-card>

@foreach ( ['WorldClassRacewalking', 'ShoreAC'] as $listing)
    @include('models/listings/catalog/lg', ['record' => App\Models\Listing::byCode($listing)])
@endforeach

<x-card class="card-racewalk" nav=true>
    <h2 class="">Robert Korzeniowski</h2>

    <p>Four time Olympic medalist, three 50Km golds in a row, double gold medal winner Sydney Olympics 2000 - <a class="underline-brand" href="http://www.korzeniowski.pl" target=_blank><b>Robert Korzeniowski</b></a> @svg('link'). Robert Korzeniowski <q>Special K</q> has to be considered the greatest race walker ever.</p>
</x-card>

<x-card class="card-racewalk" nav=true>
    <h2 class="">International Association Link</h2>
    <ul class="links-bold">
        <li><b>IOC</b> - The Official Website Of The Olympic Movement - <a href="http://www.olympic.org" target="_blank">link @svg('link')</a>
        <li><b>IAAF</b> - International Association of Athletics Federations - <a href="http://www.iaaf.org" target="_blank">link @svg('link')</a>
    </ul>
</x-card>

@foreach ( [ 'NationalMastersNews','USATFMasters','WorldMastersAthletics' ] as $listing)
    @include('models/listings/catalog/lg', ['record' => App\Models\Listing::byCode($listing)])
@endforeach

<x-card class="card-racewalk" nav=true>
    <h2 class="">Misc Great Racewalking Information Around the Web</h2>

    <p class="text-center my-4"><i class="fa fa-calendar text-gray" aria-hidden="true"></i> ( <b>2018 Update</b> ) - Getting back into training and competitive walking and<br>I'll be updating these pages over time as I progress. <span class="text-gray">( Look out John S.! )</span></p>

    <div class="grid grid-cols-2 gap-2">
        <div class="col-span-1">
            <ul class="links-bold">
                <li><b>USATF Racewalking Page</b> - [ <a href="http://www.usatf.org/groups/RaceWalking/" target=_blank>link</a> ]</li>
                <li><a href="http://www.pbs.org/americaswalking/series/index.html" target=_blank>America's Walking</a> PBS series hosted by Mark Fenton<p>America's Walking is a new weekly fitness, travel and lifestyle series designed to get you walking. Hosted by Mark Fenton, the country's foremost expert on walking and pedestrian issues, the television series travels around the country interviewing leading experts and regular folks struggling to maintain an active, healthy lifestyle.</p></li>
                <li><a href="http://www.racewalking.org" target=_blank>Dave McGovern's Worldclass Walking</a><p>Check out Dave's website. Dave has been a national class racewalker for many years and a great competitor. <b>Dave's World Class Racewalking Clinics</b> have been getting rave reviews everywhere one is staged.</p></li>
            </ul>
        </div>
        <div class="col-span-1">
            <ul class="list-disc leading-normal ml-8">
                <li><a href="http://racewalkplanetradio.blogspot.com">Race Walk Planet Radio</a><p>Race Walk Planet Radio, the only podcast devoted exclusively to news, information, results, and interviews about our favorite Olympic sport.</p></li>
                <li><a href="http://home.ptd.net/~rrrawls/wyoval.htm">Wyoming Valley Striders Home Page</a> Maria Moulton and Gloria Rawls are members of this club as well as racing for the <a href="http://www.shoreac.org">Shore AC</a></li>
                <li><a href="http://www.racewalk.com">Jeff Salvage</a>'s Web Site
                <li><a href="http://www.nycmarathon.org/">New York Road Runners</a> - The annual New York City Marathon has an elite racewalk division. Plus numerious walkers always walk this race.</li>
                <li><a href="http://eracewalk.com/Narf.htm">NARF</a></li>
            </ul>
        </div>
    </div>
</x-card>

<x-card class="card-racewalk" nav=true>
    <div class="grid grid-cols-2 gap-2">
        <div class="col-span-1">
            <h2 class="">International Sites</h2>
                <ul class="list-disc leading-normal ml-12">
                    <li class="AUS"><a href="http://gatekeeper.ausport.gov.au/aths/" target='_blank'>Athletics Australia</a> @svg('link')</li>
                    <li class="AUS"><a href="http://www.ausport.gov.au/aths/qa/qaqrwc.html" target='_blank'>Queensland Race Walking Club Inc</a> @svg('link')</li>
                    <li class="AUS"><a href="http://www.geocities.com/colosseum/5654/coburg97.html" target='_blank'>Australian Centurions' website</a> @svg('link')</li>
                    <li class="AUS"><a href="http://www.scullin.starway.net.au/~strangman/index.html" target='_blank'>Denis Strangman Canberra</a>, Australia</li>
                    <li class="CAN"><a href="http://www.canoe.ca/athcan/home.html" target='_blank'>Athletics Canada</a> @svg('link')</li>
                    <li class="GBR"><a href="http://www.british-athletics.co.uk/" target='_blank'>British Athletics</a> @svg('link')</li>
                    <li class="GER"><a href="http://www.dlv-sport.de/" target='_blank'>Deutscher Leichtathletik Verband (DLV)</a> @svg('link')</li>
                    <li class="ITA"><a href="http://itnw.roma.it/fidal/" target='_blank'>Frederazione Italiana Di Atletica Leggera</a> @svg('link')</li>
                    <li class="NOR"><a href="http://www.nif.idrett.no/gang/" target='_blank'>Norges Gan-og Turmarsjforbund</a> @svg('link')</li>
                    <li class="NZL"><a href="http://www.athletics.org.nz/" target='_blank'>Athletics New Zealand</a> @svg('link')</li>
                    <li class="RSA"><a href="http://www.asa.org.za/" target='_blank'>Athletics South Africa</a> @svg('link')</li>
                    <li class="SWE"><a href="http://www.svenskidrott.se/walking/" target='_blank'>Swedish Walking Federation</a> @svg('link')</li>
                    <li class="USA"><a href="http://www.usatf.org/groups/RaceWalking/" target='_blank'>USA Race Walking</a> @svg('link')</li>
                </ul>
        </div>
        <div class="col-span-1">
            <h2 class="">Masters Sites</h2>
                <ul class="list-disc leading-normal">
                    <li class="user"><a href="http://www.mastersracewalkrankings.com/" target='_blank'>Unofficial Masters Race Walk Rankings</a> @svg('link')</li>
                    <li class="user"><a href="http://www.mastersathletics.net/" target='_blank'>Masters Athletics, Masters Track and Field, Athletics, World Rankings</a> @svg('link')</li>
                </ul>
        </div>
    </div>
</x-card>

<x-card class="card-racewalk" nav=true>
    <h2 class="">Clubs</h2>
        <ul class="list-disc leading-normal">
            <li><a href="http://www.farcnj.com/" target='_blank'>Freehold Area Running Club (FARC) @svg('link')</a></li>
            <li><a href="http://www.shoreac.org/" target='_blank'>Shore AC @svg('link')</a></li>
        </ul>
</x-card>

<x-card class="card-racewalk" nav=true>
    <h2 class="">Race Timing</h2>
        <ul class="list-disc leading-normal">
            <li><a href="http://www.bestrace.com/" target='_blank'>BEST Racing Systems</a> @svg('link') - Systems Specialists in Road Race Computerized Scoring and Finish Line Management</li>
            <li><a href="http://www.lmsports.com/" target='_blank'>L M ComputerSports &amp;Event Productions, Inc.</a> @svg('link') - Road Races - Triathlons - Swims - Special Events</li>
        </ul>
</x-card>
