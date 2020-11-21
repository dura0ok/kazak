<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Городское казачье общество «Ростовское»</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
    <link rel="stylesheet" href="{{ asset('bvi/css/bvi.min.css') }}">
    @stack('styles')
</head>

<body>
<div class="wrapper">
    <div class="container">
        <!-- Start Header -->
    @include("layouts.base.parts.header")
    <!-- End header -->
        <!-- Start content-wrapper -->
        <div class="content-wrapper">
        @include("layouts.base.parts.sidebar")
        <!-- Start main content -->
            <main id="content">
                @yield("content")
            </main>
            <!-- End main content -->
            <!-- End content-wrapper -->
        </div>
        @include("layouts.base.parts.footer")
        <!-- End container -->
    </div>

<!-- End wrapper -->
</div>
<script src="https://yastatic.net/jquery/3.3.1/jquery.min.js"></script>
<script src="{{ asset('bvi/js/js.cookie.min.js') }}"></script>
<script src="{{ asset('bvi/js/bvi-init.min.js') }}"></script>
<script src="{{ asset('bvi/js/bvi.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
@stack('scripts')
</body>

</html>
