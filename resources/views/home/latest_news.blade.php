<!-- recent_news_area_start  -->
<div class="recent_news_area section__padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="section_title text-center mb-70">
                    <h3 class="mb-45 text-light">{{ $latestNewsGroup->title }}</h3>
                </div>
            </div>
        </div>
        <div class="row news">
            @foreach($latestNewsPosts as $post)
                @includeIf('post.post_raw')
            @endforeach
        </div>
    </div>
</div>
<!-- recent_news_area_end  -->
