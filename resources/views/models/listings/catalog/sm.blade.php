<x-card>

        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-1">
                @include('models/listings/catalog/asset_icons')
            </div>
            <div class="col-span-2">
                @include('models/listings/catalog/logo', [
                        'logo_classes'=>'mb-3 block mx-auto'
                    ])
            </div>
            <div class="col-span-8">
                <h4>
                    {{ $record->title }}
                </h4>
                <small>{!! CSP::Markdown($record->description_mini) !!}</small>
            </div>
            <div class="col-span-1">
                <a href="/listings/{{ $record->id}}">@svg('arrow-circle-right', 'icon-2x block mx-auto')</a>
            </div>
        </div>

 </x-card>
