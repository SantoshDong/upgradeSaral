@extends('fontend.index')
@section('contents')

<div class="container-fluid" style="background-color: #e9ecef;padding-left:0px;padding-right:0px;">
<div class="row">
    <div class="col-12">
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
</div>
<div class="container-fluid" style="background-color:#0b46a7;">
    <div class="row searchFilter-top-heading py-3">
        <div class="col-lg-9 col-md-8 col-12 text-center ">
            <span>Ask & Answer</span>
        </div>
        <div class="col-lg-3 col-md-4 col-12">
            <form action="">
                <div class="qna-search-section">
                    <span>
                        <input type="text" placeholder="search"/>
                    </span>
                    <span style="background-color:#2051d8;">
                        <i class="fas fa-search" aria-hidden="true"></i>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container-fluid" style="background-color:#d6d6d6;">
    <div class="row">
      <div class="col-12">
            <div class="row pt-3">
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="ana-r-om-top-text-first">
                                <span><i class="fas fa-thumbs-up" aria-hidden="true"></i></span>
                                <span>500  total Ask Question</span>
                                <span><i class="fas fa-thumbs-up" aria-hidden="true"></i></span>
                                <span>12000 total given Answer</span>
                                </div>
                        </div>
                    </div>
                    <div class="row popular-sub-wrap1 mx-md-0 mx-3">
                        <div class="col-12 popular-sub-heading">
                            <span>Features Colleges</span>
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
                <div class="col-lg-6 col-md-8 col-12">
                    <div class="row mb-3 qna-main-wrapper-l">
                        <div class="col-12">
                            <div class="qna-ana-wrap">
                                <div class="qna-ana-top">
                                    <div class="qna-ana-l">
                                        <img src="{{asset('images/saral_img1.png')}}">
                                    </div>
                                    <div class="qna-ana-r text-justify">
                                        <textarea placeholder="What do you want to ask , Pradip ?" spellcheck="false" id="autoresizing" rows="1"></textarea> 
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
                                            <select name="ana-catagory">
                                                <option selected="true" value="option" disabled>Select Catagory</option>
                                                <option class="cata" value="catagory1">catagory 1</option>
                                                <option class="cata" value="catagory2">catagory 2</option>
                                            </select>
                                        </div>
                                        <div class="ana-bottom-r">
                                            <button class="btn btn-danger">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top:50px;margin-bottom:20px;box-shadow: 0px 0px 2px rgba(0,0,0,.5);
                    border-radius: 10px; padding-top:10px;">
                        <div class="col-12">
                            <div class="row mb-3">
                                <div class="col-12">
                                    <div class="ml-auto ana-expert-ans">
                                        <span id="epanel-link-1s" class="epanel-link ePanel-hover"
                                            onclick="expertFunction(event,'ePanel1')">All</span>
                                        <span id="epanel-link-2s" class="epanel-link" onclick="expertFunction(event,'ePanel2')">Expert
                                            Answers</span>
                                    </div>
                                </div>
                            </div>
                            <div class="epanel" id="ePanel1">
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <div class="ana-tablinks-wrap" style="font-size:.9rem;">
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
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <div id="ana-panel1" class="anapanel" style="display: block;">
                                                    <div class="row qna-main-wrapper-l">
                                                        <div class="col-12">
                                                            <div class="row" style="border-bottom: 2px solid #a1a1a1;">
                                                                <div class="col-12">
                                                                    <div class="ana-p1-wrapper">
                                                                        <div class="ana-p1-ds">
                                                                            <span><img
                                                                                    src="http://127.0.0.1:8000/./images/saral_img2.png"></span>
                                                                            <span>Pradip Dhungana 0</span>
                                                                        </div>
                                                                        <div class="ana-p1-ds-r">
                                                                            <span><i class="fas fa-ellipsis-h"
                                                                                    aria-hidden="true"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row my-2">
                                                                <div class="col-12">
                                                                    <div class="ana-p1-img-wrap">
                                                                        <span>
                                                                            <img
                                                                                src="http://127.0.0.1:8000/./images/buddha_msg.png">
                                                                        </span>
                                                                    </div>
                                                                    <div class="ana-p1-img-fb">
                                                                        <div class="ana-p1-fb-item">
                                                                            <span>122 Vote</span>
                                                                            <span><i class="fas fa-thumbs-up"
                                                                                    aria-hidden="true"></i></span>
                                                                        </div>
                                                                        <div class="ana-p1-fb-item">
                                                                            <span>25 Answers</span>
                                                                            <span><i class="fab fa-facebook-messenger"
                                                                                    aria-hidden="true"></i></span>
                                                                        </div>
                                                                        <div class="ana-p1-fb-item">
                                                                            <span>10 Share</span>
                                                                            <span><i class="fas fa-share-alt"
                                                                                    aria-hidden="true"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row my-2">
                                                                <div class="col-12">
                                                                    {{-- <div class="ana-p1-cc">
                                                                    <div class="epanel-link1 ePanel-hover" onclick="expertFunction1(event, 'epanel3')">
                                                                        <span>All</span>
                                                                    </div>
                                                                    <div class="epanel-link1" onclick="expertFunction1(event, 'epanel4')">
                                                                        <span>Expert Answers</span>
                                                                    </div>
                                                                </div> --}}
                                                                    <ul class="nav nav-pills mb-3" id="pills-tab"
                                                                        role="tablist">
                                                                        <li class="nav-item" style="background-color: #b3b3b3;
                                                                        border-radius: 20px 0px 0px 20px;">
                                                                            <a class="nav-link active"
                                                                                id="pills-home-tab" data-toggle="pill"
                                                                                href="#pills-home3" role="tab"
                                                                                aria-controls="pills-home"
                                                                                aria-selected="true">all</a>
                                                                        </li>
                                                                        <li class="nav-item" style="background-color: #b3b3b3;
                                                                        border-radius: 0px 20px 20px 0px;">
                                                                            <a class="nav-link" id="pills-profile-tab"
                                                                                data-toggle="pill" href="#pills-profile3"
                                                                                role="tab" aria-controls="pills-profile"
                                                                                aria-selected="false">expert</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                {{-- for all answer img--}}
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="tab-content" id="pills-tabContent">
                                                                            <div class="tab-pane fade show active"
                                                                                id="pills-home3" role="tabpanel"
                                                                                aria-labelledby="pills-home-tab">
                                                                                <div id="" class="col-12">
                                                                                    <div class="row my-3">
                                                                                        ss
                                                                                        <div class="col-12">
                                                                                            <div class="ana-p1-ccs">
                                                                                                <div class="ana-p1-ccs-l">
                                                                                                    <span><img
                                                                                                            src="http://127.0.0.1:8000/./images/saral_img2.png"></span>
                                                                                                </div>
                                                                                                <div class="ana-p1-ccs-r">
                                                                                                    <span>
                                                                                                        <input type="text"
                                                                                                            placeholder="Write Your Answer.">
                                                                                                    </span>
                                                                                                    <span>
                                                                                                        <div class="image-upload">
                                                                                                            <label for="file-input">
                                                                                                                <i class="fas fa-camera"
                                                                                                                aria-hidden="true"></i>
                                                                                                            </label>
                                                                                                            <input id="file-input" type="file"/>
                                                                                                        </div>
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                    <div class="row my-3">
                                                                                        <div class="col-12">
                                                                                            <div class="ana-p1-ccs1">
                                                                                                <div class="ana-p1-ccs-l">
                                                                                                    <span><img
                                                                                                            src="http://127.0.0.1:8000/./images/saral_img2.png"></span>
                                                                                                </div>
                                                                                                <div class="ana-p1-ccs-r">
                                                                                                    <span><input type="text"
                                                                                                            placeholder="an Answer was originally a solemn assertion in opposition to someone or something,"></span>
                                                                                                    <span></span>
                                                                                                </div>
                                                                                                <div class="ana-p1-css-rr">
                                                                                                    <span><i class="fas fa-ellipsis-h"
                                                                                                            aria-hidden="true"></i></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12">
                                                                                            <div class="ana-p1-ccs2">
                                                                                                <div></div>
                                                                                                <div class="ana-p1-csi-wrap">
                                                                                                    <div class="ana-p1-csi">
                                                                                                        <span>122 Vote</span>
                                                                                                        <span><i class="fas fa-thumbs-up"
                                                                                                                aria-hidden="true"></i></span>
                                                                                                    </div>
                                                                                                    <div class="ana-p1-csi">
                                                                                                        <span>25 Answers</span>
                                                                                                        <span><i class="fab fa-facebook-messenger"
                                                                                                                aria-hidden="true"></i></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div></div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12">
                                                                                            <div class="ana-p1-cs-inner">
                                                                                                <div></div>
                                                                                                <div
                                                                                                    class="ana-p1-cs-inner-wrap">
                                                                                                    <div class="row">
                                                                                                        <div class="col-12">
                                                                                                            <div
                                                                                                                class="ana-p1-ccs1">
                                                                                                                <div
                                                                                                                    class="ana-p1-ccs-l">
                                                                                                                    <span><img
                                                                                                                            src="http://127.0.0.1:8000/./images/saral_img2.png"></span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="ana-p1-ccs-r">
                                                                                                                    <span><input
                                                                                                                            type="text"
                                                                                                                            placeholder="an Answer was originally a solemn assertion in opposition to someone or something,"></span>
                                                                                                                    <span></span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="ana-p1-css-rr">
                                                                                                                    <span><i class="fas fa-ellipsis-h"
                                                                                                                            aria-hidden="true"></i></span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="row">
                                                                                                        <div class="col-12">
                                                                                                            <div
                                                                                                                class="ana-p1-ccs2">
                                                                                                                <div></div>
                                                                                                                <div
                                                                                                                    class="ana-p1-csi-wrap">
                                                                                                                    <div
                                                                                                                        class="ana-p1-csi">
                                                                                                                        <span>122
                                                                                                                            Vote</span>
                                                                                                                        <span><i class="fas fa-thumbs-up"
                                                                                                                                aria-hidden="true"></i></span>
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="ana-p1-csi">
                                                                                                                        <span>25
                                                                                                                            Answers</span>
                                                                                                                        <span><i class="fab fa-facebook-messenger"
                                                                                                                                aria-hidden="true"></i></span>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="ana-p1-cs-inner2">
                                                                                                <div></div>
                                                                                                <div
                                                                                                    class="ana-p1-cs-inner-wrap">
                                                                                                    <div class="ana-p1-ccs">
                                                                                                        <div
                                                                                                            class="ana-p1-ccs-l">
                                                                                                            <span><img
                                                                                                                    src="http://127.0.0.1:8000/./images/saral_img2.png"></span>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="ana-p1-ccs-r">
                                                                                                            <span><input
                                                                                                                    type="text"
                                                                                                                    placeholder="Write Your Answer."></span>
                                                                                                            <span>
                                                                                                                <div class="image-upload">
                                                                                                                    <label for="file-input">
                                                                                                                        <i class="fas fa-camera"
                                                                                                                        aria-hidden="true"></i>
                                                                                                                    </label>
                                                                                                                    <input id="file-input" type="file"/>
                                                                                                                </div>
                                                                                                            </span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div>
                                                                                                
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row my-3">
                                                                                        <div class="col-12">
                                                                                            <div class="ana-p1-ccs">
                                                                                                <div class="ana-p1-ccs-l">
                                                                                                    <span><img src="http://127.0.0.1:8000/./images/saral_img2.png"></span>
                                                                                                </div>
                                                                                                <div class="ana-p1-css-img">
                                                                                                    <span>
                                                                                                    <img src="{{asset('images/bookimg.png')}}">
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
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
                                                                            {{-- for all expert answer img--}}
                                                                            <div class="tab-pane fade" id="pills-profile3"
                                                                                role="tabpanel"
                                                                                aria-labelledby="pills-profile-tab">
                                                                                <div class="col-12">
                                                                                    <div class="row my-3">
                                                                                        4
                                                                                        <div class="col-12">
                                                                                            <div class="ana-p1-ccs">
                                                                                                <div class="ana-p1-ccs-l">
                                                                                                    <span><img
                                                                                                            src="http://127.0.0.1:8000/./images/saral_img2.png"></span>
                                                                                                </div>
                                                                                                <div class="ana-p1-ccs-r">
                                                                                                    <span><input type="text"
                                                                                                            placeholder="Write Your Answer."></span>
                                                                                                    <span><i class="fas fa-camera"
                                                                                                            aria-hidden="true"></i></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row my-3">
                                                                                        <div class="col-12">
                                                                                            <div class="ana-p1-ccs1">
                                                                                                <div class="ana-p1-ccs-l">
                                                                                                    <span><img
                                                                                                            src="http://127.0.0.1:8000/./images/saral_img2.png"></span>
                                                                                                </div>
                                                                                                <div class="ana-p1-ccs-r">
                                                                                                    <span><input type="text"
                                                                                                            placeholder="an Answer was originally a solemn assertion in opposition to someone or something,"></span>
                                                                                                    <span></span>
                                                                                                </div>
                                                                                                <div class="ana-p1-css-rr">
                                                                                                    <span><i class="fas fa-ellipsis-h"
                                                                                                            aria-hidden="true"></i></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12">
                                                                                            <div class="ana-p1-ccs2">
                                                                                                <div></div>
                                                                                                <div class="ana-p1-csi-wrap">
                                                                                                    <div class="ana-p1-csi">
                                                                                                        <span>122 Vote</span>
                                                                                                        <span><i class="fas fa-thumbs-up"
                                                                                                                aria-hidden="true"></i></span>
                                                                                                    </div>
                                                                                                    <div class="ana-p1-csi">
                                                                                                        <span>25 Answers</span>
                                                                                                        <span><i class="fab fa-facebook-messenger"
                                                                                                                aria-hidden="true"></i></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div></div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12">
                                                                                            <div class="ana-p1-cs-inner">
                                                                                                <div></div>
                                                                                                <div
                                                                                                    class="ana-p1-cs-inner-wrap">
                                                                                                    <div class="row">
                                                                                                        <div class="col-12">
                                                                                                            <div
                                                                                                                class="ana-p1-ccs1">
                                                                                                                <div
                                                                                                                    class="ana-p1-ccs-l">
                                                                                                                    <span><img
                                                                                                                            src="http://127.0.0.1:8000/./images/saral_img2.png"></span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="ana-p1-ccs-r">
                                                                                                                    <span><input
                                                                                                                            type="text"
                                                                                                                            placeholder="an Answer was originally a solemn assertion in opposition to someone or something,"></span>
                                                                                                                    <span></span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="ana-p1-css-rr">
                                                                                                                    <span><i class="fas fa-ellipsis-h"
                                                                                                                            aria-hidden="true"></i></span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="row">
                                                                                                        <div class="col-12">
                                                                                                            <div
                                                                                                                class="ana-p1-ccs2">
                                                                                                                <div></div>
                                                                                                                <div
                                                                                                                    class="ana-p1-csi-wrap">
                                                                                                                    <div
                                                                                                                        class="ana-p1-csi">
                                                                                                                        <span>122
                                                                                                                            Vote</span>
                                                                                                                        <span><i class="fas fa-thumbs-up"
                                                                                                                                aria-hidden="true"></i></span>
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="ana-p1-csi">
                                                                                                                        <span>25
                                                                                                                            Answers</span>
                                                                                                                        <span><i class="fab fa-facebook-messenger"
                                                                                                                                aria-hidden="true"></i></span>
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
                                                                                                <div
                                                                                                    class="ana-p1-cs-inner-wrap">
                                                                                                    <div class="ana-p1-ccs">
                                                                                                        <div
                                                                                                            class="ana-p1-ccs-l">
                                                                                                            <span><img
                                                                                                                    src="http://127.0.0.1:8000/./images/saral_img2.png"></span>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="ana-p1-ccs-r">
                                                                                                            <span><input
                                                                                                                    type="text"
                                                                                                                    placeholder="Write Your Answer."></span>
                                                                                                            <span><i class="fas fa-camera"
                                                                                                                    aria-hidden="true"></i></span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div></div>
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
                                                    <div class="row qna-main-wrapper-l" style="margin-bottom:0px;">
                                                        <div class="col-12">
                                                            <div class="row" style="border-bottom: 2px solid #a1a1a1;">
                                                                <div class="col-12">
                                                                    <div class="ana-p1-wrapper">
                                                                        <div class="ana-p1-ds">
                                                                            <span><img
                                                                                    src="http://127.0.0.1:8000/./images/saral_img2.png"></span>
                                                                            <span>Pradip Dhungana</span>
                                                                        </div>
                                                                        <div class="ana-p1-ds-r">
                                                                            <span><i class="fas fa-ellipsis-h"
                                                                                    aria-hidden="true"></i></span>
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
                                                                            <span><i class="fas fa-thumbs-up"
                                                                                    aria-hidden="true"></i></span>
                                                                        </div>
                                                                        <div class="ana-p1-fb-item">
                                                                            <span>25 Answers</span>
                                                                            <span><i class="fab fa-facebook-messenger"
                                                                                    aria-hidden="true"></i></span>
                                                                        </div>
                                                                        <div class="ana-p1-fb-item">
                                                                            <span>10 Share</span>
                                                                            <span><i class="fas fa-share-alt"
                                                                                    aria-hidden="true"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row my-2">
                                                                <div class="col-12">
                                                                    
                                                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                                        <li class="nav-item" style="background-color: #b3b3b3;
                                                                        border-radius: 20px 0px 0px 20px;">
                                                                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home3" role="tab" aria-controls="pills-home" aria-selected="true">all</a>
                                                                        </li>
                                                                        <li class="nav-item" style="background-color: #b3b3b3;
                                                                        border-radius: 0px 20px 20px 0px;">
                                                                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile3" role="tab" aria-controls="pills-profile" aria-selected="false">expert</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="tab-content" id="pills-tabContent">
                                                                            <div class="tab-pane fade show active" id="pills-home3" role="tabpanel" aria-labelledby="pills-home-tab">
                                                                                <div id="" class="col-12">
                                                                                    <div class="row my-3">
                                                                                        ss
                                                                                        <div class="col-12">
                                                                                            <div class="ana-p1-ccs">
                                                                                                <div class="ana-p1-ccs-l">
                                                                                                    <span><img src="http://127.0.0.1:8000/./images/saral_img2.png"></span>
                                                                                                </div>
                                                                                                <div class="ana-p1-ccs-r">
                                                                                                    <span>
                                                                                                        <input type="text" placeholder="Write Your Answer.">
                                                                                                    </span>
                                                                                                    <span>
                                                                                                        <div class="image-upload">
                                                                                                            <label for="file-input">
                                                                                                                <i class="fas fa-camera" aria-hidden="true"></i>
                                                                                                            </label>
                                                                                                            <input id="file-input" type="file">
                                                                                                        </div>
                                                                                                    </span>
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
                                                                                                                        <span>122
                                                                                                                            Vote</span>
                                                                                                                        <span><i class="fas fa-thumbs-up" aria-hidden="true"></i></span>
                                                                                                                    </div>
                                                                                                                    <div class="ana-p1-csi">
                                                                                                                        <span>25
                                                                                                                            Answers</span>
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
                                                                                                            <span>
                                                                                                                <div class="image-upload">
                                                                                                                    <label for="file-input">
                                                                                                                        <i class="fas fa-camera" aria-hidden="true"></i>
                                                                                                                    </label>
                                                                                                                    <input id="file-input" type="file">
                                                                                                                </div>
                                                                                                            </span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div>
                                                                                                
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="tab-pane fade" id="pills-profile3" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                                                <div class="col-12">
                                                                                    <div class="row my-3">
                                                                                        4
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
                                                                                                                        <span>122
                                                                                                                            Vote</span>
                                                                                                                        <span><i class="fas fa-thumbs-up" aria-hidden="true"></i></span>
                                                                                                                    </div>
                                                                                                                    <div class="ana-p1-csi">
                                                                                                                        <span>25
                                                                                                                            Answers</span>
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
                            <div class="epanel" id="ePanel2">
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <div class="ana-tablinks-wrap" style="font-size:.9rem;">
                                            <section onclick="anaPanel(event, 'ana-panel5')" class="anaTabs ana-active">
                                                All Discussions
                                            </section>
                                            <section onclick="anaPanel(event, 'ana-panel6')" class="anaTabs">
                                                Latest Discussions
                                            </section>
                                            <section onclick="anaPanel(event, 'ana-panel7')" class="anaTabs">
                                                My Discussions
                                            </section>
                                            <section onclick="anaPanel(event, 'ana-panel8')" class="anaTabs">
                                                Trending Posts
                                            </section>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <div id="ana-panel5" class="anapanel" style="display: block;">
                                                    <div class="row qna-main-wrapper-l">
                                                        <div class="col-12">
                                                            <div class="row" style="border-bottom: 2px solid #a1a1a1;">
                                                                <div class="col-12">
                                                                    <div class="ana-p1-wrapper">
                                                                        <div class="ana-p1-ds">
                                                                            <span><img
                                                                                    src="http://127.0.0.1:8000/./images/saral_img2.png"></span>
                                                                            <span>Pradip Dhungana 5</span>
                                                                        </div>
                                                                        <div class="ana-p1-ds-r">
                                                                            <span><i class="fas fa-ellipsis-h"
                                                                                    aria-hidden="true"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row my-2">
                                                                <div class="col-12">
                                                                    <div class="ana-p1-img-wrap">
                                                                        <span>
                                                                            <img
                                                                                src="http://127.0.0.1:8000/./images/buddha_msg.png">
                                                                        </span>
                                                                    </div>
                                                                    <div class="ana-p1-img-fb">
                                                                        <div class="ana-p1-fb-item">
                                                                            <span>122 Vote</span>
                                                                            <span><i class="fas fa-thumbs-up"
                                                                                    aria-hidden="true"></i></span>
                                                                        </div>
                                                                        <div class="ana-p1-fb-item">
                                                                            <span>25 Answers</span>
                                                                            <span><i class="fab fa-facebook-messenger"
                                                                                    aria-hidden="true"></i></span>
                                                                        </div>
                                                                        <div class="ana-p1-fb-item">
                                                                            <span>10 Share</span>
                                                                            <span><i class="fas fa-share-alt"
                                                                                    aria-hidden="true"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row my-2">
                                                                <div class="col-12">
                                                                    {{-- <div class="ana-p1-cc">
                                                                    <div class="epanel-link1 ePanel-hover" onclick="expertFunction1(event, 'epanel3')">
                                                                        <span>All</span>
                                                                    </div>
                                                                    <div class="epanel-link1" onclick="expertFunction1(event, 'epanel4')">
                                                                        <span>Expert Answers</span>
                                                                    </div>
                                                                </div> --}}
                                                                    <ul class="nav nav-pills mb-3" id="pills-tab"
                                                                        role="tablist">
                                                                        <li class="nav-item" style="background-color: #b3b3b3;
                                                                        border-radius: 20px 0px 0px 20px;">
                                                                            <a class="nav-link active"
                                                                                id="pills-home-tab" data-toggle="pill"
                                                                                href="#pills-home3" role="tab"
                                                                                aria-controls="pills-home"
                                                                                aria-selected="true">all</a>
                                                                        </li>
                                                                        <li class="nav-item" style="background-color: #b3b3b3;
                                                                        border-radius: 0px 20px 20px 0px;">
                                                                            <a class="nav-link" id="pills-profile-tab"
                                                                                data-toggle="pill" href="#pills-profile3"
                                                                                role="tab" aria-controls="pills-profile"
                                                                                aria-selected="false">expert</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                {{-- for all answer img--}}
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="tab-content" id="pills-tabContent">
                                                                            <div class="tab-pane fade show active"
                                                                                id="pills-home3" role="tabpanel"
                                                                                aria-labelledby="pills-home-tab">
                                                                                <div id="" class="col-12">
                                                                                    <div class="row my-3">
                                                                                        ss
                                                                                        <div class="col-12">
                                                                                            <div class="ana-p1-ccs">
                                                                                                <div class="ana-p1-ccs-l">
                                                                                                    <span><img
                                                                                                            src="http://127.0.0.1:8000/./images/saral_img2.png"></span>
                                                                                                </div>
                                                                                                <div class="ana-p1-ccs-r">
                                                                                                    <span>
                                                                                                        <input type="text"
                                                                                                            placeholder="Write Your Answer.">
                                                                                                    </span>
                                                                                                    <span>
                                                                                                        <div class="image-upload">
                                                                                                            <label for="file-input">
                                                                                                                <i class="fas fa-camera"
                                                                                                                aria-hidden="true"></i>
                                                                                                            </label>
                                                                                                            <input id="file-input" type="file"/>
                                                                                                        </div>
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                    <div class="row my-3">
                                                                                        <div class="col-12">
                                                                                            <div class="ana-p1-ccs1">
                                                                                                <div class="ana-p1-ccs-l">
                                                                                                    <span><img
                                                                                                            src="http://127.0.0.1:8000/./images/saral_img2.png"></span>
                                                                                                </div>
                                                                                                <div class="ana-p1-ccs-r">
                                                                                                    <span><input type="text"
                                                                                                            placeholder="an Answer was originally a solemn assertion in opposition to someone or something,"></span>
                                                                                                    <span></span>
                                                                                                </div>
                                                                                                <div class="ana-p1-css-rr">
                                                                                                    <span><i class="fas fa-ellipsis-h"
                                                                                                            aria-hidden="true"></i></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12">
                                                                                            <div class="ana-p1-ccs2">
                                                                                                <div></div>
                                                                                                <div class="ana-p1-csi-wrap">
                                                                                                    <div class="ana-p1-csi">
                                                                                                        <span>122 Vote</span>
                                                                                                        <span><i class="fas fa-thumbs-up"
                                                                                                                aria-hidden="true"></i></span>
                                                                                                    </div>
                                                                                                    <div class="ana-p1-csi">
                                                                                                        <span>25 Answers</span>
                                                                                                        <span><i class="fab fa-facebook-messenger"
                                                                                                                aria-hidden="true"></i></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div></div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12">
                                                                                            <div class="ana-p1-cs-inner">
                                                                                                <div></div>
                                                                                                <div
                                                                                                    class="ana-p1-cs-inner-wrap">
                                                                                                    <div class="row">
                                                                                                        <div class="col-12">
                                                                                                            <div
                                                                                                                class="ana-p1-ccs1">
                                                                                                                <div
                                                                                                                    class="ana-p1-ccs-l">
                                                                                                                    <span><img
                                                                                                                            src="http://127.0.0.1:8000/./images/saral_img2.png"></span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="ana-p1-ccs-r">
                                                                                                                    <span><input
                                                                                                                            type="text"
                                                                                                                            placeholder="an Answer was originally a solemn assertion in opposition to someone or something,"></span>
                                                                                                                    <span></span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="ana-p1-css-rr">
                                                                                                                    <span><i class="fas fa-ellipsis-h"
                                                                                                                            aria-hidden="true"></i></span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="row">
                                                                                                        <div class="col-12">
                                                                                                            <div
                                                                                                                class="ana-p1-ccs2">
                                                                                                                <div></div>
                                                                                                                <div
                                                                                                                    class="ana-p1-csi-wrap">
                                                                                                                    <div
                                                                                                                        class="ana-p1-csi">
                                                                                                                        <span>122
                                                                                                                            Vote</span>
                                                                                                                        <span><i class="fas fa-thumbs-up"
                                                                                                                                aria-hidden="true"></i></span>
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="ana-p1-csi">
                                                                                                                        <span>25
                                                                                                                            Answers</span>
                                                                                                                        <span><i class="fab fa-facebook-messenger"
                                                                                                                                aria-hidden="true"></i></span>
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
                                                                                                <div
                                                                                                    class="ana-p1-cs-inner-wrap">
                                                                                                    <div class="ana-p1-ccs">
                                                                                                        <div
                                                                                                            class="ana-p1-ccs-l">
                                                                                                            <span><img
                                                                                                                    src="http://127.0.0.1:8000/./images/saral_img2.png"></span>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="ana-p1-ccs-r">
                                                                                                            <span><input
                                                                                                                    type="text"
                                                                                                                    placeholder="Write Your Answer."></span>
                                                                                                            <span>
                                                                                                                <div class="image-upload">
                                                                                                                    <label for="file-input">
                                                                                                                        <i class="fas fa-camera"
                                                                                                                        aria-hidden="true"></i>
                                                                                                                    </label>
                                                                                                                    <input id="file-input" type="file"/>
                                                                                                                </div>
                                                                                                            </span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div>
                                                                                                
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            {{-- for all expert answer img--}}
                                                                            <div class="tab-pane fade" id="pills-profile3"
                                                                                role="tabpanel"
                                                                                aria-labelledby="pills-profile-tab">
                                                                                <div class="col-12">
                                                                                    <div class="row my-3">
                                                                                        4
                                                                                        <div class="col-12">
                                                                                            <div class="ana-p1-ccs">
                                                                                                <div class="ana-p1-ccs-l">
                                                                                                    <span><img
                                                                                                            src="http://127.0.0.1:8000/./images/saral_img2.png"></span>
                                                                                                </div>
                                                                                                <div class="ana-p1-ccs-r">
                                                                                                    <span><input type="text"
                                                                                                            placeholder="Write Your Answer."></span>
                                                                                                    <span><i class="fas fa-camera"
                                                                                                            aria-hidden="true"></i></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row my-3">
                                                                                        <div class="col-12">
                                                                                            <div class="ana-p1-ccs1">
                                                                                                <div class="ana-p1-ccs-l">
                                                                                                    <span><img
                                                                                                            src="http://127.0.0.1:8000/./images/saral_img2.png"></span>
                                                                                                </div>
                                                                                                <div class="ana-p1-ccs-r">
                                                                                                    <span><input type="text"
                                                                                                            placeholder="an Answer was originally a solemn assertion in opposition to someone or something,"></span>
                                                                                                    <span></span>
                                                                                                </div>
                                                                                                <div class="ana-p1-css-rr">
                                                                                                    <span><i class="fas fa-ellipsis-h"
                                                                                                            aria-hidden="true"></i></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12">
                                                                                            <div class="ana-p1-ccs2">
                                                                                                <div></div>
                                                                                                <div class="ana-p1-csi-wrap">
                                                                                                    <div class="ana-p1-csi">
                                                                                                        <span>122 Vote</span>
                                                                                                        <span><i class="fas fa-thumbs-up"
                                                                                                                aria-hidden="true"></i></span>
                                                                                                    </div>
                                                                                                    <div class="ana-p1-csi">
                                                                                                        <span>25 Answers</span>
                                                                                                        <span><i class="fab fa-facebook-messenger"
                                                                                                                aria-hidden="true"></i></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div></div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12">
                                                                                            <div class="ana-p1-cs-inner">
                                                                                                <div></div>
                                                                                                <div
                                                                                                    class="ana-p1-cs-inner-wrap">
                                                                                                    <div class="row">
                                                                                                        <div class="col-12">
                                                                                                            <div
                                                                                                                class="ana-p1-ccs1">
                                                                                                                <div
                                                                                                                    class="ana-p1-ccs-l">
                                                                                                                    <span><img
                                                                                                                            src="http://127.0.0.1:8000/./images/saral_img2.png"></span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="ana-p1-ccs-r">
                                                                                                                    <span><input
                                                                                                                            type="text"
                                                                                                                            placeholder="an Answer was originally a solemn assertion in opposition to someone or something,"></span>
                                                                                                                    <span></span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="ana-p1-css-rr">
                                                                                                                    <span><i class="fas fa-ellipsis-h"
                                                                                                                            aria-hidden="true"></i></span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="row">
                                                                                                        <div class="col-12">
                                                                                                            <div
                                                                                                                class="ana-p1-ccs2">
                                                                                                                <div></div>
                                                                                                                <div
                                                                                                                    class="ana-p1-csi-wrap">
                                                                                                                    <div
                                                                                                                        class="ana-p1-csi">
                                                                                                                        <span>122
                                                                                                                            Vote</span>
                                                                                                                        <span><i class="fas fa-thumbs-up"
                                                                                                                                aria-hidden="true"></i></span>
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="ana-p1-csi">
                                                                                                                        <span>25
                                                                                                                            Answers</span>
                                                                                                                        <span><i class="fab fa-facebook-messenger"
                                                                                                                                aria-hidden="true"></i></span>
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
                                                                                                <div
                                                                                                    class="ana-p1-cs-inner-wrap">
                                                                                                    <div class="ana-p1-ccs">
                                                                                                        <div
                                                                                                            class="ana-p1-ccs-l">
                                                                                                            <span><img
                                                                                                                    src="http://127.0.0.1:8000/./images/saral_img2.png"></span>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="ana-p1-ccs-r">
                                                                                                            <span><input
                                                                                                                    type="text"
                                                                                                                    placeholder="Write Your Answer."></span>
                                                                                                            <span><i class="fas fa-camera"
                                                                                                                    aria-hidden="true"></i></span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div></div>
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
                                                    <div class="row qna-main-wrapper-l">
                                                        <div class="col-12">
                                                            <div class="row" style="border-bottom: 2px solid #a1a1a1;">
                                                                <div class="col-12">
                                                                    <div class="ana-p1-wrapper">
                                                                        <div class="ana-p1-ds">
                                                                            <span><img
                                                                                    src="http://127.0.0.1:8000/./images/saral_img2.png"></span>
                                                                            <span>Pradip Dhungana</span>
                                                                        </div>
                                                                        <div class="ana-p1-ds-r">
                                                                            <span><i class="fas fa-ellipsis-h"
                                                                                    aria-hidden="true"></i></span>
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
                                                                            <span><i class="fas fa-thumbs-up"
                                                                                    aria-hidden="true"></i></span>
                                                                        </div>
                                                                        <div class="ana-p1-fb-item">
                                                                            <span>25 Answers</span>
                                                                            <span><i class="fab fa-facebook-messenger"
                                                                                    aria-hidden="true"></i></span>
                                                                        </div>
                                                                        <div class="ana-p1-fb-item">
                                                                            <span>10 Share</span>
                                                                            <span><i class="fas fa-share-alt"
                                                                                    aria-hidden="true"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row my-2">
                                                                <div class="col-12">
                                                                    
                                                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                                        <li class="nav-item" style="background-color: #b3b3b3;
                                                                        border-radius: 20px 0px 0px 20px;">
                                                                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home3" role="tab" aria-controls="pills-home" aria-selected="true">all</a>
                                                                        </li>
                                                                        <li class="nav-item" style="background-color: #b3b3b3;
                                                                        border-radius: 0px 20px 20px 0px;">
                                                                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile3" role="tab" aria-controls="pills-profile" aria-selected="false">expert</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="tab-content" id="pills-tabContent">
                                                                            <div class="tab-pane fade show active" id="pills-home3" role="tabpanel" aria-labelledby="pills-home-tab">
                                                                                <div id="" class="col-12">
                                                                                    <div class="row my-3">
                                                                                        ss
                                                                                        <div class="col-12">
                                                                                            <div class="ana-p1-ccs">
                                                                                                <div class="ana-p1-ccs-l">
                                                                                                    <span><img src="http://127.0.0.1:8000/./images/saral_img2.png"></span>
                                                                                                </div>
                                                                                                <div class="ana-p1-ccs-r">
                                                                                                    <span>
                                                                                                        <input type="text" placeholder="Write Your Answer.">
                                                                                                    </span>
                                                                                                    <span>
                                                                                                        <div class="image-upload">
                                                                                                            <label for="file-input">
                                                                                                                <i class="fas fa-camera" aria-hidden="true"></i>
                                                                                                            </label>
                                                                                                            <input id="file-input" type="file">
                                                                                                        </div>
                                                                                                    </span>
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
                                                                                                                        <span>122
                                                                                                                            Vote</span>
                                                                                                                        <span><i class="fas fa-thumbs-up" aria-hidden="true"></i></span>
                                                                                                                    </div>
                                                                                                                    <div class="ana-p1-csi">
                                                                                                                        <span>25
                                                                                                                            Answers</span>
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
                                                                                                            <span>
                                                                                                                <div class="image-upload">
                                                                                                                    <label for="file-input">
                                                                                                                        <i class="fas fa-camera" aria-hidden="true"></i>
                                                                                                                    </label>
                                                                                                                    <input id="file-input" type="file">
                                                                                                                </div>
                                                                                                            </span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div>
                                                                                                
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="tab-pane fade" id="pills-profile3" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                                                <div class="col-12">
                                                                                    <div class="row my-3">
                                                                                        4
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
                                                                                                                        <span>122
                                                                                                                            Vote</span>
                                                                                                                        <span><i class="fas fa-thumbs-up" aria-hidden="true"></i></span>
                                                                                                                    </div>
                                                                                                                    <div class="ana-p1-csi">
                                                                                                                        <span>25
                                                                                                                            Answers</span>
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
                                                </div>
                                                <div id="ana-panel6" class="anapanel">
                                                    panel 6
                                                </div>
                                                <div id="ana-panel7" class="anapanel">
                                                    panel7
                                                </div>
                                                <div id="ana-panel8" class="anapanel">
                                                    panel8
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="ana-r-om-top">
                                    <div class="ana-r-om-top-img">
                                    <span>
                                        <img src="http://127.0.0.1:8000/images/saral_img1.png">
                                    </span>
                                    </div>
                                    <div class="ana-r-om-top-text">
                                    <span></span>
                                    <span>Birendra Bhatta</span>
                                    <span><i class="fas fa-thumbs-up" aria-hidden="true"></i></span>
                                    <span>42 Ask Question</span>
                                    <span><i class="fas fa-thumbs-up" aria-hidden="true"></i></span>
                                    <span>12 Question</span>
                                    <span><i class="fas fa-thumbs-up" aria-hidden="true"></i></span>
                                    <span>12000 Points</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="ana-r-om-heading">
                                    <span>Online Member</span>
                                </div>
                                <div class="ana-r-om-body">
                                    <span class="green-dot"></span>
                                    <span>Birendra Bhatta</span>
                                    <span class="green-dot"></span>
                                    <span>Birendra Bhatta</span>
                                    <span class="green-dot"></span>
                                    <span>Birendra Bhatta</span>
                                    <span class="green-dot"></span>
                                    <span>Birendra Bhatta</span>
                                    <span class="green-dot"></span>
                                    <span>Birendra Bhatta</span>
                                    <span class="green-dot"></span>
                                    <span>Birendra Bhatta</span>
                                    <span class="green-dot"></span>
                                    <span>Birendra Bhatta</span>
                                    <span class="green-dot"></span>
                                    <span>Birendra Bhatta</span>
                                    <span class="green-dot"></span>
                                    <span>Birendra Bhatta</span>
                                    <span class="green-dot"></span>
                                    <span>Birendra Bhatta</span>
                                    <span class="green-dot"></span>
                                    <span>Birendra Bhatta</span>
                                    <span class="green-dot"></span>
                                    <span>Birendra Bhatta</span>
                                    <span class="green-dot"></span>
                                    <span>Birendra Bhatta</span>
                                </div>
                            </div>
                            <div class="col-12 my-5">
                            <div class="ana-r-om-heading">
                                    <span>All Expert</span>
                            </div>
                            <div class="ana-r-om-body">
                                <span class="gray-dot"></span>
                                <span>Birendra Bhatta</span>
                                <span class="green-dot"></span>
                                <span>Birendra Bhatta</span>
                                <span class="gray-dot"></span>
                                <span>Birendra Bhatta</span>
                                <span class="green-dot"></span>
                                <span>Birendra Bhatta</span>
                                <span class="gray-dot"></span>
                                <span>Birendra Bhatta</span>
                                <span class="green-dot"></span>
                                <span>Birendra Bhatta</span>
                                <span class="gray-dot"></span>
                                <span>Birendra Bhatta</span>
                                <span class="green-dot"></span>
                                <span>Birendra Bhatta</span>
                                <span class="gray-dot"></span>
                                <span>Birendra Bhatta</span>
                                <span class="green-dot"></span>
                                <span>Birendra Bhatta</span>
                                <span class="gray-dot"></span>
                                <span>Birendra Bhatta</span>
                                <span class="green-dot"></span>
                                <span>Birendra Bhatta</span>
          
                            </div>
                        </div>
                        <div class="col-12 my-5">
                            <div class="ana-r-rt-wrap">
                                <div class="ana-r-rt-heading">
                                    <span>Related Topics</span>
                                </div>
                                <div class="ana-r-rt-body">
                                    <span>Entrance</span>
                                    <span>Subjects</span>
                                    <span>Colleges</span>
                                    <span>University</span>
                                    <span>Colleges</span>
                                    <span>University</span>
                                    <span>Entrance</span>
                                    <span>Subjects</span>
                                    <span>Colleges</span>
                                    <span>University</span>
                                    <span>Colleges</span>
                                    <span>University</span>
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
