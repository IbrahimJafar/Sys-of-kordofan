@extends('layouts.master')

@section('content')

  <div class="faculties-body">

    @include('layouts.collage_head')

    {{-- Start Faculties-Content --}}
    <div class="faculties-content">
      <div class="container">

        {{-- Start Sidebar Part --}}
        @include('layouts.collage_sidebar')
        {{-- End Sidebar Part --}}

        {{-- Start Content Part --}}
        <div class="contents">
          <div class="about">
            <h2>{{trans('college.faculty_admissions')}}</h2>
            <div class="content">
              <h4>{{trans('college.faculty_admissions')}}</h4>
              <p>يقبل الطلاب لهذا البرنامج وفقا للمعايير والمطلوبات التى تحددها وزارة التعليم العالى والبحث والعلمى وأى مطلوبات إضافية أخرى تحددها الكلية.</p>
              {{-- <h4>{{trans('college.d_head')}}</h4>
              <p>{{trans('college.d_head_n')}}</p>
              <br>
              <h4>{{trans('college.about_tit')}}</h4>
              <p>{{trans('college.about_cs')}}</p> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- Start Faculties-Content --}}
  </div>
@endsection
