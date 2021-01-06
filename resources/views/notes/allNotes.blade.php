@extends('fontend.index')
@section('contents')

<div class="container-fluid" style="background-color: #e9ecef;padding-left:0px;padding-right:0px;">
    <div class="row __coll-des-view">
        <div class="col-12">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Notes</li>
            </ul>
        </div>
    </div>
</div>
<div class="container-fluid" style="background-color:blue;">
    <div class="container">
        <div class="row searchFilter-top-heading text-center py-3">
            <div class="col-12">
                <span>All Notes</span>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
        <div class="row my-3">
           <div class="container-fluid">
            <div class="row my-3 mx-3">
                <div class="col-12 multiple-items-wrap">
                    {{-- university section  --}}
                        <div class="multiple-items">
                            <span id="top-option">Select University/Board</span>
                            <span style="float:right;"><i class="fas fa-chevron-down"></i></span>
                            <div class="basic-multiple-wrap bmw">
                                <ul>
                                    <li class="basic-multiple-search">
                                        <span><i class="fas fa-search" aria-hidden="true"></i></span>
                                        <span><input type="text" placeholder="Find University" id="filterSearchy"/></span>
                                    </li>
                                    <li id="basic-multiple-radio" class="basic-multiple-radio">
                                        <form id="mainForm" name="mainForm">
                                            <a href="#" class="search-items">
                                                <input type="radio" id="TU" name="University" value="TU">
                                                <label class="mradio" for="TU">TU</label>
                                            </a>
                                            <a href="#" class="search-items">
                                                <input type="radio" id="PU" name="University" value="PU">
                                                <label class="mrdio" for="PU">PU</label>
                                            </a>
                                            <a href="#" class="search-items">
                                                <input type="radio" id="PDU" name="University" value="PDU">
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
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- level section --}}
                        <div class="multiple-items">
                            <span id="top-option1">Select Level</span>
                            <span style="float:right;"><i class="fas fa-chevron-down"></i></span>
                            <div class="basic-multiple-wrap2 bmw1">
                                <ul>
                                    <li class="basic-multiple-search">
                                        <span><i class="fas fa-search" aria-hidden="true"></i></span>
                                        <span><input type="text" placeholder="Find level" id="filterSearchy2"/></span>
                                    </li>
                                    <li  id="basic-multiple-radio2"  class="basic-multiple-radio">
                                        <form id="mainForm2" name="mainForm2">
                                            <a href="#" class="search-items">
                                                <input type="radio" id="see" name="level" value="SEE">
                                                <label for="see">SEE</label><br>
                                            </a>
                                            <a href="#" class="search-items">
                                                <input type="radio" id="intermediated" name="level" value="Intermediate">
                                                <label for="intermediated">Intermediate</label><br>
                                            </a>
                                            <a href="#" class="search-items">
                                                <input type="radio" id="bachelor" name="level" value="Bachelor">
                                                <label for="bachelor">Bachelor</label><br>
                                            </a>
                                            <a href="#" class="search-items">
                                                <input type="radio" id="master" name="level" value="Master">
                                                <label for="master">Master</label><br>
                                            </a>
                                            <a href="#" class="search-items">
                                                <input type="radio" id="postgraduate" name="level" value="Post Graduate">
                                                <label for="postgraduate">Post Graduate</label><br>
                                            </a>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- stream section --}}
                        <div class="multiple-items">
                            <span id="top-option2">
                                Select Stream
                            </span>
                            <span style="float:right;"><i class="fas fa-chevron-down"></i></span>
                            <div class="basic-multiple-wrap3 bmw2">
                                <ul>
                                    <li class="basic-multiple-search">
                                        <span><i class="fas fa-search" aria-hidden="true"></i></span>
                                        <span><input type="text" placeholder="Find Stream" id="filterSearchy3"/></span>
                                    </li>
                                    <li id="basic-multiple-radio3" class="basic-multiple-radio">
                                        <form id="mainForm3" name="mainForm3">
                                        <a href="#" class="search-items">
                                            <input type="radio" id="management" name="stream" value="Management">
                                            <label for="management">Management</label><br>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="Arts" name="stream" value="Arts College">
                                            <label for="Arts">Arts College</label><br>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="science" name="stream" value="science">
                                            <label for="science">Science</label><br>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="Engineering" name="stream" value="Engineering">
                                            <label for="Engineering">Engineering</label><br>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="Education" name="stream" value="Education">
                                            <label for="Education">Education</label><br>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="Technology" name="stream" value="Technology">
                                            <label for="Technology">Technology</label><br>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="Medical" name="stream" value="Medical">
                                            <label for="Medical">Medical</label><br>
                                        </a>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- select course section --}}
                        <div class="multiple-items">
                            <span id="top-option3">Select Course</span>
                            <span style="float:right;"><i class="fas fa-chevron-down"></i></span>
                            <div class="basic-multiple-wrap4 bmw3">
                                <ul>
                                    <li class="basic-multiple-search">
                                        <span><i class="fas fa-search" aria-hidden="true"></i></span>
                                        <span><input type="text" placeholder="Find Course"  id="filterSearchy4"></span>
                                    </li>
                                    <li id="basic-multiple-radio4" class="basic-multiple-radio">
                                    <form id="mainForm4" name="mainForm4">
                                        <a href="#" class="search-items">
                                            <input type="radio" id="general" name="course" value="General BSc">
                                            <label for="general">General BSc</label><br>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="bscenv" name="course" value="Bsc. Environment">
                                            <label for="bscenv">Bsc. Environment</label><br>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="physic" name="course" value="physics">
                                            <label for="physic">Physics</label><br>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="swe" name="course" value="Software Engineering">
                                            <label for="swe">Software Engineering</label><br>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="Env" name="course" value="Env">
                                            <label for="Env">ENV</label><br>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="CBZ" name="course" value="CBZ">
                                            <label for="CBZ">CBZ</label><br>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="agriculture" name="course" value="agriculture">
                                            <label for="agriculture">Agriculture</label><br>
                                        </a>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- select year/semester --}}
                        <div class="multiple-items">
                            <span id="top-option4">Select Semester/Year</span>
                            <span style="float:right;"><i class="fas fa-chevron-down"></i></span>
                            <div class="basic-multiple-wrap5 bmw4">
                                <ul>
                                    <li class="basic-multiple-search">
                                        <span><i class="fas fa-search" aria-hidden="true"></i></span>
                                        <span><input type="text" placeholder="Find Semester" id="filterSearchy5"/></span>
                                    </li>
                                    <li id="basic-multiple-radio5" class="basic-multiple-radio">
                                        <form id="mainForm5" name="mainForm5">
                                        <a href="#" class="search-items">
                                            <input type="radio" id="first" name="semester" value="first Semester">
                                            <label for="first">First Semester</label><br>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="second" name="semester" value="second Semester">
                                            <label for="second">Second Semester</label><br>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="third" name="semester" value="third Semester">
                                            <label for="third">Third Semester</label><br>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="fourth" name="semester" value="fourth Semester">
                                            <label for="fourth">Fourth Semester</label><br>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="fifth" name="semester" value="fifth Semester">
                                            <label for="fifth">Fifth Semester</label><br>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="sixth" name="semester" value="sixth Semester">
                                            <label for="sixth">Sixth Semester</label><br>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="seventh" name="semester" value="seventh Semester">
                                            <label for="seventh">Seventh Semester</label><br>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="eight" name="semester" value="eight Semester">
                                            <label for="eight">Eignth Semester</label><br>
                                        </a>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- <div class="basic-multiple-wrap bmw">
                            <ul>
                                <li class="basic-multiple-search">
                                    <span><i class="fas fa-search" aria-hidden="true"></i></span>
                                    <span><input type="text" placeholder="Find University"></span>
                                </li>
                                <li class="basic-multiple-radio">
                                    <form action="/action_page.php">
                                        <input type="radio" id="TU" name="University" value="TU">
                                        <label>TU</label><br>
                                        <input type="radio" id="PU" name="University" value="PU">
                                        <label>PU</label><br>
                                        <input type="radio" id="PDU" name="University" value="TDU">
                                        <label>PDU</label><br>
                                        <input type="radio" id="KU" name="University" value="KU">
                                        <label>KU</label><br>
                                        <input type="radio" id="FU" name="University" value="FU">
                                        <label>FU</label><br>
                                        <input type="radio" id="LOU" name="University" value="LOU">
                                        <label>LOU</label><br>
                                        <input type="radio" id="AG" name="University" value="AG">
                                        <label>AG</label><br>
                                        
                                    </form>
                                </li>
                            </ul>
                        </div> --}}   
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" style="background-color:#efefef">
        <div class="row py-md-4 py-2 mx-md-2 mx-2">
            <div class="col-lg-9 col-md-8 col-12">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="notices-whole-wrap">
                            <div style="background-color:#d80002;"></div>
                            <div class="notices-top-img">
                            <img src="{{asset('./images/cprogramming.png')}}">
                            </div>
                            <div style="background-color:#003ea3;"></div>
                            <div class="notices-mid-wrap">
                                <div class="notices-mid-detail">
                                 <span>C-Program(CSC-101)</span>
                                 <span>Tribhuvan University</span>
                                 <span>BSc. CSIT</span>
                                </div>
                                <div class="notices-end-detail">
                                    <span>First Semester</span>
                                    <span>
                                        <img src="http://127.0.0.1:8000/images/college_logo1.png">
                                        200 views
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="notices-whole-wrap">
                            <div style="background-color:#d80002;"></div>
                            <div class="notices-top-img">
                            <img src="{{asset('./images/cprogramming.png')}}">
                            </div>
                            <div style="background-color:#003ea3;"></div>
                            <div class="notices-mid-wrap">
                                <div class="notices-mid-detail">
                                 <span>C-Program(CSC-101)</span>
                                 <span>Tribhuvan University</span>
                                 <span>BSc. CSIT</span>
                                </div>
                                <div class="notices-end-detail">
                                    <span>First Semester</span>
                                    <span>
                                        <img src="http://127.0.0.1:8000/images/college_logo1.png">
                                        200 views
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="notices-whole-wrap">
                            <div style="background-color:#d80002;"></div>
                            <div class="notices-top-img">
                            <img src="{{asset('./images/cprogramming.png')}}">
                            </div>
                            <div style="background-color:#003ea3;"></div>
                            <div class="notices-mid-wrap">
                                <div class="notices-mid-detail">
                                 <span>C-Program(CSC-101)</span>
                                 <span>Tribhuvan University</span>
                                 <span>BSc. CSIT</span>
                                </div>
                                <div class="notices-end-detail">
                                    <span>First Semester</span>
                                    <span>
                                        <img src="http://127.0.0.1:8000/images/college_logo1.png">
                                        200 views
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="notices-whole-wrap">
                            <div style="background-color:#d80002;"></div>
                            <div class="notices-top-img">
                            <img src="{{asset('./images/cprogramming.png')}}">
                            </div>
                            <div style="background-color:#003ea3;"></div>
                            <div class="notices-mid-wrap">
                                <div class="notices-mid-detail">
                                 <span>C-Program(CSC-101)</span>
                                 <span>Tribhuvan University</span>
                                 <span>BSc. CSIT</span>
                                </div>
                                <div class="notices-end-detail">
                                    <span>First Semester</span>
                                    <span>
                                        <img src="http://127.0.0.1:8000/images/college_logo1.png">
                                        200 views
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="notices-whole-wrap">
                            <div style="background-color:#d80002;"></div>
                            <div class="notices-top-img">
                            <img src="{{asset('./images/cprogramming.png')}}">
                            </div>
                            <div style="background-color:#003ea3;"></div>
                            <div class="notices-mid-wrap">
                                <div class="notices-mid-detail">
                                 <span>C-Program(CSC-101)</span>
                                 <span>Tribhuvan University</span>
                                 <span>BSc. CSIT</span>
                                </div>
                                <div class="notices-end-detail">
                                    <span>First Semester</span>
                                    <span>
                                        <img src="http://127.0.0.1:8000/images/college_logo1.png">
                                        200 views
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="notices-whole-wrap">
                            <div style="background-color:#d80002;"></div>
                            <div class="notices-top-img">
                            <img src="{{asset('./images/cprogramming.png')}}">
                            </div>
                            <div style="background-color:#003ea3;"></div>
                            <div class="notices-mid-wrap">
                                <div class="notices-mid-detail">
                                 <span>C-Program(CSC-101)</span>
                                 <span>Tribhuvan University</span>
                                 <span>BSc. CSIT</span>
                                </div>
                                <div class="notices-end-detail">
                                    <span>First Semester</span>
                                    <span>
                                        <img src="http://127.0.0.1:8000/images/college_logo1.png">
                                        200 views
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="notices-whole-wrap">
                            <div style="background-color:#d80002;"></div>
                            <div class="notices-top-img">
                            <img src="{{asset('./images/cprogramming.png')}}">
                            </div>
                            <div style="background-color:#003ea3;"></div>
                            <div class="notices-mid-wrap">
                                <div class="notices-mid-detail">
                                 <span>C-Program(CSC-101)</span>
                                 <span>Tribhuvan University</span>
                                 <span>BSc. CSIT</span>
                                </div>
                                <div class="notices-end-detail">
                                    <span>First Semester</span>
                                    <span>
                                        <img src="http://127.0.0.1:8000/images/college_logo1.png">
                                        200 views
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="notices-whole-wrap">
                            <div style="background-color:#d80002;"></div>
                            <div class="notices-top-img">
                            <img src="{{asset('./images/cprogramming.png')}}">
                            </div>
                            <div style="background-color:#003ea3;"></div>
                            <div class="notices-mid-wrap">
                                <div class="notices-mid-detail">
                                 <span>C-Program(CSC-101)</span>
                                 <span>Tribhuvan University</span>
                                 <span>BSc. CSIT</span>
                                </div>
                                <div class="notices-end-detail">
                                    <span>First Semester</span>
                                    <span>
                                        <img src="http://127.0.0.1:8000/images/college_logo1.png">
                                        200 views
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="notices-whole-wrap">
                            <div style="background-color:#d80002;"></div>
                            <div class="notices-top-img">
                            <img src="{{asset('./images/cprogramming.png')}}">
                            </div>
                            <div style="background-color:#003ea3;"></div>
                            <div class="notices-mid-wrap">
                                <div class="notices-mid-detail">
                                 <span>C-Program(CSC-101)</span>
                                 <span>Tribhuvan University</span>
                                 <span>BSc. CSIT</span>
                                </div>
                                <div class="notices-end-detail">
                                    <span>First Semester</span>
                                    <span>
                                        <img src="http://127.0.0.1:8000/images/college_logo1.png">
                                        200 views
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="notices-whole-wrap">
                            <div style="background-color:#d80002;"></div>
                            <div class="notices-top-img">
                            <img src="{{asset('./images/cprogramming.png')}}">
                            </div>
                            <div style="background-color:#003ea3;"></div>
                            <div class="notices-mid-wrap">
                                <div class="notices-mid-detail">
                                 <span>C-Program(CSC-101)</span>
                                 <span>Tribhuvan University</span>
                                 <span>BSc. CSIT</span>
                                </div>
                                <div class="notices-end-detail">
                                    <span>First Semester</span>
                                    <span>
                                        <img src="http://127.0.0.1:8000/images/college_logo1.png">
                                        200 views
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="notices-whole-wrap">
                            <div style="background-color:#d80002;"></div>
                            <div class="notices-top-img">
                            <img src="{{asset('./images/cprogramming.png')}}">
                            </div>
                            <div style="background-color:#003ea3;"></div>
                            <div class="notices-mid-wrap">
                                <div class="notices-mid-detail">
                                 <span>C-Program(CSC-101)</span>
                                 <span>Tribhuvan University</span>
                                 <span>BSc. CSIT</span>
                                </div>
                                <div class="notices-end-detail">
                                    <span>First Semester</span>
                                    <span>
                                        <img src="http://127.0.0.1:8000/images/college_logo1.png">
                                        200 views
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="notices-whole-wrap">
                            <div style="background-color:#d80002;"></div>
                            <div class="notices-top-img">
                            <img src="{{asset('./images/cprogramming.png')}}">
                            </div>
                            <div style="background-color:#003ea3;"></div>
                            <div class="notices-mid-wrap">
                                <div class="notices-mid-detail">
                                 <span>C-Program(CSC-101)</span>
                                 <span>Tribhuvan University</span>
                                 <span>BSc. CSIT</span>
                                </div>
                                <div class="notices-end-detail">
                                    <span>First Semester</span>
                                    <span>
                                        <img src="http://127.0.0.1:8000/images/college_logo1.png">
                                        200 views
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12">
                <div class="row">
                    <div class="col-12 notes-ph text-center">
                        <span>Popular Subject</span>
                    </div>
                    <div class="col-12" style="background-color:#ffffff;">
                        <div class="notes-ps-wrap">
                            <div class="notes-ps-img">
                                <img src="http://127.0.0.1:8000/images/college_logo1.png">
                            </div>
                            <div class="notes-ps-detail">
                                <span>Bachelors of Science in Computer Science and Information Technology  (BSc. CSIT)</span>
                                <span>Poknera University</span>
                            </div>
                        </div>
                        <div class="notes-ps-wrap">
                            <div class="notes-ps-img">
                                <img src="http://127.0.0.1:8000/images/college_logo1.png">
                            </div>
                            <div class="notes-ps-detail">
                                <span>Bachelors of Science in Computer Science and Information Technology  (BSc. CSIT)</span>
                                <span>Poknera University</span>
                            </div>
                        </div>
                        <div class="notes-ps-wrap">
                            <div class="notes-ps-img">
                                <img src="http://127.0.0.1:8000/images/college_logo1.png">
                            </div>
                            <div class="notes-ps-detail">
                                <span>Bachelors of Science in Computer Science and Information Technology  (BSc. CSIT)</span>
                                <span>Poknera University</span>
                            </div>
                        </div>
                        <div class="notes-ps-wrap">
                            <div class="notes-ps-img">
                                <img src="http://127.0.0.1:8000/images/college_logo1.png">
                            </div>
                            <div class="notes-ps-detail">
                                <span>Bachelors of Science in Computer Science and Information Technology  (BSc. CSIT)</span>
                                <span>Poknera University</span>
                            </div>
                        </div>
                        <div class="notes-ps-wrap">
                            <div class="notes-ps-img">
                                <img src="http://127.0.0.1:8000/images/college_logo1.png">
                            </div>
                            <div class="notes-ps-detail">
                                <span>Bachelors of Science in Computer Science and Information Technology  (BSc. CSIT)</span>
                                <span>Poknera University</span>
                            </div>
                        </div>
                        <div class="notes-ps-wrap">
                            <div class="notes-ps-img">
                                <img src="http://127.0.0.1:8000/images/college_logo1.png">
                            </div>
                            <div class="notes-ps-detail">
                                <span>Bachelors of Science in Computer Science and Information Technology  (BSc. CSIT)</span>
                                <span>Poknera University</span>
                            </div>
                        </div>
                        <div class="notes-ps-wrap">
                            <div class="notes-ps-img">
                                <img src="http://127.0.0.1:8000/images/college_logo1.png">
                            </div>
                            <div class="notes-ps-detail">
                                <span>Bachelors of Science in Computer Science and Information Technology  (BSc. CSIT)</span>
                                <span>Poknera University</span>
                            </div>
                        </div>
                        <div class="notes-ps-wrap">
                            <div class="notes-ps-img">
                                <img src="http://127.0.0.1:8000/images/college_logo1.png">
                            </div>
                            <div class="notes-ps-detail">
                                <span>Bachelors of Science in Computer Science and Information Technology  (BSc. CSIT)</span>
                                <span>Poknera University</span>
                            </div>
                        </div>
                        <div class="notes-ps-wrap">
                            <div class="notes-ps-img">
                                <img src="http://127.0.0.1:8000/images/college_logo1.png">
                            </div>
                            <div class="notes-ps-detail">
                                <span>Bachelors of Science in Computer Science and Information Technology  (BSc. CSIT)</span>
                                <span>Poknera University</span>
                            </div>
                        </div>
                        <div class="notes-ps-wrap">
                            <div class="notes-ps-img">
                                <img src="http://127.0.0.1:8000/images/college_logo1.png">
                            </div>
                            <div class="notes-ps-detail">
                                <span>Bachelors of Science in Computer Science and Information Technology  (BSc. CSIT)</span>
                                <span>Poknera University</span>
                            </div>
                        </div>
                        <div class="notes-ps-wrap">
                            <div class="notes-ps-img">
                                <img src="http://127.0.0.1:8000/images/college_logo1.png">
                            </div>
                            <div class="notes-ps-detail">
                                <span>Bachelors of Science in Computer Science and Information Technology  (BSc. CSIT)</span>
                                <span>Poknera University</span>
                            </div>
                        </div>
                        <div class="notes-ps-wrap">
                            <div class="notes-ps-img">
                                <img src="http://127.0.0.1:8000/images/college_logo1.png">
                            </div>
                            <div class="notes-ps-detail">
                                <span>Bachelors of Science in Computer Science and Information Technology  (BSc. CSIT)</span>
                                <span>Poknera University</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
@endsection
