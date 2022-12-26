@props(['nav' => false])

<div {{ $attributes->merge(['class' => 'relative card bg-white rounded-lg p-6 pt-2 mt-1']) }}>

        <div class="grid grid-cols-12 gap-8">
            <div class="col-span-1">
                {{ $icon }}
            </div>
            <div class="col-span-10">
                <h2 class="leading-none my-0">{{ $title }}</h2>
                <p class="mt-1 leading-normal text-gray-900">{{ $description ?? '' }}</p>
            </div>
            <div class="col-span-1">
                @if($nav == true)
                    <div class="absolute top-1 right-1 mb-1 mr-2 z-40">
                        <a href="#content">@svg('solid/arrow-circle-up', 'icon-lg text-gray-300 bg-white')</a>
                    </div>
                @endif
            </div>
        </div>
</div>
