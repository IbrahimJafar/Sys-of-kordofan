@section('sidebar')

  <div class="asid">
    <div class="asidecontainer">
      <div class="widget-img">
        <img src="{{ asset('upload/uk.png') }}" alt="">
      </div>

      <div class="asidecontent">
        <div class="asidemenu">
          <ul id="u0">
            {{-- <li><a href="{{ $college->slug }}">{{trans('college.main_page')}}</a></li> --}}
            {{-- <li><a href="{{trans('college.link')}}">{{trans('college.main_page')}}</a></li> --}}
            <li><a href="/main">{{trans('college.main_page')}}</a></li>
            <li class="has-sub"><a>{{trans('college.aout_faculty')}}</a>
              <ul id="u20218">
                <li><a href="/vision-mission-goals">{{trans('college.vison')}}</a></li>
                <li><a href="/vision-mission-goals">{{trans('college.mission')}}</a></li>
                <li><a href="/vision-mission-goals">{{trans('college.gools')}}</a></li>
              </ul>
            </li>
            <li class="has-sub"><a href="#">{{trans('college.dean')}}</a>
              <ul id="u20345">
                <li><a href="/empty">{{trans('college.dean_message')}}</a></li>
                <li><a href="/empty">{{trans('college.dean_mission')}}</a></li>
              </ul>
            </li>
            {{-- <li><a href="#">{{trans('college.faculty_agent')}}</a></li> --}}
            <li class="has-sub"><a href="#">{{trans('college.departments')}}</a>
              <ul id="u20219">
                <li class="has-sub"><a href="/about-cs">{{trans('college.departments_cs')}}</a>
                  <ul id="u20221">
                    <li><a href="/about-cs">{{trans('college.departments_about')}}</a></li>
                    <li><a href="/staff/part/5">{{trans('college.faculty_staff')}}</a></li>
                  </ul>
                </li>
                <li class="has-sub"><a href="#">{{trans('college.departments_it')}}</a>
                  <ul id="u20220">
                    <li><a href="/about-it">{{trans('college.departments_about')}}</a></li>
                    <li><a href="/staff/part/5">{{trans('college.faculty_staff')}}</a></li>
                  </ul>
                </li>
                <li class="has-sub"><a href="#">{{trans('college.departments_sc')}}</a>
                  <ul id="u20222">
                    <li><a href="/about-sc">{{trans('college.departments_about')}}</a></li>
                    <li><a href="/staff/part/5">{{trans('college.faculty_staff')}}</a></li>
                  </ul>
                </li>
                {{-- <li class="has-sub"><a href="#">{{trans('college.departments_net')}}</a>
                  <ul id="u20222">
                    <li><a href="#">{{trans('college.departments_about')}}</a></li>
                    <li><a href="#">{{trans('college.faculty_staff')}}</a></li>
                  </ul>
                </li> --}}
              </ul>
            </li>
            <li><a href="/admission">{{trans('college.faculty_admissions')}}</a></li>
            <li class="has-sub"><a href="#">{{trans('college.bs_programs')}}</a>
              <ul id="u34175">
                <li class="has-sub"><a href="#">{{trans('college.bachelor_cs')}}</a>
                  <ul id="u34176">
                    <li><a href="/about-cs-pro">{{trans('college.aout_program')}}</a></li>
                    <li><a href="/empty">{{trans('college.prescribed_subjects')}}</a></li>
                    <li><a href="/study-plan-cs">{{trans('college.study_plan')}}</a></li>
                  </ul>
                </li>
                <li class="has-sub"><a href="#">{{trans('college.bachelor_it')}}</a>
                  <ul id="u34177">
                    <li><a href="/about-it-pro">{{trans('college.aout_program')}}</a></li>
                    <li><a href="/empty">{{trans('college.prescribed_subjects')}}</a></li>
                    <li><a href="/study-plan-it">{{trans('college.study_plan')}}</a></li>
                  </ul>
                </li>
                <li class="has-sub"><a href="#">{{trans('college.bachelor_sc')}}</a>
                  <ul>
                    <li><a href="/about-sc-pro">{{trans('college.aout_program')}}</a></li>
                    <li><a href="/empty">{{trans('college.prescribed_subjects')}}</a></li>
                    <li><a href="/study-plan-sc">{{trans('college.study_plan')}}</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="has-sub"><a href="#">{{trans('college.db_programs')}}</a>
              <ul id="u34175">
                {{-- <li class="has-sub"><a href="#">{{trans('college.diploma_cs')}}</a>
                  <ul>
                    <li><a href="#">{{trans('college.aout_program')}}</a></li>
                    <li><a href="#">{{trans('college.prescribed_subjects')}}</a></li>
                    <li><a href="#">{{trans('college.study_plan')}}</a></li>
                  </ul>
                </li> --}}
                <li class="has-sub"><a href="#">{{trans('college.diploma_it')}}</a>
                  <ul>
                    <li><a href="/empty">{{trans('college.aout_program')}}</a></li>
                    <li><a href="/empty">{{trans('college.prescribed_subjects')}}</a></li>
                    <li><a href="/empty">{{trans('college.study_plan')}}</a></li>
                  </ul>
                </li>
                <li class="has-sub"><a href="#">{{trans('college.diploma_sc')}}</a>
                  <ul>
                    <li><a href="/empty">{{trans('college.aout_program')}}</a></li>
                    <li><a href="/empty">{{trans('college.prescribed_subjects')}}</a></li>
                    <li><a href="/empty">{{trans('college.study_plan')}}</a></li>
                  </ul>
                </li>
                <li class="has-sub"><a href="#">{{trans('college.diploma_net')}}</a>
                  <ul>
                    <li><a href="/empty">{{trans('college.aout_program')}}</a></li>
                    <li><a href="/empty">{{trans('college.prescribed_subjects')}}</a></li>
                    <li><a href="/empty">{{trans('college.study_plan')}}</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="has-sub"><a href="#">{{trans('college.master_programs')}}</a>
              <ul id="u22435">
                <li></li>
                {{-- <li class="has-sub"><a href="#">{{trans('college.MSc_data_science')}}</a>
                  <ul id="u34179">
                    <li><a href="#"></a></li>
                    <li><a href="#">{{trans('college.aout_program')}}</a></li>
                    <li><a href="#">{{trans('college.conditions_of_acceptance')}}</a></li>
                    <li><a href="#">{{trans('college.prescribed_subjects')}}</a></li>
                    <li><a href="#">{{trans('college.study_plan')}}</a></li>
                  </ul>
                </li>
                <li class="has-sub"><a href="#">{{trans('college.MSc_security_technologies')}}</a>
                  <ul id="u34180">
                    <li><a href="#">{{trans('college.aout_program')}}</a></li>
                    <li><a href="#">{{trans('college.conditions_of_acceptance')}}</a></li>
                    <li><a href="#">{{trans('college.prescribed_subjects')}}</a></li>
                    <li><a href="#">{{trans('college.study_plan')}}</a></li>
                  </ul>
                </li>
                <li class="has-sub"><a href="#">{{trans('college.MSc_virtual_reality_and_games')}}</a>
                  <ul id="u34181">
                    <li><a href="#">{{trans('college.aout_program')}}</a></li>
                    <li><a href="#">{{trans('college.conditions_of_acceptance')}}</a></li>
                    <li><a href="#">{{trans('college.prescribed_subjects')}}</a></li>
                    <li><a href="#">{{trans('college.study_plan')}}</a></li>
                  </ul>
                </li>
                <li class="has-sub"><a href="#">{{trans('college.master_of_computer_science')}}</a>
                  <ul id="u34182">
                    <li><a href="#">{{trans('college.aout_program')}}</a></li>
                    <li><a href="#">{{trans('college.conditions_of_acceptance')}}</a></li>
                    <li><a href="#">{{trans('college.prescribed_subjects')}}</a></li>
                    <li><a href="#">{{trans('college.study_plan')}}</a></li>
                  </ul>
                </li> --}}
              </ul>
            </li>
            {{-- <li><a href="#">{{trans('college.study_plan')}}</a></li> --}}
            <li><a href="/staff">{{trans('college.administrative_staff')}}</a></li>
            {{-- <li><a href="#">{{trans('college.information_technology_unit')}}</a></li> --}}
            {{-- <li><a href="#">{{trans('college.academic_advising')}}</a></li> --}}
            <li><a href="/centers/1">{{trans('college.researches')}}</a></li>
            <li><a href="/empty">{{trans('college.student_guide')}}</a></li>
            {{-- <li><a href="#">{{trans('college.models')}}</a></li> --}}
            <li><a href="/empty">{{trans('college.university_calendar')}}</a></li>
            <li><a href="/empty">{{trans('college.faculty_location')}}</a></li>
            <li><a href="/empty">{{trans('college.contact_us')}}</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

@show
