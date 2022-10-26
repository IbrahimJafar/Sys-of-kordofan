
<!-- footer start -->
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="newsLetter_wrap">
                <div class="row justify-content-between">
                    <div class="col-md-7">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                               {{ trans('master.stay_updated') }}
                            </h3>
                            <form action="{{ route('contact.subscribe') }}" class="newsletter_form" method="post">
                                @csrf
                                <input  name="email_address" type="email" required placeholder="{{ trans('master.email_address') }}">
                                <button type="submit">{{ trans('master.subscribe_now') }}</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-5">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                {{ trans('master.follow_us_on') }}
                            </h3>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($unDisplayedSystemGroups as $group)
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            {{$group->title }}
                        </h3>
                        <ul>
                            @foreach($group->posts()->take(5)->get() as $post)
                                @if($group->is('co-related'))
                                    <li><a href="{{ $post->getExtraKeyValue('link') }}" target="_blank"><i class="fa fa-link"></i>  {{ $post->title }}</a></li>
                                @else
                                    <li><a href="{{ route('post.show',$post->slug) }}">{{ $post->title }}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endforeach
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            {{ trans('master.contact_us') }}
                        </h3>
                        <ul>
                            @foreach(config('app.info') as $key => $info)
                            <li class="text-white"><span style="font-weight: bold">{{ trans('master.' . $key)}}</span> : <p class="text-white">{{ $info }}</p></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center text-light">
                    <p class="text-light">
                        Copyright &copy;{{ \Carbon\Carbon::now()->year }}
                        All rights reserved {{ config('app.name') }} </p>

                    <p>
                        Created With <i class="ti-heart" aria-hidden="true"></i>
                        by <a href="{{ config('app.author.facebook') }}" target="_blank" class="text-success">{{ config('app.author.name') }}</a>
                    </p>

                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end  -->
