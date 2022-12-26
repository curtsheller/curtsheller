@props(['nav' => true])

<div {{ $attributes->merge(['class' => 'relative border-b-2 border-grey-300 rounded-lg p-4 mt-6 mb-4']) }}>
    <div class="grid grid-cols-9 gap-4 justify-centers">
        <div class="hidden sm:block sm:col-span-1">
            <div class="">
                {{ $icon }}
            </div>
        </div>
        <div class="col-span-9 sm:col-span-8 items-end">
             @if($nav == true)
                 <a href="#top">
                     {{-- HeroIcons: Solid Arrow --}}
                     <svg class="absolute top-0 right-0 text-grey-300 hover:text-green-300 w-8 h-8 float-top mt-6 mr-1"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                       <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" />
                     </svg>
                 </a>
            @endif
            <h1 class="text-brand-500 leading-none tracking-tight mt-0 mb-0">{{ $title }}</h1>
            <p class="my-0 leading-snug text-gray-500 mt-1">{{ $blurb }}</p>
        </div>
    </div>
</div>
