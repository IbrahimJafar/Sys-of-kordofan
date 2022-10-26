    {{-- Start Faculty Head --}}
    <div class="faculties">
      <div class="facultyhead animated fadeInDown">
        {{-- <h1>{{ $college->title }}</h1> --}}
        <h1>{{trans('college.title')}}</h1>
        <ul>
          {{-- <li>الرئسية</li> --}}
          <li>{{trans('college.home')}}</li>
          {{-- <li><span class="slash"> / </span> {{ $college->title }}</li> --}}
          <li><span class="slash"> / </span> {{trans('college.title')}}</li>
        </ul>
      </div>
    </div>
    {{-- End Faculty Head --}}
