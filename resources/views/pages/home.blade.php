<x-web-layout>
    <x-slot name="title">Beranda</x-slot>
    <x-slot name="styles">
        <style>
        .other-reviewer-h4 {
            color: #1e2029;
            font-size: 18px;
            line-height: 24px;
            margin-bottom: 8px;
            font-style: normal;
            font-weight: 400;
        }
        .other-reviewer-col {
            color: rgba(30,32,41,.8);
            font-size: 16px;
            line-height: 28px;
            margin: 16px 0 0;
        }
        .committees-h1 {
            padding-bottom: 24px;
            padding-top: 40px;
            color: #1e2029;
            font-size: 40px;
            line-height: 52px;
        }
        .committees-division {
            color: #1e2029;
            font-size: 18px;
            line-height: 24px;
            margin-bottom: 8px;
            font-style: normal;
            font-weight: 400;
        }
        .committees-member {
            color: rgba(30,32,41,.8);
            font-size: 16px;
            line-height: 28px;
            margin: 16px 0 0;
            font-style: normal;
            font-weight: 400;
        }
        </style>
    </x-slot>
    <!--============================
    =            Banner            =
    =============================-->

    <section class="banner bg-banner-one overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Content Block -->
                    <div class="block text-center">
                        <!-- Coundown Timer -->
                        {!! $event->hero_text !!}
                        <!-- Action Button -->
                        <a href="@setting('web.call-for-paper.submit.url')" target="_blank" class="btn btn-blue-md">submit paper
                            <div class="btn-content-child"><img src="{{ asset('images/line.svg') }}" alt="line"><img
                                    src="{{ asset('images/plus.svg') }}" alt="plus">
                            </div>
                        </a>
                        <br>
                        <!-- Action Button -->
                        <a href="{{ route('web.call-for-paper') }}" class="btn btn-white-md">call for paper
                            <div class="btn-content-child"><img src="{{ asset('images/line.svg') }}" alt="line"><img
                                    src="{{ asset('images/arrow.svg') }}" alt="arrow">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="sticky">
        <div class="jumper-container">
            <ul class="jumper-tab-list">
                <a href="#about" class="jumper">About</a>
                <a href="#speakers" class="jumper">Speakers</a>
                <a href="#reviewers" class="jumper">Reviewers</a>
                <a href="#partnerships" class="jumper">Partnership</a>
            </ul>
            <a href="@setting('web.call-for-paper.submit.url')" target="_blank" class="submit-btn">Submit</a>
        </div>
    </div>
    <!--====  End of Banner  ====-->

    <!--===========================
    =            About            =
    ============================-->

    <section class="section about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6 align-self-center">
                    <div class="content-block">
                        @setting('web.home.about.overview')
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center">
                    <div class="image-block bg-about">
                        <img class="img-fluid" src="{{ asset('images/speakers/featured-speaker.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====  End of About  ====-->

    <!--==============================
    =            Speakers            =
    ===============================-->

    <section class="section speakers bg-speaker overlay-lighter" id="speakers">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Title -->
                    <div class="section-title white">
                        <h3>@setting('web.home.speakers.title')</h3>
                        <p>@setting('web.home.speakers.subtitle')</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($speakers as $speaker)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <!-- Speaker 1 -->
                    <div class="speaker-item">
                        <div class="image">
                            <img src="{{ asset('storage/' . $speaker->profile_photo) }}" alt="speaker"
                                class="img-fluid">
                            @if(!empty($speaker->speaker_social_profiles))
                            <div class="primary-overlay"></div>
                            <div class="socials">
                                <ul class="list-inline">
                                    @foreach($speaker->speaker_social_profiles as $speaker_social_profile)
                                    <li class="list-inline-item"><a target="_blank" href="{{$speaker_social_profile->social_link}}"><i class="fa fa-{{$speaker_social_profile->social_type}}"></i></a></li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </div>
                        <div class="content text-center">
                            <h5 style="min-height: 4rem;"><a href="{{ route('web.speakers', $speaker->getRouteParam()) }}">{{$speaker->name}}</a></h5>
                            <p>{{$speaker->organization}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!--====  End of Speakers  ====-->

    <!--==============================
    =            Reviewers            =
    ===============================-->

    <section class="section speakers" id="reviewers">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Title -->
                    <div class="section-title black">
                        <h3>@setting('web.home.reviewers.title')</h3>
                        <p>@setting('web.home.reviewers.subtitle')</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($reviewers as $reviewer)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <!-- Speaker 1 -->
                    <div class="speaker-item">
                        <div class="image">
                            <img src="{{ asset('storage/' . $reviewer->profile_photo) }}" alt="speaker"
                                class="img-fluid">
                                @if(!empty($reviewer->reviewer_social_profiles))
                            <div class="primary-overlay"></div>
                            <div class="socials">
                                <ul class="list-inline">
                                    @foreach($reviewer->reviewer_social_profiles as $reviewer_social_profile)
                                    <li class="list-inline-item"><a target="_blank" href="{{$reviewer_social_profile->social_link}}"><i class="fa fa-{{$reviewer_social_profile->social_type}}"></i></a></li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </div>
                        <div class="content text-center">
                            <h5 style="min-height: 4rem;"><a href="{{ route('web.reviewers', $reviewer->getRouteParam()) }}">{{$reviewer->name}}</a></h5>
                            <p>{{$reviewer->organization}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <hr />
            <h4 class="other-reviewer-h4">Other Reviewers</h4>
            <div class="row d-flex">
                @foreach($sideReviewers as $reviewer)
                <div class="col-lg-3 col-md-4 col-sm-6 other-reviewer-col"><a href="{{ route('web.reviewers', $reviewer->getRouteParam()) }}">{{$reviewer->name}}</a></div>
                @endforeach
            </div>
            <h1 class="committees-h1">Committees</h1>
            <div class="row d-flex">
                <!-- Committees Division -->
                @foreach($committeeDivisions as $committeeDivision)
                <div class="col-lg-3 col-md-4 col-sm-6 committees-division">
                    {{ $committeeDivision->name }}
                    @foreach($committeeDivision->committees as $committee)
                    <div class="committees-member">{{$committee->name}}</div>
                    @endforeach
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!--====  End of Schedule  ====-->

    <!--==============================
    =            Sponsors            =
    ===============================-->

    <section class="sponsors section bg-sponsors overlay-white" id="partnerships">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3><span class="alternate">@setting('web.home.partnerships.title')</span></h3>
                        <p>@setting('web.home.partnerships.subtitle')</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="block text-center">
                        <!-- Sponsors image list -->
                        <ul class="list-inline sponsors-list">
                            @foreach($partnerships as $partnership)
                            <li class="list-inline-item">
                                <div class="image-block text-center">
                                    <a href="#!">
                                        <img src="{{ asset('storage/' . $partnership->logo) }}" alt="{{ $partnership->name }}"
                                            class="img-fluid">
                                    </a>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Title -->
                    <!--
                    <div class="sponsor-btn text-center">
                        <a href="#" class="btn btn-main-md">Become a sponsor</a>
                    </div>
                    -->
                </div>
            </div>
        </div>
    </section>

    <!--====  End of Sponsors  ====-->

    <!--================================
    =            Google Map            =
    =================================-->

    <section class="map">
        <!-- Google Map  -->
        <div class="map" id="map_canvas" data-latitude="@setting('web.home.maps.latitude')" data-longitude="@setting('web.home.maps.longitude')"
            data-marker="images/marker.png"></div>
        <div class="address-block">
            <h4>@setting('web.home.maps.location_name')</h4>
            <ul class="address-list p-0 m-0">
                <li><i class="fa fa-home"></i><span>@setting('web.home.maps.location_address')</span></li>
                <li><i class="fa fa-phone"></i><span>@setting('web.home.maps.phone')</span></li>
            </ul>
            <a href="@setting('web.home.maps.direction_link')" target="_blank" class="btn btn-white-md">Get Direction</a>
        </div>
    </section>

    <!--====  End of Google Map  ====-->
    <x-slot name="scripts">
        <script>
            $(document).ready(function(){
              // Add smooth scrolling to all links
              $("a").on('click', function(event) {
            
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                  // Prevent default anchor click behavior
                  event.preventDefault();
            
                  // Store hash
                  var hash = this.hash;
                  $('.jumper').removeClass('active-jumper');
                  $(this).addClass('active-jumper');
            
                  // Using jQuery's animate() method to add smooth page scroll
                  // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                  $('html, body').animate({
                    scrollTop: $(hash).offset().top
                  }, 400, function(){
            
                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                  });
                } // End if
              });
            });
            </script>
    </x-slot>
</x-web-layout>
