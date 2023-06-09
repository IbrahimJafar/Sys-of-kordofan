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
            <h2>{{trans('college.vision_mission_goals')}}</h2>
            <div class="content">
              <h4>{{trans('college.vison')}}</h4>
              <p>تتطلب تنمية أى بلد في عصرنا الحديث مضاعفة فرص تأهيل وإعداد إختصاصي الحاسوب. وتختلف مناهج الحاسوب والإحصاء عن المناهج في التخصصات الأخرى في أنها مناهج في مجال سريع التطور وذي معرفة واسعة ومتجددة. يتطلب كل ذلك قيام كلية متخصصة في هذا المجال "دراسات الحاسوب والإحصاء" تضطلع بمهمة تأهيل كوادر بمستويات وخبرات مميزة.</p>
            </div>

            <div class="content">
              <h4>{{trans('college.mission')}}</h4>
              <p>إن تكون دراسات الحاسوب جاذبة لطلاب ذوي مقدرات عالية بحيث تجهزهم ليكونوا قادرين ومسئولين كمهنيين وعلماء ومهندسي حاسوب.</p>
            </div>

            <div class="content">
              <h4>{{trans('college.gools')}}</h4>
              <ol>
                <li>إعداد الكوادر المؤهلة عملياً ومهنياً فى مجالات علوم الحاسوب وتقانة المعلومات والإحصاء.</li>
                <li>إعداد كوادر مؤهلة عمليا ومهنيا فى مجالات الإحصاء وتطبيقاتها بالحاسوب.</li>
                <li>تنمية قدرات التصميم والتطوير وملكات الإبتكاروالإبداع.</li>
                <li>تنمية روح الإهتمام بالبحث العلمي من أجل التنمية والتطور الإقتصادي للمجتمع.</li>
                <li>تنمية فهم عميق للمسئوليات المرتبطة بالمهنة بما في ذلك البيئة المهنية والإجتماعية والأخلاقية في مجالات العمل المختلفة.</li>
                <li>معرفة واحترام حقوق الملكية الفكرية والأمان والخصوصية في إستخدام تقانة المعلومات.</li>
                <li>ترسيخ روح العمل الجماعي.</li>
                <li>تنمية ملكات التعلم الذاتي والتعلم المستمر والتطور المهني.</li>
                <li>المشاركة الفاعلة في خدمة المجتمع وتلبية حاجاته.</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- Start Faculties-Content --}}
  </div>
@endsection
