<div class="col-md-6 ">
  <div class="single__news bg-light">
    <div class="thumb">
      <a href="{{ route('post.show',$post->slug) }}">
        <img src="{{ $post->image_url }}" alt="">
      </a>
    </div>
    <div class="news_info">
      <a href="{{ route('post.show',$post->slug) }}">
        <h5 class="post-title">{{ $post->title }}</h5>
      </a>
      <p class="d-flex align-items-center"> <span><i class="flaticon-calendar-1"></i> {{ $post->published_at }}</span>
        <span> <i class="flaticon-comment"></i>{{ $post->comments()->count() }} {{ trans('post.comments') }}</span>
      </p>
    </div>
  </div>
</div>
