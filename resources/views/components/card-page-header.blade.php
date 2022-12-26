<div {{ $attributes->merge(['class' => 'card card-csp bg-white rounded-lg p-4 mt-1 mb-0']) }}>
    <div class="flex justify-between">
        <div class="flex justify-center">
            <div class="hidden sm:block">
            <a href="/">
                @svg($icon ?? "cogs", 'icon icon-5x text-gray-300 mr-4')
            </a>
            </div>
            <div>
                <p class="text-gray-300 text-xs font-sans font-semibold absolute top-0 right-0 mr-4">Updated: {{ $updated ?? "January 2, 2020" }}</p>
                <h1 class="text-brand-500 text-5xl font-sans leading-none tracking-tight mb-0">{{ $title }}</h1>

                {{ $slot }}
            </div>
        </div>
        <div class="text-sm text-brand-100">
            <div class="block sm:hidden md:hidden lg:hidden xl:hidden">
                <div class="flex flex-col items-cente">
                    @svg('globe', 'icon-lg text-brand-100')
                    <span class="text-brand-200">ALL</span>
                </div>
            </div>
            <div class="hidden sm:block md:hidden lg:hidden xl:hidden">
                <div class="flex flex-col items-center">
                    @svg('mobile-alt', 'icon-lg text-brand-100')
                    <span class="text-brand-200">sm</span>
                </div>
            </div>
            <div class="hidden sm:hidden md:block lg:hidden xl:hidden">
                <div class="flex flex-col items-center">
                    @svg('tablet', 'icon-lg text-brand-100')
                    <span class="text-brand-200">md</span>
                </div>
            </div>
            <div class="hidden sm:hidden md:hidden lg:block xl:hidden">
                <div class="flex flex-col items-center">
                    @svg('computer-laptop', 'icon-lg text-brand-100')
                    <span class="text-brand-200">lg</span>
                </div>
            </div>
            <div class="hidden sm:hidden md:hidden lg:hidden xl:block">
                <div class="flex flex-col items-center">
                    @svg('computer-desktop', 'icon-lg text-brand-100')
                    <span class="text-brand-200">xl</span>
                </div>
            </div>
        </div>
    </div>
</div>
