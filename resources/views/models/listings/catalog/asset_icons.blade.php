@if (! empty($record->country) || $record->country == 'NA')
    <img src="/images/flags/{{ $record->country }}.png">
    {{-- public/images/flags/USA.png --}}
@else
    @svg('globe', 'text-brand-icon')
@endif
