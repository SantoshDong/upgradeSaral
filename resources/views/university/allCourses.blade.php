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
                <span>All Courses</span>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
        <div class="row my-5 mx-md-2 mx-0">
            <div class="col-lg-3 col-md-4 col-12">
                <div class="row found-heading" style="box-shadow: 0px 0px 5px rgba(0,0,0,.5);">
                    <div class="col-12 fh_in_heading">
                        <span>Found</span>
                        <span>108 Colleges</span>
                        <span>SET DEFAULT</span>
                    </div>
                    <div class="col-12">
                        <div class="row dropdown-search-wwrap" style="background-color:#e5eaed;">
                            <div class="col-12 multiple-items" onclick="multipleView()">
                                <span>SELECTED FILTER</span>
                                <span style="float:right;">
                                    <span class="fcd-wrap">
                                        <i class="fas fa-chevron-down"></i>
                                    </span>
                                    <span class="fa-times-wrap">
                                        <i class="fas fa-times"></i>
                                    </span>
                                </span>
                            </div>
                            <div class="col-12 basic-multiple-wrap pt-2">
                                <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
                                </select>
                            </div>
                            <div class="col-12 basic-multiple-wrap1">
                                <ul>
                                    <li class="basic-multiple-search">
                                        <span><i class="fas fa-search" aria-hidden="true"></i></span>
                                        <span><input type="text" placeholder="Find Provinces"/></span>
                                    </li>
                                    <li class="basic-multiple-radio">
                                        <form action="/action_page.php">
                                            <input type="radio" id="provinces1" name="provinces" value="provinces1">
                                            <label>provinces 1</label><br>
                                            <input type="radio" id="provinces2" name="provinces" value="provinces2">
                                            <label>provinces 2</label><br>
                                            <input type="radio" id="provinces3" name="provinces" value="provinces3">
                                            <label>provinces 3</label><br>
                                            <input type="radio" id="provinces4" name="provinces" value="provinces4">
                                            <label >provinces 4</label><br>
                                            <input type="radio" id="provinces5" name="provinces" value="provinces5">
                                            <label>provinces 5</label><br>
                                            <input type="radio" id="provinces6" name="provinces" value="provinces6">
                                            <label>provinces 6</label><br>
                                            <input type="radio" id="provinces7" name="provinces" value="provinces7  ">
                                            <label>provinces 7</label><br>

                                        </form>
                                    </li>
                                </ul>
                            </div>
                            {{-- university --}}
                            <div class="col-12 multiple-items" onclick="multipleView2()">
                                <span>UNIVERSITY</span>
                                <span style="float:right;">
                                    <span class="fcd-wrap">
                                        <i class="fas fa-chevron-down"></i>
                                    </span>
                                    <span class="fa-times-wrap">
                                        <i class="fas fa-times"></i>
                                    </span>
                                </span>
                            </div>
                            <div class="col-12 basic-multiple-wrap2">
                                <ul>
                                    <form action="/action_page.php">
                                    <li class="basic-multiple-search">
                                        <span><i class="fas fa-search" aria-hidden="true"></i></span>
                                        <span><input type="text" placeholder="Find University" id="filterSearchy"/></span>
                                    </li>
                                    <li id="basic-multiple-radio" class="basic-multiple-radio">
                                        <a href="#" class="search-items">
                                            <input type="radio" id="TU" name="University" value="TU">
                                            <label class="mradio" for="TU">TU</label>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="PU" name="University" value="PU">
                                            <label class="mrdio" for="PU">PU</label>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="PDU" name="University" value="TDU">
                                            <label class="mrdio" for="PDU">PDU</label>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="KU" name="University" value="KU">
                                            <label for="KU">KU</label>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="FU" name="University" value="FU">
                                            <label for="FU">FU</label>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="LOU" name="University" value="LOU">
                                            <label for="LOU">LOU</label>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="AG" name="University" value="AG">
                                            <label for="AG">AG</label>
                                        </a>
                                     </li>
                                </form>
                                </ul>
                            </div>
                            {{-- stream --}}
                            <div class="col-12 multiple-items" onclick="multipleView3()">
                                <span>STREAM</span>
                                <span style="float:right;">
                                    <span class="fcd-wrap">
                                        <i class="fas fa-chevron-down"></i>
                                    </span>
                                    <span class="fa-times-wrap">
                                        <i class="fas fa-times"></i>
                                    </span>
                                </span>
                            </div>
                            <div class="col-12 basic-multiple-wrap3">
                                <ul>
                                    <form action="/action_page.php">
                                    <li class="basic-multiple-search">
                                        <span><i class="fas fa-search" aria-hidden="true"></i></span>
                                        <span><input type="text" placeholder="Find stream" id="filterSearchy2"/></span>
                                    </li>
                                    <li id="basic-multiple-radio2"  class="basic-multiple-radio">
                                        <a href="#" class="search-items">
                                            <input type="radio" id="management" name="stream" value="Management">
                                            <label for="management">Management</label>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="Arts" name="stream" value="Arts">
                                            <label for="Arts">Arts College</label>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="science" name="stream" value="science">
                                            <label for="science">Science</label>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="Engineering" name="stream" value="Emgineering">
                                            <label for="Engineering">Engineering</label>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="Education" name="stream" value="Education">
                                            <label for="Eduction">Education</label>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="Tech" name="stream" value="Technology">
                                            <label for="Tech">Technology</label>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="Medical" name="stream" value="Medical">
                                            <label for="medical">Medical</label>
                                        </a>
                                    </li>
                                    
                                </form>
                                </ul>
                            </div>
                            <div class="col-12 multiple-items" onclick="multipleView4()">
                                <span>LEVEL</span>
                                <span style="float:right;">
                                    <span class="fcd-wrap">
                                        <i class="fas fa-chevron-down"></i>
                                    </span>
                                    <span class="fa-times-wrap">
                                        <i class="fas fa-times"></i>
                                    </span>
                                </span>
                            </div>
                            <div class="col-12 basic-multiple-wrap4">
                                <ul>
                                    <form action="/action_page.php">
                                    <li class="basic-multiple-search">
                                        <span><i class="fas fa-search" aria-hidden="true"></i></span>
                                        <span><input type="text" placeholder="Find Level" id="filterSearchy3"/></span>
                                    </li>
                                    <li id="basic-multiple-radio3" class="basic-multiple-radio">
                                        <form action="/action_page.php">
                                        <a href="#" class="search-items">
                                            <input type="radio" id="see" name="level" value="see">
                                            <label for="see">SEE</label>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="intermediated" name="level" value="intermediate">
                                            <label for="intermediated">Intermediate</label>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="bachelor" name="level" value="bachelor">
                                            <label for="bachelor">Bachelor</label>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="master" name="level" value="master">
                                            <label for="master">master</label>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="postgraduate" name="level" value="postgraduate">
                                            <label for="postgraduate">Post Graduate</label>
                                        </a>
                                    </li>
                                </form>
                                </ul>
                            </div>
                            {{-- COURSE SECTION --}}
                            <div class="col-12 multiple-items" onclick="multipleView5()">
                                <span>Course</span>
                                <span style="float:right;">
                                    <span class="fcd-wrap">
                                        <i class="fas fa-chevron-down"></i>
                                    </span>
                                    <span class="fa-times-wrap">
                                        <i class="fas fa-times"></i>
                                    </span>
                                </span>
                            </div>
                            <div class="col-12 basic-multiple-wrap5">
                                <ul>
                                    <form action="/action_page.php">
                                    <li class="basic-multiple-search">
                                        <span><i class="fas fa-search" aria-hidden="true"></i></span>
                                        <span><input type="text" placeholder="Find District" id="filterSearchy4"/></span>
                                    </li>
                                    <li id="basic-multiple-radio4" class="basic-multiple-radio">
                                        <a href="#" class="search-items">
                                            <input type="radio" id="general" name="course" value="general">
                                            <label for="general">General BSc</label>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="bscenv" name="course" value="bacenv">
                                            <label for="bscenv">Bsc. Environment</label>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="physic" name="course" value="physic">
                                            <label for="physics">Physics</label>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="swe" name="course" value="swe">
                                            <label for="swe">Software Engineering</label>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="Env" name="course" value="Env">
                                            <label for="env">ENV</label>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="CBZ" name="course" value="CBZ">
                                            <label for="CBZ">CBZ</label>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="agriculture" name="course" value="agriculture">
                                            <label for="agriculture">Agriculture</label>
                                        </a>
                                    </li>
                                    </form>
                                </ul>
                            </div>
                            {{-- <div class="col-12 multiple-items" onclick="multipleView5()">
                                <span>COURSE</span>
                                <span style="float:right;"><i class="fas fa-chevron-down"></i></span>
                            </div>
                            <div class="col-12 basic-multiple-wrap5">
                                <ul>
                                    <form action="/action_page.php">
                                    <li class="basic-multiple-search">
                                        <span><i class="fas fa-search" aria-hidden="true"></i></span>
                                        <span><input type="text" placeholder="Find Level"/></span>
                                    </li>
                                    <li id="basic-multiple-radio4" class="basic-multiple-radio">
                                          <a href="#" class="search-items">
                                            <input type="radio" id="general" name="course" value="general">
                                            <label for="general">General BSc</label>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="bscenv" name="course" value="bacenv">
                                            <label for="bscenv">Bsc. Environment</label>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="physic" name="course" value="physic">
                                            <label for="physics">Physics</label>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="swe" name="course" value="swe">
                                            <label for="swe">Software Engineering</label>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="Env" name="course" value="Env">
                                            <label for="env">ENV</label>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="CBZ" name="course" value="CBZ">
                                            <label for="CBZ">CBZ</label>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="agriculture" name="course" value="agriculture">
                                            <label for="agriculture">Agriculture</label>
                                        </a>
                                    </li>
                                   </form>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-12">
                <div class="row provinces-middle my-3">
                    <div class="col-12">
                        <div style="float:right;">
                            <span>Sort By</span>
                            {{-- <img src="{{asset('images/college_logo1.png')}}"> --}}
                            <span>Reviews Rating</span>
                            <img src="{{asset('images/college_logo1.png')}}">
                            <span>BY Views</span>
                            <img src="{{asset('images/college_logo1.png')}}">
                        </div>
                    </div>
                </div>
                <div class="row allcourse-item-wrap my-3">
                    <div class="col-lg-4 col-md-6 col-12 mt-3">
                        <div class="courses-view">
                            <div class="courses-v-top">
                            <img src="{{asset('./images/book_img.jpeg')}}">
                            </div>
                            <div class="bottom-v-wrapper">
                                <div class="courses-v-detail">
                                    <span>Bachelor of computer Science and Technology(BSc. CSIT)</span>
                                </div>
                                <div class="courses-v-bottom">
                                    <span>Tribhuvan University</span>
                                    <span>College Offered 59</span>
                                    <span>200 views</span>
                                </div>
                                <div class="courses-vb-view text-center">
                                    <button class="btn btn-large">view Documnet</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-3">
                        <div class="courses-view">
                            <div class="courses-v-top">
                            <img src="{{asset('./images/book_img.jpeg')}}">
                            </div>
                            <div class="bottom-v-wrapper">
                                <div class="courses-v-detail">
                                    <span>Bachelor of computer Science and Technology(BSc. CSIT)</span>
                                </div>
                                <div class="courses-v-bottom">
                                    <span>Tribhuvan University</span>
                                    <span>College Offered 59</span>
                                    <span>200 views</span>
                                </div>
                                <div class="courses-vb-view text-center">
                                    <button class="btn btn-primary btn-large">view Documnet</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-3">
                        <div class="courses-view">
                            <div class="courses-v-top">
                            <img src="{{asset('./images/book_img.jpeg')}}">
                            </div>
                            <div class="bottom-v-wrapper">
                                <div class="courses-v-detail">
                                    <span>Bachelor of computer Science and Technology(BSc. CSIT)</span>
                                </div>
                                <div class="courses-v-bottom">
                                    <span>Tribhuvan University</span>
                                    <span>College Offered 59</span>
                                    <span>200 views</span>
                                </div>
                                <div class="courses-vb-view text-center">
                                    <button class="btn btn-primary btn-large">view Documnet</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-3">
                        <div class="courses-view">
                            <div class="courses-v-top">
                            <img src="{{asset('./images/book_img.jpeg')}}">
                            </div>
                            <div class="bottom-v-wrapper">
                                <div class="courses-v-detail">
                                    <span>Bachelor of computer Science and Technology(BSc. CSIT)</span>
                                </div>
                                <div class="courses-v-bottom">
                                    <span>Tribhuvan University</span>
                                    <span>College Offered 59</span>
                                    <span>200 views</span>
                                </div>
                                <div class="courses-vb-view text-center">
                                    <button class="btn btn-primary btn-large">view Documnet</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-3">
                        <div class="courses-view">
                            <div class="courses-v-top">
                            <img src="{{asset('./images/book_img.jpeg')}}">
                            </div>
                            <div class="bottom-v-wrapper">
                                <div class="courses-v-detail">
                                    <span>Bachelor of computer Science and Technology(BSc. CSIT)</span>
                                </div>
                                <div class="courses-v-bottom">
                                    <span>Tribhuvan University</span>
                                    <span>College Offered 59</span>
                                    <span>200 views</span>
                                </div>
                                <div class="courses-vb-view text-center">
                                    <button class="btn btn-primary btn-large">view Documnet</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-3">
                        <div class="courses-view">
                            <div class="courses-v-top">
                            <img src="{{asset('./images/book_img.jpeg')}}">
                            </div>
                            <div class="bottom-v-wrapper">
                                <div class="courses-v-detail">
                                    <span>Bachelor of computer Science and Technology(BSc. CSIT)</span>
                                </div>
                                <div class="courses-v-bottom">
                                    <span>Tribhuvan University</span>
                                    <span>College Offered 59</span>
                                    <span>200 views</span>
                                </div>
                                <div class="courses-vb-view text-center">
                                    <button class="btn btn-primary btn-large">view Documnet</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-3">
                        <div class="courses-view">
                            <div class="courses-v-top">
                            <img src="{{asset('./images/book_img.jpeg')}}">
                            </div>
                            <div class="bottom-v-wrapper">
                                <div class="courses-v-detail">
                                    <span>Bachelor of computer Science and Technology(BSc. CSIT)</span>
                                </div>
                                <div class="courses-v-bottom">
                                    <span>Tribhuvan University</span>
                                    <span>College Offered 59</span>
                                    <span>200 views</span>
                                </div>
                                <div class="courses-vb-view text-center">
                                    <button class="btn btn-primary btn-large">view Documnet</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-3">
                        <div class="courses-view">
                            <div class="courses-v-top">
                            <img src="{{asset('./images/book_img.jpeg')}}">
                            </div>
                            <div class="bottom-v-wrapper">
                                <div class="courses-v-detail">
                                    <span>Bachelor of computer Science and Technology(BSc. CSIT)</span>
                                </div>
                                <div class="courses-v-bottom">
                                    <span>Tribhuvan University</span>
                                    <span>College Offered 59</span>
                                    <span>200 views</span>
                                </div>
                                <div class="courses-vb-view text-center">
                                    <button class="btn btn-primary btn-large">view Documnet</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-3">
                        <div class="courses-view">
                            <div class="courses-v-top">
                            <img src="{{asset('./images/book_img.jpeg')}}">
                            </div>
                            <div class="bottom-v-wrapper">
                                <div class="courses-v-detail">
                                    <span>Bachelor of computer Science and Technology(BSc. CSIT)</span>
                                </div>
                                <div class="courses-v-bottom">
                                    <span>Tribhuvan University</span>
                                    <span>College Offered 59</span>
                                    <span>200 views</span>
                                </div>
                                <div class="courses-vb-view text-center">
                                    <button class="btn btn-primary btn-large">view Documnet</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
@endsection
