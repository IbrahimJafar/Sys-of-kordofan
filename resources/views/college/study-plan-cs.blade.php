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
            <h2>{{trans('college.study_plan_cs_pro')}}</h2>
            <div class="content">
              <h4>{{trans('college.about_plan')}}</h4>
              <p>تشتمل الخطة الدراسية لبكلاريوس الشرف في علوم الحاسوب على مجموعة من المجالات المعرفية التى تفى بمطلوبات التعليم العالى وبمطلوبات نيل درجة البكلاريوس (شرف) فى علوم الحاسوب وفقا لموجهات الكلية الأنموذج الصادرة عن لجنة دراسات الحاسوب بوزارة التعليم العالى والبحث العلمى فى مايو 2005م.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- Start Faculties-Content --}}
  </div>
@endsection
