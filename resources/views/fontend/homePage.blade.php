@extends('fontend.index')
@section('contents')
<div class="container-fluid hero-img contain" style="background-image: url('{{ asset('./images/hero_img1.jpg')}}'">
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
                        <i onclick="circleFunction1()" style="font-size:1.3rem;" class="fas fa-bars"></i>
                    </div>
                    <div class="circle-dropdown dropdown-content" style="left: -80px;">
                        <ul>
                            <li>
                                <span>
                                    <i class="fas fa-book"></i>
                                </span>
                                <span>
                                    <a href="#">Notes</a>
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="fas fa-graduation-cap"></i>
                                </span>
                                <span>
                                    <a href="#">Mock Test</a>
                                </span>
                            </li>
                            <li style="border-bottom:none;">
                                <span>
                                    <i class="fas fa-graduation-cap"></i>
                                </span>
                                <span>
                                    <a href="#">Colleges</a>
                                </span>
                            </li>

                        </ul>
                    </div>
  
                </div>
                <div>
                    <input type="text" placeholder="What do you want learn today ?" />
                </div>
                <div>
                    <i class="fas fa-search"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid contain" style="color:#707070!important;margin-bottom:15px;">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-12">
            <div class="row online-course">
                <div class="col-12 text-center">
                    <span>
                        <img src="{{asset('./images/saral_img1.png')}}">
                    </span>
                    <span>
                        Online Course
                    </span>
                    <span>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis suscipit ratione,
                        laboriosam facere vel error expedita nisi, vitae sit consectetur ipsum molestias
                        laudantium!
                        Temporibus culpa porro sequi fuga reprehenderit facilis!
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis suscipit ratione,
                        laboriosam facere vel error expedita nisi, vitae sit consectetur ipsum molestias
                        laudantium!
                        Temporibus culpa porro sequi fuga reprehenderit facilis!
                    </span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="row online-course">
                <div class="col-12 text-center">
                    <span>
                        <img src="{{asset('./images/saral_img1.png')}}">
                    </span>
                    <span>
                        Study Material
                    </span>
                    <span>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis suscipit ratione,
                        laboriosam facere vel error expedita nisi, vitae sit consectetur ipsum molestias
                        laudantium!
                        Temporibus culpa porro sequi fuga reprehenderit facilis!
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis suscipit ratione,
                        laboriosam facere vel error expedita nisi, vitae sit consectetur ipsum molestias
                        laudantium!
                        Temporibus culpa porro sequi fuga reprehenderit facilis!
                    </span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="row online-course">
                <div class="col-12 text-center">
                    <span>
                        <img src="{{asset('./images/saral_img1.png')}}">
                    </span>
                    <span>
                        E-library
                    </span>
                    <span>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis suscipit ratione,
                        laboriosam facere vel error expedita nisi, vitae sit consectetur ipsum molestias
                        laudantium!
                        Temporibus culpa porro sequi fuga reprehenderit facilis!
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis suscipit ratione,
                        laboriosam facere vel error expedita nisi, vitae sit consectetur ipsum molestias
                        laudantium!
                        Temporibus culpa porro sequi fuga reprehenderit facilis!
                    </span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="row online-course">
                <div class="col-12 text-center">
                    <span>
                        <img src="{{asset('./images/saral_img1.png')}}">
                    </span>
                    <span>
                        Mock Test
                    </span>
                    <span>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis suscipit ratione,
                        laboriosam facere vel error expedita nisi, vitae sit consectetur ipsum molestias
                        laudantium!
                        Temporibus culpa porro sequi fuga reprehenderit facilis!
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis suscipit ratione,
                        laboriosam facere vel error expedita nisi, vitae sit consectetur ipsum molestias
                        laudantium!
                        Temporibus culpa porro sequi fuga reprehenderit facilis!
                    </span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="row online-course">
                <div class="col-12 text-center">
                    <span>
                        <img src="{{asset('./images/saral_img1.png')}}">
                    </span>
                    <span>
                        Home Tutor
                    </span>
                    <span>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis suscipit ratione,
                        laboriosam facere vel error expedita nisi, vitae sit consectetur ipsum molestias
                        laudantium!
                        Temporibus culpa porro sequi fuga reprehenderit facilis!
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis suscipit ratione,
                        laboriosam facere vel error expedita nisi, vitae sit consectetur ipsum molestias
                        laudantium!
                        Temporibus culpa porro sequi fuga reprehenderit facilis!
                    </span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="row online-course">
                <div class="col-12 text-center">
                    <span>
                        <img src="{{asset('./images/saral_img1.png')}}">
                    </span>
                    <span>
                        Professional Training
                    </span>
                    <span>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis suscipit ratione,
                        laboriosam facere vel error expedita nisi, vitae sit consectetur ipsum molestias
                        laudantium!
                        Temporibus culpa porro sequi fuga reprehenderit facilis!
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis suscipit ratione,
                        laboriosam facere vel error expedita nisi, vitae sit consectetur ipsum molestias
                        laudantium!
                        Temporibus culpa porro sequi fuga reprehenderit facilis!
                    </span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="row online-course">
                <div class="col-12 text-center">
                    <span>
                        <img src="{{asset('./images/saral_img1.png')}}">
                    </span>
                    <span>
                        Notices & Result
                    </span>
                    <span>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis suscipit ratione,
                        laboriosam facere vel error expedita nisi, vitae sit consectetur ipsum molestias
                        laudantium!
                        Temporibus culpa porro sequi fuga reprehenderit facilis!
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis suscipit ratione,
                        laboriosam facere vel error expedita nisi, vitae sit consectetur ipsum molestias
                        laudantium!
                        Temporibus culpa porro sequi fuga reprehenderit facilis!
                    </span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="row online-course">
                <div class="col-12 text-center">
                    <span>
                        <img src="{{asset('./images/saral_img1.png')}}">
                    </span>
                    <span>
                        Event
                    </span>
                    <span>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis suscipit ratione,
                        laboriosam facere vel error expedita nisi, vitae sit consectetur ipsum molestias
                        laudantium!
                        Temporibus culpa porro sequi fuga reprehenderit facilis!
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis suscipit ratione,
                        laboriosam facere vel error expedita nisi, vitae sit consectetur ipsum molestias
                        laudantium!
                        Temporibus culpa porro sequi fuga reprehenderit facilis!
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5 my-5">
        <div class="col-12 top-college-heading text-md-center">
            <span>Top College In Nepal</span>
        </div>
    </div>
    <div class="row mb-5 top-college-select mx-2">
        <div class="col-12" id="home-location">
            <select class="home-location" name="top-college" style="width:250px; border-radius:20px; padding:20px;">
                <option value="pokhera">Pokhera</option>
                <option value="kathmandu">Kathmandu</option>
                <option value="kathmandu">Bhaktapur</option>
            </select>
            {{-- <div class="tc-dropdown-wrap">
                <div id="tc-dropdown-home" class="tc-dropdown-home" onclick="dropdownFunction()" data-toggle="tooltip" data-placement="bottom">
                    <span>location</span>
                </div>
                <div id="tc-dropcontent-home" class="tc-dropcontent-home">
                    <ul>
                        <li>Bhaktapur</li>
                        <li>kathmandu</li>
                        <li>Lalitpur</li>
                        <li>Jhapa</li>
                    </ul>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="row mx-2">
        <div class="col-lg-4 col-md-6 col-12">
            <div class="top-college-wrap">
                <div class="top-college-inner-wrap">
                    <div class="tc-upper-wrap">
                        <div class="tc-logo-section">
                            <img src="{{asset('./images/saral_img2.png')}}">
                        </div>
                        <div class="tc-text-section">
                            <span>Samraddhi College</span>
                            <span><i class="fas fa-map-marker-alt"></i> Bhaktapur, Nepal</span>
                            <span><i class="fas fa-user-alt"></i> 200 views</span>
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
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="top-college-wrap">
                <div class="top-college-inner-wrap">
                    <div class="tc-upper-wrap">
                        <div class="tc-logo-section">
                            <img src="{{asset('./images/saral_img2.png')}}">
                        </div>
                        <div class="tc-text-section">
                            <span>Samraddhi College</span>
                            <span><i class="fas fa-map-marker-alt"></i> Bhaktapur, Nepal</span>
                            <span><i class="fas fa-user-alt"></i> 200 views</span>
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
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="top-college-wrap">
                <div class="top-college-inner-wrap">
                    <div class="tc-upper-wrap">
                        <div class="tc-logo-section">
                            <img src="{{asset('./images/saral_img2.png')}}">
                        </div>
                        <div class="tc-text-section">
                            <span>Samraddhi College</span>
                            <span><i class="fas fa-map-marker-alt"></i> Bhaktapur, Nepal</span>
                            <span><i class="fas fa-user-alt"></i> 200 views</span>
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
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="top-college-wrap">
                <div class="top-college-inner-wrap">
                    <div class="tc-upper-wrap">
                        <div class="tc-logo-section">
                            <img src="{{asset('./images/saral_img2.png')}}">
                        </div>
                        <div class="tc-text-section">
                            <span>Samraddhi College</span>
                            <span><i class="fas fa-map-marker-alt"></i> Bhaktapur, Nepal</span>
                            <span><i class="fas fa-user-alt"></i> 200 views</span>
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
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="top-college-wrap">
                <div class="top-college-inner-wrap">
                    <div class="tc-upper-wrap">
                        <div class="tc-logo-section">
                            <img src="{{asset('./images/saral_img2.png')}}">
                        </div>
                        <div class="tc-text-section">
                            <span>Samraddhi College</span>
                            <span><i class="fas fa-map-marker-alt"></i> Bhaktapur, Nepal</span>
                            <span><i class="fas fa-user-alt"></i> 200 views</span>
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
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="top-college-wrap">
                <div class="top-college-inner-wrap">
                    <div class="tc-upper-wrap">
                        <div class="tc-logo-section">
                            <img src="{{asset('./images/saral_img2.png')}}">
                        </div>
                        <div class="tc-text-section">
                            <span>Samraddhi College</span>
                            <span><i class="fas fa-map-marker-alt"></i> Bhaktapur, Nepal</span>
                            <span><i class="fas fa-user-alt"></i> 200 views</span>
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
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-12" style="text-align:end;">
            <button class="visit-more-college">
                visit More college
            </button>
        </div>
    </div>
    <div class="row top-college-heading my-5">
        <div class="col-12 text-md-center">
            <span>Nepal's Best Career Search Platflorm</span>
        </div>
    </div>
    <div class="row mx-md-2 mx-0">
        <div class="col-12">
            <div class="search-platform">
                <div class="search-platform-item text-center">
                    <span>
                        <img src="{{asset('./images/saral_img4.png')}}">
                    </span>
                    <span>200+</span>
                    <span>Schools</span>
                </div>
                <div class="search-platform-item text-center">
                    <span>
                        <img src="{{asset('./images/saral_img1.png')}}">
                    </span>
                    <span>200+</span>
                    <span>Schools</span>
                </div>
                <div class="search-platform-item text-center">
                    <span>
                        <img src="{{asset('./images/saral_img2.png')}}">
                    </span>
                    <span>200+</span>
                    <span>Schools</span>
                </div>
                <div class="search-platform-item text-center">
                    <span>
                        <img src="{{asset('./images/saral_img3.png')}}">
                    </span>
                    <span>200+</span>
                    <span>Schools</span>
                </div>
                <div class="search-platform-item text-center">
                    <span>
                        <img src="{{asset('./images/saral_img4.png')}}">
                    </span>
                    <span>200+</span>
                    <span>Schools</span>
                </div>
            </div>
        </div>
    </div>
    <div class="row top-college-heading my-5">
        <div class="col-12 text-md-center">
            <span>All Course</span>
        </div>
    </div>
    <div class="row mx-2">
        <div class="col-12  all-course-wrap">
            <div class="all-course-item">
                <div class="col-12">
                    <div class="row">
                        <div class="col-3 py-sm-2 py-0">
                            <img src="{{asset('images/saral_img1.png')}}">
                        </div>
                        <div class="col-9 py-2 px-0 all-course-r">
                            <span>Lower Secondary</span>
                            <span>(Secondary Education Examination)</span>
                        </div>
                        <div class="col-12 text-center-bs" style="border-top: 1px solid black;">
                            <div class="row mt-4">
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Mathematics</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Science</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>English</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Nepali</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>population</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>social</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Computer</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Opt. Mathematices</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Account</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="all-course-item">
                <div class="col-12">
                    <div class="row">
                        <div class="col-3 py-sm-2 py-0">
                            <img src="{{asset('images/saral_img1.png')}}">
                        </div>
                        <div class="col-9 px-0 py-2 all-course-r">
                            <span>SEE</span>
                            <span>(National Examinations Board)</span>
                        </div>
                        <div class="col-12 text-center-bs" style="border-top: 1px solid black;">
                            <div class="row mt-4">
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Mathematics</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Physics</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>English</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Chemistry</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Nepali</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Biology</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="all-course-item">
                <div class="col-12">
                    <div class="row">
                        <div class="col-3 py-2">
                            <img src="{{asset('images/saral_img1.png')}}">
                        </div>
                        <div class="col-9 px-0 py-2 all-course-r">
                            <span>Class XI (NEB)</span>
                            <span>(National Examinations Board)</span>
                        </div>
                        <div class="col-12 text-center-bs" style="border-top: 1px solid black;">
                            <div class="row mt-4">
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Mathematics</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Physics</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>English</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Chemistry</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Nepali</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Biology</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="all-course-item">
                <div class="col-12">
                    <div class="row">
                        <div class="col-3 py-2">
                            <img src="{{asset('images/saral_img1.png')}}">
                        </div>
                        <div class="col-9 px-0 py-2 all-course-r">
                            <span>Class XII (NEB)</span>
                            <span>(National Examinations Board)</span>
                        </div>
                        <div class="col-12 text-center-bs" style="border-top: 1px solid black;">
                            <div class="row mt-4">
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Mathematics</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Physics</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>English</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Chemistry</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Nepali</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Biology</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="all-course-item">
                <div class="col-12">
                    <div class="row">
                        <div class="col-3 py-2">
                            <img src="{{asset('images/saral_img1.png')}}">
                        </div>
                        <div class="col-9 px-0 py-2 all-course-r">
                            <span>Bachelor</span>
                            <span>(National Examinations Board)</span>
                        </div>
                        <div class="col-12 text-center-bs" style="border-top: 1px solid black;">
                            <div class="row mt-4">
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Mathematics</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Physics</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>English</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Chemistry</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Nepali</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Biology</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="all-course-item">
                <div class="col-12">
                    <div class="row">
                        <div class="col-3 py-2">
                            <img src="{{asset('images/saral_img1.png')}}">
                        </div>
                        <div class="col-9 px-0 py-2 all-course-r">
                            <span>Master</span>
                            <span>(The Council for Technical Education and Vocational Training)</span>
                        </div>
                        <div class="col-12 text-center-bs" style="border-top: 1px solid black;">
                            <div class="row mt-4">
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Mathematics</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Physics</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>English</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Chemistry</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Nepali</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Biology</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="all-course-item">
                <div class="col-12">
                    <div class="row">
                        <div class="col-3 py-2">
                            <img src="{{asset('images/saral_img1.png')}}">
                        </div>
                        <div class="col-9 px-0 py-2 all-course-r">
                            <span>ICAN</span>
                            <span>(National Examinations Board)</span>
                        </div>
                        <div class="col-12 text-center-bs" style="border-top: 1px solid black;">
                            <div class="row mt-4">
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Mathematics</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Physics</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>English</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Chemistry</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Nepali</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Biology</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="all-course-item">
                <div class="col-12">
                    <div class="row">
                        <div class="col-3 py-2">
                            <img src="{{asset('images/saral_img1.png')}}">
                        </div>
                        <div class="col-9 px-0 py-2 all-course-r">
                            <span>CTEVT</span>
                            <span>(The Council for Technical Education and Vocational Training)</span>
                        </div>
                        <div class="col-12 text-center-bs" style="border-top: 1px solid black;">
                            <div class="row mt-4">
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Micro-Biology</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Master of Arts(MA)</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>MSc.CSIT</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>MBS</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>Master of Business Administration(MBA)</span>
                                </div>
                                <div class="col-2 text-center">
                                    <span class="dot"></span>
                                </div>
                                <div class="col-10">
                                    <span>MSc in Tea Technology and Management</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row mt-5 mx-2">
        <div class="col-12 top-college-heading text-md-center">
            <span>Find Great School</span>
        </div>
    </div>
    <div class="row mb-5 top-college-select mx-2" style="margin-top:-5vh;">
        <div class="col-12"  id="home-location">
            <select class="home-location" name="Find-school" style="width:250px; border-radius:20px; padding:20px;">
                <option value="pokhera">Pokhera</option>
                <option value="kathmandu">Kathmandu</option>
                <option value="kathmandu">Bhaktapur</option>
            </select>
        </div>
    </div>
    <div class="row mx-2 __find_great_school">
        <div class="col-lg-4 col-md-6 col-12">
            <div class="top-college-wrap">
                <div class="top-college-inner-wrap">
                    <div class="tc-upper-wrap">
                        <div class="tc-logo-section">
                            <img src="{{asset('./images/saral_img2.png')}}">
                        </div>
                        <div class="tc-text-section">
                            <span>Samraddhi College</span>
                            <span><i class="fas fa-map-marker-alt"></i> Bhaktapur, Nepal</span>
                            <span><i class="fas fa-user-alt"></i> 200 views</span>
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
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="top-college-wrap">
                <div class="top-college-inner-wrap">
                    <div class="tc-upper-wrap">
                        <div class="tc-logo-section">
                            <img src="{{asset('./images/saral_img2.png')}}">
                        </div>
                        <div class="tc-text-section">
                            <span>Samraddhi College</span>
                            <span><i class="fas fa-map-marker-alt"></i> Bhaktapur, Nepal</span>
                            <span><i class="fas fa-user-alt"></i> 200 views</span>
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
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="top-college-wrap">
                <div class="top-college-inner-wrap">
                    <div class="tc-upper-wrap">
                        <div class="tc-logo-section">
                            <img src="{{asset('./images/saral_img2.png')}}">
                        </div>
                        <div class="tc-text-section">
                            <span>Samraddhi College</span>
                            <span><i class="fas fa-map-marker-alt"></i> Bhaktapur, Nepal</span>
                            <span><i class="fas fa-user-alt"></i> 200 views</span>
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
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12" style="text-align:end;">
            <button class="visit-more-college">
                visit More college
            </button>
        </div>
    </div>
</div>

@endsection
