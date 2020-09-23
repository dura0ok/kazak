<!-- Start slider -->
<div class="slider">
@foreach($slides as $slide)
    <!-- Start slide -->
        <div class="slide">
            <img src="{{ asset('storage/'.$slide->image ) }}" alt="{{ $slide->title }}" title="{{ $slide->title }}">
            <div class="slide_info">
                <h4>{{ $slide->title }}</h4>
                <p>{{ $slide->description }}</p>
                @if($slide->article_id != null)
                    <a href="" class="more">Подробно ...</a>
                @endif
            </div>
        </div>
        <!-- End slide -->
    @endforeach
</div>
<!-- End slider -->
