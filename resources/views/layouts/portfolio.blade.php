<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        @if(config('blog.services.googleAnalyticsID'))
            @include('blog.partials.analytics')
        @endif

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale= gb1, shrink-to-fit=no">

        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@if (trim($__env->yieldContent('template_title')))@yield('template_title') | @endif {{ config('app.name', trans('titles.app')) }}</title>
        @if (trim($__env->yieldContent('template_description')))
            <meta name="description" content="@yield('template_description')">
        @endif
        <meta name="author" content="{{ config('blog.author') }}">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

        {{-- Dynamic RSS Feed Calls --}}
        @include('feed::links')

        {{-- Fonts --}}
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway&amp;subset=latin-ext" rel="stylesheet" type='text/css'>

        {{-- Legacy Support --}}
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        {{-- Styles --}}
        <link href="{{ mix('css/portfolio.css') }}" rel="stylesheet">
        @if($theme && ($theme->link != 'null'))
            <link rel="stylesheet" type="text/css" href="{{ $theme->link }}">
        @endif

        {{-- Scripts --}}
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>

        @stack('head')
    </head>
    <body>
        <div id="app" v-cloak>
            @yield('content')
        </div>

        {{-- Scripts --}}
        <script src="{{ mix('js/portfolio.js') }}" defer></script>
        <script>
            window.default_locale = "{{ config('app.lang') }}";
            window.fallback_locale = "{{ config('app.fallback_locale') }}";
            window.messages = @json($messages);
        </script>
        @stack('scripts')
    </body>
</html>
