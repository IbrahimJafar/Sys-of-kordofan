@extends('layouts.master')

@section('content')

  <div class="faculties-body">

    @include('layouts.collage_head')

    {{-- Start Faculties-Content --}}
    <div class="faculties-content">
      <div class="container content_2">

        {{-- Start Sidebar Part --}}
        @include('layouts.staff_edit_sidebar')

        {{-- Start Content Part --}}
        <div class="contents">
          <h2>
            <i class="fa fa-tasks bbttnn" onclick="siteBActive()" aria-hidden="true"></i>
          </h2>

          <div class="tab-content">
            <div id="home" class="container tab-pane active">
              <div class="content mt-0">
                <h3 class="mb-4 border-bottom border-success">البيانات الشخصية</h3>
                <form action="/action_page.php" autocomplete="off">
                  <div class="form-group">
                    <label for="fname">الاسم:</label>
                    <input type="text" name="fname" class="form-control" id="fname">
                  </div>
                  <div class="row">
                    <div class="col">
                      <div class="form-group">
                        <label for="national">الجنسية:</label>
                        <select name="national" id="national" class="custom-select">
                          <option value="">سوداني</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4</option>
                          <option value="">...</option>
                        </select>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-group">
                        <label for="gender">النوع:</label>
                        <select name="gender" id="gender" class="custom-select">
                          <option value="">ذكر</option>
                          <option value="">أنثى</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">البريد الإلكتروني:</label>
                    <input type="email" name="" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="phone">رقم الهاتف:</label>
                    <input type="number" name="phone" class="form-control" id="phone">
                  </div>
                  <div class="form-group">
                    <label for="address">العنوان:</label>
                    <input type="text" name="address" class="form-control" id="address">
                  </div>
                  {{-- <div class="form-group form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox"> تذكرني
                    </label>
                  </div> --}}
                  <button type="submit" name="btnUpdate" class="btn btn-primary">تحديث البيانات</button>
                </form>
              </div>

              <div class="content">
                <h3 class="mb-4 border-bottom border-success">تغير كلمة المرور</h3>
                <form action="/action_page.php" class="" autocomplete="off">
                  <div class="form-group">
                    <label for="pwd1">كلمة المرور الجديدة:</label>
                    <input type="password" name="pwd1" class="form-control" id="pwd1">
                  </div>
                  <div class="form-group">
                    <label for="pwd2">تأكيد كلمة المرور الجديدة:</label>
                    <input type="password" name="pwd2" class="form-control" id="pwd2">
                  </div>
                  <div class="form-group">
                    <label for="pwd3">كلمة المرور القديمة:</label>
                    <input type="password" name="pwd3" class="form-control" id="pwd3">
                  </div>
                  <button type="submit" name="btnUpdate" class="btn btn-primary">تحديث البيانات</button>
                </form>
              </div>
            </div>

            <div id="menu1" class="container tab-pane fade content"><br>
              <h3 class="mb-4 border-bottom border-success">البيانات الاكاديمية</h3>
              <form action="/action_page.php" autocomplete="off">
                <div class="form-group">
                  <label for="collage">الكلية:</label>
                  <input type="collage" name="" class="form-control" id="collage">
                </div>
                <div class="form-group">
                  <label for="academicDepart">القسم:</label>
                  <input type="text" name="academicDepart" class="form-control" id="academicDepart">
                </div>
                <div class="form-group">
                  <label for="jop">المنصب الداري الحالي:</label>
                  <input type="text" name="jop" class="form-control" id="jop">
                </div>
                <div class="form-group">
                  <label for="degree">الدرجة العلمية:</label>
                  <select name="degree" id="degree" class="custom-select">
                    <option value="">بروفيسور</option>
                    <option value="">دكتور</option>
                    <option value="">استاذ</option>
                    <option value="">محاضر</option>
                    <option value="">مساعد تدريس</option>
                    <option value="">...</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="cvArea">السيرة الزاتية:</label>
                  <textarea name="cvArea" class="form-control" id="cvArea"></textarea>
                </div>
                <button type="submit" name="btnUpdate" class="btn btn-primary">تحديث البيانات</button>
              </form>
            </div>

            <div id="menu2" class="container tab-pane fade content"><br>
              <h3 class="mb-4 border-bottom border-success">الكورسات</h3>
              <form action="/action_page.php" autocomplete="off">
                <div class="form-group">
                  <label for="course">الكورسات:</label>
                  <textarea name="course" class="form-control" id="course"></textarea>
                </div>
                <button type="submit" name="btnUpdate" class="btn btn-primary">تحديث البيانات</button>
              </form>
            </div>

            <div id="menu3" class="container tab-pane fade content"><br>
              <h3 class="mb-4 border-bottom border-success">الاشراف (دكتوراه فقط)</h3>
              <form action="/action_page.php" autocomplete="off">
                <div class="form-group">
                  <label for="stName">إسم الطالب:</label>
                  <input type="text" name="stName" class="form-control" id="stName">
                </div>
                <div class="form-group">
                  <label for="searchAddress">عنوان البحث:</label>
                  <input type="text" name="searchAddress" class="form-control" id="searchAddress">
                </div>
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label for="program">البرنامج:</label>
                      <select name="program" id="program" class="custom-select">
                        <option value="">...</option>
                        <option value="">...</option>
                        <option value="">...</option>
                      </select>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <label for="superViDepart">القسم:</label>
                      <select name="superViDepart" id="superViDepart" class="custom-select">
                        <option value="">...</option>
                        <option value="">...</option>
                        <option value="">...</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="superViPeriod">المدة الزمنية:</label>
                  <input type="text" name="superViPeriod" class="form-control" id="superViPeriod">
                </div>
                <button type="submit" name="btnAdd" class="btn btn-primary">إضافة البيانات</button>
                <button type="submit" name="btnUpdate" class="btn btn-primary">تحديث البيانات</button>
              </form>
            </div>

            <div id="menu4" class="container tab-pane fade content"><br>
              <h3 class="mb-4 border-bottom border-success">المؤهلات العلمية</h3>
              <form action="/action_page.php" autocomplete="off">
                <h4 class="mb-2">بكلاريوس بمرتبة الشرف / بكلاريوس</h4>
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label for="certificateDateBC">تاريخ منح الشهادة:</label>
                      <input type="date" name="certificateDateBC" class="form-control" id="certificateDateBC">
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <label for="certificateCountryBC">الدولة:</label>
                      <select name="certificateCountryBC" id="certificateCountryBC" class="custom-select">
                        <option value="">...</option>
                        <option value="">...</option>
                        <option value="">...</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="certificateUniversityBC">الجامعة:</label>
                  <input type="text" name="certificateUniversityBC" class="form-control" id="certificateUniversityBC">
                </div>
                <div class="form-group">
                  <label for="certificateSpecialistBC">التخصص:</label>
                  <input type="text" name="certificateSpecialistBC" class="form-control" id="certificateSpecialistBC">
                </div>
                <button type="submit" name="btnAdd" class="btn btn-primary">إضافة البيانات</button>
                <button type="submit" name="btnUpdate" class="btn btn-primary">تحديث البيانات</button>
              </form>

              <form action="/action_page.php" autocomplete="off">
                <h4 class="mb-2 pt-4">دبلوم العالي</h4>
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label for="certificateDateDB">تاريخ منح الشهادة:</label>
                      <input type="date" name="certificateDateDB" class="form-control" id="certificateDateDB">
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <label for="certificateCountryDB">الدولة:</label>
                      <select name="certificateCountryDB" id="certificateCountryDB" class="custom-select">
                        <option value="">...</option>
                        <option value="">...</option>
                        <option value="">...</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="certificateUniversityDB">الجامعة:</label>
                  <input type="text" name="certificateUniversityDB" class="form-control" id="certificateUniversityDB">
                </div>
                <div class="form-group">
                  <label for="certificateSpecialistDB">التخصص:</label>
                  <input type="text" name="certificateSpecialistDB" class="form-control" id="certificateSpecialistDB">
                </div>
                <button type="submit" name="btnAdd" class="btn btn-primary">إضافة البيانات</button>
                <button type="submit" name="btnUpdate" class="btn btn-primary">تحديث البيانات</button>
              </form>

              <form action="/action_page.php" autocomplete="off">
                <h4 class="mb-2 pt-4">الماجستير</h4>
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label for="certificateDateMA">تاريخ منح الشهادة:</label>
                      <input type="date" name="certificateDateMA" class="form-control" id="certificateDateMA">
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <label for="certificateCountryMA">الدولة:</label>
                      <select name="certificateCountryMA" id="certificateCountryMA" class="custom-select">
                        <option value="">...</option>
                        <option value="">...</option>
                        <option value="">...</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="certificateUniversityMA">الجامعة:</label>
                  <input type="text" name="certificateUniversityMA" class="form-control" id="certificateUniversityMA">
                </div>
                <div class="form-group">
                  <label for="certificateSpecialistMA">التخصص:</label>
                  <input type="text" name="certificateSpecialistMA" class="form-control" id="certificateSpecialistMA">
                </div>
                <button type="submit" name="btnAdd" class="btn btn-primary">إضافة البيانات</button>
                <button type="submit" name="btnUpdate" class="btn btn-primary">تحديث البيانات</button>
              </form>

              <form action="/action_page.php" autocomplete="off">
                <h4 class="mb-2 pt-4">الدكتوراة</h4>
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label for="certificateDateDR">تاريخ منح الشهادة:</label>
                      <input type="date" name="certificateDateDR" class="form-control" id="certificateDateDR">
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <label for="certificateCountryDR">الدولة:</label>
                      <select name="certificateCountryDR" id="certificateCountryDR" class="custom-select">
                        <option value="">...</option>
                        <option value="">...</option>
                        <option value="">...</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="certificateUniversityDR">الجامعة:</label>
                  <input type="text" name="certificateUniversityDR" class="form-control" id="certificateUniversityDR">
                </div>
                <div class="form-group">
                  <label for="certificateSpecialistDR">التخصص:</label>
                  <input type="text" name="certificateSpecialistDR" class="form-control" id="certificateSpecialistDR">
                </div>
                <button type="submit" name="btnAdd" class="btn btn-primary">إضافة البيانات</button>
                <button type="submit" name="btnUpdate" class="btn btn-primary">تحديث البيانات</button>
              </form>
            </div>

            <div id="menu5" class="container tab-pane fade content"><br>
              <h3 class="mb-4 border-bottom border-success">الخبرة العملية</h3>
              <form action="/action_page.php" autocomplete="off">
                <div class="form-group">
                  <label for="expertiseConcern">المؤسسة:</label>
                  <input type="text" name="expertiseConcern" class="form-control" id="expertiseConcern">
                </div>
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label for="xpertisePeriodFrom">المدة الزمنية من:</label>
                      <input type="date" name="xpertisePeriodFrom" class="form-control" id="xpertisePeriodFrom">
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <label for="xpertisePeriodTo">المدة الزمنية إلى:</label>
                      <input type="date" name="xpertisePeriodTo" class="form-control" id="xpertisePeriodTo">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="xpertiseTripsis">المنصب:</label>
                  <input type="text" name="xpertiseTripsis" class="form-control" id="xpertiseTripsis">
                </div>
                <button type="submit" name="btnAdd" class="btn btn-primary">إضافة البيانات</button>
                <button type="submit" name="btnUpdate" class="btn btn-primary">تحديث البيانات</button>
              </form>
            </div>

            <div id="menu6" class="container tab-pane fade content"><br>
              <h3 class="mb-4 border-bottom border-success">الإهتمامات البحثية</h3>
              <form action="/action_page.php" autocomplete="off">
                <div class="form-group">
                  <label for="advertencies">الإهتمامات البحثية:</label>
                  <textarea name="advertencies" class="form-control" id="advertencies"></textarea>
                </div>
                <button type="submit" name="btnUpdate" class="btn btn-primary">تحديث البيانات</button>
              </form>
            </div>

            <div id="menu7" class="container tab-pane fade content"><br>
              <h3 class="mb-4 border-bottom border-success">المنشورات</h3>
              <form action="/action_page.php" autocomplete="off">
                <div class="form-group">
                  <label for="publishBookTitle">عنوان الكتاب:</label>
                  <input type="text" name="publishBookTitle" class="form-control" id="publishBookTitle">
                </div>
                <div class="form-group">
                  <label for="publishBookNo">الرقم التسلسلي للكتاب:</label>
                  <input type="number" name="publishBookNo" class="form-control" id="publishBookNo">
                </div>
                <div class="form-group">
                  <label for="publishreBook">الناشر:</label>
                  <input type="text" name="publishreBook" class="form-control" id="publishreBook">
                </div>
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label for="publishFirstDate">تاريخ نشر أول نسخة:</label>
                      <input type="date" name="publishFirstDate" class="form-control" id="publishFirstDate">
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <label for="publishLastDate">تاريخ نشر آخر نسخة:</label>
                      <input type="date" name="publishLastDate" class="form-control" id="publishLastDate">
                    </div>
                  </div>
                </div>
                <button type="submit" name="btnAdd" class="btn btn-primary">إضافة البيانات</button>
                <button type="submit" name="btnUpdate" class="btn btn-primary">تحديث البيانات</button>
              </form>
            </div>

            <div id="menu8" class="container tab-pane fade content"><br>
              <h3 class="mb-4 border-bottom border-success">الاوراق العلمية</h3>
              <form action="/action_page.php" autocomplete="off">
                <div class="form-group">
                  <label for="paperTitle">عنوان الورقة العملية:</label>
                  <input type="text" name="paperTitle" class="form-control" id="paperTitle">
                </div>
                <div class="form-group">
                  <label for="paperTitleMAG">عنوان المجلة الناشرة:</label>
                  <input type="text" name="paperTitleMAG" class="form-control" id="paperTitleMAG">
                </div>
                <div class="form-group">
                  <label for="paperCountry">الدولة:</label>
                  <select name="paperCountry" id="paperCountry" class="custom-select">
                    <option value="">...</option>
                    <option value="">...</option>
                    <option value="">...</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="paperFromTo">الأوراق: من - إلى:</label>
                  <input type="text" name="paperFromTo" class="form-control" id="paperFromTo">
                </div>
                <div class="form-group">
                  <label for="paperNO_MAG">رقم اصدار المجلة:</label>
                  <input type="text" name="paperNO_MAG" class="form-control" id="paperNO_MAG">
                </div>
                <div class="form-group">
                  <label for="paperPublishDate">تاريخ النشر:</label>
                  <input type="date" name="paperPublishDate" class="form-control" id="paperPublishDate">
                </div>
                <div class="form-group">
                  <label for="publishesLink">الموقع الإلكتروني:</label>
                  <input type="text" name="publishesLink" class="form-control" id="publishesLink">
                </div>
                <button type="submit" name="btnAdd" class="btn btn-primary">إضافة البيانات</button>
                <button type="submit" name="btnUpdate" class="btn btn-primary">تحديث البيانات</button>
              </form>
            </div>

            <div id="menu9" class="container tab-pane fade content"><br>
              <h3 class="mb-4 border-bottom border-success">الورش العلمية</h3>
              <form action="/action_page.php" autocomplete="off">
                <div class="form-group">
                  <label for="tarea">الورشات العلمية:</label>
                  <input type="text" name="" class="form-control" id="fname">
                </div>
                <div class="form-group">
                  <label for="tarea">الدولة / المدينة:</label>
                  <select name="gender" id="gender" class="custom-select">
                    <option value="">...</option>
                    <option value="">...</option>
                    <option value="">...</option>
                  </select>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label for="tarea">التاريخ من:</label>
                      <input type="date" name="" class="form-control" id="fname">
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <label for="tarea">التاريخ إلى:</label>
                      <input type="date" name="" class="form-control" id="fname">
                    </div>
                  </div>
                </div>
                <button type="submit" name="btnAdd" class="btn btn-primary">إضافة البيانات</button>
                <button type="submit" name="btnUpdate" class="btn btn-primary">تحديث البيانات</button>
              </form>
            </div>

            <div id="menu10" class="container tab-pane fade content"><br>
              <h3 class="mb-4 border-bottom border-success">المؤتمرات العلمية وتقديم الاوراق</h3>
              <form action="/action_page.php" autocomplete="off">
                <div class="form-group">
                  <label for="tarea">إسم المؤتمر العلمي أو أسم الورقة المقدمة:</label>
                  <input type="text" name="" class="form-control" id="fname">
                </div>
                <div class="form-group">
                  <label for="tarea">الدولة:</label>
                  <select name="gender" id="gender" class="custom-select">
                    <option value="">...</option>
                    <option value="">...</option>
                    <option value="">...</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="tarea">المكان:</label>
                  <input type="text" name="" class="form-control" id="fname">
                </div>
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label for="tarea">التاريخ من:</label>
                      <input type="date" name="" class="form-control" id="fname">
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <label for="tarea">التاريخ إلى:</label>
                      <input type="date" name="" class="form-control" id="fname">
                    </div>
                  </div>
                </div>
                <button type="submit" name="btnAdd" class="btn btn-primary">إضافة البيانات</button>
                <button type="submit" name="btnUpdate" class="btn btn-primary">تحديث البيانات</button>
              </form>
            </div>

            <div id="menu11" class="container tab-pane fade content"><br>
              <h3 class="mb-4 border-bottom border-success">العضوية</h3>
              <form action="/action_page.php" autocomplete="off">
                <div class="form-group">
                  <label for="tarea">إسم المنظمة/الجمعية:</label>
                  <input type="text" name="" class="form-control" id="fname">
                </div>
                <div class="form-group">
                  <label for="tarea">الدولة:</label>
                  <select name="gender" id="gender" class="custom-select">
                    <option value="">...</option>
                    <option value="">...</option>
                    <option value="">...</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="tarea">الموقع الإلكتروني:</label>
                  <input type="email" name="" class="form-control" id="fname">
                </div>
                <div class="form-group">
                  <label for="tarea">الفترة الزمنية:</label>
                  <input type="text" name="" class="form-control" id="fname">
                </div>
                <button type="submit" name="btnAdd" class="btn btn-primary">إضافة البيانات</button>
                <button type="submit" name="btnUpdate" class="btn btn-primary">تحديث البيانات</button>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
    {{-- Start Faculties-Content --}}
  </div>
@endsection
