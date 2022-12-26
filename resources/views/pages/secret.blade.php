@extends('layouts.app')

@section('content')
    <x-card>

			<p>Here are all the tracks from the CD. PLEASE, SECRET LOCATION - DO NOT SHARE</p>

			@include('partials/tracks/introduction')

			<small><p class="text-center text-gray-500 m-x">For the full effect that is on the CD - as soon as the Introduction is done play Sway. That is how it is on the CD.</p></small>

				@include('partials/tracks/sway')
				@include('partials/tracks/ill_remember_april')
				@include('partials/tracks/glens_cove')
				@include('partials/tracks/blue_bossa')
				@include('partials/tracks/a_spy_in_love')
				@include('partials/tracks/dont_get_around_much_anymore')
				@include('partials/tracks/summertime_blue_skies')
				@include('partials/tracks/rain_shine')
				@include('partials/tracks/my_favorite_things')
				@include('partials/tracks/satin_doll')
				@include('partials/tracks/georgia')
				@include('partials/tracks/milestones')
				@include('partials/tracks/summers_dawn')

    </x-card>
@endsection
