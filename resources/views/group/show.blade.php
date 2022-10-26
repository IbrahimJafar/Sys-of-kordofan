@extends('layouts.master')

@section('content')
    <!-- recent_news_area_start  -->
    <div class="@if($group->slug=='application-events') recent_event_area @else recent_news_area @endif section__padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-70">
                        <h3 class="mb-45">{{ $group->title }}</h3>
                    </div>
                </div>
            </div>

            @if($group->slug=='application-events')
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                    @foreach($posts as $post)
                        @includeIf('post.post_event_raw')
                    @endforeach
                    </div>
                </div>
            @else
                <div class="row">
                @foreach($posts as $post)
                    @includeIf('post.post_raw')
                @endforeach
                </div>
            @endif


            <div class="text-center">{{ $posts->links() }}</div>
        </div>
    </div>
    <!-- recent_news_area_end  -->

@endsection
