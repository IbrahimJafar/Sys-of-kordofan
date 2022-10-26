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
          <h2>الكادر الإداري بالكية</h2>

          <hr>

          <div class="searsh-area border-bottom pb-2">
            <form action="">
              <div class="form-row">
                <div class="col-sm-6 col-lg-3 mb-3">
                  <input type="text" placeholder="Searsh By Name" class="form-control shadow">
                </div>
                <div class="col-sm-6 col-lg-3 mb-3">
                  <select name="" id="" class="custom-select shadow">
                    <option value="">Department</option>
                    <option value="">1</option>
                    <option value="">1</option>
                    <option value="">1</option>
                  </select>
                </div>
                <div class="col-sm-6 col-lg-3 mb-3">
                  <select name="" id="" class="custom-select shadow">
                    <option value="">Degree</option>
                    <option value="">1</option>
                    <option value="">1</option>
                    <option value="">1</option>
                  </select>
                </div>
                <div class="col-sm-6 col-lg-3 mb-3">
                  <input type="submit" value="Searsh" class="btn btn-success form-control">
                </div>
              </div>
            </form>
          </div>

          <div class="body-area pt-4">

            <div class="cards">
              <div class="card-imag">
                <a href="/staff/5"><img src="img/3.jpg" alt="..."></a>
                <h5 class="card-titl px-2"><a href="/staff/5">إبراهيم جعفر بابكر ابراهيم</a></h5>
              </div>
              <p class="card-tex">خريج كلية دراسات الحاسوب والاحصاء - جامة كردفان</p>
            </div>

            <div class="cards">
              <div class="card-imag">
                <a href="/staff/5"><img src="img/3.png" alt="..."></a>
                <h5 class="card-titl px-2"><a href="/staff/5">إبراهيم جعفر بابكر ابراهيم</a></h5>
              </div>
              <p class="card-tex">خريج كلية دراسات الحاسوب والاحصاء - جامة كردفان</p>
            </div>

            <div class="cards">
              <div class="card-imag">
                <a href="/staff/5"><img src="img/3.jpg" alt="..."></a>
                <h5 class="card-titl px-2"><a href="/staff/5">إبراهيم جعفر بابكر ابراهيم</a></h5>
              </div>
              <p class="card-tex">خريج كلية دراسات الحاسوب والاحصاء - جامة كردفان</p>
            </div>

            <div class="cards">
              <div class="card-imag">
                <a href="/staff/5"><img src="img/3.png" alt="..."></a>
                <h5 class="card-titl px-2"><a href="/staff/5">إبراهيم جعفر بابكر ابراهيم</a></h5>
              </div>
              <p class="card-tex">خريج كلية دراسات الحاسوب والاحصاء - جامة كردفان</p>
            </div>

            <div class="cards">
              <div class="card-imag">
                <a href="/staff/5"><img src="img/3.jpg" alt="..."></a>
                <h5 class="card-titl px-2"><a href="/staff/5">إبراهيم جعفر بابكر ابراهيم</a></h5>
              </div>
              <p class="card-tex">خريج كلية دراسات الحاسوب والاحصاء - جامة كردفان</p>
            </div>

            <div class="cards">
              <div class="card-imag">
                <a href="/staff/5"><img src="img/3.png" alt="..."></a>
                <h5 class="card-titl px-2"><a href="/staff/5">إبراهيم جعفر بابكر ابراهيم</a></h5>
              </div>
              <p class="card-tex">خريج كلية دراسات الحاسوب والاحصاء - جامة كردفان</p>
            </div>

            <div class="cards">
              <div class="card-imag">
                <a href="/staff/5"><img src="img/3.jpg" alt="..."></a>
                <h5 class="card-titl px-2"><a href="/staff/5">إبراهيم جعفر بابكر ابراهيم</a></h5>
              </div>
              <p class="card-tex">خريج كلية دراسات الحاسوب والاحصاء - جامة كردفان</p>
            </div>

            <div class="cards">
              <div class="card-imag">
                <a href="/staff/5"><img src="img/3.png" alt="..."></a>
                <h5 class="card-titl px-2"><a href="/staff/5">إبراهيم جعفر بابكر ابراهيم</a></h5>
              </div>
              <p class="card-tex">خريج كلية دراسات الحاسوب والاحصاء - جامة كردفان</p>
            </div>

            <div class="cards">
              <div class="card-imag">
                <a href="/staff/5"><img src="img/3.jpg" alt="..."></a>
                <h5 class="card-titl px-2"><a href="/staff/5">إبراهيم جعفر بابكر ابراهيم</a></h5>
              </div>
              <p class="card-tex">خريج كلية دراسات الحاسوب والاحصاء - جامة كردفان</p>
            </div>

            <div class="cards">
              <div class="card-imag">
                <a href="/staff/5"><img src="img/3.png" alt="..."></a>
                <h5 class="card-titl px-2"><a href="/staff/5">إبراهيم جعفر بابكر ابراهيم</a></h5>
              </div>
              <p class="card-tex">خريج كلية دراسات الحاسوب والاحصاء - جامة كردفان</p>
            </div>

            <div class="cards">
              <div class="card-imag">
                <a href="/staff/5"><img src="img/3.jpg" alt="..."></a>
                <h5 class="card-titl px-2"><a href="/staff/5">إبراهيم جعفر بابكر ابراهيم</a></h5>
              </div>
              <p class="card-tex">خريج كلية دراسات الحاسوب والاحصاء - جامة كردفان</p>
            </div>

            <div class="cards">
              <div class="card-imag">
                <a href="/staff/5"><img src="img/3.png" alt="..."></a>
                <h5 class="card-titl px-2"><a href="/staff/5">إبراهيم جعفر بابكر ابراهيم</a></h5>
              </div>
              <p class="card-tex">خريج كلية دراسات الحاسوب والاحصاء - جامة كردفان</p>
            </div>

          </div>

          <nav aria-label="Page navigation example" class="mt-4">
            <ul class="pagination justify-content-center">
              <li class="page-item disabled">
                <a class="page-link"><span aria-hidden="true">&laquo;</span></a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a>
              </li>
            </ul>
          </nav>

        </div>
      </div>
    </div>

  </div>
@endsection
