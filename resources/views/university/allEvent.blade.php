@extends('fontend.index')
@section('contents')

<div class="container-fluid" style="background-color: #e9ecef;padding-left:0px;padding-right:0px;">
    <div class="row __coll-des-view mx-md-2 mx-0">
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
                <span>All Events</span>
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
                            <span>Mock Test Start 23 May wdfsdf</span>
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
        <div class="col-lg-9 col-md-8 col-12">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="row mx-0 px-3 for-border" style="background-color:#ffffff;">
                                <div class="col-12">
                                    <div class="owl-carousel5 owl-carousel owl-theme">
                                        <span>Bac.Csit</span>
                                        <span>BCA</span>
                                        <span>Mock Test</span>
                                        <span>Django Workshop</span>
                                        <span>Bac.Csit</span>
                                        <span>BCA</span>
                                        <span>Mock Test</span>
                                        <span>Django Workshop</span>
                                        <span>Bac.Csit</span>
                                        <span>BCA</span>
                                        <span>Mock Test</span>
                                        <span>Django Workshop</span>
                                        <span>Bac.Csit</span>
                                        <span>BCA</span>
                                        <span>Mock Test</span>
                                        <span>Django Workshop</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="affilated-wrapper">
                                <div class="affilated-img">
                                <img src="{{asset('./images/bca_img.png')}}">
                                </div>
                                <div class="affiliated-mid">
                                    <span>Mock Test start 23 May
                                    </span>
                                    <span>
                                        Saral Shikshya starting mock Test from bhadra 23 ........ Saral Shikshya starting mock Test from  bhadra 23 ........
                                    </span>
                                </div>
                                <div class="affilated-bottom">
                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                    <span>26<sub>th</sub> may,2020</span>
                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                    <span>Kathmandu,nepal</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="affilated-wrapper">
                                <div class="affilated-img">
                                <img src="{{asset('./images/bca_img.png')}}">
                                </div>
                                <div class="affiliated-mid">
                                    <span>Mock Test start 23 May
                                    </span>
                                    <span>
                                        Saral Shikshya starting mock Test from bhadra 23 ........ Saral Shikshya starting mock Test from  bhadra 23 ........
                                    </span>
                                </div>
                                <div class="affilated-bottom">
                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                    <span>26<sub>th</sub> may,2020</span>
                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                    <span>Kathmandu, Nepal</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="affilated-wrapper">
                                <div class="affilated-img">
                                <img src="{{asset('./images/bca_img.png')}}">
                                </div>
                                <div class="affiliated-mid">
                                    <span>Mock Test start 23 May
                                    </span>
                                    <span>
                                        Saral Shikshya starting mock Test from bhadra 23 ........ Saral Shikshya starting mock Test from  bhadra 23 ........
                                    </span>
                                </div>
                                <div class="affilated-bottom">
                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                    <span>26<sub>th</sub> may,2020</span>
                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                    <span>Kathmandu, Nepal</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="affilated-wrapper">
                                <div class="affilated-img">
                                <img src="{{asset('./images/bca_img.png')}}">
                                </div>
                                <div class="affiliated-mid">
                                    <span>Mock Test start 23 May
                                    </span>
                                    <span>
                                        Saral Shikshya starting mock Test from bhadra 23 ........ Saral Shikshya starting mock Test from  bhadra 23 ........
                                    </span>
                                </div>
                                <div class="affilated-bottom">
                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                    <span>26<sub>th</sub> may,2020</span>
                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                    <span>Kathmandu, Nepal</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="affilated-wrapper">
                                <div class="affilated-img">
                                <img src="{{asset('./images/bca_img.png')}}">
                                </div>
                                <div class="affiliated-mid">
                                    <span>Mock Test start 23 May
                                    </span>
                                    <span>
                                        Saral Shikshya starting mock Test from bhadra 23 ........ Saral Shikshya starting mock Test from  bhadra 23 ........
                                    </span>
                                </div>
                                <div class="affilated-bottom">
                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                    <span>26<sub>th</sub> may,2020</span>
                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                    <span>Kathmandu, Nepal</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="affilated-wrapper">
                                <div class="affilated-img">
                                <img src="{{asset('./images/bca_img.png')}}">
                                </div>
                                <div class="affiliated-mid">
                                    <span>Mock Test start 23 May
                                    </span>
                                    <span>
                                        Saral Shikshya starting mock Test from bhadra 23 ........ Saral Shikshya starting mock Test from  bhadra 23 ........
                                    </span>
                                </div>
                                <div class="affilated-bottom">
                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                    <span>26<sub>th</sub> may,2020</span>
                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                    <span>Kathmandu, Nepal</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="affilated-wrapper">
                                <div class="affilated-img">
                                <img src="{{asset('./images/bca_img.png')}}">
                                </div>
                                <div class="affiliated-mid">
                                    <span>Mock Test start 23 May
                                    </span>
                                    <span>
                                        Saral Shikshya starting mock Test from bhadra 23 ........ Saral Shikshya starting mock Test from  bhadra 23 ........
                                    </span>
                                </div>
                                <div class="affilated-bottom">
                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                    <span>26<sub>th</sub> may,2020</span>
                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                    <span>Kathmandu, Nepal</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="affilated-wrapper">
                                <div class="affilated-img">
                                <img src="{{asset('./images/bca_img.png')}}">
                                </div>
                                <div class="affiliated-mid">
                                    <span>Mock Test start 23 May
                                    </span>
                                    <span>
                                        Saral Shikshya starting mock Test from bhadra 23 ........ Saral Shikshya starting mock Test from  bhadra 23 ........
                                    </span>
                                </div>
                                <div class="affilated-bottom">
                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                    <span>26<sub>th</sub> may,2020</span>
                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                    <span>Kathmandu, Nepal</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="affilated-wrapper">
                                <div class="affilated-img">
                                <img src="{{asset('./images/bca_img.png')}}">
                                </div>
                                <div class="affiliated-mid">
                                    <span>Mock Test start 23 May
                                    </span>
                                    <span>
                                        Saral Shikshya starting mock Test from bhadra 23 ........ Saral Shikshya starting mock Test from  bhadra 23 ........
                                    </span>
                                </div>
                                <div class="affilated-bottom">
                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                    <span>26<sub>th</sub> may,2020</span>
                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                    <span>Kathmandu, Nepal</span>
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
