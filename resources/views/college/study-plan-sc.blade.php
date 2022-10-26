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
            <h2>{{trans('college.study_plan_sc_pro')}}</h2>
            <div class="content">
              <h4>{{trans('college.about_plan')}}</h4>
              <p>
                تشتمل الخطة الدراسية لبكلاريوس الحوسبة الاحصائية على مجموعة من المجالات المعرفية و تفى بمطلوبات التعليم العالى وبمطلوبات نيل درجة البكلاريوس فى الحوسبة الاحصائية وذلك وفق م تقرره لجنة دراسات الحاسوب.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- Start Faculties-Content --}}
  </div>
@endsection
