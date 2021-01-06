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
<div class="container-fluid hero-graduated" style="background-image: url('{{ asset('./images/graduated.jpg')}}')">
    <div class="container text-center">
        <h1>Institutions Regulating Education of Nepal</h1>
    </div>
</div>
<div class="container-fluid">
        <div class="row mx-2">
            <div class="col-12 University-whole-wrap">
                <div class="University-section1">
                    <div class="education-level-wrap">
                        <div class="level-heading">
                            <span>Level</span>
                        </div>
                        <div class="level-body">
                            <ul>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            NEB
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios1">
                                            SEE
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios1">
                                            Lower Secondary
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios1">
                                            ICAN
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadios1" value="option5">
                                        <label class="form-check-label" for="exampleRadios1">
                                            CTEVT
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="popular-sub-wrap">
                        <div class="popular-sub-heading">
                            <span>Popular Subject</span>
                        </div>
                        <div class="popular-sub-body">
                            <div style="align-self:center;">
                                <img src="{{asset('./images/college_logo1.png')}}">
                            </div>
                            <div class="ps-body-lower">
                                <span>Bachelors of Science in Computer Science and information Technology
                                    (BSc.CSIT)</span>
                                <span>Institution Regulation Education Of Nepal</span>
                            </div>
                        </div>
                        <div class="popular-sub-body">
                            <div style="align-self:center;">
                                <img src="{{asset('./images/college_logo1.png')}}">
                            </div>
                            <div class="ps-body-lower">
                                <span>Bachelors of Science in Computer Science and information Technology
                                    (BSc.CSIT)</span>
                                <span>Tribhuvan University</span>
                            </div>
                        </div>
                        <div class="popular-sub-body">
                            <div style="align-self:center;">
                                <img src="{{asset('./images/college_logo1.png')}}">
                            </div>
                            <div class="ps-body-lower">
                                <span>Bachelors of Science in Computer Science and information Technology
                                    (BSc.CSIT)</span>
                                <span>Tribhuvan University</span>
                            </div>
                        </div>
                        <div class="popular-sub-body">
                            <div style="align-self:center;">
                                <img src="{{asset('./images/college_logo1.png')}}">
                            </div>
                            <div class="ps-body-lower">
                                <span>Bachelors of Science in Computer Science and information Technology
                                    (BSc.CSIT)</span>
                                <span>Tribhuvan University</span>
                            </div>
                        </div>
                        <div class="popular-sub-body">
                            <div style="align-self:center;">
                                <img src="{{asset('./images/college_logo1.png')}}">
                            </div>
                            <div class="ps-body-lower">
                                <span>Bachelors of Science in Computer Science and information Technology
                                    (BSc.CSIT)</span>
                                <span>Tribhuvan University</span>
                            </div>
                        </div>
                        <div class="popular-sub-body">
                            <div style="align-self:center;">
                                <img src="{{asset('./images/college_logo1.png')}}">
                            </div>
                            <div class="ps-body-lower">
                                <span>Bachelors of Science in Computer Science and information Technology
                                    (BSc.CSIT)</span>
                                <span>Tribhuvan University</span>
                            </div>
                        </div>
                        <div class="popular-sub-body">
                            <div style="align-self:center;">
                                <img src="{{asset('./images/college_logo1.png')}}">
                            </div>
                            <div class="ps-body-lower">
                                <span>Bachelors of Science in Computer Science and information Technology
                                    (BSc.CSIT)</span>
                                <span>Tribhuvan University</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="University-section2">
                    <a href="/universityDetail">
                        <div class="top-college-wrap1">
                            <div class="top-college-inner-wrap">
                                <div class="tc-upper-wrap1">
                                    <div class="tc-logo-section1">
                                        <img src="http://127.0.0.1:8000/./images/saral_img2.png">
                                    </div>
                                    <div class="tc-text-section1">
                                        <div class="tc-text-head">
                                            <span>Tribhuban University</span>
                                        </div>
                                        <div class="tc-text-sub-heads">
                                            <span><i class="fas fa-map-marker-alt"></i> Bhaktapur, Nepal</span>
                                            <span><i class="fas fa-user"></i> 210 views</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-lower-wrap1">
                                    <div class="tc-faculty-section1">
                                        <div>
                                            <span>No of college</span>
                                            <span>335</span>
                                        </div>
                                        <div>
                                            <span>No of Program</span>
                                            <span>117</span>
                                        </div>
                                    </div>
                                    <div class="tc-rating-section1">
                                        <div class="rating-inner">
                                            <span>3.0</span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                        </div>
                                        <div class="views-inner">
                                            <span>300 views</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/universityDetail">
                        <div class="top-college-wrap1">
                            <div class="top-college-inner-wrap">
                                <div class="tc-upper-wrap1">
                                    <div class="tc-logo-section1">
                                        <img src="http://127.0.0.1:8000/./images/saral_img2.png">
                                    </div>
                                    <div class="tc-text-section1">
                                        <div class="tc-text-head">
                                            <span>Tribhuban University</span>
                                        </div>
                                        <div class="tc-text-sub-heads">
                                            <span><i class="fas fa-map-marker-alt"></i> Bhaktapur, Nepal</span>
                                            <span><i class="fas fa-user"></i> 210 views</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-lower-wrap1">
                                    <div class="tc-faculty-section1">
                                        <div>
                                            <span>No of college</span>
                                            <span>335</span>
                                        </div>
                                        <div>
                                            <span>No of Program</span>
                                            <span>117</span>
                                        </div>
                                    </div>
                                    <div class="tc-rating-section1">
                                        <div class="rating-inner">
                                            <span>3.0</span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                        </div>
                                        <div class="views-inner">
                                            <span>300 views</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/universityDetail">
                        <div class="top-college-wrap1">
                            <div class="top-college-inner-wrap">
                                <div class="tc-upper-wrap1">
                                    <div class="tc-logo-section1">
                                        <img src="http://127.0.0.1:8000/./images/saral_img2.png">
                                    </div>
                                    <div class="tc-text-section1">
                                        <div class="tc-text-head">
                                            <span>Tribhuban University</span>
                                        </div>
                                        <div class="tc-text-sub-heads">
                                            <span><i class="fas fa-map-marker-alt"></i> Bhaktapur, Nepal</span>
                                            <span><i class="fas fa-user"></i> 210 views</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-lower-wrap1">
                                    <div class="tc-faculty-section1">
                                        <div>
                                            <span>No of college</span>
                                            <span>335</span>
                                        </div>
                                        <div>
                                            <span>No of Program</span>
                                            <span>117</span>
                                        </div>
                                    </div>
                                    <div class="tc-rating-section1">
                                        <div class="rating-inner">
                                            <span>3.0</span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                        </div>
                                        <div class="views-inner">
                                            <span>300 views</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/universityDetail">
                        <div class="top-college-wrap1">
                            <div class="top-college-inner-wrap">
                                <div class="tc-upper-wrap1">
                                    <div class="tc-logo-section1">
                                        <img src="http://127.0.0.1:8000/./images/saral_img2.png">
                                    </div>
                                    <div class="tc-text-section1">
                                        <div class="tc-text-head">
                                            <span>Tribhuban University</span>
                                        </div>
                                        <div class="tc-text-sub-heads">
                                            <span><i class="fas fa-map-marker-alt"></i> Bhaktapur, Nepal</span>
                                            <span><i class="fas fa-user"></i> 210 views</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-lower-wrap1">
                                    <div class="tc-faculty-section1">
                                        <div>
                                            <span>No of college</span>
                                            <span>335</span>
                                        </div>
                                        <div>
                                            <span>No of Program</span>
                                            <span>117</span>
                                        </div>
                                    </div>
                                    <div class="tc-rating-section1">
                                        <div class="rating-inner">
                                            <span>3.0</span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                        </div>
                                        <div class="views-inner">
                                            <span>300 views</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/universityDetail">
                        <div class="top-college-wrap1">
                            <div class="top-college-inner-wrap">
                                <div class="tc-upper-wrap1">
                                    <div class="tc-logo-section1">
                                        <img src="http://127.0.0.1:8000/./images/saral_img2.png">
                                    </div>
                                    <div class="tc-text-section1">
                                        <div class="tc-text-head">
                                            <span>Tribhuban University</span>
                                        </div>
                                        <div class="tc-text-sub-heads">
                                            <span><i class="fas fa-map-marker-alt"></i> Bhaktapur, Nepal</span>
                                            <span><i class="fas fa-user"></i> 210 views</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-lower-wrap1">
                                    <div class="tc-faculty-section1">
                                        <div>
                                            <span>No of college</span>
                                            <span>335</span>
                                        </div>
                                        <div>
                                            <span>No of Program</span>
                                            <span>117</span>
                                        </div>
                                    </div>
                                    <div class="tc-rating-section1">
                                        <div class="rating-inner">
                                            <span>3.0</span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                        </div>
                                        <div class="views-inner">
                                            <span>300 views</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/universityDetail">
                        <div class="top-college-wrap1">
                            <div class="top-college-inner-wrap">
                                <div class="tc-upper-wrap1">
                                    <div class="tc-logo-section1">
                                        <img src="http://127.0.0.1:8000/./images/saral_img2.png">
                                    </div>
                                    <div class="tc-text-section1">
                                        <div class="tc-text-head">
                                            <span>Tribhuban University</span>
                                        </div>
                                        <div class="tc-text-sub-heads">
                                            <span><i class="fas fa-map-marker-alt"></i> Bhaktapur, Nepal</span>
                                            <span><i class="fas fa-user"></i> 210 views</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-lower-wrap1">
                                    <div class="tc-faculty-section1">
                                        <div>
                                            <span>No of college</span>
                                            <span>335</span>
                                        </div>
                                        <div>
                                            <span>No of Program</span>
                                            <span>117</span>
                                        </div>
                                    </div>
                                    <div class="tc-rating-section1">
                                        <div class="rating-inner">
                                            <span>3.0</span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                        </div>
                                        <div class="views-inner">
                                            <span>300 views</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/universityDetail">
                        <div class="top-college-wrap1">
                            <div class="top-college-inner-wrap">
                                <div class="tc-upper-wrap1">
                                    <div class="tc-logo-section1">
                                        <img src="http://127.0.0.1:8000/./images/saral_img2.png">
                                    </div>
                                    <div class="tc-text-section1">
                                        <div class="tc-text-head">
                                            <span>Tribhuban University</span>
                                        </div>
                                        <div class="tc-text-sub-heads">
                                            <span><i class="fas fa-map-marker-alt"></i> Bhaktapur, Nepal</span>
                                            <span><i class="fas fa-user"></i> 210 views</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-lower-wrap1">
                                    <div class="tc-faculty-section1">
                                        <div>
                                            <span>No of college</span>
                                            <span>335</span>
                                        </div>
                                        <div>
                                            <span>No of Program</span>
                                            <span>117</span>
                                        </div>
                                    </div>
                                    <div class="tc-rating-section1">
                                        <div class="rating-inner">
                                            <span>3.0</span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                        </div>
                                        <div class="views-inner">
                                            <span>300 views</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/universityDetail">
                        <div class="top-college-wrap1">
                            <div class="top-college-inner-wrap">
                                <div class="tc-upper-wrap1">
                                    <div class="tc-logo-section1">
                                        <img src="http://127.0.0.1:8000/./images/saral_img2.png">
                                    </div>
                                    <div class="tc-text-section1">
                                        <div class="tc-text-head">
                                            <span>Tribhuban University</span>
                                        </div>
                                        <div class="tc-text-sub-heads">
                                            <span><i class="fas fa-map-marker-alt"></i> Bhaktapur, Nepal</span>
                                            <span><i class="fas fa-user"></i> 210 views</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-lower-wrap1">
                                    <div class="tc-faculty-section1">
                                        <div>
                                            <span>No of college</span>
                                            <span>335</span>
                                        </div>
                                        <div>
                                            <span>No of Program</span>
                                            <span>117</span>
                                        </div>
                                    </div>
                                    <div class="tc-rating-section1">
                                        <div class="rating-inner">
                                            <span>3.0</span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                        </div>
                                        <div class="views-inner">
                                            <span>300 views</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/universityDetail">
                        <div class="top-college-wrap1">
                            <div class="top-college-inner-wrap">
                                <div class="tc-upper-wrap1">
                                    <div class="tc-logo-section1">
                                        <img src="http://127.0.0.1:8000/./images/saral_img2.png">
                                    </div>
                                    <div class="tc-text-section1">
                                        <div class="tc-text-head">
                                            <span>Tribhuban University</span>
                                        </div>
                                        <div class="tc-text-sub-heads">
                                            <span><i class="fas fa-map-marker-alt"></i> Bhaktapur, Nepal</span>
                                            <span><i class="fas fa-user"></i> 210 views</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-lower-wrap1">
                                    <div class="tc-faculty-section1">
                                        <div>
                                            <span>No of college</span>
                                            <span>335</span>
                                        </div>
                                        <div>
                                            <span>No of Program</span>
                                            <span>117</span>
                                        </div>
                                    </div>
                                    <div class="tc-rating-section1">
                                        <div class="rating-inner">
                                            <span>3.0</span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                        </div>
                                        <div class="views-inner">
                                            <span>300 views</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/universityDetail">
                        <div class="top-college-wrap1">
                            <div class="top-college-inner-wrap">
                                <div class="tc-upper-wrap1">
                                    <div class="tc-logo-section1">
                                        <img src="http://127.0.0.1:8000/./images/saral_img2.png">
                                    </div>
                                    <div class="tc-text-section1">
                                        <div class="tc-text-head">
                                            <span>Tribhuban University</span>
                                        </div>
                                        <div class="tc-text-sub-heads">
                                            <span><i class="fas fa-map-marker-alt"></i> Bhaktapur, Nepal</span>
                                            <span><i class="fas fa-user"></i> 210 views</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-lower-wrap1">
                                    <div class="tc-faculty-section1">
                                        <div>
                                            <span>No of college</span>
                                            <span>335</span>
                                        </div>
                                        <div>
                                            <span>No of Program</span>
                                            <span>117</span>
                                        </div>
                                    </div>
                                    <div class="tc-rating-section1">
                                        <div class="rating-inner">
                                            <span>3.0</span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                        </div>
                                        <div class="views-inner">
                                            <span>300 views</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/universityDetail">
                        <div class="top-college-wrap1">
                            <div class="top-college-inner-wrap">
                                <div class="tc-upper-wrap1">
                                    <div class="tc-logo-section1">
                                        <img src="http://127.0.0.1:8000/./images/saral_img2.png">
                                    </div>
                                    <div class="tc-text-section1">
                                        <div class="tc-text-head">
                                            <span>Tribhuban University</span>
                                        </div>
                                        <div class="tc-text-sub-heads">
                                            <span><i class="fas fa-map-marker-alt"></i> Bhaktapur, Nepal</span>
                                            <span><i class="fas fa-user"></i> 210 views</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-lower-wrap1">
                                    <div class="tc-faculty-section1">
                                        <div>
                                            <span>No of college</span>
                                            <span>335</span>
                                        </div>
                                        <div>
                                            <span>No of Program</span>
                                            <span>117</span>
                                        </div>
                                    </div>
                                    <div class="tc-rating-section1">
                                        <div class="rating-inner">
                                            <span>3.0</span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                        </div>
                                        <div class="views-inner">
                                            <span>300 views</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/universityDetail">
                        <div class="top-college-wrap1">
                            <div class="top-college-inner-wrap">
                                <div class="tc-upper-wrap1">
                                    <div class="tc-logo-section1">
                                        <img src="http://127.0.0.1:8000/./images/saral_img2.png">
                                    </div>
                                    <div class="tc-text-section1">
                                        <div class="tc-text-head">
                                            <span>Tribhuban University</span>
                                        </div>
                                        <div class="tc-text-sub-heads">
                                            <span><i class="fas fa-map-marker-alt"></i> Bhaktapur, Nepal</span>
                                            <span><i class="fas fa-user"></i> 210 views</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-lower-wrap1">
                                    <div class="tc-faculty-section1">
                                        <div>
                                            <span>No of college</span>
                                            <span>335</span>
                                        </div>
                                        <div>
                                            <span>No of Program</span>
                                            <span>117</span>
                                        </div>
                                    </div>
                                    <div class="tc-rating-section1">
                                        <div class="rating-inner">
                                            <span>3.0</span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star checked" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                            <span class="fa fa-star" aria-hidden="true"></span>
                                        </div>
                                        <div class="views-inner">
                                            <span>300 views</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="University-section3">
                    <div class="popular-sub-wrap">
                        <div class="popular-sub-heading">
                            <span>Top Colleges</span>
                        </div>
                        <div class="top-college-body">
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
                        <div class="top-college-body">
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
                        <div class="top-college-body">
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
                        <div class="top-college-body">
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
                        <div class="top-college-body">
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
                        <div class="top-college-body">
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
                        <div class="top-college-body">
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
                </div>
            </div>
        </div>
</div>
@endsection
