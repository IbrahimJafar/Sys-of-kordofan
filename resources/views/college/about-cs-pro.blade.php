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
            <h2>{{trans('college.program_cs_about')}}</h2>
            <div class="content">
              <h4>{{trans('college.about_tit')}}</h4>
              <p>
                يهدف هذا البرنامج الى تأهيل كوادر فى مجال علم الحاسوب لتسهم مع آخرين فى تلبية حاجة البلاد للكوادر المؤهلة فى علوم وتطبيقات الحاسوب والتى تحتاجها البلاد لسد الفجوة الرقمية وبناء إقتصاد ومجتمع المعلومات.
                <br>
                كما يهدف البرنامج لتخريج طلاب مؤهلين للتعلم الذاتى والتطور الشخصى والتقدم فى الدراسات العليا والإسهام فى البحث العلمى.
              </p>
              <br>
              <h4>{{trans('college.about_degree')}}</h4>
              <p>
                يمنح هذا البرنامج درجة البكلاريوس(شرف) فى علوم الحاسوب. تمنح الدرجة فى حال الإكمال بنجاح للبرنامج المجاز و الذى يحتوى على 170 ساعة معتمدة تكمل عادة فى أربعة سنوات دراسية (ثمانية فصول دراسية على الأقل).
              </p>
              <br>
              <h4>{{trans('college.about_chance')}}</h4>
              <p>
                إن فرص العمل لخريجى البرنامج واسعة ومتوفرة فى مجالات متعددة مثل: التعليم, مراكز تدريب الحاسوب (Computer Based Training), بيوت تطوير البرامجيات، بيوت تطوير البرامج التعليمية، الشركات و البنوك ومؤسسات القطاع الخاص المحوسبة, شركات تصميم وإدارة مواقع الوب, مجالات التجارة الإلكترونية وغيرها.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- Start Faculties-Content --}}
  </div>
@endsection
