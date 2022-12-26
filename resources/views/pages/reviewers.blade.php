@extends('layouts/app')

@section('content')

    <x-card>

            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-5">
                    <h4>The Trio is:</h4>
                    <ul class="list-disc leading-normal ml-8">
                        <li><a href="//www.curtsheller.com"><b><a href="curt">Curt Sheller</a></b></a> &bull; `ukulele</li>
                        <li><a href="//www.ericschreiberbass.com"><b><a href="eric">Eric Schreiber</a></b></a> &bull; bass</li>
                        <li><b><a href="ed">Ed Rick</a></b> &bull; drums</li>
                    </ul>
                </div>
                <div class="col-span-7">
                    <img class="center-block img-thumbnail m-y" src="/images/CS-Tenor-2.jpg" alt="">
                    <p class="text-sm text-center text-gray-500"><em>MorningStar's Neve Room</em></p>
                </div>
            </div>

    </x-card>

    <x-card>

            <p><b>How About More Uke?</b> was recorded over two days: <em>Sunday, August 30, 2015</em> and <em>Monday, September 20, 2015</em> at <i class="fa fa-globe"></i> <a href="//www.morningstarstudios.com"><b>MorningStar Studios</b></a> 3150 Sunset Ave. East Norriton, PA 19403 by Glenn Barratt owner and engineer, a true <em>magician</em> at the controls. Checkout their <i class="fa fa-facebook-square"></i> <a href="//www.facebook.com/morningstarstudios">facebook</a> page for more info.</p>

            <h3>Review MP3 Copies</h3>
                <ol class="list-numeric leading-normal mx-8">
                    <li><a href="/assets/mp3/hamu/1-Introduction.mp3">Introduction</a></li>
                    <li><a href="/assets/mp3/hamu/2-Sway.mp3">Sway</a></li>
                    <li><a href="/assets/mp3/hamu/3-I'll-Remember-April.mp3">I'll Remember April</a></li>
                    <li><a href="/assets/mp3/hamu/4-Glen's-Cove.mp3">Glen's Cove</a></li>
                    <li><a href="/assets/mp3/hamu/5-Blue-Bossa.mp3">Blue Bossa</a></li>
                    <li><a href="/assets/mp3/hamu/6-A-Spy-In-Love.mp3">A Spy In Love</a></li>
                    <li><a href="/assets/mp3/hamu/7-Don't-Get-Around-Much-Anymore.mp3">Don't Get Around Much Anymore</a></li>
                    <li><a href="/assets/mp3/hamu/8-Summertime---Blue-Skies.mp3">Summertime / Blue Skies</a></li>
                    <li><a href="/assets/mp3/hamu/9-Rain-Shine.mp3">Rain Shine</a></li>
                    <li><a href="/assets/mp3/hamu/10-My-Favorite-Things.mp3">My Favorite Things</a></li>
                    <li><a href="/assets/mp3/hamu/11-Satin-Doll.mp3">Satin Doll</a></li>
                    <li><a href="/assets/mp3/hamu/12-Georgia.mp3">Georgia</a></li>
                    <li><a href="/assets/mp3/hamu/13-Milestones.mp3">Milestones</a></li>
                    <li><a href="/assets/mp3/hamu/14-Summer's-Dawn.mp3">Summer's Dawn</a></li>
                </ol>

    </x-card>

@endsection
