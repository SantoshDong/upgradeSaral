@extends('fontend.index')
@section('contents')

<div class="container-fluid" style="background-color: #e9ecef;padding-left:0px;padding-right:0px;">
    <div class="container">
        <div class="row __coll-des-view">
            <div class="col-12">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Mock Test</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Course Detail</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid logsin-heading">
    <div class="container">
        <div class="row py-3">
            <div class="col-12 text-center">
                <span>Login/Signup</span>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="logsin-form">
                    <div class="logsin-form-l slidef-in slide-index ">
                        <div class="row">
                            <div class="col-12 mb-5">
                                <img src="http://127.0.0.1:8000/images/saral_logo.png">
                            </div>
                            <div class="col-12 text-center logsin-fl-txt1">
                                <span>Wel-Come to Saral Shiksya</span>
                            </div>
                            <div class="col-12 text-center logsin-ft-txt2">
                                <span>To Keep connected with us Please</span>
                                <span>login with your Personal Info</span>
                            </div>
                            <div class="col-12 text-center logsin-btn-wrap">
                                <button class="btn logsin-btn" onclick="signupSaral()">Sign In</button>
                            </div>
                        </div>
                    </div>
                    <div class="logsin-form-r slidef-in2">
                        <div class="row">
                            <div class="col-12 text-center logsin-fr-txt1">
                                <span>Create Account</span>
                            </div>
                            <div class="col-12 text-center logsin-fr-i">
                                <span><i class="fab fa-facebook"></i></span>
                                <span><i class="fab fa-google"></i></span>
                            </div>
                            <div class="col-12 text-center logsin-fr-txt2">
                                <span>Or Using Your Email for registration</span>
                            </div>
                                <div class="col-12">
                                    <form>
                                    <div class="row mx-5">
                                        <div class="col-12 logsin-fr-fi">
                                            <input class="form-control" type="text" name="name" id="yourName" placeholder="Enter Your Full Nama"/>
                                        </div>
                                        <div class="col-12 logsin-fr-fi">
                                            <input class="form-control" type="email" name="Email" id="yourEmail" placeholder="Email Address"/>
                                        </div>
                                        <div class="col-12 logsin-fr-fi">
                                            <input class="form-control" type="password" name="password" placeholder="Password"/>
                                        </div>
                                        <div class="col-12 logsin-fr-fi">
                                            <input class="form-control" type="password" name="re-password"  placeholder="Re-enter-password"/>
                                        </div>
                                        <div class="col-12 logsin-fr-fi">    
                                            <button type="submit" class="btn btn-danger">Sign up</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                        </div>
                    </div>
                    <div class="logsin-form-l1 slidef-in2 slide-index">
                        <div class="row">
                            <div class="col-12 mb-5">
                                <img src="http://127.0.0.1:8000/images/saral_logo.png">
                            </div>
                            <div class="col-12 text-center logsin-fl-txt1">
                                <span>Hi, Friends!</span>
                            </div>
                            <div class="col-12 text-center logsin-ft-txt2">
                                <span>Enter Your Personal details</span>
                                <span>and start journey with us.</span>
                            </div>
                            <div class="col-12 text-center logsin-btn-wrap">
                                <button class="btn logsin-btn" onclick="signupSaral1()">Sign Up</button>
                            </div>
                        </div>
                    </div>
                    <div class="logsin-form-r1 slidef-in">
                        <div class="row">
                            <div class="col-12 text-center logsin-fr-txt1">
                                <span>Sign In Saral Shiksya</span>
                            </div>
                            <div class="col-12 text-center logsin-fr-i">
                                <span><i class="fab fa-facebook"></i></span>
                                <span><i class="fab fa-google"></i></span>
                            </div>
                            <div class="col-12 text-center logsin-fr-txt2">
                                <span>Or Using Your Email for registration</span>
                            </div>
                                <div class="col-12">
                                    <form>
                                    <div class="row mx-5">
                                        <div class="col-12 logsin-fr-fi">
                                            <input class="form-control" type="text" name="name" id="yourName" placeholder="Enter Your Full Nama"/>
                                        </div>
                                        <div class="col-12 logsin-fr-fi">
                                            <input class="form-control" type="email" name="Email" id="yourEmail" placeholder="Email Address"/>
                                        </div>
                                        <div class="col-12 logsin-fr-fi">
                                            <input class="form-control" type="password" name="password" placeholder="Password"/>
                                        </div>
                                        <div class="col-12 logsin-fr-fi">    
                                            <button type="submit" class="btn btn-danger">Sign In</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection
