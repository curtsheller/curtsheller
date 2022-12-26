@props(['nav' => false])

<div {{ $attributes->merge(['class' => 'relative card bg-white rounded-lg
    p-4 px-8  pt-4 mt-1']) }}
>
    {{-- @if($nav)
        <div class="absolute bottom-0 right-0 mb-1 mr-2 z-40">
            <a href="#top">@svg('solid/arrow-circle-up', 'icon-lg text-brand-100')</a>
        </div>
    @endif --}}
    {{ $slot }}
</div>
