@extends('fontend.index')
@section('contents')

<div class="container-fluid hero-img contain" style="background-image: url('http://127.0.0.1:8000/./images/hero_img1.jpg'">
    <div class="hero-text-section">
        <div class="book-img-text1">
            <span style="color:#870524;margin-right:1rem;">सरल</span><span style="color:#0d0587">शिक्षा</span>
        </div>
        <div class="text-explore">
            <span>"Explore Learn and be Prepared"</span>
        </div>
        <div class="search-section2">
            <div class="search-items-wrap1">
                <div class="dropdown">
                    <div>
                        <i onclick="circleFunction1()" style="font-size:1.3rem;" class="fas fa-bars" aria-hidden="true"></i>
                    </div>
                    <div class="circle-dropdown dropdown-content" style="left: -80px;">
                        <ul>
                            <li>
                                <span>
                                    <i class="fas fa-book" aria-hidden="true"></i>
                                </span>
                                <span>
                                    <a href="#">Notes</a>
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="fas fa-graduation-cap" aria-hidden="true"></i>
                                </span>
                                <span>
                                    <a href="#">Mock Test</a>
                                </span>
                            </li>
                            <li style="border-bottom:none;">
                                <span>
                                    <i class="fas fa-graduation-cap" aria-hidden="true"></i>
                                </span>
                                <span>
                                    <a href="#">Colleges</a>
                                </span>
                            </li>

                        </ul>
                    </div>
  
                </div>
                <div>
                    <input type="text" placeholder="What do you want learn today ?">
                </div>
                <div>
                    <i class="fas fa-search" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="row my-5 mx-md-3">
                <div class="col-lg-3 col-md-5 col-12">
                    <div class="row popular-sub-wrap1 mx-md-0">
                        <div class="col-12 popular-sub-heading">
                            <span>Features Colleges</span>
                        </div>
                        <div class="col-12 top-college-body">
                            <div style="align-self:center;">
                                <img src="http://127.0.0.1:8000/./images/college_logo1.png">
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
                                <img src="http://127.0.0.1:8000/./images/college_logo1.png">
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
                                <img src="http://127.0.0.1:8000/./images/college_logo1.png">
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
                                <img src="http://127.0.0.1:8000/./images/college_logo1.png">
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
                                <img src="http://127.0.0.1:8000/./images/college_logo1.png">
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
                                <img src="http://127.0.0.1:8000/./images/college_logo1.png">
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
                                <img src="http://127.0.0.1:8000/./images/college_logo1.png">
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
                <div class="col-lg-6 col-md-7 col-12 mb-3">
                    <div class="row">
                        <div class="col-12 text-center">
                            <span style="font-size:1.5rem;font-weight:700;">Search Result</span>
                        </div>
                        <div class="col-12">
                            <div class="searchResult-item">
                                <div class="searchResultImage">
                                <img src="{{asset('images/saral_img1.png')}}">
                                </div>
                                    <div class="searchResult-des">
    
                                        <span>www.saral.com > path</span>
                                        <a href="#">
                                        <span>A Sound of THunder</span>
                                        </a>
                                        <span>Article & Contents</span>
                                        <span>
                                            A sound of thunder-Four Levels
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure, ipsam?
                                        </span>
                                    </div>
    
                            </div>
                            <div class="searchResult-item">
                                <div class="searchResultImage">
                                <img src="{{asset('images/saral_img1.png')}}">
                                </div>
                                    <div class="searchResult-des">
    
                                        <span>www.saral.com > path</span>
                                        <a href="#">
                                        <span>A Sound of THunder</span>
                                        </a>
                                        <span>Article & Contents</span>
                                        <span>
                                            A sound of thunder-Four Levels
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure, ipsam?
                                        </span>
                                    </div>
    
                            </div>
                            <div class="searchResult-item">
                                <div class="searchResultImage">
                                <img src="{{asset('images/saral_img1.png')}}">
                                </div>
                                    <div class="searchResult-des">
    
                                        <span>www.saral.com > path</span>
                                        <a href="#">
                                        <span>A Sound of THunder</span>
                                        </a>
                                        <span>Article & Contents</span>
                                        <span>
                                            A sound of thunder-Four Levels
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure, ipsam?
                                        </span>
                                    </div>
    
                            </div>
                            <div class="searchResult-item">
                                <div class="searchResultImage">
                                <img src="{{asset('images/saral_img1.png')}}">
                                </div>
                                    <div class="searchResult-des">
    
                                        <span>www.saral.com > path</span>
                                        <a href="#">
                                        <span>A Sound of THunder</span>
                                        </a>
                                        <span>Article & Contents</span>
                                        <span>
                                            A sound of thunder-Four Levels
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure, ipsam?
                                        </span>
                                    </div>
    
                            </div>
                            <div class="searchResult-item">
                                <div class="searchResultImage">
                                <img src="{{asset('images/saral_img1.png')}}">
                                </div>
                                <div class="searchResult-des">
                                    <span>www.saral.com > path</span>
                                    <a href="#">
                                    <span>A Sound of THunder</span>
                                    </a>
                                    <span>Article & Contents</span>
                                    <span>
                                        A sound of thunder-Four Levels
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure, ipsam?
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12" style="display:flex;">
                            <button class="btn btn-primary">
                                 Previous Page
                            </button>
                            <button class="btn btn-primary ml-auto">
                                Next Page
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-12">
                    <div class="row popular-sub-wrap1 mx-md-0">
                        <div class="col-12 popular-sub-heading">
                            <span>Features Colleges</span>
                        </div>
                        <div class="col-12 top-college-body">
                            <div style="align-self:center;">
                                <img src="http://127.0.0.1:8000/./images/college_logo1.png">
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
                                <img src="http://127.0.0.1:8000/./images/college_logo1.png">
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
                                <img src="http://127.0.0.1:8000/./images/college_logo1.png">
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
                                <img src="http://127.0.0.1:8000/./images/college_logo1.png">
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
                                <img src="http://127.0.0.1:8000/./images/college_logo1.png">
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
                                <img src="http://127.0.0.1:8000/./images/college_logo1.png">
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
                                <img src="http://127.0.0.1:8000/./images/college_logo1.png">
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
</div>
@endsection