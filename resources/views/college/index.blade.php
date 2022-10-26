@extends('layouts.master')


@section('content')
    <div class="popular_program_area section__padding program__page">
        <div class="container">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        @foreach($colleges as $college)
                            <div class="col-lg-4 col-md-6">
                                <div class="single__program">
                                    <div class="program_thumb">
                                        <img src="{{ $college->profile_image }}" alt="">
                                    </div>
                                    <div class="program__content">
                                        <h4 class="college-title">{{$college->title}}</h4>
                                        <p class="college-description">{{$college->description}}</p>
                                        <a href="{{ route('colleges.show',$college->slug) }}" class="boxed-btn5">{{ trans("college.view") }}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
