@extends('fontend.index')
@section('contents')

<div class="container-fluid" style="background-color: #e9ecef;padding-left:0px;padding-right:0px;">
    <div class="row __coll-des-view mx-2">
        <div class="col-12">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ul>
        </div>
    </div>
</div>
<div class="container-fluid" style="background-color:#0b46a7;">
    <div class="container">
        <div class="row searchFilter-top-heading text-center py-3">
            <div class="col-12">
                <span>Event Mock Test</span>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
        <div class="row my-5 mx-md-2 mx-0">
            <div class="col-lg-3 col-md-4 col-12 bg-light for-border">
                <div class="row mt-3">
                    <div class="col-12">
                        <div class="allevent-search">
                            <span>Search</span>
                        </div>
                        <div class="allevent-search-box">
                            <input type="text" placeholder="Search Events">
                            <i class="fas fa-search" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="allevent-search">
                            <span>Upcomming Events</span>
                        </div>
                        <div class="upevent-items-wrap">
                            <div class="upevent-date">
                                <span>MAY</span>
                                <span>26</span>
                                <span>2020</span>
                            </div>
                            <div class="upevent-detail">
                                <span>Mock Test Start 23 May</span>
                                <span>Saral shikshys starting mock Test from bhadra 23 mannana</span>
                            </div>
                        </div>
                        <div class="upevent-items-wrap">
                            <div class="upevent-date">
                                <span>MAY</span>
                                <span>26</span>
                                <span>2020</span>
                            </div>
                            <div class="upevent-detail">
                                <span>Mock Test Start 23 May</span>
                                <span>Saral shikshys starting mock Test from bhadra 23 mannana</span>
                            </div>
                        </div>
                        <div class="upevent-items-wrap">
                            <div class="upevent-date">
                                <span>MAY</span>
                                <span>26</span>
                                <span>2020</span>
                            </div>
                            <div class="upevent-detail">
                                <span>Mock Test Start 23 May</span>
                                <span>Saral shikshys starting mock Test from bhadra 23 mannana</span>
                            </div>
                        </div>
                        <div class="upevent-items-wrap">
                            <div class="upevent-date">
                                <span>MAY</span>
                                <span>26</span>
                                <span>2020</span>
                            </div>
                            <div class="upevent-detail">
                                <span>Mock Test Start 23 May</span>
                                <span>Saral shikshys starting mock Test from bhadra 23 mannana</span>
                            </div>
                        </div>
                        <div class="upevent-items-wrap">
                            <div class="upevent-date">
                                <span>MAY</span>
                                <span>26</span>
                                <span>2020</span>
                            </div>
                            <div class="upevent-detail">
                                <span>Mock Test Start 23 May</span>
                                <span>Saral shikshys starting mock Test from bhadra 23 mannana</span>
                            </div>
                        </div>
                        <div class="upevent-items-wrap">
                            <div class="upevent-date">
                                <span>MAY</span>
                                <span>26</span>
                                <span>2020</span>
                            </div>
                            <div class="upevent-detail">
                                <span>Mock Test Start 23 May</span>
                                <span>Saral shikshys starting mock Test from bhadra 23 mannana</span>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="allevent-search">
                            <span>Popular Events</span>
                        </div>
                        <div class="pe-item-wrap">
                            <div class="pe-img-top">
                            <img src="{{asset('./images/bca_img.png')}}">
                            </div>
                            <div class="pe-detail-bottom">
                                <span>Saral Shikshya Motivation</span>
                                <span>Speach + Q & A Session</span>
                                <span>Kathmandu</span>
                            </div>
                        </div>
                        <div class="pe-item-wrap">
                            <div class="pe-img-top">
                            <img src="{{asset('./images/bca_img.png')}}">
                            </div>
                            <div class="pe-detail-bottom">
                                <span>Saral Shikshya Motivation</span>
                                <span>Speach + Q & A Session</span>
                                <span>Kathmandu</span>
                            </div>
                        </div>
                        <div class="pe-item-wrap">
                            <div class="pe-img-top">
                            <img src="{{asset('./images/bca_img.png')}}">
                            </div>
                            <div class="pe-detail-bottom">
                                <span>Saral Shikshya Motivation</span>
                                <span>Speach + Q & A Session</span>
                                <span>Kathmandu</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="allevent-search">
                            <span>Search</span>
                        </div>
                        <div class="event-tags">
                            <a href="#">
                                <span>Bsc.CSIT</span>
                            </a>
                            <a href="#">
                                <span>BCA</span>
                            </a>
                            <a href="#">
                                <span>Mock Test</span>
                            </a>
                            <a href="#">
                                <span>Django Workshop</span>
                            </a>
                            <a href="#">
                                <span>Bsc.CSIT</span>
                            </a>
                            <a href="#">
                                <span>BCA</span>
                            </a>
                            <a href="#">
                                <span>Mock Test</span>
                            </a>
                            <a href="#">
                                <span>Django Workshop</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-md-8 col-12">
                <div class="row eDetail-wrap-right">
                    <div class="col-12">
                        <div class="row for-siroe for-border">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 mock-hero">
                                        <img src="{{asset('./images/bca_img.png')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-5">
                                <div class="row mt-5">
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="mock-dates">
                                            <div class="mock-dates-img">
                                                <img src="{{asset('./images/college_logo1.png')}}">
                                            </div>
                                            <div class="mock-dates-detail">
                                                <span>Start Date</span>
                                                <span>01 may,2020</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="mock-dates">
                                            <div class="mock-dates-img">
                                                <img src="{{asset('./images/college_logo1.png')}}">
                                            </div>
                                            <div class="mock-dates-detail">
                                                <span>Location</span>
                                                <span>Kathmandu</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="mock-dates">
                                            <div class="mock-dates-img">
                                                <img src="{{asset('./images/college_logo1.png')}}">
                                            </div>
                                            <div class="mock-dates-detail">
                                                <span>Organizer</span>
                                                <span>Amrit Science Campus</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="mock-dates">
                                            <div class="mock-dates-img">
                                                <img src="{{asset('./images/college_logo1.png')}}">
                                            </div>
                                            <div class="mock-dates-detail">
                                                <span>End Date</span>
                                                <span>01 may,2020</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="mock-dates">
                                            <div class="mock-dates-img">
                                                <img src="{{asset('./images/college_logo1.png')}}">
                                            </div>
                                            <div class="mock-dates-detail">
                                                <span>Venue</span>
                                                <span>Kodestage Technology</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="mock-dates">
                                            <div class="mock-dates-img">
                                                <img src="{{asset('./images/college_logo1.png')}}">
                                            </div>
                                            <div class="mock-dates-detail">
                                                <span>Phone No.</span>
                                                <span>98404994</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="mock-dates">
                                            <div class="mock-dates-img">
                                                <img src="{{asset('./images/college_logo1.png')}}">
                                            </div>
                                            <div class="mock-dates-detail">
                                                <span>Email</span>
                                                <span>KodeStage@gmail.com</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="mock-dates">
                                            <div class="mock-dates-img">
                                                <img src="{{asset('./images/college_logo1.png')}}">
                                            </div>
                                            <div class="mock-dates-detail">
                                                <span>Category</span>
                                                <span>IT Student</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row mt-3 in-in-cover">
                                    <div class="col-12 af-share">
                                        <span>Share this Event</span>
                                    </div>
                                    <div class="col-12">
                                        <div class="social-share-wrap">
                                            <span><i class="fab fa-facebook" aria-hidden="true"></i></span>
                                            <span><i class="fab fa-instagram-square" aria-hidden="true"></i></span>
                                            <span><i class="fab fa-twitter" aria-hidden="true"></i></span>
                                            <span><i class="fab fa-linkedin-in" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row mt-3 in-in-cover">
                                    <div class="col-12 af-event-desc">
                                        <span>Event Description</span>
                                    </div>
                                    <div class="col-12">
                                        <p>
                                            Cras rhoncus turpis ante. Vivamus facilisis massa id dapibus vestibulum. Duis faucibus venenatis efficitur. Vivamus lacus lacus,
                                            rhoncus vel metus sit amet, pharetra facilisis eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames a
                                            c turpis egestas. Sed ut pharetra felis. Duis consequat ante ex, id egestas nisi pellentesque vel.Cras rhoncus turpis ante. Vivamus
                                            facilisis massa id dapibus vestibulum. Duis faucibus venenatis efficitur. Vivamus lacus lacus,rhoncus vel metus sit amet, pharetr
                                            a facilisis eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed ut pharetra feli
                                            s. Duis consequat ante ex, id egestas nisi pellentesque vel.
                            
                                        </p>
                                        <ul>
                                            <li>
                                            Curabitur et nibh efficitur, dictum felis ac, porta arcu
                                            </li>
                                            <li>
                                                Curabitur et nibh efficitur, dictum felis ac, porta arcu
                                            </li>
                                                                                <li>
                                            Curabitur et nibh efficitur, dictum felis ac, porta arcu
                                            </li>
                                            <li>
                                                Curabitur et nibh efficitur, dictum felis ac, porta arcu
                                            </li>
                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row mt-3 in-in-cover">
                                    <div class="col-12 af-event-desc">
                                        <span>Event Features</span>
                                    </div>
                                    <div class="col-12">
                                        <ul>
                                            <li>
                                                1PM Lunch on arrival
                                            </li>
                                            <li>
                                                1:30PM Grand entrance tour around the main building
                                            </li>
                                            <li>
                                                2:30PM 1-to-1 talks with Diplomia tutors and post-graduates
                                            </li>
                                            <li>
                                                Curabitur et nibh efficitur, dictum felis ac, porta arcu
                                            </li>
                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mt-3 for-siroe" style="  box-shadow: 0px 0px 4px rgba(0,0,0,.5); padding:10px 0px;">
                            <div class="col-12 af-event-desc">
                                <span>Event Address</span>
                            </div>
                            <div class="col-12">
                                <span>Balaju, Kathmandu</span>
                            </div>
                            <div class="col-12 af-google-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.493381680158!2d85.3021492147019!3d27.732924330975024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb196ab3f2242f%3A0x5d08ba90b6c8a56a!2sKodeStage%20Technology%20Pvt%20Ltd!5e0!3m2!1sen!2snp!4v1590664188346!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mt-3 for-siroe" style="box-shadow: 0px 0px 4px rgba(0,0,0,.5); padding:10px 0px;">
                            <div class="col-12 af-event-desc">
                                <span>Contact</span>
                            </div>
                            <div class="col-12 af-google-map">
                                <form>
                                    <div class="row my-md-4 my-2">
                                        <div class="col">
                                          <input type="text" class="form-control" placeholder="First name">
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                              </div>
                                        </div>
                                      </div>
                                    <div class="row my-md-4 my-2">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Phone no">
                                          </div>
                                          <div class="col">
                                            {{-- <input type="text" class="form-control" placeholder="Subject"> --}}
                                          </div>
                                    </div>
                                    <div class="row my-md-4 my-2">
                                       <div class="col-12">
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Message"></textarea>
                                              </div>
                                       </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mt-3 for-siroe" style="box-shadow: 0px 0px 4px rgba(0,0,0,.5); padding:10px 0px;">
                            <div class="col-12 af-event-desc">
                                <span>Leave Comment</span>
                            </div>
                            <div class="col-12 af-event-desc2">
                                <span>Total Comment (20)</span>
                            </div>
                            <div class="col-12 af-comment-section">
                               <div class="af-comment-log">
                                <button class="btn comment-btn1">
                                <img src="{{asset('./images/college_logo1.png')}}">
                                Login with Facebook
                                </button>
                                <button class="btn comment-btn2">
                                    <img src="{{asset('./images/college_logo1.png')}}">
                                    Login with Gmail
                                    </button>
                               </div>
                            </div>
                            <div class="col-12 mt-md-5 mt-3 comment-box-section">
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Your Comment"></textarea>
                                  </div>
                           </div>
                           <div class="col-12 my-2">
                               <button class="btn af-comment-btn">Post Comment</button>
                           </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mt-3 for-siroe" style="box-shadow: 0px 0px 4px rgba(0,0,0,.5); padding:10px 0px;">
                            <div class="col-12 af-comments-sh">
                                <span>All Comments</span>
                            </div>
                            <div class="col-12">
                                <div class="af-cr-section">
                                     <div>
                                         <img src="{{asset('images/saral_img2.png')}}" alt="">
                                     </div>
                                     <div class="af-cr-right">
                                         <span>Pradip Dhungana</span>
                                         <span>Answer was originally a solemn assertion in opposition to someone or something an answer was originally a solemn assertion in</span>
                                     </div>
                                     <div class="af-cr-like-replay">
                                         <span><a href="">Like</a></span>
                                         <span><a href="">Replay</a></span>
                                         <span><img src="http://127.0.0.1:8000/./images/college_logo1.png"></span>
                                         <span>5</span>
                                         <span><img src="http://127.0.0.1:8000/./images/college_logo1.png"></span>
                                         <span>10 hrs</span>
                                         <span></span>
                                     </div>
                                </div>
                                <div class="af-cr-section">
                                    <div>
                                        <img src="{{asset('images/saral_img2.png')}}" alt="">
                                    </div>
                                    <div class="af-cr-right">
                                        <span>Pradip Dhungana</span>
                                        <span>Answer was originally a solemn assertion in opposition to someone or something an answer was originally a solemn assertion in</span>
                                    </div>
                                    <div class="af-cr-like-replay">
                                        <span><a href="">Like</a></span>
                                        <span><a href="">Replay</a></span>
                                        <span><img src="http://127.0.0.1:8000/./images/college_logo1.png"></span>
                                        <span>5</span>
                                        <span><img src="http://127.0.0.1:8000/./images/college_logo1.png"></span>
                                        <span>10 hrs</span>
                                        <span></span>
                                    </div>
                               </div>
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
@endsection
