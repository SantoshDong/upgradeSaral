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
<div class="container-fluid" style="background-color:#0b46a7;">
    <div class="row searchFilter-top-heading text-center py-3">
        <div class="col-12">
            <span>Home Tution</span>
        </div>
    </div>
    <div class="row ht-btn-section">
        <div class="col-12">
            <span class="btn ht-top-btn">Become a tutor</span>
        </div>
    </div>
</div>
<div class="container-fluid ht-hero-img" style="background-image: url('{{ asset('./images/home_tution.png')}}')">
    <div class="container">
        <div class="row" style="padding-top:15vh;">
            <div class="col-12 ht-hero-text">
                <span>Welcome To Home Tutions</span>
                <span>Eduction Information at Your Fingertips</span>
                <span>A Pathway to Bright-Future</span>
            </div>
        </div>
    </div>
</div>
    <div class="container-fluid" style="background-color:#efefef;">
        <div class="row">
            <div class="col-12" style="text-align:end;margin:20px 0px;font-weight:600;">
                <span>Helpline Number: +977-9845417277</span>
            </div>
            <div class="col-12 ht-heading-section">
                <span>Tutor Process</span>
            </div>
            <div class="col-12">
                <div class="row mx-md-2 mx-2 ">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="ht-tp-items-wrap">
                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                            <span>Create Free Profile</span>
                            <span>
                                Input Basic details ie: Mobile No., Location, Qualification, etc, Upload Photo &
                                Credentials, Achievements to Highlights Profile
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="ht-tp-items-wrap">
                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                            <span>Create Free Profile</span>
                            <span>
                                Input Basic details ie: Mobile No., Location, Qualification, etc, Upload Photo &
                                Credentials, Achievements to Highlights Profile
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="ht-tp-items-wrap">
                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                            <span>Create Free Profile</span>
                            <span>
                                Input Basic details ie: Mobile No., Location, Qualification, etc, Upload Photo &
                                Credentials, Achievements to Highlights Profile
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="ht-tp-items-wrap">
                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                            <span>Create Free Profile</span>
                            <span>
                                Input Basic details ie: Mobile No., Location, Qualification, etc, Upload Photo &
                                Credentials, Achievements to Highlights Profile
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row mt-3">
                    <div class="col-12 ht-tp-bottom">
                        <span>Reach out to more Students</span>
                        <span>
                            <button class="btn ht-pn-btn">Create Your Profile Now</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mx-3" style="background-color:#e1dfdf;">
            <div class="col-12">
                <div class="row pt-4">
                    <div class="col-12 ht-wht-top">
                        <span>Why Home Tution?</span>
                    </div>
                    <div class="col-12">
                        <div class="row mt-3">
                            <div class="col-md-6 col-12">
                                <div class="ht-wht-dif-wrap">
                                    <div class="ht-wht-dif-head">
                                        <span>Students/Parents</span>
                                    </div>
                                    <div class="ht-wht-dif-body">
                                        <div class="ht-wht-dif-items">
                                            <span><img src="{{asset('./images/saral_img1.png')}}"></span>
                                            <span>Home Tuition is #1 Secret of Success. Its a well known fact that home tuition
                                                helps students to succeed. Home tutors provide personalized attention.
                                            </span>
                                        </div>
                                        <div class="ht-wht-dif-items">
                                            <span><img src="{{asset('./images/saral_img1.png')}}"></span>
                                            <span>Home Tuition is #1 Secret of Success. Its a well known fact that home tuition
                                                helps students to succeed. Home tutors provide personalized attention.
                                            </span>
                                        </div>
                                        <div class="ht-wht-dif-items">
                                            <span><img src="{{asset('./images/saral_img1.png')}}"></span>
                                            <span>Home Tuition is #1 Secret of Success. Its a well known fact that home tuition
                                                helps students to succeed. Home tutors provide personalized attention.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="ht-wht-dif-wrap">
                                    <div class="ht-wht-dif-head">
                                        <span>Students/Parents</span>
                                    </div>
                                    <div class="ht-wht-dif-body">
                                        <div class="ht-wht-dif-items">
                                            <span><img src="{{asset('./images/saral_img1.png')}}"></span>
                                            <span>Home Tuition is #1 Secret of Success. Its a well known fact that home tuition
                                                helps students to succeed. Home tutors provide personalized attention.
                                            </span>
                                        </div>
                                        <div class="ht-wht-dif-items">
                                            <span><img src="{{asset('./images/saral_img1.png')}}"></span>
                                            <span>Home Tuition is #1 Secret of Success. Its a well known fact that home tuition
                                                helps students to succeed. Home tutors provide personalized attention.
                                            </span>
                                        </div>
                                        <div class="ht-wht-dif-items">
                                            <span><img src="{{asset('./images/saral_img1.png')}}"></span>
                                            <span>Home Tuition is #1 Secret of Success. Its a well known fact that home tuition
                                                helps students to succeed. Home tutors provide personalized attention.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-12 ht-heading-section">
                        <span>How it Works</span>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="ht-wiw-top">
                                    <span><img src="{{asset('./images/saral_img1.png')}}"></span>
                                    <span>Tutor/Tution Teacher
                                    </span>
                                </div>
                                <div class="ht-wiw-body">
                                    <div class="ht-wiw-items">
                                        <ul>
                                            <li>
                                                <div class="ht-wiw-items-inner">
                                                    <span>Sign Up/ Log in</span>
                                                    <span>
                                                        You can sign up or login by putting the required details in the
                                                        respective field
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ht-wiw-items-inner">
                                                    <span>Verify Mail</span>
                                                    <span>
                                                        You can sign up or login by putting the required details in the
                                                        respective field field
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ht-wiw-items-inner">
                                                    <span>Create Profile</span>
                                                    <span>
                                                        You can sign up or login by putting the required details in the
                                                        respective field
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ht-wiw-items-inner">
                                                    <span>Document</span>
                                                    <span>
                                                        You can sign up or login by putting the required details in the
                                                        respective field
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ht-wiw-items-inner">
                                                    <span>Mail/SMS</span>
                                                    <span>
                                                        You can sign up or login by putting the required details in the
                                                        respective field
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ht-wiw-items-inner">
                                                    <span>Class Status</span>
                                                    <span>
                                                        You can sign up or login by putting the required details in the
                                                        respective field
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ht-wiw-items-inner">
                                                    <span>Tutor Poocess</span>
                                                    <span>
                                                        You can sign up or login by putting the required details in the
                                                        respective field
                                                    </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="ht-wiw-top">
                                    <span><img src="{{asset('./images/saral_img1.png')}}"></span>
                                    <span>Tutor/Tution Teacher
                                    </span>
                                </div>
                                <div class="ht-wiw-body">
                                    <div class="ht-wiw-items">
                                        <ul>
                                            <li>
                                                <div class="ht-wiw-items-inner">
                                                    <span>Student/parent</span>
                                                    <span>
                                                        You can sign up or login by putting the required details in the
                                                        respective field
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ht-wiw-items-inner">
                                                    <span>Verify Mail</span>
                                                    <span>
                                                        You can sign up or login by putting the required details in the
                                                        respective field field
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ht-wiw-items-inner">
                                                    <span>Create Profile</span>
                                                    <span>
                                                        You can sign up or login by putting the required details in the
                                                        respective field
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ht-wiw-items-inner">
                                                    <span>Document</span>
                                                    <span>
                                                        You can sign up or login by putting the required details in the
                                                        respective field
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ht-wiw-items-inner">
                                                    <span>Mail/SMS</span>
                                                    <span>
                                                        You can sign up or login by putting the required details in the
                                                        respective field
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ht-wiw-items-inner">
                                                    <span>Class Status</span>
                                                    <span>
                                                        You can sign up or login by putting the required details in the
                                                        respective field
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ht-wiw-items-inner">
                                                    <span>Tutor Poocess</span>
                                                    <span>
                                                        You can sign up or login by putting the required details in the
                                                        respective field
                                                    </span>
                                                </div>
                                            </li>
                                        </ul>
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
