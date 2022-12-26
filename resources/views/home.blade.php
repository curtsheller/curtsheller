@extends('layouts/app')

@section('content')
    <div class="container">
        <p><img class="right img-thumbnail" src="/images/me/2015_ffukefest-mcW-sm.png" alt=""><b>Curt Sheller Publications</b> was created by <em>Curt Sheller</em> (me) in 1995 and has been on the web since. I have over 40 years of playing experience and I have been involved in private music education for the past 20 plus years.</p>

        <p>I had the great privilege and honor of studying with Chuck Anderson for over 30 years. One of the most knowledge musicians I've ever run into and mainly studying jazz guitar, there was no subject off limits. We studied arranging, private teaching, 20th century harmony, performing and working with other musicians, and anything that would come up in the lessons. Chuck also helped with editing my books and on-line lesson material.</p>

        <p>With my re-introduction to the ukulele after a 20 year break and taking advantage of my jazz guitar skills, I began pursuing the potential of the ukulele. Researching the field I saw very little material organized at a level that works for intermediate to advanced players. I have developed an international reputation as a ukulele expert having written over 30 books and over 600 lessons for the ukulele and 10 plus books on guitar.</p>

        <h4>For Performance and Workshop Bookings</h4>

        <p><i class="fa fa-at"></i> For booking information visit the <a href="{{ route('booking') }}"><em><b>booking info</b></em></a> page.</p>

        <h3>The Curt Sheller Jazz Trio is:</h3>
        @include('partials/bios/three-images')

        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/175730264" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>

        <div class="m-x-1">
            @include('partials/tracks/ten_minute_demo')
        </div>
</div>
@endsection