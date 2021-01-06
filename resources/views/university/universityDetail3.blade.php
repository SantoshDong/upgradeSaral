@extends('fontend.index')
@section('contents')
<div class="container-fluid" style="background-color: #e9ecef;padding-left:0px;padding-right:0px;">
    <div class="row __coll-des-view">
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
<div class="container">
    <div class="row tu-whole-wrapper mx-md-0 mx-3">
        <div class="col-2">
            <div class="row tu-img-section text-center">
                <div class="col-12">
                    <img src="http://127.0.0.1:8000/./images/college_logo1.png">
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
                            <img src="http://127.0.0.1:8000/./images/college_logo1.png">Kritipur Kathmandu
                        </div>
                        <div class="rating-inner1">
                            <div>
                                <img src="http://127.0.0.1:8000/./images/college_logo1.png">
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
                            <img src="http://127.0.0.1:8000/./images/college_logo1.png">2200 views
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 uudd-wrap">
            <div class="tu-review-section">
                <div>
                    <i class="fas fa-sign-in-alt" aria-hidden="true"></i>
                </div>
                <div>
                    <button id="reviewBtn" type="btn">Write Review</button>
                </div>
                
                <div class="review_content">
                    <div class="rc-pop-heading">
                        <span>Tribhuvan University</span>
                        <p>Your feedback on the new reviews experience is appreciated and helps us understand what is working for you and how we can improve. We would love for you to take a few minutes to share your thoughts on the new Reviews and rating experience.</p>
                    </div>
                    <div class="rc-pop-lower">
                            <div class="rc-pop-img">
                            <img src="http://127.0.0.1:8000/./images/saral_img2.png">
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
                                <div>
                                    <p>It was a nice experience by itself to visit such a great university. The architectural design is great and the university of well managed. It sits on the lap of mountains and has a natural environment.  Small portion of this university is covered with dense trees and one can spend his or her quality time  either studying or doing creative works. It was a good experience being there</p>
                                </div>
                            </div>
                            <div class="rc-popBtn-section">
                                <button class="btn btn-large">Cancel</button>
                                <button class="btn btn-large">Post</button>
                            </div>
                    </div>
                </div>
            </div>
            <div class="tu-review-section">
                <div>
                    <i class="fas fa-sign-in-alt" aria-hidden="true"></i>
                </div>
                <div>
                    <button id="reviewBtn2" type="btn">Ask Question</button>
                </div>
                
                <div class="review_content2" style="display: none;">
                    <div class="row mb-3 qna-main-wrapper-l m-0">
                        <div class="col-12">
                            <div class="qna-ana-wrap">
                                <div class="qna-ana-top">
                                    <div class="qna-ana-l">
                                        <img src="http://127.0.0.1:8000/images/saral_img1.png">
                                    </div>
                                    <div class="qna-ana-r text-justify">
                                        <textarea placeholder="What do you want to ask , Pradip ?" spellcheck="false" id="autoresizing" rows="1" style="height: 52px;"></textarea> 
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
        <div class="col-12">
            <div class="row tu-nav">
                <div class="col-12">
                    <ul>
                        <a href="#quick_fact"><li class="ud-nav active1" onclick="myFunction(event)"><span>Quick Fact</span></li></a>
                        <a href="#about"><li class="ud-nav" onclick="myFunction(event)"><span>About</span></li></a>
                        <a href="#faculties"><li class="ud-nav" onclick="myFunction(event)"><span>Faculties</span></li></a>
                        <a href="#courses"><li class="ud-nav" onclick="myFunction(event)"><span>Course</span></li></a>
                        <a href="#const_campus"><li class="ud-nav" onclick="myFunction(event)"><span>Campuses</span></li></a>
                        <a href="#const_campus"><li class="ud-nav" onclick="myFunction(event)"><span>Colleges</span></li></a>
                        <a href="#gallery"><li class="ud-nav" onclick="myFunction(event)"><span>Gallery</span></li></a>
                        <a href="#latest_notices"><li class="ud-nav notification" onclick="myFunction(event)"><span>Notices</span> <span class="badge1"><i class="fas fa-bell" aria-hidden="true">33</i></span></li></a>
                        <a href="#qna"><li class="ud-nav notification" onclick="myFunction(event)"><span>Q &amp; A</span><span class="badge1"><i class="fas fa-bell" aria-hidden="true">5</i></span></li></a>
                        <a href="#l_review"><li class="ud-nav notification" onclick="myFunction(event)"><span>Reviews</span><span class="badge1"><i class="fas fa-bell" aria-hidden="true">9</i></span></li></a>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div class="row" id="quick_fact"></div>
    <div class="row mt-5">
        <div class="col-12">
            <div class="row mx-md-0 mx-3">
                <div class="col-lg-9 col-md-12 col-12">
                    <div class="row tu-qf-wrapper">
                        <div class="col-12 tu-qf-heading">
                            <span>quick facts</span>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="row my-md-5 my-2">
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
                            <div class="row my-md-5 my-2">
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
                            <div class="row my-md-5 my-2">
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
                            <div class="row my-md-5 my-2">
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
                            <div class="row my-md-5 my-2">
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
                            <div class="row my-md-5 my-2">
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
                            <div class="row my-md-5 my-2">
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
                            <div class="row my-md-5 my-2">
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
                    </div>
                    <div class="row" id="about"></div>
                    <div class="row tu-au-wrapper">
                        <div class="col-12 tu-au-heading">
                            <span>About University</span>
                        </div>
                        <div class="col-12 mt-3">
                            <p>Tribhuvan University (TU; Nepali: िभुवन िविवालय) is a public university for higher education, located in Kirtipur, which is an ancient city in the
                                Kathmandu Valley of Nepal. The university, established in 1959, is the oldest unive-sity in Nepal.[4] In terms of enrollment, it is the tenth largest
                               university in the world. The university offers 2,079 undergraduate and 2,000 postgraduate programs across a wide range of disciplines.[citation
                               needed] As of March 2017, the university has 60 constituent campuses and 1,084 affiliated colleges across the country.[5] Since it is government
                               financed, it is less expensive than private universities.
                               </p>
                            <p>
                                Tribhuvan University (TU; Nepali: िभुवन िविवालय) is a public university for higher education, located in Kirtipur, which is an ancient city in the
                                Kathmandu Valley of Nepal. The university, established in 1959, is the oldest unive-sity in Nepal.[4] In terms of enrollment, it is the tenth largest
                                university in the world. The university offers 2,079 undergraduate and 2,000 postgraduate programs across a wide range of disciplines.[citation
                                needed] As of March 2017, the university has 60 constituent campuses and 1,084 affiliated colleges across the country.[5] Since it is government
                                financed, it is less expensive than private universities.
                            </p>
                        </div>
                    </div>
                    <div class="row" id="faculties"></div>
                    <div class="row tu-fact-wrapper pb-3">
                        <div class="col-12 tu-fact-heading">
                            <span>Faculties</span>
                        </div>
                        <div class="col-12">
                            <div class="row mt-4">
                                <div class="col-1 text-center">
                                    <span class="dot" style="float-left;"></span>
                                </div>
                                <div class="col-11">
                                    <span>Faculties</span>
                                </div>
                                <div class="col-1 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-11">
                                    <span>Faculties of Science & Technology</span>
                                </div>
                                <div class="col-1 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-11">
                                    <span>Faculties of Education</span>
                                </div>
                                <div class="col-1 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-11">
                                    <span>Faculties of Management</span>
                                </div>
                                <div class="col-1 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-11">
                                    <span>Faculties of Education</span>
                                </div>
                                <div class="col-1 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-11">
                                    <span>Faculties of Science & Technology</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="courses"></div>
                    <div class="row tu-course-wrapper">
                        <div class="col-12 tu-course-heading">
                            <span>Courses</span>
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
                    <div class="row" id="l_review"></div>
                    <div class="row tu-lr-wrapper">
                        <div class="col-12 tu-lr-heading">
                            <span>Latest Review</span>
                        </div>
                        <div class="col-12">
                            <div class="row mt-2">
                                <div class="col-9 lr-progess-wrap">
                                    <div>
                                        <span class="lr-no">5</span>
                                    </div>
                                    <div>
                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div>
                                        <span class="lr-no">4</span>
                                    </div>
                                    <div>
                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div>
                                        <span class="lr-no">3</span>
                                    </div>
                                    <div>
                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div>
                                        <span class="lr-no">2</span>
                                    </div>
                                    <div>
                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div>
                                        <span class="lr-no">1</span>
                                    </div>
                                    <div>
                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </div>
                                <div class="col-3">
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
                        <div class="col-12">
                            <div>
                                <button style="float:right;border: 2px solid #707070;background-color:#dcdcdc;" id="reviewBtn1" type="btn">Write Review</button>
                            </div>
                            <div class="review_content1">
                                <div class="rc-pop-heading">
                                    <span>Tribhuvan University</span>
                                    <p>Your feedback on the new reviews experience is appreciated and helps us understand what is working for you and how we can improve. We would love for you to take a few minutes to share your thoughts on the new Reviews and rating experience.</p>
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
                                            <div>
                                                <p>It was a nice experience by itself to visit such a great university. The architectural design is great and the university of well managed. It sits on the lap of mountains and has a natural environment.  Small portion of this university is covered with dense trees and one can spend his or her quality time  either studying or doing creative works. It was a good experience being there</p>
                                            </div>
                                        </div>
                                        <div class="rc-popBtn-section">
                                            <button class="btn btn-large">Cancel</button>
                                            <button class="btn btn-large">Post</button>
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
                                    <p>It was a nice experience by itself to visit such a great university. The architectural design is great and the It was a nice experience by
                                        itself to visit such a great university. The architectural design is great and the university of well managed. It sits on the lap of mounta
                                        -ins and has a natural environment. Small portion of this university is covered with dense trees and one can spend his or her
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
                                    <p>It was a nice experience by itself to visit such a great university. The architectural design is great and the It was a nice experience by
                                        itself to visit such a great university. The architectural design is great and the university of well managed. It sits on the lap of mounta
                                        -ins and has a natural environment. Small portion of this university is covered with dense trees and one can spend his or her
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
                                    <p>It was a nice experience by itself to visit such a great university. The architectural design is great and the It was a nice experience by
                                        itself to visit such a great university. The architectural design is great and the university of well managed. It sits on the lap of mounta
                                        -ins and has a natural environment. Small portion of this university is covered with dense trees and one can spend his or her
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
                                    <p>It was a nice experience by itself to visit such a great university. The architectural design is great and the It was a nice experience by
                                        itself to visit such a great university. The architectural design is great and the university of well managed. It sits on the lap of mounta
                                        -ins and has a natural environment. Small portion of this university is covered with dense trees and one can spend his or her
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
                                    <p>It was a nice experience by itself to visit such a great university. The architectural design is great and the It was a nice experience by
                                        itself to visit such a great university. The architectural design is great and the university of well managed. It sits on the lap of mounta
                                        -ins and has a natural environment. Small portion of this university is covered with dense trees and one can spend his or her
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
                            <span>Gallery</span>
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
                    <div class="row" style="margin-top:50px;box-shadow: 0px 0px 2px rgba(0,0,0,.5);
                    border-radius: 10px; padding-top:10px;">
                        <div class="col-12">
                           <div class="row mb-3">
                               <div class="col-12">
                                 <div class="ml-auto ana-expert-ans">
                                     <span>All</span>
                                     <span style="background-color:#b3b3b3;">Expert Answers</span>
                                 </div>
                               </div>
                           </div>
                           <div class="row mb-3">
                               <div class="col-12">
                                   <div class="ana-tablinks-wrap">
                                       <section onclick="anaPanel(event, 'ana-panel1')" class="anaTabs ana-active">
                                           All Discussions
                                       </section>
                                       <section onclick="anaPanel(event, 'ana-panel2')" class="anaTabs">
                                           Latest Discussions
                                       </section>
                                       <section onclick="anaPanel(event, 'ana-panel3')" class="anaTabs">
                                           My Discussions
                                       </section>
                                       <section onclick="anaPanel(event, 'ana-panel4')" class="anaTabs">
                                           Trending Posts
                                       </section>
                                   </div>
                               </div>
                           </div>
                           <div class="row mb-3">
                               <div class="col-12">
                                   <div class="row mt-3 mb-5">
                                       <div class="col-12">
                                           <div id="ana-panel1" class="anapanel" style="display: block;">
                                               <div class="row qna-main-wrapper-l">
                                                   <div class="col-12">
                                                       <div class="row" style="border-bottom: 2px solid #a1a1a1;">
                                                           <div class="col-12">
                                                               <div class="ana-p1-wrapper">
                                                                   <div class="ana-p1-ds">
                                                                   <span><img src="http://127.0.0.1:8000/./images/saral_img2.png"></span>
                                                                   <span>Pradip Dhungana</span>
                                                                   </div>
                                                                   <div class="ana-p1-ds-r">
                                                                   <span><i class="fas fa-ellipsis-h" aria-hidden="true"></i></span>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="row my-2">
                                                           <div class="col-12">
                                                               <div class="ana-p1-img-wrap">
                                                                   <span>
                                                                       <img src="http://127.0.0.1:8000/./images/buddha_msg.png">
                                                                   </span>
                                                               </div>
                                                               <div class="ana-p1-img-fb">
                                                                   <div class="ana-p1-fb-item">
                                                                       <span>122 Vote</span>
                                                                       <span><i class="fas fa-thumbs-up" aria-hidden="true"></i></span>
                                                                   </div>
                                                                   <div class="ana-p1-fb-item">
                                                                       <span>25 Answers</span>
                                                                       <span><i class="fab fa-facebook-messenger" aria-hidden="true"></i></span>
                                                                   </div>
                                                                   <div class="ana-p1-fb-item">
                                                                       <span>10 Share</span>
                                                                       <span><i class="fas fa-share-alt" aria-hidden="true"></i></span>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="row my-2">
                                                           <div class="col-12">
                                                               <div class="ana-p1-cc">
                                                                   <div>
                                                                      <span>All</span>
                                                                   </div>
                                                                   <div>
                                                                      <span>Expert Answers</span>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                           <div class="col-12">
                                                               <div class="row my-3">
                                                                   <div class="col-12">
                                                                       <div class="ana-p1-ccs">
                                                                           <div class="ana-p1-ccs-l">
                                                                               <span><img src="http://127.0.0.1:8000/./images/saral_img2.png"></span>
                                                                           </div>
                                                                           <div class="ana-p1-ccs-r">
                                                                               <span><input type="text" placeholder="Write Your Answer."></span>
                                                                               <span><i class="fas fa-camera" aria-hidden="true"></i></span>
                                                                           </div>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                               <div class="row my-3">
                                                                   <div class="col-12">
                                                                       <div class="ana-p1-ccs1">
                                                                           <div class="ana-p1-ccs-l">
                                                                               <span><img src="http://127.0.0.1:8000/./images/saral_img2.png"></span>
                                                                           </div>
                                                                           <div class="ana-p1-ccs-r">
                                                                               <span><input type="text" placeholder="an Answer was originally a solemn assertion in opposition to someone or something,"></span>
                                                                               <span></span>
                                                                           </div>
                                                                           <div class="ana-p1-css-rr">
                                                                               <span><i class="fas fa-ellipsis-h" aria-hidden="true"></i></span>
                                                                           </div>
                                                                       </div>
                                                                   </div>
                                                                   <div class="col-12">
                                                                       <div class="ana-p1-ccs2">
                                                                           <div></div>
                                                                           <div class="ana-p1-csi-wrap">
                                                                               <div class="ana-p1-csi">
                                                                                   <span>122 Vote</span>
                                                                                   <span><i class="fas fa-thumbs-up" aria-hidden="true"></i></span>
                                                                               </div>
                                                                               <div class="ana-p1-csi">
                                                                                   <span>25 Answers</span>
                                                                                   <span><i class="fab fa-facebook-messenger" aria-hidden="true"></i></span>
                                                                               </div>
                                                                           </div>
                                                                           <div></div>
                                                                       </div>
                                                                   </div>
                                                                   <div class="col-12">
                                                                       <div class="ana-p1-cs-inner">
                                                                           <div></div>
                                                                           <div class="ana-p1-cs-inner-wrap">
                                                                              <div class="row">
                                                                                   <div class="col-12">
                                                                                       <div class="ana-p1-ccs1">
                                                                                           <div class="ana-p1-ccs-l">
                                                                                               <span><img src="http://127.0.0.1:8000/./images/saral_img2.png"></span>
                                                                                           </div>
                                                                                           <div class="ana-p1-ccs-r">
                                                                                               <span><input type="text" placeholder="an Answer was originally a solemn assertion in opposition to someone or something,"></span>
                                                                                               <span></span>
                                                                                           </div>
                                                                                           <div class="ana-p1-css-rr">
                                                                                               <span><i class="fas fa-ellipsis-h" aria-hidden="true"></i></span>
                                                                                           </div>
                                                                                       </div>
                                                                                   </div>
                                                                              </div>
                                                                               <div class="row">
                                                                                   <div class="col-12">
                                                                                       <div class="ana-p1-ccs2">
                                                                                           <div></div>
                                                                                           <div class="ana-p1-csi-wrap">
                                                                                               <div class="ana-p1-csi">
                                                                                                   <span>122 Vote</span>
                                                                                                   <span><i class="fas fa-thumbs-up" aria-hidden="true"></i></span>
                                                                                               </div>
                                                                                               <div class="ana-p1-csi">
                                                                                                   <span>25 Answers</span>
                                                                                                   <span><i class="fab fa-facebook-messenger" aria-hidden="true"></i></span>
                                                                                               </div>
                                                                                           </div>
                                                                                           <div></div>
                                                                                       </div>
                                                                                   </div>   
                                                                               </div>
                                                                           </div>
                                                                       </div>
                                                                       <div class="ana-p1-cs-inner2">
                                                                           <div></div>
                                                                           <div class="ana-p1-cs-inner-wrap">
                                                                               <div class="ana-p1-ccs">
                                                                                   <div class="ana-p1-ccs-l">
                                                                                       <span><img src="http://127.0.0.1:8000/./images/saral_img2.png"></span>
                                                                                   </div>
                                                                                   <div class="ana-p1-ccs-r">
                                                                                       <span><input type="text" placeholder="Write Your Answer."></span>
                                                                                       <span><i class="fas fa-camera" aria-hidden="true"></i></span>
                                                                                   </div>
                                                                               </div>
                                                                           </div>
                                                                           <div></div>
                                                                       </div>                                                </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="row qna-main-wrapper-l">
                                                   <div class="col-12">
                                                       <div class="row" style="border-bottom: 2px solid #a1a1a1;">
                                                           <div class="col-12">
                                                               <div class="ana-p1-wrapper">
                                                                   <div class="ana-p1-ds">
                                                                   <span><img src="http://127.0.0.1:8000/./images/saral_img2.png"></span>
                                                                   <span>Pradip Dhungana</span>
                                                                   </div>
                                                                   <div class="ana-p1-ds-r">
                                                                   <span><i class="fas fa-ellipsis-h" aria-hidden="true"></i></span>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="row my-2">
                                                           <div class="col-12">
                                                               <div class="ana-p1-img-wrap">
                                                                   <span>
                                                                       What is the meaning of Lorem ipsum?
                                                                   </span>
                                                               </div>
                                                               <div class="ana-p1-img-fb">
                                                                   <div class="ana-p1-fb-item">
                                                                       <span>122 Vote</span>
                                                                       <span><i class="fas fa-thumbs-up" aria-hidden="true"></i></span>
                                                                   </div>
                                                                   <div class="ana-p1-fb-item">
                                                                       <span>25 Answers</span>
                                                                       <span><i class="fab fa-facebook-messenger" aria-hidden="true"></i></span>
                                                                   </div>
                                                                   <div class="ana-p1-fb-item">
                                                                       <span>10 Share</span>
                                                                       <span><i class="fas fa-share-alt" aria-hidden="true"></i></span>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="row my-2">
                                                           <div class="col-12">
                                                               <div class="ana-p1-cc">
                                                                   <div>
                                                                      <span>All</span>
                                                                   </div>
                                                                   <div>
                                                                      <span>Expert Answers</span>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                           <div class="col-12">
                                                               <div class="row my-3">
                                                                   <div class="col-12">
                                                                       <div class="ana-p1-ccs">
                                                                           <div class="ana-p1-ccs-l">
                                                                               <span><img src="http://127.0.0.1:8000/./images/saral_img2.png"></span>
                                                                           </div>
                                                                           <div class="ana-p1-ccs-r">
                                                                               <span><input type="text" placeholder="Write Your Answer."></span>
                                                                               <span><i class="fas fa-camera" aria-hidden="true"></i></span>
                                                                           </div>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                               <div class="row my-3">
                                                                   <div class="col-12">
                                                                       <div class="ana-p1-ccs1">
                                                                           <div class="ana-p1-ccs-l">
                                                                               <span><img src="http://127.0.0.1:8000/./images/saral_img2.png"></span>
                                                                           </div>
                                                                           <div class="ana-p1-ccs-r">
                                                                               <span><input type="text" placeholder="an Answer was originally a solemn assertion in opposition to someone or something,"></span>
                                                                               <span></span>
                                                                           </div>
                                                                           <div class="ana-p1-css-rr">
                                                                               <span><i class="fas fa-ellipsis-h" aria-hidden="true"></i></span>
                                                                           </div>
                                                                       </div>
                                                                   </div>
                                                                   <div class="col-12">
                                                                       <div class="ana-p1-ccs2">
                                                                           <div></div>
                                                                           <div class="ana-p1-csi-wrap">
                                                                               <div class="ana-p1-csi">
                                                                                   <span>122 Vote</span>
                                                                                   <span><i class="fas fa-thumbs-up" aria-hidden="true"></i></span>
                                                                               </div>
                                                                               <div class="ana-p1-csi">
                                                                                   <span>25 Answers</span>
                                                                                   <span><i class="fab fa-facebook-messenger" aria-hidden="true"></i></span>
                                                                               </div>
                                                                           </div>
                                                                           <div></div>
                                                                       </div>
                                                                   </div>
                                                                   <div class="col-12">
                                                                       <div class="ana-p1-cs-inner">
                                                                           <div></div>
                                                                           <div class="ana-p1-cs-inner-wrap">
                                                                              <div class="row">
                                                                                   <div class="col-12">
                                                                                       <div class="ana-p1-ccs1">
                                                                                           <div class="ana-p1-ccs-l">
                                                                                               <span><img src="http://127.0.0.1:8000/./images/saral_img2.png"></span>
                                                                                           </div>
                                                                                           <div class="ana-p1-ccs-r">
                                                                                               <span><input type="text" placeholder="an Answer was originally a solemn assertion in opposition to someone or something,"></span>
                                                                                               <span></span>
                                                                                           </div>
                                                                                           <div class="ana-p1-css-rr">
                                                                                               <span><i class="fas fa-ellipsis-h" aria-hidden="true"></i></span>
                                                                                           </div>
                                                                                       </div>
                                                                                   </div>
                                                                              </div>
                                                                               <div class="row">
                                                                                   <div class="col-12">
                                                                                       <div class="ana-p1-ccs2">
                                                                                           <div></div>
                                                                                           <div class="ana-p1-csi-wrap">
                                                                                               <div class="ana-p1-csi">
                                                                                                   <span>122 Vote</span>
                                                                                                   <span><i class="fas fa-thumbs-up" aria-hidden="true"></i></span>
                                                                                               </div>
                                                                                               <div class="ana-p1-csi">
                                                                                                   <span>25 Answers</span>
                                                                                                   <span><i class="fab fa-facebook-messenger" aria-hidden="true"></i></span>
                                                                                               </div>
                                                                                           </div>
                                                                                           <div></div>
                                                                                       </div>
                                                                                   </div>   
                                                                               </div>
                                                                           </div>
                                                                       </div>
                                                                       <div class="ana-p1-cs-inner2">
                                                                           <div></div>
                                                                           <div class="ana-p1-cs-inner-wrap">
                                                                               <div class="ana-p1-ccs">
                                                                                   <div class="ana-p1-ccs-l">
                                                                                       <span><img src="http://127.0.0.1:8000/./images/saral_img2.png"></span>
                                                                                   </div>
                                                                                   <div class="ana-p1-ccs-r">
                                                                                       <span><input type="text" placeholder="Write Your Answer."></span>
                                                                                       <span><i class="fas fa-camera" aria-hidden="true"></i></span>
                                                                                   </div>
                                                                               </div>
                                                                           </div>
                                                                           <div></div>
                                                                       </div>                                                </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div id="ana-panel2" class="anapanel">
                                               panel 2
                                           </div>
                                           <div id="ana-panel3" class="anapanel">
                                               panel3
                                           </div>
                                           <div id="ana-panel4" class="anapanel">
                                               panel4
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                        </div>
                   </div>
                </div>
                <div class="col-lg-3 col-md-12 col-12">
                    <div class="row ml-md-2 mx-0 mt-md-0 mt-5">
                        <div class="col-12 apply-section">
                            <span>APPLY NOW</span>
                            <span style="float:right;"><img src="{{asset('./images/college_logo1.png')}}"></span>
                        </div>
                    </div>
                    <div class="row ml-md-2 mx-0 mt-3">
                        <div class="col-12 apply-section2">
                            <span style="font-size:1rem;">DOWNLOAD BROCHURE</span>
                            <span style="float:right;"><img src="{{asset('./images/college_logo1.png')}}"></span>
                        </div>
                    </div>
                    <div class="row ml-md-2 mx-0 mt-3" style="  box-shadow:0px 0px 4px rgba(0,0,0,.5);">
                        <div class="col-12 notification2-wrap">
                            <span>NOTIFICATION</span>
                            <span><i class="fas fa-bell" aria-hidden="true"></i></span>
                        </div>
                        <div class="col-12 notification2-items">
                            <div class="n2-item-img">
                                <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                            </div>
                            <div class="n2-item-detail">
                                <span>May 20,2020:</span>
                                <span>BSc CSIT fifth semester exam result has been published.</span>
                            </div>
                            <div class="n2-item-read">
                                <span>Read More</span>
                            </div>
                        </div>
                        <div class="col-12 notification2-items">
                            <div class="n2-item-img">
                                <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                            </div>
                            <div class="n2-item-detail">
                                <span>May 20,2020:</span>
                                <span>BSc CSIT fifth semester exam result has been published.</span>
                            </div>
                            <div class="n2-item-read">
                                <span>Read More</span>
                            </div>
                        </div>
                        <div class="col-12 notification2-items">
                            <div class="n2-item-img">
                                <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                            </div>
                            <div class="n2-item-detail">
                                <span>May 20,2020:</span>
                                <span>BSc CSIT fifth semester exam result has been published.</span>
                            </div>
                            <div class="n2-item-read">
                                <span>Read More</span>
                            </div>
                        </div>
                        <div class="col-12 notification2-items">
                            <div class="n2-item-img">
                                <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                            </div>
                            <div class="n2-item-detail">
                                <span>May 20,2020:</span>
                                <span>BSc CSIT fifth semester exam result has been published.</span>
                            </div>
                            <div class="n2-item-read">
                                <span>Read More</span>
                            </div>
                        </div>
                        <div class="col-12 notification2-items">
                            <div class="n2-item-img">
                                <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                            </div>
                            <div class="n2-item-detail">
                                <span>May 20,2020:</span>
                                <span>BSc CSIT fifth semester exam result has been published.</span>
                            </div>
                            <div class="n2-item-read">
                                <span>Read More</span>
                            </div>
                        </div>
                        <div class="col-12 my-3">
                            <button class="btn">
                                Read More <i style="font-size:1.5rem;" class="fas fa-sort-down"></i>
                            </button>
                        </div>
                    </div>
                    <div class="row ml-md-2 mx-0 mt-3" style="  box-shadow:0px 0px 4px rgba(0,0,0,.5);">
                        <div class="col-12 interest-section">
                            <div class="interest-img">
                                <span><img src="{{asset('./images/college_logo1.png')}}"></span>     
                            </div>
                            <div>
                                <span>Interested in This College?</span>
                            </div>
                           <div class="row mb-5">
                                <div class="col-12 interest-section-lower">
                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                    <span>Get Free Counselling</span>
                                </div>
                           </div>
                        </div>
                    </div>
                    <div class="row ml-md-2 mx-0 mt-3" style="  box-shadow:0px 0px 4px rgba(0,0,0,.5);">
                        <div class="col-12 follow-section">
                           <div>
                               <span>Follow & Share this college to get
                                Information about admission</span>
                           </div>
                           <div class="follow-img text-center">
                               <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                               <span>follow</span>
                               <span><i class="fas fa-sign-in-alt" aria-hidden="true"></i></span>
                               <span>share</span>
                           </div>
                        </div>

                    </div>
                    <div class="row ml-md-2 mx-0 mt-3" style="  box-shadow:0px 0px 4px rgba(0,0,0,.5);">
                        <div class="col-12 pm-section">
                            <span>Principal Message</span>
                        </div>
                        <div class="col-12 pm-body-section">
                            <div class="pm-b-top">
                                <span>Pradip Dhungana</span>
                                <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                            </div>
                            <div class="pm-b-buttom">
                                <p>
                                    Hello, Dear student our collage
                                    is best college in nepali, we are
                                    providing management, IT, bca
                                    program in our college, we are
                                    also produce berogari sangathan
                                    in nepal. 
                                </p>
                                <p>
                                    Hello, Dear student our collage
                                    is best college in nepali, we are
                                    providing management, IT, bca
                                    program in our college, we are
                                    also produce berogari sangathan
                                    in nepal. 
                                </p>
                                <p>
                                    Hello, Dear student our collage
                                    is best college in nepali, we are
                                    providing management, IT, bca
                                    program in our college, we are
                                    also produce berogari sangathan
                                    in nepal. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row ml-md-2 mx-0 mt-3" style="  box-shadow:0px 0px 4px rgba(0,0,0,.5);">
                        <div class="col-12 faculties-heading">
                            <span>Faculties</span>
                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                        </div>
                        <div class="faculties-body">
                            <span class="dot1"></span>
                            <span>Transportation</span>
                            <span class="dot1"></span>
                            <span>Swimming</span>
                            <span class="dot1"></span>
                            <span>Pool</span>
                            <span class="dot1"></span>
                            <span>Hole</span>
                            <span class="dot1"></span>
                            <span>Transportation</span>
                            <span class="dot1"></span>
                            <span>Swimming</span>
                            <span class="dot1"></span>
                            <span>Pool</span>
                            <span class="dot1"></span>
                            <span>Hole</span>
                        </div>
                    </div>
                    <div class="row ml-md-2 mx-0 mt-3" style="  box-shadow:0px 0px 4px rgba(0,0,0,.5);">
                        <div class="col-12 placement-heading">
                            <span>PLACEMENTS</span>
                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                        </div>
                        <div class="col-12 placement-body">
                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
