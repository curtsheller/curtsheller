<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
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
<body class="bg-brand-700">
    <a name="top"></a>

    {{-- div ID: app for Vue.js --}}
    <div id="app" class="container mt-24">

        <a class="" href="{{ url('/main') }}">
            <img class="block mx-auto w-1/2 mb-8" src="/images/photos/Performance-Collage.png" alt="">
        </a>
        <a class="flex flex-row justify-center my-12 no-underline" href="{{ url('/main') }}">
            @svg('link', 'icon-3x text-brand-200 mr-2')@svg('arrow-circle-right', 'icon-3x text-brand-200')
        </a>

        <div class="flex flex-row items-center justify-center">
            <a class="" href="{{ url('/main') }}">
                <img class="h-24 mx-4" src="/images/logos/CSP.png" alt="">
            </a>

            <a class="" href="//funkyfrets.com">
                <img class="w-36 mx-4" src="/images/sign-FunkyFrets-JMD.png" alt="">
            </a>

            <a class="" href="//funkyfretsukefest.com">
                <img class="w-36 mx-4" src="/images/logos/FunkyFretsUkeFest-short-neck.png" alt="">
            </a>

            <a class="" href="//learningukulele.com">
                <img class="h-24 mx-4" src="/images/LearningUkulele-Badge.png" alt="">
            </a>

            <a class="" href="{{ route('racewalking', 'main') }}">
                <img class="h-24 mx-4 img-thumbnail" src="/images/racewalking/CS-20k-WAVA-1995.png" alt="">
            </a>
        </div>
        <p class="text-center text-white text-blue-500 mt-4"><a href="">2021 Curt Sheller Publications</a></p>
    </div> {{-- id="app" --}}

    <a rel="me" href="https://mastodon.social/@curtsheller"></a>
    <a rel="me" href="https://fosstodon.org/@curtsheller"></a>

    <!-- Site: Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    @stack('scripts')

    @env('production')
        {{-- gaug.es/ --}}
        @include('scripts/guages')
    @endenv
</body>
</html>
