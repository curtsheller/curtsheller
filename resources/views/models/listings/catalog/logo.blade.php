{{-- <img class="{{ $logo_classes ??  'block mx-auto mb-2'}}" src="{{ Storage::disk('spaces')->url('logos/'.$record->filename . '.png') }}" alt="{{ $record->title }}"> --}}
@php
    if (file_exists( public_path() . '/images/logos/' . $logo . '.png')) {
        $logo_file = '/images/logos/' . $logo .'.png';
    } else {
        $logo_file = '/images/logos/globe.svg';
    }
@endphp
<img class="{{ $logo_classes ??  'block mx-auto mb-2'}}" src="{{ $logo_file }}" alt="{{ $record->title }}">
