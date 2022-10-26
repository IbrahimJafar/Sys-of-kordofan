<!-- recent_event_area_strat  -->
<div class="recent_event_area section__padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="section_title text-center mb-70">
                    <h3 class="mb-45">{{ $eventsGroup->title }}</h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                @foreach($eventsPosts as $post)
                @includeIf('post.post_event_raw')
                @endforeach
            </div>

        </div>
    </div>
</div>
<!-- recent_event_area_end  -->
