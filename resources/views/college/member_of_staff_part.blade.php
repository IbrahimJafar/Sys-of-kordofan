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
          <h2>أعضاء هيئة التدريس بقسم علوم الحاسوب</h2>

          <div class="style-6 shape mt-5 border5px">

            <div class="table-responsive">
              <table class="table table-bordered table-hovered table-strip">
                <thead style="background: #7293b4; color:#fff">
                  <tr>
                    <th style="text-align: center;">الإسم</th>
                    <th style="text-align: center;">الدرجة العلمية</th>
                    <th style="text-align: center;">عرض البيانات</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td> إبراهيم جعفر بابكر </td>
                    <td>دكتور</td>
                    <td class="staffInfo" style="text-align: center;">
                      <a href="/staff/5"><i class="fa fa-eye"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td> إبراهيم جعفر بابكر </td>
                    <td>محاضر</td>
                    <td class="staffInfo" style="text-align: center;">
                      <a href="/staff/5"><i class="fa fa-eye"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td> إبراهيم جعفر بابكر </td>
                    <td>أستاذ مساعد</td>
                    <td class="staffInfo" style="text-align: center;">
                      <a href="/staff/5"><i class="fa fa-eye"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td> إبراهيم جعفر بابكر </td>
                    <td>مساعد تدريس</td>
                    <td class="staffInfo" style="text-align: center;">
                      <a href="/staff/5"><i class="fa fa-eye"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td> إبراهيم جعفر بابكر </td>
                    <td>دكتور</td>
                    <td class="staffInfo" style="text-align: center;">
                      <a href="/staff/5"><i class="fa fa-eye"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td> إبراهيم جعفر بابكر </td>
                    <td>محاضر</td>
                    <td class="staffInfo" style="text-align: center;">
                      <a href="/staff/5"><i class="fa fa-eye"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td> إبراهيم جعفر بابكر </td>
                    <td>أستاذ مساعد</td>
                    <td class="staffInfo" style="text-align: center;">
                      <a href="/staff/5"><i class="fa fa-eye"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td> إبراهيم جعفر بابكر </td>
                    <td>مساعد تدريس</td>
                    <td class="staffInfo" style="text-align: center;">
                      <a href="/staff/5"><i class="fa fa-eye"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td> إبراهيم جعفر بابكر </td>
                    <td>دكتور</td>
                    <td class="staffInfo" style="text-align: center;">
                      <a href="/staff/5"><i class="fa fa-eye"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td> إبراهيم جعفر بابكر </td>
                    <td>محاضر</td>
                    <td class="staffInfo" style="text-align: center;">
                      <a href="/staff/5"><i class="fa fa-eye"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>
@endsection
