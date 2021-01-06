@extends('fontend.index3')
@section('contents')

<div class="container-fluid" style="background-color: #e9ecef;padding-left:0px;padding-right:0px;">
    <div class="row __coll-des-view">
        <div class="col-12">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Mock Test</a></li>
                <li class="breadcrumb-item active" aria-current="page">paper</li>
            </ul>
        </div>
    </div>
</div>
<div class="container-fluid" style="background-color:#0b46a7">
    <div class="row py-2">
        <div class="col-12 text-center mockSearch-heading">
            <span>Tribhuvan University (BSc.CSIT Entrance)</span>
            {{-- <span>BSc.CSIT Entrance</span> --}}
        </div>
    </div>
</div>
<div class="container-fluid" style="background-color:#efefef;">
        <div class="row py-5 mx-3">
            <div class="col-12">
                {{-- <div class="row">
                    <div class="col-12">
                        <div class="row provinces-middle my-3">
                            <div class="col-12">
                                <div style="float:right;">
                                    <span>Sort By</span>
                                    <span>
                                        <select class="js-example-basic-single" name="state">
                                            <option value="AL">Alabama</option>
                                              ...
                                            <option value="WY">Wyoming</option>
                                          </select>
                                    </span>
                                    <img src="http://127.0.0.1:8000/images/college_logo1.png">
                                    <span>BY Type</span>
                                    <img src="http://127.0.0.1:8000/images/college_logo1.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col-12">
                        <div class="row mx-3 mb-3 py-3" style="background-color:#ffffff">
                            <div class="col-12 saral-entrance">
                                <span style="margin-right:15px;">Sort by:</span>
                                <select class="mock-drop" name="Find-school" style="width:150px; border-radius:20px;margin-right:15px;">
                                    <option value="pokhera" selected="true" disabled="disabled">By Date</option>
                                    <option value="kathmandu">New</option>
                                    <option value="kathmandu">Oldest</option>
                                </select>
                                <select class="mock-drop1" name="Find-school" style="width:150px; border-radius:20px;">
                                    <option value="pokhera" selected="true" disabled="disabled">By Type</option>
                                    <option value="kathmandu">Mock Test</option>
                                    <option value="kathmandu">Old Test</option>
                                </select>
                                {{-- <div class="mocksearch-top-banner">
                                    <span>Shor by:</span>
                                    <span>
                                        <select class="mock-drop" name="Find-school" style="width:150px; border-radius:20px;">
                                            <option value="pokhera" selected="true" disabled="disabled">By Date</option>
                                            <option value="kathmandu">New</option>
                                            <option value="kathmandu">Oldest</option>
                                        </select>
                                    </span>
                                    <span>
                                        <div class="col-12" id="home-location" style="width:100%;">
                                            <select class="home-location" name="top-college" style="width:250px; border-radius:20px; padding:20px;">
                                                <option value="pokhera">Pokhera</option>
                                                <option value="kathmandu">Kathmandu</option>
                                                <option value="kathmandu">Bhaktapur</option>
                                            </select>
                                    </span>
                                    <span>
                                        <select class="mock-drop1" name="Find-school" style="width:150px; border-radius:20px;">
                                            <option value="pokhera" selected="true" disabled="disabled">By Type</option>
                                            <option value="kathmandu">Mock Test</option>
                                            <option value="kathmandu">Old Test</option>
                                        </select>
                                    </span>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-12 mb-2">
                        <div class="row mx-3" style="background-color:#ffffff; box-shadow:0px 0px 15px rgba(0,0,0,0.7)" >
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="mts-item-wrap">
                                            <div class="mts-item-top">
                                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                            <span>Mock Test Paper-I</span>
                                            </div>
                                            <div class="mts-item-body">
                                                <div class="mts-item-body-in">
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>2 hr</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>100 Questions</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>BSc. CSIT</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>200 Paricipation</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>95 High Score</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>Pokhera University</span>
                                                </div>
                                                <div class="mts-item-bottom">
                                                    <span>Mock Test Paper - I</span>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="mts-item-wrap">
                                            <div class="mts-item-top">
                                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                            <span>Mock Test Paper-I</span>
                                            </div>
                                            <div class="mts-item-body">
                                                <div class="mts-item-body-in">
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>2 hr</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>100 Questions</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>BSc. CSIT</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>200 Paricipation</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>95 High Score</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>Pokhera University</span>
                                                </div>
                                                <div class="mts-item-bottom">
                                                    <span>Mock Test Paper - I</span>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="mts-item-wrap">
                                            <div class="mts-item-top">
                                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                            <span>Mock Test Paper-I</span>
                                            </div>
                                            <div class="mts-item-body">
                                                <div class="mts-item-body-in">
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>2 hr</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>100 Questions</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>BSc. CSIT</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>200 Paricipation</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>95 High Score</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>Pokhera University</span>
                                                </div>
                                                <div class="mts-item-bottom">
                                                    <span>Mock Test Paper - I</span>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="mts-item-wrap">
                                            <div class="mts-item-top">
                                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                            <span>Mock Test Paper-I</span>
                                            </div>
                                            <div class="mts-item-body">
                                                <div class="mts-item-body-in">
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>2 hr</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>100 Questions</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>BSc. CSIT</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>200 Paricipation</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>95 High Score</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>Pokhera University</span>
                                                </div>
                                                <div class="mts-item-bottom">
                                                    <span>Mock Test Paper - I</span>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="mts-item-wrap">
                                            <div class="mts-item-top">
                                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                            <span>Mock Test Paper-I</span>
                                            </div>
                                            <div class="mts-item-body">
                                                <div class="mts-item-body-in">
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>2 hr</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>100 Questions</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>BSc. CSIT</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>200 Paricipation</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>95 High Score</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>Pokhera University</span>
                                                </div>
                                                <div class="mts-item-bottom">
                                                    <span>Mock Test Paper - I</span>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="mts-item-wrap">
                                            <div class="mts-item-top">
                                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                            <span>Mock Test Paper-I</span>
                                            </div>
                                            <div class="mts-item-body">
                                                <div class="mts-item-body-in">
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>2 hr</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>100 Questions</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>BSc. CSIT</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>200 Paricipation</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>95 High Score</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>Pokhera University</span>
                                                </div>
                                                <div class="mts-item-bottom">
                                                    <span>Mock Test Paper - I</span>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="mts-item-wrap">
                                            <div class="mts-item-top">
                                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                            <span>Mock Test Paper-I</span>
                                            </div>
                                            <div class="mts-item-body">
                                                <div class="mts-item-body-in">
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>2 hr</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>100 Questions</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>BSc. CSIT</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>200 Paricipation</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>95 High Score</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>Pokhera University</span>
                                                </div>
                                                <div class="mts-item-bottom">
                                                    <span>Mock Test Paper - I</span>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="mts-item-wrap">
                                            <div class="mts-item-top">
                                            <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                            <span>Mock Test Paper-I</span>
                                            </div>
                                            <div class="mts-item-body">
                                                <div class="mts-item-body-in">
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>2 hr</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>100 Questions</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>BSc. CSIT</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>200 Paricipation</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>95 High Score</span>
                                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                                    <span>Pokhera University</span>
                                                </div>
                                                <div class="mts-item-bottom">
                                                    <span>Mock Test Paper - I</span>
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
@endsection