<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Главная</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
</head>

<body>
<div class="wrapper">
    <div class="container">
        <!-- Start Header -->
        @include("layouts.parts.header")
        <!-- End header -->
        <!-- Start content-wrapper -->
        <div class="content-wrapper">
            @include("layouts.parts.sidebar")
            <!-- Start main content -->
            <main id="content">
                @yield("content")
            </main>
            <!-- End main content -->
            <!-- End content-wrapper -->
        </div>
        <!-- End container -->
    </div>
    @include("layouts.parts.footer")
    <!-- End wrapper -->
</div>
<script src="{{ asset('js/app.js') }}"></script>
@stack('scripts')
</body>

</html>
