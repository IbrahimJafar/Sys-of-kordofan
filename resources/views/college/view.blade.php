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
            {{-- <h2>نبذة عن {{ $college->title }}</h2> --}}
            <h2>{{trans('college.about')}} {{trans('college.title')}}</h2>
            <div class="content">
              <p>
                صدر القرار بإنشائها في عام 2008م لتخريج كوادر علمية مؤهلة للتعامل مع الحاسبات الآلية التي تمثل لغة العصر وأس التطور فيه من حيث البرمجيات وتحليل البانات والإستخدام الأمثل لها في التنمية.
              </p>
            </div>
          </div>

          <hr>

          {{-- Start News Part --}}
          {{-- <h4><i class="fa fa-newspaper-o" aria-hidden="true"></i>أخبار {{ $college->title }}</h4> --}}
          {{-- <h4><i class="fa fa-newspaper-o" aria-hidden="true"></i>{{trans('college.news')}} {{ $college->title }}</h4> --}}
          <h4><i class="fa fa-newspaper-o" aria-hidden="true"></i>{{trans('college.news')}} {{trans('college.title')}}</h4>

          <div class="news-body">

            {{-- News Container --}}
            <div class="news-container">
              <div class="news-card">
                <div class="news-img">
                  <div class="img-container">
                    <a href="#"><img src="../upload/uk.png" alt=""></a>
                  </div>
                </div>

                <div class="news-details">
                  <div class="news-title">
                    <h4><a href="#">بدء التسجيل في برامج الماجستير بكلية الحاسب الألي ونظم المعلومات</a></h4>
                  </div>

                  <div class="news-footer">
                    <p class="date">
                      <i class="fa fa-clock-o"></i>27/7/2022 10:25:15 PM
                    </p>

                    <a href="#" title="شاهد المزيد"><i class="fa fa-chevron-left"></i></a>
                  </div>
                </div>
              </div>
            </div>
            {{-- End Of News Container --}}

            {{-- Testing Part ************************************** Just For Test , Removable ************************ Start --}}
            <div class="news-container">
              <div class="news-card">
                <div class="news-img">
                  <div class="img-container">
                    <a href="#"><img src="../upload/uk.png" alt=""></a>
                  </div>
                </div>

                <div class="news-details">
                  <div class="news-title">
                    <h4><a href="#">بدء التسجيل في برامج الماجستير بكلية الحاسب الألي ونظم المعلوماتر بكلية الحاسب الألي ونظم المعلومات</a></h4>
                  </div>

                  <div class="news-footer">
                    <p class="date">
                      <i class="fa fa-clock-o"></i>27/7/2022 10:25:15 PM
                    </p>

                    <a href="#" title="شاهد المزيد"><i class="fa fa-chevron-left"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="news-container">
              <div class="news-card">
                <div class="news-img">
                  <div class="img-container">
                    <a href="#"><img src="../upload/uk.png" alt=""></a>
                  </div>
                </div>

                <div class="news-details">
                  <div class="news-title">
                    <h4><a href="#">بدء التسجيل في برامج الماجستير بكلية الحاسب الألي ونظم المعلوماتر بكلية الحاسب الألي ونظم المعلومات</a></h4>
                  </div>

                  <div class="news-footer">
                    <p class="date">
                      <i class="fa fa-clock-o"></i>27/7/2022 10:25:15 PM
                    </p>

                    <a href="#" title="شاهد المزيد"><i class="fa fa-chevron-left"></i></a>
                  </div>
                </div>
              </div>
            </div>
            {{-- Testing Part ************************************** Just For Test , Removable ************************ End --}}
          </div>
          {{-- End Of News Part --}}

          {{-- Start Notification Part --}}
          {{-- <h4><i class="fa fa-bullhorn" aria-hidden="true"></i>{{trans('college.notification')}} {{ $college->title }}</h4> --}}
          <h4><i class="fa fa-bullhorn" aria-hidden="true"></i>{{trans('college.notification')}} {{trans('college.title')}}</h4>

          <img src="../upload/uk.png" alt="">

          <div class="notifications">
            <ul>
              <li><a href="#">بدء التسجيل في برنامج ماجستير العلوم في الواقع الافتراضي والألعاب<span class="date">10/03/21</span></a></li>
              <li><a href="#">بدء التسجيل في برنامج ماجستير العلوم في التقنيات الأمنية<span class="date">10/03/21</span></a></li>
              <li><a href="#">بدء التسجيل في برنامج ماجستير العلوم في علم البيانات<span class="date">10/03/21</span></a></li>
              <li><a href="#">بدء التسجيل في برنامج ماجستير العلوم في علوم الحاسب<span class="date">10/03/21</span></a></li>
              <li><a href="#">حفل استقبال الطلاب<span class="date">01/09/19</span></a></li>
            </ul>
          </div>
          {{-- End Of Notification Part --}}
        </div>
      </div>
    </div>
    {{-- Start Faculties-Content --}}
  </div>

  {{-- <div class="event_details_area section__padding" style="background: url({{$college->cover_image}}) fixed no-repeat center center;background-size: cover;position: relative">
      <div class="cover_bg"></div>
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="single_event d-flex align-items-center">
                      <div class="thumb">
                          <img src="{{ $college->profile_image }}" alt="">
                      </div>
                      <div class="event_details_info">
                          <div class="event_info">
                              <a href="#">
                                  <h4 class="college-title text-light">{{ $college->title }}</h4>
                              </a>
                              <p><span> <i class="flaticon-clock"></i>{{ $college->started_at }}</span> <span> <i class="flaticon-calendar"></i> 21 Nov 2020 </span> <span> <i class="flaticon-placeholder"></i> AH Oditoriam</span> </p>
                          </div>
                          <p class="event_info_text">
                              {{ $college->description }}
                          </p>
                          <a href="{{ route('colleges.contact',$college->slug) }}" class="boxed-btn3">Contact</a>
                      </div>
                  </div>
              </div>

          </div>
          <div class="padding_top30">

              <ul class="list-group">
                  <li class="list-group-item bg-success text-light">Features</li>
                  <li class="list-group-item">Cras justo odio</li>
                  <li class="list-group-item">Dapibus ac facilisis in</li>
                  <li class="list-group-item">Morbi leo risus</li>
                  <li class="list-group-item">Porta ac consectetur ac</li>
                  <li class="list-group-item">Vestibulum at eros</li>
              </ul>
          </div>

          <div class="padding_top30">
              <table class="table bg-white text-center">
                  <thead>
                  <tr>
                      <td>Teacher</td>
                      <td>Teacher</td>
                  </tr>
                  </thead>
              </table>
          </div>
      </div>
  </div> --}}

@endsection
