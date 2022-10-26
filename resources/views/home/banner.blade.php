<!-- slider_area_start -->
<div class="slider_area">
    <div class="slider_active owl-carousel">
        @foreach($bannerPosts  as $post)
            {{-- <div class="single_slider  d-flex align-items-center" style="background: url({{ $post->image_url }})  no-repeat;position:relative;background-size: cover"> --}}
            <div class="single_slider  d-flex align-items-center" style="background: url({{ 'upload/uk.png' }})  no-repeat;position:relative;background-size:cover;">
                <div class="cover_bg"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                {{-- <h3 class="text-white">{{ $post->title }}</h3>
                                <a href="{{ route('post.show',$post->slug) }}" class="boxed-btn3">{{ trans('post.read_more') }}</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- slider_area_end -->
