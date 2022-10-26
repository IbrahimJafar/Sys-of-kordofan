@extends('layouts.master')

@section('content')

  <div class="faculties-body">

    @include('layouts.center_head')

    {{-- Start Faculties-Content --}}
    <div class="faculties-content">
      <div class="container">

        {{-- Start Sidebar Part --}}
        @include('layouts.centers_sidebar')
        {{-- End Sidebar Part --}}

        {{-- Start Content Part --}}
        <div class="contents">
          <h2>صفات المركز</h2>

          <div class="content">
            <h4>صفات المركز</h4>
            <p>صفات المركز</p>
          </div>

        </div>
      </div>
    </div>
    {{-- Start Faculties-Content --}}
  </div>
@endsection
