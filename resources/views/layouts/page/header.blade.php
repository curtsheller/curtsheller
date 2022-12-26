<div class="grid grid-cols-6 gap-2">
    <div class="col-span-5">
        <h2 class="tracking-tight border-b">
            {{ $title }}
        </h2>
        <p class="text-gray-500 mb-0">{{ $blurb }}</p>
    </div>
    <div class="col-span-1">

        @env('local')
            <p class="text-center text-sm text-gray-300 block sm:hidden md:hidden lg:hidden xl:hidden">
                @svg('globe', 'icon-2x mx-auto mt-2')<br>
                All
            </p>
            <p class="text-center text-sm text-gray-300 hidden sm:block md:hidden lg:hidden xl:hidden">
                @svg('mobile-alt', 'icon-2x mx-auto mt-2')<br>
                Mobile-sm
            </p>
            <p class="text-center text-sm text-gray-300 hidden sm:hidden md:block lg:hidden xl:hidden">
                @svg('tablet', 'icon-2x mx-auto mt-2')<br>
                Tablets-md
            </p>
            <p class="text-center text-sm text-gray-300 hidden sm:hidden md:hidden lg:block xl:hidden">
                @svg('computer-laptop', 'icon-2x mx-auto mt-2')<br>
                Desktop-lg
            </p>
            <p class="text-center text-sm text-gray-300 hidden sm:hidden md:hidden lg:hidden xl:block">
                @svg('computer-desktop', 'icon-2x mx-auto mt-2')<br>
                Lg Desktop-xl
            </p>
        @else
            <img class="img-thumbnail" src="/images/CS-Tenor.png" alt="">
        @endenv

    </div>
</div>
