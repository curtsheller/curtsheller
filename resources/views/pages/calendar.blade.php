<x-app-layout>
    <x-slot name="header">
        {{-- @include('layouts/page/header') --}}
        <x-page-header>
            <x-slot name="title">
                Calendar
            </x-slot>
            <x-slot name="description">
            </x-slot>
            <x-slot name="updated">
                4 June 2022
            </x-slot>
            @svg('user')
        </x-page-header>
    </x-slot>

    <x-slot name="mininav">
        @include('layouts/nav/section/about')
    </x-slot>

    <x-card>
        <h2>On Going @svg('calendar', 'text-brand-300')</h2>
        <p class=""><b>CANCELLED Due to COVID-19</b> &bull; <b>Every Wednesday Night</b> I sit-in at the <a class="underline-brand" href="//www.facebook.com/The-Barto-Jam-at-The-Other-Farm-315800655212760/"><b>World Famous Barto Jam</b></a> @svg('link') with <a class="underline-brand" href="//www.facebook.com/jack.murray.1293">Jack Murry</a> @svg('link'), <a class="underline-brand" href="//www.facebook.com/nick.franclik">Nick Franclik</a> @svg('link'), <a class="underline-brand" href="//www.facebook.com/alan.landes.3">Alan Landes</a> @svg('link') and the crew. I also typically do a few solo numbers.</p>

        <p><span class="lead"><b>Third Saturday of Every Month</b></span> - <a class="underline-brand" href="//www.meetup.com/funkyfrets/"><b>Funky Frets</b></a> @svg('link'), Boyertown, PA - <strong>FREE Getting Started Ukulele Workshop</strong> from 1-2pm.</p>
        </p>
    </x-card>

    {{-- 2022 --}}
    <x-card>
        <h2>2022 @svg('calendar', 'text-brand-300')</h2>
        <p>HCheckout out our family store, Funky Frets Music Store for all the events we hold at the store and the annual FUnky Frets Uke Fest, which is live this year - finally!!!</p>
                <ul class="list-disc">
                    <li><b>October 7-8-9, 2022</b> - The 7th Annual Funky Frets Uke Fest &mdash; <strong>LIVE</strong>.</li>
                </ul>
    </x-card>

    {{-- 2021 --}}
    <x-card>
        <h2>2021 @svg('calendar', 'text-brand-300')</h2>
        <p>Here's hoping for a better 2021. However it looks like in the USA it won't be for a time - if all goes well.</p>
        <ul class="list-disc">
            <li><b>????</b> - </li>
    </x-card>


    {{-- 2020 --}}
    <x-card>
        <details>
            <summary>
                <span class="font-heading text-brand-500 text-3xl"><b>2020</b> @svg('calendar', 'text-brand-300')</span>
            </summary>
            <div>
                <p>Everything is Virtual since March 2020 due to COVID-19.</p>
                <ul class="list-disc">
                    <li><b>October 3-4-5, 2020</b> - The 6th Annual Funky Frets Uke Fest - Virtual.</li>
                    <li><b>Sunday, December 13, 2020) &bull; 2 Pm to 2:25 PM</b> - Performing virtually at the 2020 Philadelphia Mainline Ukulele Group's Steel City Cafe,  Holiday Jam.</li>
                </ul>
            </div>
        </details>
    </x-card>


    {{-- 2019 --}}
    <x-card>
        <details>
            <summary>
                <span class="font-heading text-brand-500 text-3xl">2019 @svg('calendar', 'text-brand-300')</span>
            </summary>
            <div>
                <ul class="list-disc leading-loose mx-8 mb-4">
                    <li><b>March 2, 2019 - Performing</b>
                        <p><a class="underline-brand" href="//sites.google.com/site/uhciii2018/"><b>Ukulele Harmonic Convergence (UHC) IV</b></a> @svg('link') - Lancaster, PA, United States &bull; performing.</p>
                    </li>
                    <li><b>March 16, 2019 - Performing and Workshops</b>
                        <p><a class="underline-brand" href="//gaithersburgukefest.com/"><b>Gaithersburg Uke Fest</b></a> @svg('link') - Epworth United Methodist Church, Gaithersburg, Maryland, United States &bull; performing and presenting several workshops.</p>
                    </li>
                    <li><b>October 4-5-6 - Trio, Solo and Workshops</b>
                        <p><a class="underline-brand" href="//www.funkyfretsukefest.com"><b>Funky Frets Uke Fest</b></a> @svg('link') - Boyertown, PA, United States &bull; Presenting several workshops and performing.</p>
                    </li>
                </ul>
            </div>
        </details>
    </x-card>

    {{-- 2018 --}}
    <x-card>

            <details>
                <summary>
                    <span class="font-heading text-brand-500 text-3xl">2018 @svg('calendar', 'text-brand-300')</span>
                </summary>
                <div>
                    <ul class="list-disc leading-loose mx-8 mb-4">
                        <li><b>October 5-6-7 - Solo and Workshops</b> - <a class="underline-brand" href="//funkyfretsukefest.com/"><b>Funky Frets Uke Fest </b></a> @svg('link') - Boyertown, PA, United States.</li>
                        <li><b>February 24</b> - <a class="underline-brand" href="://sites.google.com/site/uhciii2018/"><b>Ukulele Harmonic Convergence</b></a> @svg('link') - Teluses 360, Lancaster, PA USA.</li>
                    </ul>
                </div>
            </details>

    </x-card>

    {{-- 2017 --}}
    <x-card>

            <details>
                <summary>
                    <span class="font-heading text-brand-500 text-3xl">2017 @svg('calendar', 'text-brand-300')</span>
                </summary>
                <div>
                    <ul class="list-disc leading-loose mx-8 mb-4">
                       <li><b>March 18</b> - <a class="underline-brand" href="//soiree.alleghenyukes.com/"><b>House Concert</b></a> @svg('link') - Herdon, VA, I'll be presenting two (3) `ukulele workshops (<em>Ukulele Doodling: Introduction to Scales and Soloing on Ukulele</em>, <em>Exploring Jazz Chords on Ukulele</em> ). Followed by a solo concert. Here is an <a class="underline-brand" href="//learningukulele.com/posts/44"><em><b>announcement from the Glen Hirabayashi</b></em></a> @svg('link') who is hosting the workshops and performance. It's like getting six months worth of lessons on one day.</li>

                        <li><b>Friday, April 14 - Trio</b> - <a class="underline-brand" href="//www.clayonmain.org/half-moon-cafe//"><b>Half Moon Cafe</b></a> @svg('link') - 313 Main St. Oley, PA &bull;The Curt Sheller Jazz Trio. We'll be doing a lot of new songs.</li>

                        <li><b>Saturday, April 22</b> - <a class="underline-brand" href="//soiree.alleghenyukes.com/"><b>4th annual Allegheny Ukulele Soiree</b></a> @svg('link') - The Laurel Lodge Altoona, PA, I'll be presenting three (3) `ukulele workshops (<em>Learning the Ukulele Fingerboard</em>, <em>Ukulele Doodling: Introduction to Scales and Soloing on Ukulele</em>, <em>Building Left Hand Technique</em> ) and with Lil' Rev there I'll sure to be sitting in.</li>

                        <li><b>June 24 - Solo</b> - <a class="underline-brand" href="//www.godfreydaniels.org/"><b>Godfrey Daniels</b></a> @svg('link') - 7 E 4th St., Bethlehem, PA &bull; Solo  opening slot for <a class="underline-brand" href="//www.kennedysmusic.com">The Kennedys</a> @svg('link')</li>

                        <li><b>August 26 - Trio</b> - <a class="underline-brand" href="//folkproject.org/njukefest//"><b>New Jersey Uke Fest</b></a> @svg('link') - 7 E 4th St., Ukrainian American Cultural Center of New Jersey, Morristown, NJ</li>

                        <li><b>October 7</b> - <a class="underline-brand" href="//www.funlyfretsukefest.com/"><b>Funky Frets Uke Fest</b></a> @svg('link') - Boyertown, PA, United States &bull; Presenting several workshops and performing.</li>
                    </ul>                </div>
            </details>

    </x-card>

    {{-- 2016 --}}
    <x-card>

            <details>
                <summary>
                    <span class="font-heading text-brand-500 text-3xl">2016 @svg('calendar', 'text-brand-300')</span>
                </summary>
                <div>
                    <ul class="list-disc leading-loose mx-8 mb-4">
                        <li><b>December 5, 2016</b> - <a class="underline-brand" href="//www.glicksgreenhouse.com"><b>6:30-8:30 Curt Sheller Trio ( <em>billed as Funky Frets</em> )</b></a> @svg('link'), Glick’s Greenhouse Annual Poinsettia Show Christmas in Hawai`i • 57 Fisher Mill Road, Oley, PA</li>
                        <li><b>October 14, 2016</b> - <a class="underline-brand" href="//www.theotherfarmbrewingcompany.com"><b>Funky Frets Night at the Other Farm Brewing Company</b></a> @svg('link'), Boyertown, PA</li>
                        <li><b>September 30 to October 2, 2016</b> - <a class="underline-brand" href="//www.funkyfretsukefest.com"><b>Funky Frets Uke Fest</b></a> @svg('link'), Boyertown, PA - Trio, Solo and Workshops</li>
                        <li><b>August 26–27, 2016</b> - <a class="underline-brand" href="http://www.folkproject.org/njukefest/">2016 New Jersey Uke Fest</a> @svg('link'), Whippany, NJ | August 28, Morristown, NJ. In addition to <b>Funky Frets</b> being a vendor I'll be presenting a 90 minute Ukulele 101 beginner workshop. Workshop will be suitable for beginners to intermediate beginners.</li>
                        <li><b>August 18-21, 2016 (Thursday to Sunday)</b> - <a class="underline-brand" href="http://pfs.org/philadelphia-folk-festival/55th-folk-festival/"><b>55th Philadelphia Folk Festival</b></a> @svg('link'), 1323 Salford Station Rd, Harleysville, PA 19438</li>
                        <li><b>May 21, 2016 &bull; Saturday</b> - <a class="underline-brand" href="//www.funkyfrets.com"><b>Funky Frets 2nd Acoustic Night at the Bear's Ben @ 4PM</b></a> @svg('link'), Boyertown, PA. <p>This event will be open to any Acoustic players looking for a chance to perform in front of others. Funky Frets will be hosting this Acoustic Open Mic at The Bears' Den in Boyertown, PA</li>
                        <li><b>April 23, 2016 &bull; Saturday</b> - <a class="underline-brand" href="//www.funkyfrets.com"><b>Funky Frets Music Store</b></a> @svg('link'), Boyertown, PA - Solo performance for Jazz Appreciation Month.</li>
                        <li><b>April 16, 2016 &bull; Saturday</b> -  <a class="underline-brand" href="//soiree.alleghenyukes.com"><b>3rd annual Allegheny Ukulele Soiree</b> - The Laurel Lodge Altoona, PA</a> @svg('link'), 2/3 of the Funky Frets crew will be attending this great festival in center Pennsylvania, as fans. It's not often that we get to go to a festival where we are not a vendor, presenting workshops or I'm performing.</li>
                        <li><b>April 2, 2016 &bull; Saturday</b> - <a class="underline-brand" href="http://www.theotherfarmbrewingcompany.com"><b>The Other Farm Brewing Company</b></a> @svg('link'), Boyertown, PA - <b>The Curt Sheller Jazz Trio</b>. Opening for Andy Mowatt as part of the Berks Jazz Fest. We'll be performing selection from out How About More Uke? CD.</li>
                        <li><b>March 5, 12, 19, 26, 2016 &bull; Saturday</b> - <a class="underline-brand" href="//www.theotherfarmbrewingcompany.com"><b>Essential Strums for Ukulele - A Guide to Ukulele Strums</b></a> @svg('link'), Funky Frets, Boyertown, PA - 4 week workshop for finally learning about strums a.h.a. Rhythm. $79 for all four weeks.</li>
                    </ul>
                </div>

    </x-card>

    {{-- 2015 --}}
    <x-card>

            <details>
                <summary>
                    <span class="font-heading text-brand-500 text-3xl">2015 @svg('calendar', 'text-brand-300')</span>
                </summary>
                <div>
                    <ul class="list-disc leading-loose mx-8 mb-4">
                        <li><b>Friday, August 28, 2015</b> - <a class="underline-brand" href="//folkproject.org/ukefest/ukefest.shtml"><b>New Jersey Uke 3</b></a> @svg('link'), Morristown, NJ - Solo</li>
                        <li><b>Sunday, August 30, 2015</b> - <a class="underline-brand" href="//morningstarstudios.com"><b>MorningStar Studios</b></a> @svg('link'), East Norriton, PA - Recording session for <b>How About More Uke? CD</b>. This is a my long in the works jazz ukulele CD.</li>
                        <li><b>Monday, September 10, 2015</b> - <a class="underline-brand" href="//morningstarstudios.com"><b>MorningStar Studios</b></a> @svg('link') - more work on the CD.</b></li>
                        <li><b>Monday, September 20, 21, 2015</b> - <a class="underline-brand" href="//morningstarstudios.com"><b>MorningStar Studios</b></a> @svg('link') - Final batch of 6 or 7 songs.</b></li>
                        <li><b>Monday, September 28, 2015</b> - <a class="underline-brand" href="//morningstarstudios.com"><b>MorningStar Studios</b></a> @svg('link') - Final tweaks and off to mixing, mastering, art and release.</b></li>
                        <li><b>Friday and Saturday, October 2-3, 2015</b> - <a class="underline-brand" href="//www.funkyfretsukefest.com"><b>Funky Frets Uke Fest</b></a> @svg('link'), Boyertown, PA - Solo, Duo and Jazz Trio</li>
                        <li><b>Wednesday, October 14, 2015</b> - <a class="underline-brand" href="//morningstarstudios.com"><b>MorningStar Studios</b></a> @svg('link') - mixing and any last minute tweaks.</b></li>
                        <li><b>Saturday, October 17, 2015</b> - <a class="underline-brand" href="//boyertownpickfest.com"><b>Boyertown Pickfest</b></a> @svg('link'), Boyertown, PA - Jazz Trio on the Phoenix Crane Stage</li>
                        <li><b>Wednesday, October 28, 2015</b> - <a class="underline-brand" href="//morningstarstudios.com"><b>MorningStar Studios</b></a> @svg('link') - mixing How About More Uke?.</b></li>
                        <li><b>Monday, Tuesday, November 2-3, 2015</b> - <a class="underline-brand" href="//morningstarstudios.com"><b>MorningStar Studios</b></a> @svg('link') - mixing - mastering How About More Uke?.</b></li>
                        <li><b>Saturday, November 7, 2015</b> - <a class="underline-brand" href="//www.ukefestva.com"><b>UkeFest VA 2015</b></a> @svg('link'),  Cultural Arts Center at Glen Allen, VA</li>
                        <li><b>Sunday, November 15, 2015</b> - <a class="underline-brand" href="http://www.meetup.com/funkyfrets/events/225894712/"><b>Recipe for Success Ukulele Workshop</b></a> @svg('link'), 600 E. Philadelphia Ave., Funky Frets, Boyertown, PA</li>
                        <li><b>Sunday, November 15, 2015</b> - <a class="underline-brand" href="http://www.meetup.com/funkyfrets/events/222814783/"><b>Funky Frets Uke Jam</b></a> @svg('link'), 600 E. Philadelphia Ave., Funky Frets, Boyertown, PA</li>
                        <li><b>Saturday, November 21, 2015</b> - <a class="underline-brand" href="//www.thebearsdencafe.com"><b>Bear's Den</b></a> @svg('link'), 133 S Chestnut St, Boyertown, PA  - Funky Frets Acoustic Night - Solo Ukulele</li>
                    </ul>
                </div>

    </x-card>

    {{-- Previous Performances --}}
    <x-card>

            <h2>Previous Performances, Appearances and Workshops @svg('calendar', 'text-brand-300')</h2>
            <div class="grid grid-cols-2 gap-8">
                <div class="col-span-1">
                    <ul class="list-disc leading-loose mx-12">
                        <li class="flag-PA"><b>Allegheny Ukulele Soiree</b></li>
                        <li class="flag-PA"><b>Boyertown Pickfest</b></li>
                        <li class="flag-PA"><b>First Occasional Columbia Ukulele Symposium</b></li>
                        <li class="flag-PA"><b>Funky Frets Uke Fest</b></li>
                        <li class="flag-MD"><b>Gathersburg Uke Fest</b></li>
                        <li class="flag-PA"><b>Godfery Daniels</b></li>
                        <li class="flag-MS"><b>M.A.U.I Ukulele Festival</b></li>
                        <li class="flag-NY"><b>New York Ukulele Festival</b></li>
                        <li class="flag-PA"><b>Philadelphia Folk Festival</b></li>
                    </ul>
                </div>
                <div class="col-span-1">
                    <ul class="list-disc leading-loose mx-12">
                        <li class="flag-PA"><b>Pick Fest, Boyertown, PA</b></li>
                        <li class="flag-NV"><b>Reno Uke Fest</b></li>
                        <li class="flag-CA"><b>Southern California Ukulele Festival</b></li>
                        <li class="flag-NV"><b>Tahoe Uke Fest II</b></li>
                        <li class="flag-WI"><b>The Milwaukee Ukulele Festival</b></li>
                        <li class="flag-PA"><b>The Other Farm Brewing Company</b></li>
                        <li class="flag-VA"><b>UkeFest VA</b></li>
                        <li class="flag-PA"><b>Ukulele Harmonic Convergence</b></li>
                        <li class="flag-IL"><b>Windy City Ukulele Festival</b></li>
                    </ul>
                </div>
            </div>

    </x-card>

</x-app-layout>
