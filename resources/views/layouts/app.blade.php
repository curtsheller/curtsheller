<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" class="text-gray-800 antialiased">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Curt Sheller') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix("css/app.css") }}">

    @yield('styles')

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>

<body class="bg-gray-100">
    <a name="top"></a>

    {{-- div ID: app for Vue.js --}}
    <div id="app" class="">
        @include('layouts/nav/top')

        {{-- Main Page Container --}}
        <div class="grid grid-cols-4 gap-2 p-2">

            {{-- Sidebar Nav --}}
            <div id="sidebar" class="hidden lg:block lg:col-span-1 rounded-lg border-1 bg-white border-brand-200 p-4 mt-12">
                <a href="/main">
                    <img class="img-thumbnail bg-white w-24 -mt-16 block mx-auto" src="/images/logo-CSP-PMS(648).png" alt="">
                </a>
                <p class="text-lg text-center text-gray-600 m-4 my-8"><em>&ldquo;He&rsquo;s generous, good-hearted and has empowered countless players to expand their view of the ukulele.&rdquo;</em> — <b>James Hill</b></p>

                {{-- Curt Sheller Jazz Trio --}}
                <h5 class="text-center leading-tight">The <a href="{{ route('trio') }}">Curt Sheller Jazz Trio @svg('film-alt')</a><br>10 Minute Demo from <a href="{{ route('cds') }}">How About More Uke? @svg('link')</a></h5>
                <audio class="block mx-auto" controls="controls">
                    <source src="/assets/mp3/hamu/How-About-More-Uke-10-Minute-Demo.mp3" type="video/mp4">
                    Your browser does not support HTML5 video.
                </audio>
                <h6 class="text-center text-gray-600 mt-1">10 Minute Demo of How About More Uke? CD</h6>

                <p class="text-sm text-center text-gray-600 m-4"><em>&ldquo;Curt&rsquo;s repertoire consistently stretches the ukulele envelope by incorporating jazz, blues, and pop into a pleasantly entertaining mix.&rdquo;</em> — <b>Gerald Ross</b></p>

                @include('layouts/aside')
            </div>

            {{-- Main Content --}}
            <div id="content" class="col-span-4 lg:col-span-3">
                <a name="content"></a>
                <x-card class="card card-csp">
                    {{ $header ?? '' }}
                    {{-- @include('layouts/page/header') --}}
                    {{ $mininav ?? '' }}
                </x-card>

                {{ $slot ?? '' }}

                <div id="thanks_for_visit" class="">
                    @include('layouts/footer/thanks_for_visiting')
                </div>
            </div>

        </div>

        {{-- F O O T E R --}}
        <div id="footer">
            <div class="mx-1">
                @include('layouts/footer')
            </div>
        </div>

        <a href="#top">
            <div id="scrolltotop-btn" class="text-center shadow-lg rounded-full border border-brand-300 bg-brand-500 float-right cursor-pointer fixed right-1 bottom-2 block w-12 h-12">
                {{-- @svg('solid/list-music', 'icon-lg mr-2 ml-3') --}}
                {{-- Top &nbsp; --}}
                @svg('solid/caret-up', 'icon-3x text-brand-300 hover:text-brand-700 | w-10 h-10')
            </div>
        </a>
    </div> {{-- id="app" --}}

    <!-- Site: Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        {{-- Can replace the x-card nav=true in most places.. --}}
        $(window).scroll(function() {
            if ($(this).scrollTop() > 250)
            {
                $('#scrolltotop-btn').show();
            }
            else
            {
                $('#scrolltotop-btn').hide();
            }
        });
    </script>

    @stack('scripts')

    @env('production')
        {{-- gaug.es/ --}}
        {{--  @include('scripts/guages') --}}

        {{-- app.usefathom.com/ --}}
        @include('scripts/Fathom')
    @endenv
</body>

</html>
