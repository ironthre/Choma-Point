<style>
    @foreach ($sliders as $key => $slider).owl-carousel .owl-wrapper,
    .owl-carousel .owl-item:nth-child({{ $key + 1 }}) .item {
        background: url({{ asset('uploads/slider/' . $slider->image) }});
        background-size: cover;
        height: 80vh;
        background-repeat: no-repeat;
    }

    @endforeach
</style>
