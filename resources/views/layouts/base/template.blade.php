<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Городское казачье общество «Ростовское»</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
        <!-- End container -->
    </div>
@include("layouts.base.parts.footer")
<!-- End wrapper -->
</div>
<script src="{{ asset('js/app.js') }}"></script>
@stack('scripts')
</body>

</html>
