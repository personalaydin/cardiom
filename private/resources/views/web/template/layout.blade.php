<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">

    {{-- SEO Meta --}}
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}

    {{-- Meta --}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" type="image/png" href="/favicon.png">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    
    {{-- Bootstrap --}}
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
    
    {{-- Typekit Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    {{-- Style --}}
    <link rel="stylesheet" href="{{ asset(mix('assets/dist/css/style.min.css')) }}">

    {{-- Variables --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> 
    <script>
        var App = {
            url: "{{ env('APP_URL') }}",
            currentUrl: "{{ url()->current() }}",
            locale: "{{ app()->getLocale() }}",
        };
    </script>

    {{-- Breadcrumbs --}}
    @if(!(isset($unsetBreadcrumbs) && $unsetBreadcrumbs == true))
        {{ Breadcrumbs::view('breadcrumbs::json-ld') }}
    @endif

    {{-- Global site tag (gtag.js) - Google Analytics --}}
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-161200658-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-161200658-1');
    </script>
</head>
<body class="locale-{{ app()->getLocale() }}">
    {{-- Header --}}
    @yield('headerBefore')
    @include('web.template.partials.header', [
        'headerClass' => $headerClass ?? ''
    ])
    @include('web.template.partials.hamburger-menu')
    @yield('headerAfter')

    {{-- Content --}}
    @yield('contentBefore')
    @yield('content') 
    @yield('contentAfter')

    {{-- Footer --}}
    @yield('footerBefore')
    @include('web.template.partials.footer')
    @yield('footerAfter')

    {{-- Script --}}
    @yield('scriptBefore')
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script src="{{ asset(mix('assets/dist/js/scripts.min.js')) }}"></script>
    @yield('scriptAfter')
</body>
</html>
