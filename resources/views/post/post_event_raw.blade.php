<div class="single_event d-flex align-items-center">
    <div class="date text-center">
        <span>{{ $post->event_day }}</span>
        <p>{{ $post->event_month_and_year }}</p>
    </div>
    <div class="event_info">
        <a href="{{ route('post.show',$post->slug) }}">
            <h4>{{$post->title}}</h4>
        </a>
        <p><span> <i class="flaticon-clock"></i>{{ $post->published_at }}</span> <span> <i class="flaticon-calendar"></i> {{ $post->event_date }} </span> </p>
    </div>
</div>
