@if ( isset($title) )
    <div {{ $attributes->merge(['class' => 'pt-0 pb-4']) }}>
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 sm:col-span-10 gap-4">
                <p class="text-xl font-bold text-brand-400 leading-solid tracking-tight mb-0">
                    {{ $section ?? config('csp.site.name') }}
                </p>
                <p class="text-4xl font-extrabold text-brand-600 leading-solid tracking-tight mb-0 mt-0">
                    {{ $title }} {{ $slot }}
                </p>

                @if ( isset($description) )
                    <div class="mt-0">
                        {{-- <x-markdown class="prose text-grey-500 text-base leading-snug" flavor="github"> --}}
                          <p class="text-sm text-brand-600 leading-snug">
                             {{ $description }}
                          </p>
                        {{-- </x-markdown> --}}
                    </div>
                @endif
            </div>
            <div class="hidden md:block md:col-span-2">
                <a href="{{ route('about') }}"><img class="mx-auto w-24 img-thumbnail rotate- z-60" src="/images/photos/Curt-EM-masthead-cropped.png " alt=""></a>
                @if ( isset($updated) )
                    <div class="text-center text-grey-300 text-xs font-medium leading-none mt-2">
                        UPDATED: <span class="font-black">{{ $updated }}</span>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endif
