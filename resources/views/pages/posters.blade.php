@extends('layouts/app')

@section('masthead')
    @parent
    <x-mini-nav>

            @include('layouts/nav/section/epk')

    </x-mini-nav>
@endsection

@section('content')

    <x-card>

            @include('/partials/posters_solo')

    </x-card>

    <x-card>

            @include('/partials/posters_trio')

    </x-card>

@endsection
