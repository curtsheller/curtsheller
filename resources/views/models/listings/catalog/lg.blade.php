@php
    $map_size = '96x96';
@endphp
<a name="{{ $record->code }}"></a>
<div class="bg-white border border-brand-300 rounded-lg p-2 m-1">
    <div class="grid grid-cols-18 gap-2">
        <div class="hidden sm:block sm:col-span-1 p-1">
            @include('models/listings/catalog/asset_icons')
        </div>
        <div class="col-span-18 sm:col-span-6 border-brand-100 border-r border-l p-1 px-4">
            <p class="text-2xl text-brand font-display tracking-tight leading-solid mt-0">{{ $record->title }}</p>
                @include('models/listings/catalog/logo', [
                    'logo' => $record->code,
                ])

            @if ( !empty( $record->address ))
                <p class="hidden sm:block text-center mt-4">@svg('address-card', 'icon-lg text-brand-300')</p>
                <span class="hidden sm:block text-sm leading-solid">
                    <x-markdown>
                        {{ $record->address }}
                    </x-markdown>
                </span>
            @endif
            <p class="hidden sm:block text-center text-xs text-brand leading-normal mt-4">
                <a href="https://www.openstreetmap.org/search?query=39.741924%2C-104.999847#map=19/39.74193/-104.99985" target="_blank">
                    Latitude: {{ $record->latitude }}<br>
                    Longitude: {{ $record->longitude }}
                </a>
            </p>
        </div>
        <div class="col-span-18 sm:col-span-11 px-2">
            <div class="grid grid-cols-4 gap-2">
                <div class="col-span-3">
                    <p class="text-lg font-display text-brand-300 font-bold border-b border-brand mt-4">@svg('link', 'text-brand-500') Links</p>
                </div>
                <div class="col-span-1">
                </div>
            </div>

            <ul class="list-disc text-sm leading-snug ml-8">
                @php
                    $debugging = 0;

                        //  comma separated string of URLs
                        //  First URL get the Listing Name, the remaining get the actual URL as the visible titles as well as the link.
                    if ( empty($record->url) ) {
                        echo '<li><em>No Web Presence</em>';
                    } else {
                        $array_urls = explode(',', $record->url);

                        if ( $debugging ) { print_r( $array_urls ); }

                            // anchor type target class name description
                        $link = new \App\Classes\LinkURL([
                            'anchor' => $array_urls[0]
                            ,'name' => $record->title
                            ,'target'=>'_blank'
                        ]);

                        echo '<li>' . $link->display() . "</li>";

                        $array_urls = array_splice($array_urls, 1);

                        foreach( $array_urls as $web_url ) {
                                // anchor type target class name description
                            $link = new \App\Classes\LinkURL(array(
                                'anchor' => $web_url
                                ,'name' => $web_url
                                ,'target'=>'_blank'
                            ));
                            echo '<li>' . $link->display() . "</li>";
                        }
                    }
                @endphp
            </ul>

            <p class="text-lg font-display text-brand-300 font-bold border-b border-brand mt-4">@svg('light/star', 'text-brand-300') Listing Info
            </p>

            <p class="text-brand text-sm mb-2">@svg('arrow-circle-down') <em>from the {{ $record->title }} web site</em> @svg('arrow-circle-down')</p>

            @if ( ! empty($record->description_mini))
                <div class="listing-descriptions">
                    <x-markdown class="prose-sm">
                        {{ $record->description_mini }}
                    </x-markdown>

                    <div x-data="{ open: true }">
                        <div class="block mx-auto flex flex-col items-center justify-center mt-2">

                           <button type="button" class="inline-flex items-center px-3 py-1 border border-brand-300 shadow-sm text-xs font-medium rounded-full text-brand-700 bg-white hover:bg-brand-50  | my-2" x-on:click="open = true">

                                <span class="flex items-center text-brand" x-show="open">
                                    Hide More Info @svg('solid/caret-up', 'icon-sm text-brand ml-2')
                                </span>
                                <span class="flex items-center text-brand" x-show="!open">
                                    More Info @svg('solid/caret-down', 'icon-sm text-brand ml-2')
                                </span>
                            </button>
                            <div id="series-lessons" class="block mt-2"
                                    x-show="open"
                                    x-on:click.away="open = false">
                                <x-markdown class="prose-sm">
                                    {{ $record->description }}
                                </x-markdown>

                                <p class="text-brand text-sm text-center">@svg('light/info-circle', 'text-brand') <i>More information available on the {{ $record->title }}'s web site.</i></p>
                            </div>
                        </div>
                    </div>
                </div>  <!-- listing-descriptions -->
            @endif
            <p class="text-xs text-center mt-6 mb-4">@svg('light/comments') <em>Even more <a href="/listings/{{ $record->id }}"><b>information, discussion and comments</b></a> on this listing below.</em></p>
        </div>
    </div>
</div>
