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
<div class="container-fluid hero-tri-university"
    style="background-image: url('{{ asset('./images/Tribhuvan-University.png')}}')">
</div>
    <div class="row tu-whole-wrapper mx-md-5 mx-3">
        <div class="col-2">
            <div class="row tu-img-section text-center">
                <div class="col-12">
                    <img src="{{asset('./images/college_logo1.png')}}">
                </div>
                <div class="col-12 __social_icon_cover">
                    <div class="social-icon-wrap">
                        <span><i class="fab fa-facebook" aria-hidden="true" style="color: #3a559f;"></i></span>
                        <span><i class="fab fa-instagram-square" aria-hidden="true" style="color:#a13998;"></i></span>
                        <span><i class="fab fa-linkedin-in" aria-hidden="true" style="color:#0077b7;"></i></span>
                        <span><i class="fab fa-twitter" aria-hidden="true" style="color:#1cb7eb;"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="row">
                <div class="col-12 tu-wrapper px-md-5 px-0">
                    <div class="tu-heading">
                        <span>Tribhuvan University</span>
                    </div>
                    <div class="tu-detail">
                        <div>
                            <img src="{{asset('./images/college_logo1.png')}}">Kritipur Kathmandu
                        </div>
                        <div class="rating-inner1">
                            <div>
                                <img src="{{asset('./images/college_logo1.png')}}">
                            </div>
                            <div class="rateing-inner1-in">
                                <span>3.0</span>
                                <span class="fa fa-star checked" aria-hidden="true"></span>
                                <span class="fa fa-star checked" aria-hidden="true"></span>
                                <span class="fa fa-star checked" aria-hidden="true"></span>
                                <span class="fa fa-star" aria-hidden="true"></span>
                                <span class="fa fa-star" aria-hidden="true"></span>
                            </div>
                            <span>200 reviews</span>
                        </div>
                        <div>
                            <img src="{{asset('./images/college_logo1.png')}}">2200 views
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 uudd-wrap">
            <div class="tu-review-section">
                <div>
                    <i class="fas fa-sign-in-alt"></i>
                </div>
                <div id="wr-dropdown">
                    <button id="reviewBtn" type="btn">Write Review</button>
                    <div class="review_content">
                        <div class="rc-pop-heading">
                            <span>Tribhuvan University</span>
                            <p>Your feedback on the new reviews experience is appreciated and helps us understand what
                                is working for you and how we can improve. We would love for you to take a few minutes
                                to share your thoughts on the new Reviews and rating experience.</p>
                        </div>
                        <div class="rc-pop-lower">
                            <div class="rc-pop-img">
                                <img src="{{asset('./images/saral_img2.png')}}">
                            </div>
                            <div class="rc-pop-detail">
                                <div clsss="rc-pop-dr">
                                    <span>Brindra Bhatta</span>
                                </div>
                                <div class="rc-pop-rating">
                                    <span class="fa fa-star checked" aria-hidden="true"></span>
                                    <span class="fa fa-star checked" aria-hidden="true"></span>
                                    <span class="fa fa-star checked" aria-hidden="true"></span>
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                </div>
                                <div class="qna-ana-r text-justify my-3" style="padding-left:0px;">
                                    <textarea placeholder="write review here"
                                        spellcheck="false" id="autoresizing" rows="1"></textarea>
                                </div>
                            </div>
                            <div class="rc-popBtn-section">
                                <button class="btn btn-large">Cancel</button>
                                <button class="btn btn-large">Post</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="tu-review-section">
                <div>
                    <i class="fas fa-sign-in-alt"></i>
                </div>
                <div id="wr-dropdown1">
                    <button id="reviewBtn2" type="btn">Ask Question</button>
                    <div class="review_content2" style="padding:0px;">
                        <div class="row qna-main-wrapper-l m-0">
                            <div class="col-12">
                                <div class="qna-ana-wrap">
                                    <div class="qna-ana-top">
                                        <div class="qna-ana-l">
                                            <img src="http://127.0.0.1:8000/images/saral_img1.png">
                                        </div>
                                        <div class="qna-ana-r text-justify">
                                            <textarea placeholder="What do you want to ask , Pradip ?"
                                                spellcheck="false" id="autoresizing" rows="1"></textarea>
                                        </div>
                                    </div>
                                    <div class="qna-ana-bottom">
                                        <div>
                                        </div>
                                        <div class="qna-ana-bottom-win">
                                            <div class="ana-bottom-l">
                                                <span>photo</span>
                                            </div>
                                            <div class="ana-bottom-m">

                                            </div>
                                            <div class="ana-bottom-r">
                                                <button class="btn btn-danger">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row tu-nav">
                <div class="col-12">
                    <ul>
                        <a href="#quick_fact">
                            <li class="ud-nav active1" onclick="myFunction(event)"><span>Quick Fact</span></li>
                        </a>
                        <a href="#about">
                            <li class="ud-nav" onclick="myFunction(event)"><span>About</span></li>
                        </a>
                        <a href="#faculties">
                            <li class="ud-nav" onclick="myFunction(event)"><span>Faculties</span></li>
                        </a>
                        <a href="#courses">
                            <li class="ud-nav" onclick="myFunction(event)"><span>Course</span></li>
                        </a>
                        <a href="#const_campus">
                            <li class="ud-nav __ud_nav_five" onclick="myFunction(event)"><span>Admission Process</span></li>
                        </a>
                        <a href="#const_campus">
                            <li class="ud-nav" onclick="myFunction(event)"><span>Scholarship</span></li>
                        </a>
                        <a href="#gallery">
                            <li class="ud-nav" onclick="myFunction(event)"><span>Gallery</span></li>
                        </a>
                        <a href="#latest_notices">
                            <li class="ud-nav" onclick="myFunction(event)">
                                <span class="notification">Notices<span class="badge1"><i class="fas fa-bell"><span>33</span></i></span></span>
                                </li>
                        </a>
                        <a href="#qna">
                            <li class="ud-nav" onclick="myFunction(event)">
                                <span class="notification">Q & A
                                    <span class="badge1"><i class="fas fa-bell"><span>5</span></i></span>   
                                </span>
                                </li>

                        </a>
                        <a href="#l_review">
                            <li class="ud-nav" onclick="myFunction(event)">
                                <span class="notification">Reviews
                                    <span class="badge1"><i
                                     class="fas fa-bell"><span>9</span></i></span>
                                </span></li>
                        </a>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div class="row mx-md-5 mx-3" id="quick_fact"></div>
    <div class="row mx-md-5 mx-3" style="margin-top:50px;">
        <div class="col-12 px-0">
            <div class="row mx-md-0 mx-3">
                <div class="col-lg-9 col-md-12 col-12">
                    <div class="row tu-qf-wrapper">
                        <div class="col-12 tu-qf-heading">
                            <span class="__ud_heading_line">Quick Facts</span>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="row my-md-3 my-2">
                                <div class="col-12 tu-qf-items">
                                    <div class="tu-qf-img">
                                        <img src="{{asset('./images/college_logo1.png')}}">
                                    </div>
                                    <div class="tu-qf-detail">
                                        <span>Address</span>
                                        <span>Kritipur, Kathmandu</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="row my-md-3 my-2">
                                <div class="col-12 tu-qf-items">
                                    <div class="tu-qf-img">
                                        <img src="{{asset('./images/college_logo1.png')}}">
                                    </div>
                                    <div class="tu-qf-detail">
                                        <span>Website</span>
                                        <span>Kritipur, Kathmandu</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="row my-md-3 my-2">
                                <div class="col-12 tu-qf-items">
                                    <div class="tu-qf-img">
                                        <img src="{{asset('./images/college_logo1.png')}}">
                                    </div>
                                    <div class="tu-qf-detail">
                                        <span>Ownership</span>
                                        <span>Kritipur, Kathmandu</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="row my-md-3 my-2">
                                <div class="col-12 tu-qf-items">
                                    <div class="tu-qf-img">
                                        <img src="{{asset('./images/college_logo1.png')}}">
                                    </div>
                                    <div class="tu-qf-detail">
                                        <span>Mail</span>
                                        <span>Kritipur, Kathmandu</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="row my-md-3 my-2">
                                <div class="col-12 tu-qf-items">
                                    <div class="tu-qf-img">
                                        <img src="{{asset('./images/college_logo1.png')}}">
                                    </div>
                                    <div class="tu-qf-detail">
                                        <span>Estd Year</span>
                                        <span>Kritipur, Kathmandu</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="row my-md-3 my-2">
                                <div class="col-12 tu-qf-items">
                                    <div class="tu-qf-img">
                                        <img src="{{asset('./images/college_logo1.png')}}">
                                    </div>
                                    <div class="tu-qf-detail">
                                        <span>Contact</span>
                                        <span>Kritipur, Kathmandu</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="row my-md-3 my-2">
                                <div class="col-12 tu-qf-items">
                                    <div class="tu-qf-img">
                                        <img src="{{asset('./images/college_logo1.png')}}">
                                    </div>
                                    <div class="tu-qf-detail">
                                        <span>Total Faculties</span>
                                        <span>Kritipur, Kathmandu</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="row my-md-3 my-2">
                                <div class="col-12 tu-qf-items">
                                    <div class="tu-qf-img">
                                        <img src="{{asset('./images/college_logo1.png')}}">
                                    </div>
                                    <div class="tu-qf-detail">
                                        <span>Total Course</span>
                                        <span>Kritipur, Kathmandu</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="row my-md-3 my-2">
                                <div class="col-12 tu-qf-items">
                                    <div class="tu-qf-img">
                                        <img src="{{asset('./images/college_logo1.png')}}">
                                    </div>
                                    <div class="tu-qf-detail">
                                        <span>Graduate Student</span>
                                        <span>Kritipur, Kathmandu</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="about"></div>
                    <div class="row tu-au-wrapper">
                        <div class="col-12 tu-au-heading">
                            <span class="__ud_heading_line">About University</span>
                        </div>
                        <div class="col-12 mt-3">
                            <p class="__tu_au_p">Tribhuvan University (TU; Nepali: िभुवन िविवालय) is a public university for higher
                                education, located in Kirtipur, which is an ancient city in the
                                Kathmandu Valley of Nepal. The university, established in 1959, is the oldest unive-sity
                                in Nepal.[4] In terms of enrollment, it is the tenth largest
                                university in the world. The university offers 2,079 undergraduate and 2,000
                                postgraduate programs across a wide range of disciplines.[citation
                                needed] As of March 2017, the university has 60 constituent campuses and 1,084
                                affiliated colleges across the country.[5] Since it is government
                                financed, it is less expensive than private universities.
                            </p>
                            <p class="__tu_au_p">
                                Tribhuvan University (TU; Nepali: िभुवन िविवालय) is a public university for higher
                                education, located in Kirtipur, which is an ancient city in the
                                Kathmandu Valley of Nepal. The university, established in 1959, is the oldest unive-sity
                                in Nepal.[4] In terms of enrollment, it is the tenth largest
                                university in the world. The university offers 2,079 undergraduate and 2,000
                                postgraduate programs across a wide range of disciplines.[citation
                                needed] As of March 2017, the university has 60 constituent campuses and 1,084
                                affiliated colleges across the country.[5] Since it is government
                                financed, it is less expensive than private universities.
                            </p>
                        </div>
                    </div>
                    <div class="row" id="faculties"></div>
                    <div class="row tu-fact-wrapper pb-3">
                        <div class="col-12 tu-fact-heading">
                            <span class="__ud_heading_line">Faculties</span>
                        </div>
                        <div class="col-12">
                            <div class="row mt-4 __faculties_tu">
                                <div class="col-12">
                                    <span class="dot">Faculties</span>
                                </div>
                                <div class="col-12">
                                    <span class="dot">Faculties of Science & Technology</span>
                                </div>
                                <div class="col-12">
                                    <span class="dot">Faculties of Education</span>
                                </div>
                                <div class="col-12">
                                    <span class="dot">Faculties of Management</span>
                                </div>
                                <div class="col-12">
                                    <span class="dot">Faculties of Education</span>
                                </div>
                                <div class="col-12">
                                    <span class="dot">Faculties of Science & Technology</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="courses"></div>
                    <div class="row tu-course-wrapper">
                        <div class="col-12 tu-course-heading">
                            <span class="__ud_heading_line">Courses</span>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="tu-course-inner-head">
                                Browse by Bachelor
                            </div>
                            <div class="tu-course-inner-body">
                                <span>Bsc csit</span>
                                <span>BCA</span>
                                <span>B Tech</span>
                                <span>BSC</span>
                                <span>Bsc. Naursing</span>
                                <span>BBA</span>
                                <span>BSC</span>
                                <span>BBA</span>
                                <span>Bsc csit</span>
                                <span>BCA</span>
                                <span>B Tech</span>
                                <span>BSC</span>
                                <span>Bsc. Naursing</span>
                                <span>BBA</span>
                                <span>BSC</span>
                                <span>BBA</span>
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="tu-course-inner-head">
                                Browse by Master
                            </div>
                            <div class="tu-course-inner-body">
                                <span>Bsc csit</span>
                                <span>BCA</span>
                                <span>B Tech</span>
                                <span>BSC</span>
                                <span>Bsc. Naursing</span>
                                <span>BBA</span>
                                <span>BSC</span>
                                <span>BBA</span>
                                <span>Bsc csit</span>
                                <span>BCA</span>
                                <span>B Tech</span>
                                <span>BSC</span>
                                <span>Bsc. Naursing</span>
                                <span>BBA</span>
                                <span>BSC</span>
                                <span>BBA</span>
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="tu-course-inner-head">
                                Browse by Degree
                            </div>
                            <div class="tu-course-inner-body">
                                <span>Bsc csit</span>
                                <span>BCA</span>
                                <span>B Tech</span>
                                <span>BSC</span>
                                <span>Bsc. Naursing</span>
                                <span>BBA</span>
                                <span>BSC</span>
                                <span>BBA</span>
                                <span>Bsc csit</span>
                                <span>BCA</span>
                                <span>B Tech</span>
                                <span>BSC</span>
                                <span>Bsc. Naursing</span>
                                <span>BBA</span>
                                <span>BSC</span>
                                <span>BBA</span>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="const_campus"></div>
                    {{-- <div class="row tu-cc-wrapper">
                        <div class="col-12 tu-cc-heading">
                            <span class="__ud_heading_line">Constituent Campuses</span>
                        </div>
                        <div class="col-12">
                            <div class="row mb-5 top-college-select" style="margin-top:-5vh;">
                                <div class="col-12">
                                    <div class="col-12" id="home-location">
                                        <select class="home-location" name="top-college"
                                            style="width:250px; border-radius:20px; padding:20px;">
                                            <option value="pokhera">Pokhera</option>
                                            <option value="kathmandu">Kathmandu</option>
                                            <option value="kathmandu">Bhaktapur</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="top-college-wrap" style="position:relative;z-index:2;">
                                <div class="top-college-inner-wrap">
                                    <div class="tc-upper-wrap">
                                        <div class="tc-logo-section">
                                            <img src="http://127.0.0.1:8000/./images/saral_img2.png">
                                        </div>
                                        <div class="tc-text-section">
                                            <span>Samraddhi College</span>
                                            <span><i class="fas fa-map-marker-alt" aria-hidden="true"></i> Bhaktapur,
                                                Nepal</span>
                                            <span><i class="fas fa-user-alt" aria-hidden="true"></i> 200 views</span>
                                        </div>
                                    </div>
                                    <div class="tc-lower-wrap">
                                        <div class="tc-faculty-section">
                                            <span>BBS</span>
                                            <span>BBA</span>
                                            <span>BIM</span>
                                            <span>BIT</span>
                                        </div>
                                        <div class="tc-rating-section">
                                            <span>3.0</span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="top-college-wrap" style="position:relative;z-index:2;">
                                <div class="top-college-inner-wrap">
                                    <div class="tc-upper-wrap">
                                        <div class="tc-logo-section">
                                            <img src="http://127.0.0.1:8000/./images/saral_img2.png">
                                        </div>
                                        <div class="tc-text-section">
                                            <span>Samraddhi College</span>
                                            <span><i class="fas fa-map-marker-alt" aria-hidden="true"></i> Bhaktapur,
                                                Nepal</span>
                                            <span><i class="fas fa-user-alt" aria-hidden="true"></i> 200 views</span>
                                        </div>
                                    </div>
                                    <div class="tc-lower-wrap">
                                        <div class="tc-faculty-section">
                                            <span>BBS</span>
                                            <span>BBA</span>
                                            <span>BIM</span>
                                            <span>BIT</span>
                                        </div>
                                        <div class="tc-rating-section">
                                            <span>3.0</span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="top-college-wrap" style="position:relative;z-index:2;">
                                <div class="top-college-inner-wrap">
                                    <div class="tc-upper-wrap">
                                        <div class="tc-logo-section">
                                            <img src="http://127.0.0.1:8000/./images/saral_img2.png">
                                        </div>
                                        <div class="tc-text-section">
                                            <span>Samraddhi College</span>
                                            <span><i class="fas fa-map-marker-alt" aria-hidden="true"></i> Bhaktapur,
                                                Nepal</span>
                                            <span><i class="fas fa-user-alt" aria-hidden="true"></i> 200 views</span>
                                        </div>
                                    </div>
                                    <div class="tc-lower-wrap">
                                        <div class="tc-faculty-section">
                                            <span>BBS</span>
                                            <span>BBA</span>
                                            <span>BIM</span>
                                            <span>BIT</span>
                                        </div>
                                        <div class="tc-rating-section">
                                            <span>3.0</span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="top-college-wrap" style="position:relative;z-index:2;">
                                <div class="top-college-inner-wrap">
                                    <div class="tc-upper-wrap">
                                        <div class="tc-logo-section">
                                            <img src="http://127.0.0.1:8000/./images/saral_img2.png">
                                        </div>
                                        <div class="tc-text-section">
                                            <span>Samraddhi College</span>
                                            <span><i class="fas fa-map-marker-alt" aria-hidden="true"></i> Bhaktapur,
                                                Nepal</span>
                                            <span><i class="fas fa-user-alt" aria-hidden="true"></i> 200 views</span>
                                        </div>
                                    </div>
                                    <div class="tc-lower-wrap">
                                        <div class="tc-faculty-section">
                                            <span>BBS</span>
                                            <span>BBA</span>
                                            <span>BIM</span>
                                            <span>BIT</span>
                                        </div>
                                        <div class="tc-rating-section">
                                            <span>3.0</span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <button class="btn __view_more" style="float:right;border:2px solid #707070;">View More
                                Colleges</button>
                        </div>
                    </div> --}}
                    <div class="row" id="latest_notices"></div>
                    <div class="row tu-fact-wrapper tu-latestN-wrapper">
                        <div class="col-12 tu-fact-heading">
                            <span class="__ud_heading_line">Latest Notices</span>
                        </div>
                        <div class="col-12">
                            <div class="row mt-4">
                                <div class="col-1 text-center">
                                    <span class="dot" style="float-left;"></span>
                                </div>
                                <div class="col-11">
                                    <span>May 20, 2020:</span><span>BSc CSIT fifth Semester exam result has been
                                        published</span><span>Read More</span>
                                </div>
                                <div class="col-1 text-center">
                                    <span class="dot" style="float-left;"></span>
                                </div>
                                <div class="col-11">
                                    <span>May 20, 2020:</span><span>BSc CSIT fifth Semester exam result has been
                                        published</span><span>Read More</span>
                                </div>
                                <div class="col-1 text-center">
                                    <span class="dot" style="float-left;"></span>
                                </div>
                                <div class="col-11">
                                    <span>May 20, 2020:</span><span>BSc CSIT fifth Semester exam result has been
                                        published</span><span>Read More</span>
                                </div>
                                <div class="col-1 text-center">
                                    <span class="dot" style="float-left;"></span>
                                </div>
                                <div class="col-11">
                                    <span>May 20, 2020:</span><span>BSc CSIT fifth Semester exam result has been
                                        published</span><span>Read More</span>
                                </div>
                                <div class="col-1 text-center">
                                    <span class="dot" style="float-left;"></span>
                                </div>
                                <div class="col-11">
                                    <span>May 20, 2020:</span><span>BSc CSIT fifth Semester exam result has been
                                        published</span><span>Read More</span>
                                </div>
                                <div class="col-1 text-center">
                                    <span class="dot" style="float-left;"></span>
                                </div>
                                <div class="col-11">
                                    <span>May 20, 2020:</span><span>BSc CSIT fifth Semester exam result has been
                                        published</span><span>Read More</span>
                                </div>

                                <div class="col-12 text-center my-3">
                                    <span class="btn" style="border: 2px solid #707070;background-color:#dcdcdc;">
                                        Read More <i style="font-size:1.5rem;" class="fas fa-sort-down"
                                            aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="qna"></div>
                    {{-- <div class="row tu-qna-wrapper">
                        <div class="col-12 tu-qna-heading">
                            <span>Latest Question & Answers</span>
                        </div>
                        <div class="col-12 tu-qna-body">
                            <div class="tu-qna-body-item">
                                <span>Q</span>
                                <span>From Where urea, acetic acid, Formic acid, citric acid derived from?</span>
                                <span>read more</span>
                            </div>
                            <div class="tu-qna-body-item">
                                <span>Q</span>
                                <span>IUPAC rule in simple form?</span>
                                <span>read more</span>
                            </div>
                            <div class="tu-qna-body-item">
                                <span>Q</span>
                                <span>From Where urea, acetic acid, Formic acid, citric acid derived from?</span>
                                <span>read more</span>
                            </div>
                            <div class="tu-qna-body-item">
                                <span>Q</span>
                                <span>From Where urea, acetic acid, Formic acid, citric acid derived from? IUPAC RLE IN
                                    SIMPLE FORM ?</span>
                                <span>read more</span>
                            </div>
                        </div>
                        <div class="col-12 text-center my-3">
                            <span class="btn" style="border: 2px solid #707070;background-color:#dcdcdc;">
                                Read More <i style="font-size:1.5rem;" class="fas fa-sort-down" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div> --}}
                    <div class="row" id="l_review"></div>
                    <div class="row tu-lr-wrapper">
                        <div class="col-12 tu-lr-heading">
                            <span class="__ud_heading_line">Latest Review</span>
                        </div>
                        <div class="col-12">
                            <div class="row mt-2">
                                <div class="col-md-9 col-12 lr-progess-wrap">
                                    <div>
                                        <span class="lr-no">5</span>
                                    </div>
                                    <div>
                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div>
                                        <span class="lr-no">4</span>
                                    </div>
                                    <div>
                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 70%"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div>
                                        <span class="lr-no">3</span>
                                    </div>
                                    <div>
                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div>
                                        <span class="lr-no">2</span>
                                    </div>
                                    <div>
                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 25%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div>
                                        <span class="lr-no">1</span>
                                    </div>
                                    <div>
                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </div>
                                <div class="col-md-3 col-12">
                                    <div class="row lr-pr-wrap">
                                        <div class="col-12 text-center">
                                            <div class="lr-pr-span1">
                                                <span>4.5</span>
                                            </div>
                                            <div class="lr-rating-section">
                                                <span class="fa fa-star checked" aria-hidden="true"></span>
                                                <span class="fa fa-star checked" aria-hidden="true"></span>
                                                <span class="fa fa-star checked" aria-hidden="true"></span>
                                                <span class="fa fa-star" aria-hidden="true"></span>
                                                <span class="fa fa-star" aria-hidden="true"></span>
                                            </div>
                                            <div class="lr-pr-span2">
                                                <span>2 reviews</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 my-3 text-end">
                            <div class="row au-bwr-section">
                                <div class="col-12">
                                    <div id="wr-dropdown">
                                        <button id="reviewBtn" type="btn">Write Review</button>
                                        <div class="review_content">
                                            <div class="rc-pop-heading">
                                                <span>Tribhuvan University</span>
                                                <p>Your feedback on the new reviews experience is appreciated and helps us understand what
                                                    is working for you and how we can improve. We would love for you to take a few minutes
                                                    to share your thoughts on the new Reviews and rating experience.</p>
                                            </div>
                                            <div class="rc-pop-lower">
                                                <div class="rc-pop-img">
                                                    <img src="{{asset('./images/saral_img2.png')}}">
                                                </div>
                                                <div class="rc-pop-detail" style="text-align:start;">
                                                    <div clsss="rc-pop-dr">
                                                        <span>Brindra Bhatta</span>
                                                    </div>
                                                    <div class="rc-pop-rating">
                                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                                        <span class="fa fa-star" aria-hidden="true"></span>
                                                        <span class="fa fa-star" aria-hidden="true"></span>
                                                    </div>
                                                    <div class="qna-ana-r text-justify my-3" style="padding-left:0px;">
                                                        <textarea placeholder="write review here"
                                                            spellcheck="false" id="autoresizing" rows="1"></textarea>
                                                    </div>
                                                </div>
                                                <div class="rc-popBtn-section">
                                                    <button class="btn btn-large">Cancel</button>
                                                    <button class="btn btn-large">Post</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         
                        </div>
                        <div class="col-12">
                            <div class="row reviewer-wrapper">
                                <div class="col-12 rr-upper-section">
                                    <div class="rr-img">
                                        <img src="http://127.0.0.1:8000/./images/saral_img2.png">
                                    </div>
                                    <div class="rr-rating">
                                        <div class="rr-rating-span1">
                                            <span>Brindra bhatta</span>
                                        </div>
                                        <div class="lr-rating-section">
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                            <span>2 weeks ago</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 rr-lower-section">
                                    <p>It was a nice experience by itself to visit such a great university. The
                                        architectural design is great and the It was a nice experience by
                                        itself to visit such a great university. The architectural design is great and
                                        the university of well managed. It sits on the lap of mounta
                                        -ins and has a natural environment. Small portion of this university is covered
                                        with dense trees and one can spend his or her
                                        quality</p>
                                    <span>...More</span>
                                </div>
                                <div class="col-12" style="margin-top:-20px;">
                                    <span style="float:right;"> 500 <i class="fas fa-thumbs-up"></i> </span>
                                </div>
                            </div>
                            <div class="row reviewer-wrapper">
                                <div class="col-12 rr-upper-section">
                                    <div class="rr-img">
                                        <img src="http://127.0.0.1:8000/./images/saral_img2.png">
                                    </div>
                                    <div class="rr-rating">
                                        <div class="rr-rating-span1">
                                            <span>Brindra bhatta</span>
                                        </div>
                                        <div class="lr-rating-section">
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                            <span>2 weeks ago</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 rr-lower-section">
                                    <p>It was a nice experience by itself to visit such a great university. The
                                        architectural design is great and the It was a nice experience by
                                        itself to visit such a great university. The architectural design is great and
                                        the university of well managed. It sits on the lap of mounta
                                        -ins and has a natural environment. Small portion of this university is covered
                                        with dense trees and one can spend his or her
                                        quality</p>
                                    <span>...More</span>
                                </div>
                                <div class="col-12" style="margin-top:-20px;">
                                    <span style="float:right;"> 500 <i class="fas fa-thumbs-up"></i> </span>
                                </div>
                            </div>
                            <div class="row reviewer-wrapper">
                                <div class="col-12 rr-upper-section">
                                    <div class="rr-img">
                                        <img src="http://127.0.0.1:8000/./images/saral_img2.png">
                                    </div>
                                    <div class="rr-rating">
                                        <div class="rr-rating-span1">
                                            <span>Brindra bhatta</span>
                                        </div>
                                        <div class="lr-rating-section">
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                            <span>2 weeks ago</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 rr-lower-section">
                                    <p>It was a nice experience by itself to visit such a great university. The
                                        architectural design is great and the It was a nice experience by
                                        itself to visit such a great university. The architectural design is great and
                                        the university of well managed. It sits on the lap of mounta
                                        -ins and has a natural environment. Small portion of this university is covered
                                        with dense trees and one can spend his or her
                                        quality</p>
                                    <span>...More</span>
                                </div>
                                <div class="col-12" style="margin-top:-20px;">
                                    <span style="float:right;"> 500 <i class="fas fa-thumbs-up"></i> </span>
                                </div>
                            </div>
                            <div class="row reviewer-wrapper">
                                <div class="col-12 rr-upper-section">
                                    <div class="rr-img">
                                        <img src="http://127.0.0.1:8000/./images/saral_img2.png">
                                    </div>
                                    <div class="rr-rating">
                                        <div class="rr-rating-span1">
                                            <span>Brindra bhatta</span>
                                        </div>
                                        <div class="lr-rating-section">
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                            <span>2 weeks ago</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 rr-lower-section">
                                    <p>It was a nice experience by itself to visit such a great university. The
                                        architectural design is great and the It was a nice experience by
                                        itself to visit such a great university. The architectural design is great and
                                        the university of well managed. It sits on the lap of mounta
                                        -ins and has a natural environment. Small portion of this university is covered
                                        with dense trees and one can spend his or her
                                        quality</p>
                                    <span>...More</span>
                                </div>
                                <div class="col-12" style="margin-top:-20px;">
                                    <span style="float:right;"> 500 <i class="fas fa-thumbs-up"></i> </span>
                                </div>
                            </div>
                            <div class="row reviewer-wrapper">
                                <div class="col-12 rr-upper-section">
                                    <div class="rr-img">
                                        <img src="http://127.0.0.1:8000/./images/saral_img2.png">
                                    </div>
                                    <div class="rr-rating">
                                        <div class="rr-rating-span1">
                                            <span>Brindra bhatta</span>
                                        </div>
                                        <div class="lr-rating-section">
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                            <span>2 weeks ago</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 rr-lower-section">
                                    <p>It was a nice experience by itself to visit such a great university. The
                                        architectural design is great and the It was a nice experience by
                                        itself to visit such a great university. The architectural design is great and
                                        the university of well managed. It sits on the lap of mounta
                                        -ins and has a natural environment. Small portion of this university is covered
                                        with dense trees and one can spend his or her
                                        quality</p>
                                    <span>...More</span>
                                </div>
                                <div class="col-12" style="margin-top:-20px;">
                                    <span style="float:right;"> 500 <i class="fas fa-thumbs-up"></i> </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center my-3 ">
                            <button class="btn" style=" border: 2px solid #707070;
                            background-color: #dcdcdc;">
                                Read More <i style="font-size:1.5rem;" class="fas fa-sort-down" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                    <div class="row" id="gallery"></div>
                    <div class="row tu-gallery-wrapper my-5">
                        <div class="col-12 tu-gallery-heading">
                            <span class="__ud_heading_line">Gallery</span>
                        </div>
                        <div class="owl-carousel1 owl-carousel owl-theme">
                            <div><img src="{{asset('./images/book_img.jpeg')}}"> </div>
                            <div><img src="{{asset('./images/book_img.jpeg')}}"> </div>
                            <div><img src="{{asset('./images/book_img.jpeg')}}"> </div>
                            <div><img src="{{asset('./images/book_img.jpeg')}}"> </div>
                            <div><img src="{{asset('./images/book_img.jpeg')}}"> </div>
                            <div><img src="{{asset('./images/book_img.jpeg')}}"> </div>
                            <div><img src="{{asset('./images/book_img.jpeg')}}"> </div>
                        </div>
                    </div>
                    <div class="row" style="background-color:#ffffff;box-shadow: 0px 0px 4px rgba(0,0,0,.5); border-radius: 10px; margin-bottom:5vh;">
                        <div class="col-12 my-5">
                            <span class="__ud_heading_line" style="font-size:1.5rem;font-weight:600;">Qna section</span>
                        </div>
                        <div class="col-12 mb-5">
                            <div id="accordion ud-accordian">
                                <div class="card">
                                  <div class="btn btn-link ud-btn card-header" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      <h5 class="mb-0" style="text-align:start">
                                        About Tribhuvan University ?
                                      </h5>
                                  </div>
                                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        Tribhuvan University is Nepal's well known and trusted , organized home tuition service provider online platform that has been working as the bridge between teachers and students / parents or institutes/schools/colleges.
                                    </div>
                                  </div>
                                </div>
                                <div class="card">
                                  <div class="btn btn-link ud-btn card-header" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <h5 class="mb-0" style="text-align:start;">
                                        Where will ?
                                    </h5>
                                  </div>
                                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                  </div>
                                </div>
                                <div class="card">
                                  <div id="headingThree" class="btn btn-link ud-btn card-header" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <h5 class="mb-0" style="text-align:start;">
                                        Collapsible Group Item ?
                                    </h5>
                                  </div>
                                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                  </div>
                                </div>
                             </div> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-12 mb-3">
                    <div class="row popular-sub-wrap1 mx-md-0 mx-3">
                        <div class="col-12 popular-sub-heading">
                            <span>Top Colleges</span>
                        </div>
                        <div class="col-12 top-college-body">
                            <div style="align-self:center;">
                                <img src="{{asset('./images/college_logo1.png')}}">
                            </div>
                            <div class="tc-body-lower">
                                <div id="tc-body-lower-detail">
                                    <span>Khopa Engineering College</span>
                                    <span>Libali, Bhaktpur</span>
                                </div>
                                <div>
                                    <div class="rating-inner">
                                        <span>3.0</span>
                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                        <span class="fa fa-star" aria-hidden="true"></span>
                                        <span class="fa fa-star" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 top-college-body">
                            <div style="align-self:center;">
                                <img src="{{asset('./images/college_logo1.png')}}">
                            </div>
                            <div class="tc-body-lower">
                                <div id="tc-body-lower-detail">
                                    <span>Khopa Engineering College</span>
                                    <span>Libali, Bhaktpur</span>
                                </div>
                                <div>
                                    <div class="rating-inner">
                                        <span>3.0</span>
                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                        <span class="fa fa-star" aria-hidden="true"></span>
                                        <span class="fa fa-star" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 top-college-body">
                            <div style="align-self:center;">
                                <img src="{{asset('./images/college_logo1.png')}}">
                            </div>
                            <div class="tc-body-lower">
                                <div id="tc-body-lower-detail">
                                    <span>Khopa Engineering College</span>
                                    <span>Libali, Bhaktpur</span>
                                </div>
                                <div>
                                    <div class="rating-inner">
                                        <span>3.0</span>
                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                        <span class="fa fa-star" aria-hidden="true"></span>
                                        <span class="fa fa-star" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 top-college-body">
                            <div style="align-self:center;">
                                <img src="{{asset('./images/college_logo1.png')}}">
                            </div>
                            <div class="tc-body-lower">
                                <div id="tc-body-lower-detail">
                                    <span>Khopa Engineering College</span>
                                    <span>Libali, Bhaktpur</span>
                                </div>
                                <div>
                                    <div class="rating-inner">
                                        <span>3.0</span>
                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                        <span class="fa fa-star" aria-hidden="true"></span>
                                        <span class="fa fa-star" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 top-college-body">
                            <div style="align-self:center;">
                                <img src="{{asset('./images/college_logo1.png')}}">
                            </div>
                            <div class="tc-body-lower">
                                <div id="tc-body-lower-detail">
                                    <span>Khopa Engineering College</span>
                                    <span>Libali, Bhaktpur</span>
                                </div>
                                <div>
                                    <div class="rating-inner">
                                        <span>3.0</span>
                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                        <span class="fa fa-star" aria-hidden="true"></span>
                                        <span class="fa fa-star" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 top-college-body">
                            <div style="align-self:center;">
                                <img src="{{asset('./images/college_logo1.png')}}">
                            </div>
                            <div class="tc-body-lower">
                                <div id="tc-body-lower-detail">
                                    <span>Khopa Engineering College</span>
                                    <span>Libali, Bhaktpur</span>
                                </div>
                                <div>
                                    <div class="rating-inner">
                                        <span>3.0</span>
                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                        <span class="fa fa-star" aria-hidden="true"></span>
                                        <span class="fa fa-star" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 top-college-body">
                            <div style="align-self:center;">
                                <img src="{{asset('./images/college_logo1.png')}}">
                            </div>
                            <div class="tc-body-lower">
                                <div id="tc-body-lower-detail">
                                    <span>Khopa Engineering College</span>
                                    <span>Libali, Bhaktpur</span>
                                </div>
                                <div>
                                    <div class="rating-inner">
                                        <span>3.0</span>
                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                        <span class="fa fa-star" aria-hidden="true"></span>
                                        <span class="fa fa-star" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row popular-sub-wrap1 mx-md-0 mx-3">
                        <div class="col-12 popular-sub-heading">
                            <span>Top views Colleges</span>
                        </div>
                        <div class="col-12 top-college-body">
                            <div style="align-self:center;">
                                <img src="{{asset('./images/college_logo1.png')}}">
                            </div>
                            <div class="tc-body-lower">
                                <div id="tc-body-lower-detail">
                                    <span>Khopa Engineering College</span>
                                    <span>Libali, Bhaktpur</span>
                                </div>
                                <div>
                                    <span>210 views</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 top-college-body">
                            <div style="align-self:center;">
                                <img src="{{asset('./images/college_logo1.png')}}">
                            </div>
                            <div class="tc-body-lower">
                                <div id="tc-body-lower-detail">
                                    <span>Khopa Engineering College</span>
                                    <span>Libali, Bhaktpur</span>
                                </div>
                                <div>
                                    <span>1000 views</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 top-college-body">
                            <div style="align-self:center;">
                                <img src="{{asset('./images/college_logo1.png')}}">
                            </div>
                            <div class="tc-body-lower">
                                <div id="tc-body-lower-detail">
                                    <span>Khopa Engineering College</span>
                                    <span>Libali, Bhaktpur</span>
                                </div>
                                <div>
                                    <span>112000 views</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 top-college-body">
                            <div style="align-self:center;">
                                <img src="{{asset('./images/college_logo1.png')}}">
                            </div>
                            <div class="tc-body-lower">
                                <div id="tc-body-lower-detail">
                                    <span>Khopa Engineering College</span>
                                    <span>Libali, Bhaktpur</span>
                                </div>
                                <div>
                                    <span>1500 views</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 top-college-body">
                            <div style="align-self:center;">
                                <img src="{{asset('./images/college_logo1.png')}}">
                            </div>
                            <div class="tc-body-lower">
                                <div id="tc-body-lower-detail">
                                    <span>Khopa Engineering College</span>
                                    <span>Libali, Bhaktpur</span>
                                </div>
                                <div>
                                    <span>4000 views</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 top-college-body">
                            <div style="align-self:center;">
                                <img src="{{asset('./images/college_logo1.png')}}">
                            </div>
                            <div class="tc-body-lower">
                                <div id="tc-body-lower-detail">
                                    <span>Khopa Engineering College</span>
                                    <span>Libali, Bhaktpur</span>
                                </div>
                                <div>
                                    <span>6000 views</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 top-college-body">
                            <div style="align-self:center;">
                                <img src="{{asset('./images/college_logo1.png')}}">
                            </div>
                            <div class="tc-body-lower">
                                <div id="tc-body-lower-detail">
                                    <span>Khopa Engineering College</span>
                                    <span>Libali, Bhaktpur</span>
                                </div>
                                <div>
                                    <span>7000 views</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
