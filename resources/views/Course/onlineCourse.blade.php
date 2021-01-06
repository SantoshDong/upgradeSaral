@extends('fontend.index')
@section('contents')

<div class="container-fluid" style="background-color: #e9ecef;padding-left:0px;padding-right:0px;">
    <div class="container">
        <div class="row __coll-des-view">
            <div class="col-12">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Mock Test</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Course Detail</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" style="background-color: #2051d8;
   background-image: linear-gradient(141deg, #9fb8ad 0%, #2051d8 51%, #2051d8 75%);">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12">
               <div class="oc-hero-txt">
                   <div class="oc-hero-txt1">
                       <span>Online Courses Series</span>
                   </div>
                   <div class="oc-hero-txt2">
                       <span><i class="fas fa-check-circle"></i></span>
                       <span>Attend Free Live Intractive classes at Vedantu</span>
                       <span><i class="fas fa-check-circle"></i></span>
                       <span>Learn from the Masters - India's best teachers</span>
                       <span><i class="fas fa-check-circle"></i></span>
                       <span>Access to quality education anytime, anywhere</span>
                   </div>
               </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="oc-hero-rc">
                    <iframe style="width:100%;height:40vh;" src="https://www.youtube.com/embed/xhN5Zkm82DA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
         
    </div>
</div>
<div class="container-fluid" style="background-color: #efefef;">
    <div class="container">
        <div class="row oc-lc-wrapper">
            <div class="col-12">
                <div class="row" style="background-color:#ffffff;">
                    <div class="col-12 text-center oc-lc-heading">
                        <span>Live Class</span>
                    </div>
                    <div class="col-12 my-5" style="position:relative;">
                        <div class="owl-carousel3 owl-carousel owl-theme">
                            <div class="oc-lc-items-wrap">
                                <div class="pc-lc-it">
                                    <span>Live</span>
                                    <span>Physics</span>
                                    <span>Title:Mechanics</span>
                                </div>
                                <div class="pc-lc-im">
                                  <div>
                                       <img src="{{asset('images/saral_img2.png')}}">
                                  </div>
                                  <div>
                                      <span>Pradip Dhungana</span>
                                      <span>Physics Exports</span>
                                  </div>
                                </div>
                                <div class="pc-ic-im1">
                                    <div>
                                        <span>Tribhuvan University</span>
                                        <span>Bsc. CSIT</span>
                                    </div>
                                    <div>
                                        <span>End at 5:00 PM</span>
                                    </div>
                                </div>
                                <div class="pc-lc-ib">
                                    <div>
                                        <span>Physics live class</span>
                                    </div>
                                    <div>
                                        <span><i class="fab fa-facebook" aria-hidden="true"></i></span>
                                        <span><i class="fab fa-instagram-square" aria-hidden="true"></i></span>
                                        <span><i class="fab fa-youtube" aria-hidden="true"></i></span>
                                    </div>
                                    <div>
                                        <span><i class="fas fa-check-circle" aria-hidden="true">Enroll Now</i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="oc-lc-items-wrap">
                                <div class="pc-lc-it">
                                    <span>Live</span>
                                    <span>Physics</span>
                                    <span>Title:Mechanics</span>
                                </div>
                                <div class="pc-lc-im">
                                  <div>
                                       <img src="{{asset('images/saral_img2.png')}}">
                                  </div>
                                  <div>
                                      <span>Pradip Dhungana</span>
                                      <span>Physics Exports</span>
                                  </div>
                                </div>
                                <div class="pc-ic-im1">
                                    <div>
                                        <span>Tribhuvan University</span>
                                        <span>Bsc. CSIT</span>
                                    </div>
                                    <div>
                                        <span>End at 5:00 PM</span>
                                    </div>
                                </div>
                                <div class="pc-lc-ib">
                                    <div>
                                        <span>Physics live class</span>
                                    </div>
                                    <div>
                                        <span><i class="fab fa-facebook" aria-hidden="true"></i></span>
                                        <span><i class="fab fa-instagram-square" aria-hidden="true"></i></span>
                                        <span><i class="fab fa-youtube" aria-hidden="true"></i></span>
                                    </div>
                                    <div>
                                        <span><i class="fas fa-check-circle" aria-hidden="true">Enroll Now</i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="oc-lc-items-wrap">
                                <div class="pc-lc-it">
                                    <span>Live</span>
                                    <span>Physics</span>
                                    <span>Title:Mechanics</span>
                                </div>
                                <div class="pc-lc-im">
                                  <div>
                                       <img src="{{asset('images/saral_img2.png')}}">
                                  </div>
                                  <div>
                                      <span>Pradip Dhungana</span>
                                      <span>Physics Exports</span>
                                  </div>
                                </div>
                                <div class="pc-ic-im1">
                                    <div>
                                        <span>Tribhuvan University</span>
                                        <span>Bsc. CSIT</span>
                                    </div>
                                    <div>
                                        <span>End at 5:00 PM</span>
                                    </div>
                                </div>
                                <div class="pc-lc-ib">
                                    <div>
                                        <span>Physics live class</span>
                                    </div>
                                    <div>
                                        <span><i class="fab fa-facebook" aria-hidden="true"></i></span>
                                        <span><i class="fab fa-instagram-square" aria-hidden="true"></i></span>
                                        <span><i class="fab fa-youtube" aria-hidden="true"></i></span>
                                    </div>
                                    <div>
                                        <span><i class="fas fa-check-circle" aria-hidden="true">Enroll Now</i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="oc-lc-items-wrap">
                                <div class="pc-lc-it">
                                    <span>Live</span>
                                    <span>Physics</span>
                                    <span>Title:Mechanics</span>
                                </div>
                                <div class="pc-lc-im">
                                  <div>
                                       <img src="{{asset('images/saral_img2.png')}}">
                                  </div>
                                  <div>
                                      <span>Pradip Dhungana</span>
                                      <span>Physics Exports</span>
                                  </div>
                                </div>
                                <div class="pc-ic-im1">
                                    <div>
                                        <span>Tribhuvan University</span>
                                        <span>Bsc. CSIT</span>
                                    </div>
                                    <div>
                                        <span>End at 5:00 PM</span>
                                    </div>
                                </div>
                                <div class="pc-lc-ib">
                                    <div>
                                        <span>Physics live class</span>
                                    </div>
                                    <div>
                                        <span><i class="fab fa-facebook" aria-hidden="true"></i></span>
                                        <span><i class="fab fa-instagram-square" aria-hidden="true"></i></span>
                                        <span><i class="fab fa-youtube" aria-hidden="true"></i></span>
                                    </div>
                                    <div>
                                        <span><i class="fas fa-check-circle" aria-hidden="true">Enroll Now</i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="oc-lc-items-wrap">
                                <div class="pc-lc-it">
                                    <span>Live</span>
                                    <span>Physics</span>
                                    <span>Title:Mechanics</span>
                                </div>
                                <div class="pc-lc-im">
                                  <div>
                                       <img src="{{asset('images/saral_img2.png')}}">
                                  </div>
                                  <div>
                                      <span>Pradip Dhungana</span>
                                      <span>Physics Exports</span>
                                  </div>
                                </div>
                                <div class="pc-ic-im1">
                                    <div>
                                        <span>Tribhuvan University</span>
                                        <span>Bsc. CSIT</span>
                                    </div>
                                    <div>
                                        <span>End at 5:00 PM</span>
                                    </div>
                                </div>
                                <div class="pc-lc-ib">
                                    <div>
                                        <span>Physics live class</span>
                                    </div>
                                    <div>
                                        <span><i class="fab fa-facebook" aria-hidden="true"></i></span>
                                        <span><i class="fab fa-instagram-square" aria-hidden="true"></i></span>
                                        <span><i class="fab fa-youtube" aria-hidden="true"></i></span>
                                    </div>
                                    <div>
                                        <span><i class="fas fa-check-circle" aria-hidden="true">Enroll Now</i></span>
                                    </div>
                                </div>
                            </div>
        
                        </div>
                    </div>
                </div>
                <div class="row" style="background-color:#ffffff;border-top:3px solid #0b46a7;">
                    <div class="col-12 text-center oc-lc-heading2">
                        <span>UpComming-live</span>
                    </div>
                    <div class="col-12 my-4">
                        <div class="row my-4">
                            <div class="col-lg-3 col-md-4 col-12">
                                <div class="oc-lc-items-wrap">
                                    <div class="pc-lc-it">
                                        <span id="pc-lc-it1" >Live</span>
                                        <span>Physics</span>
                                        <span>Title:Mechanics</span>
                                    </div>
                                    <div class="pc-lc-im">
                                      <div>
                                           <img src="{{asset('images/saral_img2.png')}}">
                                      </div>
                                      <div>
                                          <span>Pradip Dhungana</span>
                                          <span>Physics Exports</span>
                                      </div>
                                    </div>
                                    <div class="pc-ic-im1">
                                        <div>
                                            <span>Tribhuvan University</span>
                                            <span>Bsc. CSIT</span>
                                        </div>
                                        <div>
                                            <span>End at 5:00 PM</span>
                                        </div>
                                    </div>
                                    <div class="pc-lc-ib">
                                        <div>
                                            <span>Physics live class</span>
                                        </div>
                                        <div>
                                            <span><i class="fab fa-facebook" aria-hidden="true"></i></span>
                                            <span><i class="fab fa-instagram-square" aria-hidden="true"></i></span>
                                            <span><i class="fab fa-youtube" aria-hidden="true"></i></span>
                                        </div>
                                        <div>
                                            <span><i class="fas fa-check-circle" aria-hidden="true">Enroll Now</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12">
                                <div class="oc-lc-items-wrap">
                                    <div class="pc-lc-it">
                                        <span id="pc-lc-it1" >Live</span>
                                        <span>Physics</span>
                                        <span>Title:Mechanics</span>
                                    </div>
                                    <div class="pc-lc-im">
                                      <div>
                                           <img src="{{asset('images/saral_img2.png')}}">
                                      </div>
                                      <div>
                                          <span>Pradip Dhungana</span>
                                          <span>Physics Exports</span>
                                      </div>
                                    </div>
                                    <div class="pc-ic-im1">
                                        <div>
                                            <span>Tribhuvan University</span>
                                            <span>Bsc. CSIT</span>
                                        </div>
                                        <div>
                                            <span>End at 5:00 PM</span>
                                        </div>
                                    </div>
                                    <div class="pc-lc-ib">
                                        <div>
                                            <span>Physics live class</span>
                                        </div>
                                        <div>
                                            <span><i class="fab fa-facebook" aria-hidden="true"></i></span>
                                            <span><i class="fab fa-instagram-square" aria-hidden="true"></i></span>
                                            <span><i class="fab fa-youtube" aria-hidden="true"></i></span>
                                        </div>
                                        <div>
                                            <span><i class="fas fa-check-circle" aria-hidden="true">Enroll Now</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12">
                                <div class="oc-lc-items-wrap">
                                    <div class="pc-lc-it">
                                        <span id="pc-lc-it1" >Live</span>
                                        <span>Physics</span>
                                        <span>Title:Mechanics</span>
                                    </div>
                                    <div class="pc-lc-im">
                                      <div>
                                           <img src="{{asset('images/saral_img2.png')}}">
                                      </div>
                                      <div>
                                          <span>Pradip Dhungana</span>
                                          <span>Physics Exports</span>
                                      </div>
                                    </div>
                                    <div class="pc-ic-im1">
                                        <div>
                                            <span>Tribhuvan University</span>
                                            <span>Bsc. CSIT</span>
                                        </div>
                                        <div>
                                            <span>End at 5:00 PM</span>
                                        </div>
                                    </div>
                                    <div class="pc-lc-ib">
                                        <div>
                                            <span>Physics live class</span>
                                        </div>
                                        <div>
                                            <span><i class="fab fa-facebook" aria-hidden="true"></i></span>
                                            <span><i class="fab fa-instagram-square" aria-hidden="true"></i></span>
                                            <span><i class="fab fa-youtube" aria-hidden="true"></i></span>
                                        </div>
                                        <div>
                                            <span><i class="fas fa-check-circle" aria-hidden="true">Enroll Now</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12">
                                <div class="oc-lc-items-wrap">
                                    <div class="pc-lc-it">
                                        <span id="pc-lc-it1" >Live</span>
                                        <span>Physics</span>
                                        <span>Title:Mechanics</span>
                                    </div>
                                    <div class="pc-lc-im">
                                      <div>
                                           <img src="{{asset('images/saral_img2.png')}}">
                                      </div>
                                      <div>
                                          <span>Pradip Dhungana</span>
                                          <span>Physics Exports</span>
                                      </div>
                                    </div>
                                    <div class="pc-ic-im1">
                                        <div>
                                            <span>Tribhuvan University</span>
                                            <span>Bsc. CSIT</span>
                                        </div>
                                        <div>
                                            <span>End at 5:00 PM</span>
                                        </div>
                                    </div>
                                    <div class="pc-lc-ib">
                                        <div>
                                            <span>Physics live class</span>
                                        </div>
                                        <div>
                                            <span><i class="fab fa-facebook" aria-hidden="true"></i></span>
                                            <span><i class="fab fa-instagram-square" aria-hidden="true"></i></span>
                                            <span><i class="fab fa-youtube" aria-hidden="true"></i></span>
                                        </div>
                                        <div>
                                            <span><i class="fas fa-check-circle" aria-hidden="true">Enroll Now</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12">
                                <div class="oc-lc-items-wrap">
                                    <div class="pc-lc-it">
                                        <span id="pc-lc-it1" >Live</span>
                                        <span>Physics</span>
                                        <span>Title:Mechanics</span>
                                    </div>
                                    <div class="pc-lc-im">
                                      <div>
                                           <img src="{{asset('images/saral_img2.png')}}">
                                      </div>
                                      <div>
                                          <span>Pradip Dhungana</span>
                                          <span>Physics Exports</span>
                                      </div>
                                    </div>
                                    <div class="pc-ic-im1">
                                        <div>
                                            <span>Tribhuvan University</span>
                                            <span>Bsc. CSIT</span>
                                        </div>
                                        <div>
                                            <span>End at 5:00 PM</span>
                                        </div>
                                    </div>
                                    <div class="pc-lc-ib">
                                        <div>
                                            <span>Physics live class</span>
                                        </div>
                                        <div>
                                            <span><i class="fab fa-facebook" aria-hidden="true"></i></span>
                                            <span><i class="fab fa-instagram-square" aria-hidden="true"></i></span>
                                            <span><i class="fab fa-youtube" aria-hidden="true"></i></span>
                                        </div>
                                        <div>
                                            <span><i class="fas fa-check-circle" aria-hidden="true">Enroll Now</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12">
                                <div class="oc-lc-items-wrap">
                                    <div class="pc-lc-it">
                                        <span id="pc-lc-it1" >Live</span>
                                        <span>Physics</span>
                                        <span>Title:Mechanics</span>
                                    </div>
                                    <div class="pc-lc-im">
                                      <div>
                                           <img src="{{asset('images/saral_img2.png')}}">
                                      </div>
                                      <div>
                                          <span>Pradip Dhungana</span>
                                          <span>Physics Exports</span>
                                      </div>
                                    </div>
                                    <div class="pc-ic-im1">
                                        <div>
                                            <span>Tribhuvan University</span>
                                            <span>Bsc. CSIT</span>
                                        </div>
                                        <div>
                                            <span>End at 5:00 PM</span>
                                        </div>
                                    </div>
                                    <div class="pc-lc-ib">
                                        <div>
                                            <span>Physics live class</span>
                                        </div>
                                        <div>
                                            <span><i class="fab fa-facebook" aria-hidden="true"></i></span>
                                            <span><i class="fab fa-instagram-square" aria-hidden="true"></i></span>
                                            <span><i class="fab fa-youtube" aria-hidden="true"></i></span>
                                        </div>
                                        <div>
                                            <span><i class="fas fa-check-circle" aria-hidden="true">Enroll Now</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12">
                                <div class="oc-lc-items-wrap">
                                    <div class="pc-lc-it">
                                        <span id="pc-lc-it1" >Live</span>
                                        <span>Physics</span>
                                        <span>Title:Mechanics</span>
                                    </div>
                                    <div class="pc-lc-im">
                                      <div>
                                           <img src="{{asset('images/saral_img2.png')}}">
                                      </div>
                                      <div>
                                          <span>Pradip Dhungana</span>
                                          <span>Physics Exports</span>
                                      </div>
                                    </div>
                                    <div class="pc-ic-im1">
                                        <div>
                                            <span>Tribhuvan University</span>
                                            <span>Bsc. CSIT</span>
                                        </div>
                                        <div>
                                            <span>End at 5:00 PM</span>
                                        </div>
                                    </div>
                                    <div class="pc-lc-ib">
                                        <div>
                                            <span>Physics live class</span>
                                        </div>
                                        <div>
                                            <span><i class="fab fa-facebook" aria-hidden="true"></i></span>
                                            <span><i class="fab fa-instagram-square" aria-hidden="true"></i></span>
                                            <span><i class="fab fa-youtube" aria-hidden="true"></i></span>
                                        </div>
                                        <div>
                                            <span><i class="fas fa-check-circle" aria-hidden="true">Enroll Now</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12">
                                <div class="oc-lc-items-wrap">
                                    <div class="pc-lc-it">
                                        <span id="pc-lc-it1" >Live</span>
                                        <span>Physics</span>
                                        <span>Title:Mechanics</span>
                                    </div>
                                    <div class="pc-lc-im">
                                      <div>
                                           <img src="{{asset('images/saral_img2.png')}}">
                                      </div>
                                      <div>
                                          <span>Pradip Dhungana</span>
                                          <span>Physics Exports</span>
                                      </div>
                                    </div>
                                    <div class="pc-ic-im1">
                                        <div>
                                            <span>Tribhuvan University</span>
                                            <span>Bsc. CSIT</span>
                                        </div>
                                        <div>
                                            <span>End at 5:00 PM</span>
                                        </div>
                                    </div>
                                    <div class="pc-lc-ib">
                                        <div>
                                            <span>Physics live class</span>
                                        </div>
                                        <div>
                                            <span><i class="fab fa-facebook" aria-hidden="true"></i></span>
                                            <span><i class="fab fa-instagram-square" aria-hidden="true"></i></span>
                                            <span><i class="fab fa-youtube" aria-hidden="true"></i></span>
                                        </div>
                                        <div>
                                            <span><i class="fas fa-check-circle" aria-hidden="true">Enroll Now</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row my-5" style="position:relative;">
            <div class="col-12">
                <div class="owl-carousel2 owl-carousel owl-theme">
                    <div class="oc2-whole-wrap">
                        <div class="oc2-top">
                            <span>This Company which run educational platform ”Saral Entrance” has supported me a lot in sec uring a good rank in the IOST exam taken by T U and I would like to thank it…
                                ny which run educational platform ”Saral Entrance” has supported me a lot in sec uring a good rank in the IOST exam taken by T U and I would like to thank it…
                            </span>
                        </div>
                        <div class="oc2-middle">
                        <img src="{{asset('./images/saral_img3.png')}}">
                        </div>
                        <div class="oc2-bottom">
                            <span>Briendra Bhatta</span>
                            <span>2071 Batch Bsc.CSIT</span>
                            <span>Entrance Topper(TU.IOST)</span>
                        </div>
                    </div>
                    <div class="oc2-whole-wrap">
                        <div class="oc2-top">
                            <span>This Company which run educational platform ”Saral Entrance” has supported me a lot in sec uring a good rank in the IOST exam taken by T U and I would like to thank it…
                                ny which run educational platform ”Saral Entrance” has supported me a lot in sec uring a good rank in the IOST exam taken by T U and I would like to thank it…
                            </span>
                        </div>
                        <div class="oc2-middle">
                        <img src="{{asset('./images/saral_img3.png')}}">
                        </div>
                        <div class="oc2-bottom">
                            <span>Briendra Bhatta</span>
                            <span>2071 Batch Bsc.CSIT</span>
                            <span>Entrance Topper(TU.IOST)</span>
                        </div>
                    </div>
                    <div class="oc2-whole-wrap">
                        <div class="oc2-top">
                            <span>This Company which run educational platform ”Saral Entrance” has supported me a lot in sec uring a good rank in the IOST exam taken by T U and I would like to thank it…
                                ny which run educational platform ”Saral Entrance” has supported me a lot in sec uring a good rank in the IOST exam taken by T U and I would like to thank it…
                            </span>
                        </div>
                        <div class="oc2-middle">
                        <img src="{{asset('./images/saral_img3.png')}}">
                        </div>
                        <div class="oc2-bottom">
                            <span>Briendra Bhatta</span>
                            <span>2071 Batch Bsc.CSIT</span>
                            <span>Entrance Topper(TU.IOST)</span>
                        </div>
                    </div>
                    <div class="oc2-whole-wrap">
                        <div class="oc2-top">
                            <span>This Company which run educational platform ”Saral Entrance” has supported me a lot in sec uring a good rank in the IOST exam taken by T U and I would like to thank it…
                                ny which run educational platform ”Saral Entrance” has supported me a lot in sec uring a good rank in the IOST exam taken by T U and I would like to thank it…
                            </span>
                        </div>
                        <div class="oc2-middle">
                        <img src="{{asset('./images/saral_img3.png')}}">
                        </div>
                        <div class="oc2-bottom">
                            <span>Briendra Bhatta</span>
                            <span>2071 Batch Bsc.CSIT</span>
                            <span>Entrance Topper(TU.IOST)</span>
                        </div>
                    </div>
                    <div class="oc2-whole-wrap">
                        <div class="oc2-top">
                            <span>This Company which run educational platform ”Saral Entrance” has supported me a lot in sec uring a good rank in the IOST exam taken by T U and I would like to thank it…
                                ny which run educational platform ”Saral Entrance” has supported me a lot in sec uring a good rank in the IOST exam taken by T U and I would like to thank it…
                            </span>
                        </div>
                        <div class="oc2-middle">
                        <img src="{{asset('./images/saral_img3.png')}}">
                        </div>
                        <div class="oc2-bottom">
                            <span>Briendra Bhatta</span>
                            <span>2071 Batch Bsc.CSIT</span>
                            <span>Entrance Topper(TU.IOST)</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
    @endsection
