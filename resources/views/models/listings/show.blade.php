@php
    $title = $listing->title;
    $description = "";
@endphp

@extends('layouts/app')

@section('masthead')
    @parent
    <x-mini-nav>

            @include('layouts/nav/section/racewalking-olympics-IAAF')

    </x-mini-nav>
@endsection

@section('content')
    <x-card>

            <h2 class="">{{ $listing->title }}</h2>
            <p class="text-left">@svg('tags', 'text-gray-500')
                @foreach ($listing->tags as $tag)
                    <span class="px-3 rounded-r-full border text-xs">{{ $tag->name }}</span>
                @endforeach
            </p>

    </x-card>

    @include('models/listings/catalog/lg', ['record' => $listing, 'expand' => true])
@endsection

@push('scripts')
    @include('scripts/toggleDiv')
@endpush
