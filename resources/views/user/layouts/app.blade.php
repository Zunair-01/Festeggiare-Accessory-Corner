<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
    <!-- Page Title  -->
    <title>@yield('title', 'Dashboard')</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css?ver=2.9.0') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/theme.css?ver=2.9.0') }}">
    @yield('custom.css')
    <style>
        .content-container {
            padding: 0 !important;
            margin: 0 !important;
            max-width: 100% !important;
        }

        .nk-content {
            padding-top: 0 !important;
            margin-top: 0 !important;
        }

        .nk-wrap {
            padding-top: 15;
            padding-left: 0 !important;
            margin: 0 !important;
        }
    </style>
</head>

<body class="nk-body npc-default has-apps-sidebar has-sidebar">
    <div class="nk-app-root">
        <!-- main -->
        <div class="nk-main">
            <!-- wrap -->
            <div class="nk-wrap">
                @include('user.layouts.partials.header')
                <div class="nk-content">
                    <div class="container-fluid content-container">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript -->
    <script src="{{ asset('assets/js/bundle.js?ver=2.9.0') }}"></script>
    <script src="{{ asset('assets/js/scripts.js?ver=2.9.0') }}"></script>
    <script src="{{ asset('assets/js/charts/gd-analytics.js?ver=2.9.0') }}"></script>
    <script src="{{ asset('assets/js/libs/jqvmap.js?ver=2.9.0') }}"></script>
    @yield('custom.js')
</body>

</html>
