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
<div class="container-fluid" style="background-color:#0b46a7;">
    <div class="container">
        <div class="row searchFilter-top-heading text-center py-3">
            <div class="col-12">
                <span>List of Top College in Nepal Based on 2020 Ranking</span>
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
                            {{-- district --}}
                            <div class="col-12 multiple-items" onclick="multipleView4()">
                                <span>DISTRICT</span>
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
                                        <span><input type="text" placeholder="Find District" id="filterSearchy3"/></span>
                                    </li>
                                    <li id="basic-multiple-radio3" class="basic-multiple-radio">
                                        <a href="#" class="search-items">
                                            <input type="radio" id="Kailali" name="district" value="Kailali">
                                            <label >Kailali</label>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="Doti" name="district" value="Doti">
                                            <label >Doti</label>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="achham" name="district" value="achham">
                                            <label >Achham</label>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="Kanchanpur" name="district" value="Kanchanpur">
                                            <label >Kanchanpur</label>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="Kailali" name="district" value="Kailali">
                                            <label >Kailali</label>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="Kailali" name="district" value="Kailali">
                                            <label >Kailali</label>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="Kailali" name="district" value="Kailali">
                                            <label >Kailali</label>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="Kailali" name="district" value="Kailali">
                                            <label >Kailali</label>
                                        </a>
                                    </li>
                                    </form>
                                </ul>
                            </div>
                            {{-- types of College --}}
                            <div class="col-12 multiple-items" onclick="multipleView5()">
                                <span>TYPES OF COLLEGES</span>
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
                                            <input type="radio" id="public" name="colleges" value="public">
                                            <label for="public">Public</label>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="private" name="colleges" value="private">
                                            <label for="private">private</label>
                                        </a>
                                        <a href="#" class="search-items">
                                            <input type="radio" id="community" name="colleges" value="community">
                                            <label for="community">Achham</label>
                                        </a>
                                    </li>
                                    </form>
                                </ul>
                            </div>
                            {{-- 
                            <div class="col-12 multiple-items" onclick="multipleView4()">
                                <span>DISTRICT</span>
                                <span style="float:right;"><i class="fas fa-chevron-down"></i></span>
                            </div>
                            <div class="col-12 basic-multiple-wrap4">
                                <ul>
                                    <li class="basic-multiple-search">
                                        <span><i class="fas fa-search" aria-hidden="true"></i></span>
                                        <span><input type="text" placeholder="Find District"/></span>
                                    </li>
                                    <li class="basic-multiple-radio">
                                        <form action="/action_page.php">
                                            <input type="radio" id="Kailali" name="district" value="Kailali">
                                            <label >Kailali</label><br>
                                            <input type="radio" id="Doti" name="district" value="Doti">
                                            <label >Doti</label><br>
                                            <input type="radio" id="achham" name="district" value="achham">
                                            <label >Achham</label><br>
                                            <input type="radio" id="Kanchanpur" name="district" value="Kanchanpur">
                                            <label >Kanchanpur</label><br>
                                            <input type="radio" id="Kailali" name="district" value="Kailali">
                                            <label >Kailali</label><br>
                                            <input type="radio" id="Kailali" name="district" value="Kailali">
                                            <label >Kailali</label><br>
                                            <input type="radio" id="Kailali" name="district" value="Kailali">
                                            <label >Kailali</label><br>
                                            <input type="radio" id="Kailali" name="district" value="Kailali">
                                            <label >Kailali</label><br>

                                        </form>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 multiple-items" onclick="multipleView5()">
                                <span>TYPES OF COLLEGES</span>
                                <span style="float:right;"><i class="fas fa-chevron-down"></i></span>
                            </div>
                            <div class="col-12 basic-multiple-wrap5">
                                <ul>
                                    <li class="basic-multiple-search">
                                    </li>
                                    <li class="basic-multiple-radio">
                                        <form action="/action_page.php">
                                            <input type="radio" id="public" name="colleges" value="public">
                                            <label >Public</label><br>
                                            <input type="radio" id="public" name="colleges" value="public">
                                            <label >Private</label><br>
                                            <input type="radio" id="public" name="colleges" value="public">
                                            <label >Community</label><br>
                                        </form>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="row my-5" style="box-shadow: 0px 0px 5px rgba(0,0,0,.5);background-color:#ffffff;">
                    <div class="col-12 notification-heading">
                        <span>NOTIFICATIONS</span>
                        <span style="float:right;">
                            <i class="fas fa-bell" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="col-12 my-1">
                        <div class="notification-wrap">
                            <div class="notification-left">
                                <img src="{{asset('images/college_logo1.png')}}">
                            </div>
                            <div class="notification-right">
                                <span>Admission open in Amrit campus</span>
                                <span>Admission open in Amrit Science campus has been open fifth semester..</span>
                            </div>
                            <div class="notification-read-more">
                                <span>Read More</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-1">
                        <div class="notification-wrap">
                            <div class="notification-left">
                                <img src="{{asset('images/college_logo1.png')}}">
                            </div>
                            <div class="notification-right">
                                <span>Admission open in Amrit campus</span>
                                <span>Admission open in Amrit Science campus has been open fifth semester..</span>
                            </div>
                            <div class="notification-read-more">
                                <span>Read More</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-1">
                        <div class="notification-wrap">
                            <div class="notification-left">
                                <img src="{{asset('images/college_logo1.png')}}">
                            </div>
                            <div class="notification-right">
                                <span>Admission open in Amrit campus</span>
                                <span>Admission open in Amrit Science campus has been open fifth semester..</span>
                            </div>
                            <div class="notification-read-more">
                                <span>Read More</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-1">
                        <div class="notification-wrap">
                            <div class="notification-left">
                                <img src="{{asset('images/college_logo1.png')}}">
                            </div>
                            <div class="notification-right">
                                <span>Admission open in Amrit campus</span>
                                <span>Admission open in Amrit Science campus has been open fifth semester..</span>
                            </div>
                            <div class="notification-read-more">
                                <span>Read More</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-1">
                        <div class="notification-wrap">
                            <div class="notification-left">
                                <img src="{{asset('images/college_logo1.png')}}">
                            </div>
                            <div class="notification-right">
                                <span>Admission open in Amrit campus</span>
                                <span>Admission open in Amrit Science campus has been open fifth semester..</span>
                            </div>
                            <div class="notification-read-more">
                                <span>Read More</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-12">
                <div class="row provinces-tabs">
                    <div class="col-12 ">
                        <div class="tabs_wrapper">
                            <div class="tablinks-first">
                                <span>Select State</span>
                             </div>
                            <div class="tablinks">
                               <span>provinces 1</span>
                            </div>
                            <div class="tablinks">
                             <span> provinces 2</span>
                           </div>
                           <div class="tablinks">
                              <span>provinces 3</span>
                           </div>
                            <div class="tablinks">
                            <span> provinces 4</span>
                            </div>
                            <div class="tablinks">
                                <span>provinces 5</span>
                            </div>
                            <div class="tablinks">
                            <span>provinces 6</span>
                            </div>
                            <div class="tablinks">
                                <span>provinces 7</span>
                            </div>
                        </div>
                    </div>
                </div>
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
                <div class="row provinces-panel mt-5">
                    <div class="col-12 p-0">
                        <div class="content_wrapper">
                            <div class="panel panel1 active" id="panel1">
                                <div class="p-campus-whole-wrap">
                                    <div class="p-campus-wrap">
                                        <div class="p-campus-img-section">
                                            <img src="{{asset('images/book_img.jpeg')}}">    
                                        </div>
                                        <div class="p-campus-detail-section">
                                            <div class="pc-detail-left">
                                                <img src="{{asset('images/college_logo1.png')}}">    
                                            </div>
                                            <div class="pc-detail-right">
                                                <div class="pc-dr-heading">
                                                    <span>Amrit Science Campus</span>
                                                </div>
                                                <div class="pc-dr-body">
                                                    <span><i class="fas fa-map-marker"></i> Bhaktapur, Nepal</span>
                                                    <span><i class="fas fa-eye"></i> 200 views</span>
                                                    <span><i class="fas fa-user" aria-hidden="true"></i> 01-55555</span>
                                                    <span><i class="fas fa-file-signature"></i> No of Programs 117</span>
                                                    <span><i class="fab fa-chrome"></i> WWW.ascol.edu.np</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pc-rating-section ">
                                                <div>
                                                    <span>2.4</span>
                                                </div>          
                                                 <div>
                                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                                        <span class="fa fa-star" aria-hidden="true"></span>
                                                        <span class="fa fa-star" aria-hidden="true"></span>
                                                 </div>
                                                 <div>
                                                    <span>2000 reviews</span>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="p-campus-wrap">
                                        <div class="p-campus-img-section">
                                            <img src="{{asset('images/book_img.jpeg')}}">    
                                        </div>
                                        <div class="p-campus-detail-section">
                                            <div class="pc-detail-left">
                                                <img src="{{asset('images/college_logo1.png')}}">    
                                            </div>
                                            <div class="pc-detail-right">
                                                <div class="pc-dr-heading">
                                                    <span>Amrit Science Campus</span>
                                                </div>
                                                <div class="pc-dr-body">
                                                    <span><i class="fas fa-map-marker"></i> Bhaktapur, Nepal</span>
                                                    <span><i class="fas fa-eye"></i> 200 views</span>
                                                    <span><i class="fas fa-user" aria-hidden="true"></i> 01-55555</span>
                                                    <span><i class="fas fa-file-signature"></i> No of Programs 117</span>
                                                    <span><i class="fab fa-chrome"></i> WWW.ascol.edu.np</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pc-rating-section ">
                                                <div>
                                                    <span>2.4</span>
                                                </div>          
                                                 <div>
                                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                                        <span class="fa fa-star" aria-hidden="true"></span>
                                                        <span class="fa fa-star" aria-hidden="true"></span>
                                                 </div>
                                                 <div>
                                                    <span>2000 reviews</span>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="p-campus-wrap">
                                        <div class="p-campus-img-section">
                                            <img src="{{asset('images/book_img.jpeg')}}">    
                                        </div>
                                        <div class="p-campus-detail-section">
                                            <div class="pc-detail-left">
                                                <img src="{{asset('images/college_logo1.png')}}">    
                                            </div>
                                            <div class="pc-detail-right">
                                                <div class="pc-dr-heading">
                                                    <span>Amrit Science Campus</span>
                                                </div>
                                                <div class="pc-dr-body">
                                                    <span><i class="fas fa-map-marker"></i> Bhaktapur, Nepal</span>
                                                    <span><i class="fas fa-eye"></i> 200 views</span>
                                                    <span><i class="fas fa-user" aria-hidden="true"></i> 01-55555</span>
                                                    <span><i class="fas fa-file-signature"></i> No of Programs 117</span>
                                                    <span><i class="fab fa-chrome"></i> WWW.ascol.edu.np</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pc-rating-section ">
                                                <div>
                                                    <span>2.4</span>
                                                </div>          
                                                 <div>
                                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                                        <span class="fa fa-star" aria-hidden="true"></span>
                                                        <span class="fa fa-star" aria-hidden="true"></span>
                                                 </div>
                                                 <div>
                                                    <span>2000 reviews</span>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="p-campus-wrap">
                                        <div class="p-campus-img-section">
                                            <img src="{{asset('images/book_img.jpeg')}}">    
                                        </div>
                                        <div class="p-campus-detail-section">
                                            <div class="pc-detail-left">
                                                <img src="{{asset('images/college_logo1.png')}}">    
                                            </div>
                                            <div class="pc-detail-right">
                                                <div class="pc-dr-heading">
                                                    <span>Amrit Science Campus</span>
                                                </div>
                                                <div class="pc-dr-body">
                                                    <span><i class="fas fa-map-marker"></i> Bhaktapur, Nepal</span>
                                                    <span><i class="fas fa-eye"></i> 200 views</span>
                                                    <span><i class="fas fa-user" aria-hidden="true"></i> 01-55555</span>
                                                    <span><i class="fas fa-file-signature"></i> No of Programs 117</span>
                                                    <span><i class="fab fa-chrome"></i> WWW.ascol.edu.np</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pc-rating-section ">
                                                <div>
                                                    <span>2.4</span>
                                                </div>          
                                                 <div>
                                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                                        <span class="fa fa-star" aria-hidden="true"></span>
                                                        <span class="fa fa-star" aria-hidden="true"></span>
                                                 </div>
                                                 <div>
                                                    <span>2000 reviews</span>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="p-campus-wrap">
                                        <div class="p-campus-img-section">
                                            <img src="{{asset('images/book_img.jpeg')}}">    
                                        </div>
                                        <div class="p-campus-detail-section">
                                            <div class="pc-detail-left">
                                                <img src="{{asset('images/college_logo1.png')}}">    
                                            </div>
                                            <div class="pc-detail-right">
                                                <div class="pc-dr-heading">
                                                    <span>Amrit Science Campus</span>
                                                </div>
                                                <div class="pc-dr-body">
                                                    <span><i class="fas fa-map-marker"></i> Bhaktapur, Nepal</span>
                                                    <span><i class="fas fa-eye"></i> 200 views</span>
                                                    <span><i class="fas fa-user" aria-hidden="true"></i> 01-55555</span>
                                                    <span><i class="fas fa-file-signature"></i> No of Programs 117</span>
                                                    <span><i class="fab fa-chrome"></i> WWW.ascol.edu.np</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pc-rating-section ">
                                                <div>
                                                    <span>2.4</span>
                                                </div>          
                                                 <div>
                                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                                        <span class="fa fa-star" aria-hidden="true"></span>
                                                        <span class="fa fa-star" aria-hidden="true"></span>
                                                 </div>
                                                 <div>
                                                    <span>2000 reviews</span>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="p-campus-wrap">
                                        <div class="p-campus-img-section">
                                            <img src="{{asset('images/book_img.jpeg')}}">    
                                        </div>
                                        <div class="p-campus-detail-section">
                                            <div class="pc-detail-left">
                                                <img src="{{asset('images/college_logo1.png')}}">    
                                            </div>
                                            <div class="pc-detail-right">
                                                <div class="pc-dr-heading">
                                                    <span>Amrit Science Campus</span>
                                                </div>
                                                <div class="pc-dr-body">
                                                    <span><i class="fas fa-map-marker"></i> Bhaktapur, Nepal</span>
                                                    <span><i class="fas fa-eye"></i> 200 views</span>
                                                    <span><i class="fas fa-user" aria-hidden="true"></i> 01-55555</span>
                                                    <span><i class="fas fa-file-signature"></i> No of Programs 117</span>
                                                    <span><i class="fab fa-chrome"></i> WWW.ascol.edu.np</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pc-rating-section ">
                                                <div>
                                                    <span>2.4</span>
                                                </div>          
                                                 <div>
                                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                                        <span class="fa fa-star checked" aria-hidden="true"></span>
                                                        <span class="fa fa-star" aria-hidden="true"></span>
                                                        <span class="fa fa-star" aria-hidden="true"></span>
                                                 </div>
                                                 <div>
                                                    <span>2000 reviews</span>
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

</div>
@endsection
