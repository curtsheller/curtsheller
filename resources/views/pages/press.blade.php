@extends('layouts/app')

@section('masthead')
    @parent
    <x-mini-nav>

            @include('layouts/nav/section/epk')

    </x-mini-nav>
@endsection

@section('content')
    @card(['card' => 'card-quote'])

            @include('partials/interviews/list')

    </x-card>

    @card(['card' => 'card-quote'])

            @include('partials/interviews/No_Depression_20160311')

    </x-card>

    @card(['card' => 'card-quote'])

            @include('partials/interviews/Ukulele_Player_2009')

    </x-card>

@endsection
