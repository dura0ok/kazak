@extends("layouts.base.template")

@push("styles")
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
@endpush

@section("content")
    @include("index.slider")
@endsection

@push("scripts")
    <script src="https://yastatic.net/jquery/3.3.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $('.slider').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: false,
            // autoplay: true,
            //autoplaySpeed: 5000,
        });

    </script>
@endpush
