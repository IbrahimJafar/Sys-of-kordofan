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
        <div class="contents pr-3">


          <div class="member-profile">
            <div class="row">
              <div class="col-md-3 btnInfo">
                <a href="/login"><img class="thumpnail" alt=" عبد الرازق عوض السيد ادريس سليمان " src="{{ asset('img/3.jpg') }}" data-animate="fadeInRight"></a>
                {{-- <i class="fa fa-tasks btnEdit" aria-hidden="true"></i> --}}
                <a href="/staff/1/edit"><i class="fas fa-edit btnEdit"></i></a>
              </div>

              <div class="col-md-9 vertical-icons mt-3">
                <div class="heading">
                  <h3 class="head-angle shape main-bg uppercase font-15 new-angle border5px"> إبراهيم جعفر بابكر ابراهيم</h3>
                </div>

                <div class="panel-group accordion" id="accordion" role="tablist" aria-expanded="false">
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                        <a role="button" class="shape new-angle border5px collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                          <i class="fa fa-desktop main-color"></i>
                          البيانات الشخصية
                        </a>
                      </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
                      <div class="panel-body">
                        <p>الإسم : إبراهيم جعفر بابكر ابراهيم </p>
                        <p>تاريخ الميلاد : 1999-99-9 </p>
                        <p>العنوان : الابيض - الرديف </p>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                      <h4 class="panel-title">
                        <a class="shape new-angle collapsed border5px" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <i class="fa fa-book main-color"></i>
                          البيانات الأكاديمية
                        </a>
                      </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
                      <div class="panel-body">
                        <p>مكان العمل : كلية علوم الحاسوب والاحصاء </p>
                        <p>القسم : تقانة المعلومات </p>
                        <p>تاريخ التعيين : 2022-22-02 </p>
                        <p>الدرجة العلمية : أستاذ مساعد </p>
                        <p> السيرة الذاتية : غير متاحة. </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-12">
                <div class="panel-group accordion" id="accordion2" role="tablist" aria-expanded="false">

                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="2602">
                      <h4 class="panel-title">
                        <a class="shape new-angle border5px collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#2601" aria-expanded="false" aria-controls="2601">
                          <i class="fa fa-info-circle main-color"></i>
                          الكورسات التي يدرسها
                        </a>
                      </h4>
                    </div>
                    <div id="2601" class="panel-collapse collapse" role="tabpanel" aria-labelledby="2602" aria-expanded="false" style="height: 0px;">
                      <div class="panel-body">
                        <p>سوداني</p>
                      </div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="2604">
                      <h4 class="panel-title">
                        <a class="shape new-angle border5px collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#2603" aria-expanded="false" aria-controls="2603">
                          <i class="fa fa-info-circle main-color"></i>
                          الاشراف (دكتوراه فقط)
                        </a>
                      </h4>
                    </div>
                    <div id="2603" class="panel-collapse collapse" role="tabpanel" aria-labelledby="2604" aria-expanded="false" style="height: 0px;">
                      <div class="panel-body">
                        <p>بكلاريوس بمرتبة الشرف</p>
                      </div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="2612">
                      <h4 class="panel-title">
                        <a class="shape new-angle border5px collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#2611" aria-expanded="false" aria-controls="2611">
                          <i class="fa fa-info-circle main-color"></i>
                          المؤهلات العلمية
                        </a>
                      </h4>
                    </div>
                    <div id="2611" class="panel-collapse collapse" role="tabpanel" aria-labelledby="2612" aria-expanded="false" style="height: 0px;">
                      <div class="panel-body">
                        <ol dir="rtl">
                          <li>لغات البرمجة</li>
                          <li>&nbsp;برمجة الويب (PHP-MYSQL).</li>
                          <li>&nbsp;التعليم الإلكتروني.</li>
                          <li>&nbsp;تكنولوجيا المعلومات.</li>
                          <li>&nbsp;المنطق الرقمى – لغة التجميع.</li>
                        </ol>
                      </div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="2614">
                      <h4 class="panel-title">
                        <a class="shape new-angle border5px collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#2613" aria-expanded="false" aria-controls="2613">
                          <i class="fa fa-info-circle main-color"></i>
                          الخبرة العملية
                        </a>
                      </h4>
                    </div>
                    <div id="2613" class="panel-collapse collapse" role="tabpanel" aria-labelledby="2614" aria-expanded="false" style="height: 0px;">
                      <div class="panel-body">
                        <ol dir="rtl">
                          <li>لغات البرمجة</li>
                          <li>&nbsp;برمجة الويب (PHP-MYSQL).</li>
                          <li>&nbsp;التعليم الإلكتروني.</li>
                          <li>&nbsp;تكنولوجيا المعلومات.</li>
                          <li>&nbsp;المنطق الرقمى – لغة التجميع.</li>
                        </ol>
                      </div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="2616">
                      <h4 class="panel-title">
                        <a class="shape new-angle border5px collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#2615" aria-expanded="false" aria-controls="2615">
                          <i class="fa fa-info-circle main-color"></i>
                          الإهتمامات البحثية
                        </a>
                      </h4>
                    </div>
                    <div id="2615" class="panel-collapse collapse" role="tabpanel" aria-labelledby="2616" aria-expanded="false" style="height: 0px;">
                      <div class="panel-body">
                        <ol dir="rtl">
                          <li>لغات البرمجة</li>
                          <li>&nbsp;برمجة الويب (PHP-MYSQL).</li>
                          <li>&nbsp;التعليم الإلكتروني.</li>
                          <li>&nbsp;تكنولوجيا المعلومات.</li>
                          <li>&nbsp;المنطق الرقمى – لغة التجميع.</li>
                        </ol>
                      </div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="2618">
                      <h4 class="panel-title">
                        <a class="shape new-angle border5px collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#2617" aria-expanded="false" aria-controls="2617">
                          <i class="fa fa-info-circle main-color"></i>
                          المنشورات
                        </a>
                      </h4>
                    </div>
                    <div id="2617" class="panel-collapse collapse" role="tabpanel" aria-labelledby="2618" aria-expanded="false" style="height: 0px;">
                      <div class="panel-body">
                        <ol dir="rtl">
                          <li>لغات البرمجة</li>
                          <li>&nbsp;برمجة الويب (PHP-MYSQL).</li>
                          <li>&nbsp;التعليم الإلكتروني.</li>
                          <li>&nbsp;تكنولوجيا المعلومات.</li>
                          <li>&nbsp;المنطق الرقمى – لغة التجميع.</li>
                        </ol>
                      </div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="2620">
                      <h4 class="panel-title">
                        <a class="shape new-angle border5px collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#2619" aria-expanded="false" aria-controls="2619">
                          <i class="fa fa-info-circle main-color"></i>
                          الاوراق العلمية
                        </a>
                      </h4>
                    </div>
                    <div id="2619" class="panel-collapse collapse" role="tabpanel" aria-labelledby="2620" aria-expanded="false" style="height: 0px;">
                      <div class="panel-body">
                        <ol dir="rtl">
                          <li>لغات البرمجة</li>
                          <li>&nbsp;برمجة الويب (PHP-MYSQL).</li>
                          <li>&nbsp;التعليم الإلكتروني.</li>
                          <li>&nbsp;تكنولوجيا المعلومات.</li>
                          <li>&nbsp;المنطق الرقمى – لغة التجميع.</li>
                        </ol>
                      </div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="2622">
                      <h4 class="panel-title">
                        <a class="shape new-angle border5px collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#2621" aria-expanded="false" aria-controls="2621">
                          <i class="fa fa-info-circle main-color"></i>
                          الورش العلمية
                        </a>
                      </h4>
                    </div>
                    <div id="2621" class="panel-collapse collapse" role="tabpanel" aria-labelledby="2622" aria-expanded="false" style="height: 0px;">
                      <div class="panel-body">
                        <ol dir="rtl">
                          <li>لغات البرمجة</li>
                          <li>&nbsp;برمجة الويب (PHP-MYSQL).</li>
                          <li>&nbsp;التعليم الإلكتروني.</li>
                          <li>&nbsp;تكنولوجيا المعلومات.</li>
                          <li>&nbsp;المنطق الرقمى – لغة التجميع.</li>
                        </ol>
                      </div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="2624">
                      <h4 class="panel-title">
                        <a class="shape new-angle border5px collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#2623" aria-expanded="false" aria-controls="2623">
                          <i class="fa fa-info-circle main-color"></i>
                          المؤتمرات العلمية وتقديم الاوراق
                        </a>
                      </h4>
                    </div>
                    <div id="2623" class="panel-collapse collapse" role="tabpanel" aria-labelledby="2624" aria-expanded="false" style="height: 0px;">
                      <div class="panel-body">
                        <ol dir="rtl">
                          <li>لغات البرمجة</li>
                          <li>&nbsp;برمجة الويب (PHP-MYSQL).</li>
                          <li>&nbsp;التعليم الإلكتروني.</li>
                          <li>&nbsp;تكنولوجيا المعلومات.</li>
                          <li>&nbsp;المنطق الرقمى – لغة التجميع.</li>
                        </ol>
                      </div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="2626">
                      <h4 class="panel-title">
                        <a class="shape new-angle border5px collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#2625" aria-expanded="false" aria-controls="2625">
                          <i class="fa fa-info-circle main-color"></i>
                          العضوية
                        </a>
                      </h4>
                    </div>
                    <div id="2625" class="panel-collapse collapse" role="tabpanel" aria-labelledby="2626" aria-expanded="false" style="height: 0px;">
                      <div class="panel-body">
                        <ol dir="rtl">
                          <li>لغات البرمجة</li>
                          <li>&nbsp;برمجة الويب (PHP-MYSQL).</li>
                          <li>&nbsp;التعليم الإلكتروني.</li>
                          <li>&nbsp;تكنولوجيا المعلومات.</li>
                          <li>&nbsp;المنطق الرقمى – لغة التجميع.</li>
                        </ol>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
@endsection
