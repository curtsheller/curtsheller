<div {{ $attributes->merge(['class' => '']) }}>
  <div class="relative my-1 overflow-hidden rounded shadow-md">
    <div class="relative shadow bg-{{ $color }}-500 text-{{ $color }}-100 px-3 py-4 md:py-1 text-sm font-semibold">
      {{ $color }} &bull; {{ $info ?? '' }} @svg('color-palette', "text-$color-300")
    </div>
    <div class="md:flex">
      <div class="text-{{ $color }}-900 bg-{{ $color }}-50 px-2 py-4 text-xs flex-1 leading-tight">
          <div class="font-black">50 @svg('color-palette', "text-$color-300")</div>
      </div>
      <div class="text-{{ $color }}-900 bg-{{ $color }}-100 px-2 py-4 text-xs flex-1 leading-tight">
          <div class="font-black">100</div>
      </div>
      <div class="text-{{ $color }}-900 bg-{{ $color }}-200 px-2 py-4 text-xs flex-1 leading-tight">
        <div class="font-black">200</div>
      </div>
      <div class="text-{{ $color }}-900 bg-{{ $color }}-300 px-2 py-4 text-xs flex-1 leading-tight">
        <div class="font-black">300</div>
      </div>
      <div class="text-{{ $color }}-900 bg-{{ $color }}-400 px-2 py-4 text-xs flex-1 leading-tight">
        <div class="font-black">400</div>
      </div>
      <div class="text-{{ $color }}-100 bg-{{ $color }}-500 px-2 py-4 text-xs flex-1 leading-tight">
        <div class="font-black">500</div>
      </div>
      <div class="text-{{ $color }}-100 bg-{{ $color }}-600 px-2 py-4 text-xs flex-1 leading-tight">
        <div class="font-black">600</div>
      </div>
      <div class="text-{{ $color }}-100 bg-{{ $color }}-700 px-2 py-4 text-xs flex-1 leading-tight">
        <div class="font-black">700</div>
      </div>
      <div class="text-{{ $color }}-100 bg-{{ $color }}-800 px-2 py-4 text-xs flex-1 leading-tight">
        <div class="font-black">800</div>
      </div>
      <div class="text-{{ $color }}-100 bg-{{ $color }}-900 px-2 py-4 text-xs flex-1 leading-tight">
        <div class="font-black">900</div>
      </div>
    </div>
  </div>
</div>
