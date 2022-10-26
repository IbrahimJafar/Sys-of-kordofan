<!-- recent_news_area_start  -->

<!-- start new section-->
<section id="homenews" class="section">

<div class="row">

<div class="col-lg-3 order-3 order-md-1">
  <h3 class="stytitle">{{trans('about.uk_goals')}}</h3>

  <div class="listnews-container">
      <div class="listnews scrollit wow fadeInUp text-right" data-wow-delay="100ms">
          <ul class="latest-news text-left ">
            {{-- @foreach($introductionPosts as $introductionPost)
            <li class="news_info text-center">
                <a href=>
                    <h4 class="post-title">{{ $introductionPost->title }}</h4>
                </a>

            </li>
            @endforeach --}}

            <li style="font-size: 14px">
              تعَّرف جامعة كردفان بأنها جامعة حكومية قومية السياسات والقبول والتمويل مقرها مدينة الأبيض حاضرة ولاية شمال كردفان لها شخصيتها الإعتبارية وشعارها وخاتمها.
            </li>
            <li>
              {{-- <h5> بموجب قانونها تهدف الى: </h5> --}}
              <h5> بموجب قانونها تهدف الى: </h5>
              <ol class="text-left" style="font-size: 14px; padding: unset">
                <li> تحصيل العلم وتدريسه وتطويره ونشره بغرض خدمة البلاد وتنمية موادرها ونهضتها فكرياً وعلمياً وإقتصادياً وثقافياً </li>
                <li>تأكيد حرية الأمة وتأصيلها من خلال المناهج التي تقررها الجامعة وتطبقها .</li>
                <li>إجراء البحوث التطبيقية المرتبطة بحاجات المجتمع المختلفة والمتعددة في سبيل خدمته والإرتقاء به .</li>
                <li>إبتكار التقنية وتوظيفها لخدمة المجتمع السودانى بالتعاون مع الجامعات ومؤسسات التعليم العالي والبحث العلمي الأخرى بالبلاد .</li>
                <li>إلإهتمام بالبيئة السودانية عامة وبيئة ولاية شمال كردفان خاصة ، وتأهيل الكادر القادر على ترقيتها وحل قضايا الولاية المتعلقة بالبيئة .</li>
              </ol>
            </li>
          </ul>

      </div>


  </div>
  <div class="text-center" style="margin-top: 23px;">
      <a href="#" class="btn outline-gold btn-round btn-arrow boxed-btn5 text-light"><i class="fa fa-angle-double-left "></i><span>شاهد المزيد</span></a>
  </div>
</div>


<div class="col-lg-6 order-1 order-md-2">

<div class="trend-news-container">


<h3 class="sty2title"> <p> {{ $informationGroup->title }}</p></h3>

<div class="trend-news wow fadeIn" data-wow-delay="200ms">
  <!-- <div class="row">
      @foreach($introductionPosts as $introductionPost)
          <div class="col-md-6">
              <div class="single__news">
                  <div class="thumb">
                      <a href="{{ route('post.show',$introductionPost->slug) }}">
                          <img src="{{ $introductionPost->image_url }}" alt="">
                      </a>
                      <span class="badge bg-success">{{ config('app.name') }}</span>
                  </div>
                  <div class="news_info text-center">
                      <a href="{{ route('post.show',$introductionPost->slug) }}">
                          <h4 class="post-title">{{ $introductionPost->title }}</h4>
                          <p class="card-body post-title">{{ substr($introductionPost->content,0,500) }}</p>
                      </a>

                      <br>
                      <div class="course_all_btn text-center" style="">
                          <a href="{{ route('post.show',$introductionPost->slug) }}" class="boxed-btn5 text-light">{{ trans('post.full_article') }}</a>
                      </div>
                  </div>

              </div>
          </div>
          <div class="course_all_btn text-center" style="">
              <a href="{{ route('post.show',$introductionPost->slug) }}" class="boxed-btn5 text-light">{{ trans('post.read_more') }}</a>
          </div>

      @endforeach
  </div> -->


        <img class="img_center text-center" src="{{url('upload/uk.png')}}" alt="">


          <div class="text_about scrollit wow fadeInUp text-center" data-wow-delay="100ms">
            <p class="scrollit wow fadeInUp text-right">
              {{trans('about.uk_about')}}
            </p>
          </div>
      </div>

</div>

<br>
<div class="text-center" style="">
    <a href="#" class="btn outline-gold btn-round btn-arrow boxed-btn5 text-light"><i class="fa fa-angle-double-left "></i><span>شاهد المزيد</span></a>
</div>
</div>
<div class="col-lg-3 order-2 order-md-3">
  <h3 class="stytitle">{{trans('about.uk_visson')}}</h3>

  <div class="ads-links-container">
      <div class="ads-links scrollit wow fadeInUp text-right" data-wow-delay="100ms" >

          <ul class="latest-ads">
            {{-- @foreach($introductionPosts as $introductionPost)
            <li class="news_info text-center">
                <a href=>
                    <h4 class="post-title">{{ $introductionPost->title }}</h4>
                </a>

            </li>
            @endforeach --}}
            <li class="news_info text-center">
              {{-- <div >الرؤية: </div> --}}
              <h5>{{trans('about.visson')}}</h5>
                  <p class="post-title" style="font-size: 14px">
                    جامعة متميزة في العلوم والمعارف والإبتكار العلمي وخدمة المجتمع.
                  </p>
                </li>
                <li class="news_info text-center">
                  <h5>{{trans('about.mission')}}</h5>
                  <ol class="text-center" style="font-size: 14px ; padding: unset">
                    <li class="text-left"> توفير منصة واسعة للتعلم من خلال بيئة تعليمية وبحثية ذات نوعية. </li>
                    <li class="text-left">تأهيل أطر بمعايير قياسية قادرة على المنافسة في سوق العمل.</li>
                    <li class="text-left">المساهمة الفاعلة في التنمية وبناء الأمة.</li>
                    <li class="text-left">تعزيز مكانة الجامعة من خلال شراكات وطنية وإقليمية ودولية.</li>
                    <li class="text-left">تقديم برامج تعليمية وبحثية متميزة وتوظيفها في خدمة المجتمع.</li>
                  </ol>

          </li>
          </ul>
      </div>


  </div>
  <div class="text-center" style="margin-top: -23px">
      <a href="#" class="btn outline-gold btn-round btn-arrow boxed-btn5 text-light"><i class="fa fa-angle-double-left "></i><span>شاهد المزيد</span></a>
  </div>
</div>

</div>
</section>
