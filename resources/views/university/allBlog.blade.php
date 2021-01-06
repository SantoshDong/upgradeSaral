@extends('fontend.index')
@section('contents')

<div class="container-fluid" style="background-color: #e9ecef;padding-left:0px;padding-right:0px;">
    <div class="row __coll-des-view">
        <div class="col-12">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Notices</li>
            </ul>
        </div>
    </div>
</div>
<div class="container-fluid" style="background-color:#0b46a7;">
    <div class="container">
        <div class="row searchFilter-top-heading text-center py-3">
            <div class="col-12">
                <span>Blogs</span>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
        <div class="row my-5 mx-2">
            <div class="col-lg-3 col-md-5 col-12 for-siroe" style="border:1px solid #dcdcdc;">
                <div class="row">
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
                            <span>Recent posts</span>
                        </div>
                        <div class="upevent-items-wrap">
                            <div class="upevent-date">
                            <span><img src="{{asset('./images/notices_img.png')}}"></span>
                            </div>
                            <div class="upevent-detail">
                                <span>Mock Test Start 23 May</span>
                                <span>Saral shikshys starting mock Test from bhadra 23 mannana</span>
                            </div>
                        </div>
                        <div class="upevent-items-wrap">
                            <div class="upevent-date">
                            <span><img src="{{asset('./images/notices_img.png')}}"></span>
                            </div>
                            <div class="upevent-detail">
                                <span>Mock Test Start 23 May</span>
                                <span>Saral shikshys starting mock Test from bhadra 23 mannana</span>
                            </div>
                        </div>
                        <div class="upevent-items-wrap">
                            <div class="upevent-date">
                            <span><img src="{{asset('./images/notices_img.png')}}"></span>
                            </div>
                            <div class="upevent-detail">
                                <span>Mock Test Start 23 May</span>
                                <span>Saral shikshys starting mock Test from bhadra 23 mannana</span>
                            </div>
                        </div>
                        <div class="upevent-items-wrap">
                            <div class="upevent-date">
                            <span><img src="{{asset('./images/notices_img.png')}}"></span>
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
                            <span>Tranding Blogs</span>
                        </div>
                        <div class="col-12 p-0">
                            <div class="affilated-wrapper1">
                                <div class="affilated-img">
                                <img src="{{asset('./images/Tribhuvan-University.png')}}">
                                </div>
                                <div class="affiliated-mid1">
                                    <span>
                                        का ११ र १२ का पलाई थानारण गरयो
                                        गरयो

                                    </span>
                                </div>
                                <div class="affilated-bottom1">
                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                    <span>1hr Ago</span>
                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                    <span>Tribhuvan University</span>
                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                    <span>News</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 p-0">
                            <div class="affilated-wrapper1">
                                <div class="affilated-img">
                                <img src="{{asset('./images/Tribhuvan-University.png')}}">
                                </div>
                                <div class="affiliated-mid1">
                                    <span>
                                        का ११ र १२ का पलाई थानारण गरयो
                                        गरयो

                                    </span>
                                </div>
                                <div class="affilated-bottom1">
                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                    <span>1hr Ago</span>
                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                    <span>Tribhuvan University</span>
                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                    <span>News</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 p-0">
                            <div class="affilated-wrapper1">
                                <div class="affilated-img">
                                <img src="{{asset('./images/Tribhuvan-University.png')}}">
                                </div>
                                <div class="affiliated-mid1">
                                    <span>
                                        का ११ र १२ का पलाई थानारण गरयो
                                        गरयो

                                    </span>
                                </div>
                                <div class="affilated-bottom1">
                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                    <span>1hr Ago</span>
                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                    <span>Tribhuvan University</span>
                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                    <span>News</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="allevent-search">
                            <span>Blog Tags</span>
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
            <div class="col-lg-9 col-md-7 col-12">
                <div class="row provinces-middle my-3 m-0">
                    <div class="col-12">
                        <div style="float:right;">
                            <span>News</span>
                            
                            <span>Notices</span>
                            <img src="http://127.0.0.1:8000/images/college_logo1.png">
                            <span>Result</span>
                            <img src="http://127.0.0.1:8000/images/college_logo1.png">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <a href="/blogDetail">
                                    <div class="affilated-wrapper">
                                        <div class="affilated-img">
                                        <img src="{{asset('./images/Tribhuvan-University.png')}}">
                                        </div>
                                        <div class="affiliated-mid1">
                                            <span>
                                                का ११ र १२ का पलाई थानारण गरयो
                                                गरयो
                                    
                                            </span>
                                        </div>
                                        <div class="affilated-bottom1">
                                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                            <span>1hr Ago</span>
                                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                            <span>Tribhuvan University</span>
                                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                            <span>News</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <a href="/blogDetail">
                                    <div class="affilated-wrapper">
                                        <div class="affilated-img">
                                        <img src="{{asset('./images/Tribhuvan-University.png')}}">
                                        </div>
                                        <div class="affiliated-mid1">
                                            <span>
                                                का ११ र १२ का पलाई थानारण गरयो
                                                गरयो
                                    
                                            </span>
                                        </div>
                                        <div class="affilated-bottom1">
                                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                            <span>1hr Ago</span>
                                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                            <span>Tribhuvan University</span>
                                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                            <span>News</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <a href="/blogDetail">
                                    <div class="affilated-wrapper">
                                        <div class="affilated-img">
                                        <img src="{{asset('./images/Tribhuvan-University.png')}}">
                                        </div>
                                        <div class="affiliated-mid1">
                                            <span>
                                                का ११ र १२ का पलाई थानारण गरयो
                                                गरयो
                                    
                                            </span>
                                        </div>
                                        <div class="affilated-bottom1">
                                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                            <span>1hr Ago</span>
                                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                            <span>Tribhuvan University</span>
                                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                            <span>News</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <a href="/blogDetail">
                                    <div class="affilated-wrapper">
                                        <div class="affilated-img">
                                        <img src="{{asset('./images/Tribhuvan-University.png')}}">
                                        </div>
                                        <div class="affiliated-mid1">
                                            <span>
                                                का ११ र १२ का पलाई थानारण गरयो
                                                गरयो
                                    
                                            </span>
                                        </div>
                                        <div class="affilated-bottom1">
                                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                            <span>1hr Ago</span>
                                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                            <span>Tribhuvan University</span>
                                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                            <span>News</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <a href="/blogDetail">
                                    <div class="affilated-wrapper">
                                        <div class="affilated-img">
                                        <img src="{{asset('./images/Tribhuvan-University.png')}}">
                                        </div>
                                        <div class="affiliated-mid1">
                                            <span>
                                                का ११ र १२ का पलाई थानारण गरयो
                                                गरयो
                                    
                                            </span>
                                        </div>
                                        <div class="affilated-bottom1">
                                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                            <span>1hr Ago</span>
                                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                            <span>Tribhuvan University</span>
                                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                            <span>News</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <a href="/blogDetail">
                                    <div class="affilated-wrapper">
                                        <div class="affilated-img">
                                        <img src="{{asset('./images/Tribhuvan-University.png')}}">
                                        </div>
                                        <div class="affiliated-mid1">
                                            <span>
                                                का ११ र १२ का पलाई थानारण गरयो
                                                गरयो
                                    
                                            </span>
                                        </div>
                                        <div class="affilated-bottom1">
                                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                            <span>1hr Ago</span>
                                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                            <span>Tribhuvan University</span>
                                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                            <span>News</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
@endsection
