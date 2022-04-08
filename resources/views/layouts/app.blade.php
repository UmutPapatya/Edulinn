<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Edulinn') }}</title>

        <!-- Prevent the demo from appearing in search engines -->
        <meta name="robots"
              content="noindex">

        <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&display=swap"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="{{ asset('/assets/vendor/spinkit.css') }}"
              rel="stylesheet">

        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="{{ asset('/assets/vendor/perfect-scrollbar.css') }}"
              rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css"
              href="{{ asset('/assets/css/material-icons.css') }}"
              rel="stylesheet">

        <!-- Font Awesome Icons -->
        <link type="text/css"
              href="{{ asset('/assets/css/fontawesome.css') }}"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="{{ asset('/assets/css/preloader.css') }}"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="{{ asset('/assets/css/app.css') }}"
              rel="stylesheet">

                      <!-- Preloader -->
        <link type="text/css"
              href="{{ asset('/assets/css/preloader.css') }}"
              rel="stylesheet">

        <!-- Quill Theme -->
        <link type="text/css"
              href="{{ asset('/assets/css/quill.css') }}"
              rel="stylesheet">
        <!-- Select2 -->
        <link type="text/css"
              href="{{ asset('/assets/css/select2.css') }}"
              rel="stylesheet">
        <link type="text/css"
              href="{{ asset('/assets/vendor/select2/select2.min.css') }}"
              rel="stylesheet">

    </head>

    <body class="layout-sticky-subnav layout-default ">

        <div class="preloader">
            <div class="sk-chase">
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
            </div>

        </div>

        <!-- Header Layout -->
        <div class="mdk-header-layout js-mdk-header-layout">

            <!-- Header -->

            <div id="header"
                 class="mdk-header mdk-header--bg-dark bg-dark js-mdk-header mb-0"
                 data-effects="parallax-background waterfall"
                 data-fixed
                 data-condenses>
                <div class="mdk-header__bg">
                    <div class="mdk-header__bg-front"
                         style="background-image: url({{ asset('/assets/images/photodune-4161018-group-of-students-m.jpg') }});"></div>
                </div>
                <div class="mdk-header__content justify-content-center">

                    <div class="navbar navbar-expand navbar-dark-pickled-bluewood bg-transparent will-fade-background"
                         id="default-navbar"
                         data-primary>
                         @auth
                        <!-- Navbar toggler -->
                        <button class="navbar-toggler w-auto mr-16pt d-block rounded-0"
                                type="button"
                                data-toggle="sidebar">
                            <span class="material-icons">short_text</span>
                        </button>
                        @endauth
                        {{-- Header Menu --}}
                        @include('layouts.inc.header_menu')
                        {{-- // Header Menu --}}

                    </div>
                    @yield('banner')
                </div>
            </div>

            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content page-content ">
                <div class="border-bottom-2 py-16pt navbar-light bg-white border-bottom-2">
                    <div class="container page__container">
                        @yield('content')
                    </div>
                </div>
            </div>
            <!-- // END Header Layout Content -->

            <!-- Footer -->
            @include('layouts.inc.footer')
            <!-- // END Footer -->

        </div>
        <!-- // END Header Layout -->
        <!-- Drawer -->@auth
        @include('layouts.inc.left_menu')
        <!-- // END Drawer -->@endauth

        <!-- jQuery -->
        <script src="{{ asset('/assets/vendor/jquery.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('/assets/vendor/popper.min.js') }}"></script>
        <script src="{{ asset('/assets/vendor/bootstrap.min.js') }}"></script>

        <!-- Perfect Scrollbar -->
        <script src="{{ asset('/assets/vendor/perfect-scrollbar.min.js') }}"></script>

        <!-- DOM Factory -->
        <script src="{{ asset('/assets/vendor/dom-factory.js') }}"></script>

        <!-- MDK -->
        <script src="{{ asset('/assets/vendor/material-design-kit.js') }}"></script>

        <!-- App JS -->
        <script src="{{ asset('/assets/js/app.js') }}"></script>

        <!-- Preloader -->
        <script src="{{ asset('/assets/js/preloader.js') }}"></script>

        <!-- Quill -->
        <script src="{{ asset('/assets/vendor/quill.min.js') }}"></script>
        <script src="{{ asset('/assets/js/quill.js') }}"></script>
        
        <!-- Select2 -->
        <script src="{{ asset('/assets/vendor/select2/select2.min.js') }}"></script>
        <script src="{{ asset('/assets/js/select2.js') }}"></script>
        

        <script>
            (function() {
                'use strict';
                var headerNode = document.querySelector('.mdk-header')
                var layoutNode = document.querySelector('.mdk-header-layout')
                var componentNode = layoutNode ? layoutNode : headerNode
                componentNode.addEventListener('domfactory-component-upgraded', function() {
                    headerNode.mdkHeader.eventTarget.addEventListener('scroll', function() {
                        var progress = headerNode.mdkHeader.getScrollState().progress
                        var navbarNode = headerNode.querySelector('#default-navbar')
                        navbarNode.classList.toggle('bg-transparent', progress <= 0.2)
                    })
                })
            })()
        </script>

    </body>

</html>