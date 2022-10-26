@extends('layouts.master')
@section('content')
    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <h2>{{ $post->title }}

                        <div class="feature-img">
                            <img class="img-fluid" src="{{ $post->image_url }}" alt="">
                        </div>
                        <div class="blog_details">
                            </h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                            </ul>
                            <p class="excert">
                                {{ $post->content }}
                            </p>
                        </div>
                    </div>
                    <div class="navigation-top">
                        <div class="d-sm-flex justify-content-between text-center">

                            <div class="col-sm-4 text-center my-2 my-sm-0">
                                <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                            </div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>

                    </div>

                    <div class="comments-area">
                        <h4>{{ $post->comments()->count() }} {{ trans('post.comments') }}</h4>
                        @foreach($post->comments as $comment)
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="{{ $post->image_url }}" alt="">
                                    </div>
                                    <div class="desc">
                                        <p class="comment">
                                            Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                            Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                                        </p>
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <h5>
                                                    <a href="#">Emilly Blunt</a>
                                                </h5>
                                                <p class="date">December 4, 2017 at 3:12 pm </p>
                                            </div>
                                            <div class="reply-btn">
                                                <a href="#" class="btn-reply text-uppercase">reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    @auth
                    <div class="comment-form">
                        <h4>Leave a Reply</h4>
                        <form class="form-contact comment_form" action="#" id="commentForm">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                            </div>
                        </form>
                    </div>
                    @endauth
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">


                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">{{ trans('post.recent') }}</h3>
                            @foreach($otherPosts as $otherPost)
                                <div>
                                    <img src="{{$otherPost->image_url}}" alt="post" class="card-img">
                                </div>
                                <div class="media post_item">

                                    <div class="media-body">
                                        <a href="{{route('post.show',$otherPost->slug)}}">
                                            <h3>{{$otherPost->title}}</h3>
                                        </a>
                                        <p>{{$otherPost->published_at}}</p>
                                    </div>
                                </div>
                                <hr>
                            @endforeach

                            {{ $otherPosts->links() }}
                        </aside>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
