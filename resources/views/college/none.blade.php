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
          <h2>......</h2>

          <div class="content">
            <h4>.....</h4>
            <p>.....</p>
          </div>

        </div>
      </div>
    </div>
    {{-- Start Faculties-Content --}}
  </div>
@endsection
