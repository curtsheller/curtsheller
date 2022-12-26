<div {{ $attributes->merge(['class' => 'note card card-csp bg-brand-50 rounded-lg | p-8 pt-4 pb-4 my-4']) }}>
    <div class="grid grid-cols-6 gap-6">
        <div class="col-span-7 sm:col-span-1">
            <div class="flex justify-center">
                {{ $icon ?? '' }}
            </div>
        </div>
        <div class="col-span-6 sm:col-span-5">
            {{ $slot }}
        </div>
    </div>
</div>
