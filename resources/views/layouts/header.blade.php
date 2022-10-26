<!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- header-start -->
<header>
  <div class="header-area ">
    <div class="header-top_area">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="header_top_wrap d-flex justify-content-between align-items-center">
              <div class="text_wrap">
                <p>
                  <a href="{{ route('change_locale','ar') }}"> AR</a> |
                  <a href="{{ route('change_locale','en') }}">EN</a>
                  <span class="ml-2">
                    <!-- Large modal -->
                    <button type="button" class="btn btn-success btn-srch" id="btnsrch">
                    {{ trans('master.serch_name') }} <i class="fa fa-search"></i>
                    </button>
                  </span>
                </p>
              </div>
              <div class="text_wrap" >
                <p>
                  <!---- We must change link info call and mail later .......-->
                  <span><a href="tel:+249....">{{ config('app.info.phone_number') }} <i class="fa fa-phone"></i></a></span>
                  <span><a href="mailto:....">{{ config('app.info.email_address') }} <i class="fa fa-envelope-o"></i></a></span>
                </p>
              </div>
                {{-- @guest
                    <div class="text_wrap" >
                        <p><a href="{{ route('login') }}"> <i class="ti-user"></i>  {{ trans('auth.login') }}</a> <a href="{{ route('register') }}">{{ trans('auth.register') }}</a></p>
                    </div>
                @else
                    <div class="text_wrap" >
                        <p><a href="{{ route('home.me') }}"> <i class="ti-user"></i>  {{ auth()->user()->name }}</a> <a href="{{ route('home.setting') }}">{{ trans('user.settings') }}</a></p>
                    </div>
                @endguest --}}
        </div>
      </div>
    </div>
  </div>
</div>

<div id="sticky-header" class="main-header-area">
  <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
          <div class="header_wrap d-flex justify-content-between align-items-center headd">
            <div class="header_left">
              <div class="logo" style="padding">
                <a href="{{ route('home.index') }}">
                  <img src="{{ asset('img/logo.png') }}" alt="" height="40px" width="50px">
                  <span class="logo-title">{{ trans('master.app_name') }}</span>
                </a>
              </div>
            </div>
            <div class="header_right d-flex align-items-center">
              <div class="main-menu  d-none d-lg-block">
                <nav>
                    <ul id="navigation">
                      <li><a href="{{ route('home.index') }}">{{trans('master.home')}}</a></li>
                        @foreach($displayedSystemGroups as $group)
                          <li><a href="#">{{ $group->title }} <i class="ti-angle-down"></i></a>
                            <ul class="submenu">
                              @foreach($group->posts()->orderBy('id','desc')->take(5)->get() as $post)
                                <li><a href="{{ route('post.show',$post->slug) }}">{{ $post->title }}</a></li>
                              @endforeach
                              <li><a href="{{ route('group.show',$group->slug) }}" class="text-success">{{ trans('post.see_all') }}</a></li>
                            </ul>
                          </li>
                        @endforeach
                      <li><a href="{{ route('colleges.index','faculty') }}">{{trans('master.faculties')}}<i class="ti-angle-down"></i></a>
                          <ul class="submenu">
                              @foreach($institutes as $college)
                                  <li><a href="{{ route('colleges.show',$college->slug) }}">{{ $college->title }}</a></li>
                              @endforeach

                          </ul>
                      </li>
                      <li><a href="{{ route('colleges.index','administrations_services') }}">{{trans('master.administrations_services')}}<i class="ti-angle-down"></i></a>
                          <ul class="submenu">
                              @foreach($administrationsAndServices as $college)
                                  <li><a href="{{ route('colleges.show',$college->slug) }}">{{ $college->title }}</a></li>
                              @endforeach
                          </ul>
                      </li>
                      <li><a href="{{ route('colleges.index','institutes') }}">{{trans('master.institutes_centers')}}<i class="ti-angle-down"></i></a>
                        <ul class="submenu">
                          @foreach($faculties as $college)
                            <li><a href="{{ route('colleges.show',$college->slug) }}">{{ $college->title }}</a></li>
                          @endforeach
                        </ul>
                      </li>

                      {{-- <li><a href="#">{{trans('master.about')}} <i class="ti-angle-down"></i></a>
                        <ul class="submenu">
                          @foreach($informationPosts as $post)
                            <li><a href="{{ route('post.show',$post->slug) }}">{{ $post->title }}</a></li>
                          @endforeach
                          <li ><a href="{{ route('group.show',$informationGroup->slug) }}"class="text-success">{{ trans('post.see_all') }}</a></li>
                        </ul>
                      </li>

                      <li><a href="{{ route('contact.index') }}">{{trans('master.contact_us')}}</a></li> --}}

                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="mobile_menu d-block d-lg-none"></div>
            <!----------------------------- serach-box Start-------------------------------->
            <div class="serach-box">
              <div class="title">
                <h5>{{ trans('master.serch_name') }} {{ trans('master.app_name') }}</h5>
                <hr>
              </div>
              <div class="form-box">
                <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                    <form class="form-inline my-2 my-lg-0">
                      <input class="form-control ml-sm-2 ml-md-2" type="search" placeholder="{{ trans('master.serch_title') }}" aria-label="Search">
                      <button class="btn btn-success my-2 my-sm-0" type="submit">
                        <i class="fa fa-globe"></i>  {{ trans('master.serch_name') }}
                      </button>
                    </form>
                  </div>

                  <div class="col-md-3"></div>
                </div>
              </div>
            </div>
            <!----------------------------- serach-box End-------------------------------->
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- header-end -->
