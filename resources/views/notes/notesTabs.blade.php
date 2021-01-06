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
            <span>Notes</span>
        </div>
    </div>
</div>

<div class="container-fluid" style="background-color:#efefef">
    <div class="row  py-md-4 py-2 mx-3">
        <div class="col-lg-2 col-md-3 col-12">
        <div class="row notes-tabs-section">
            <div class="col-12 p-md-0 p-0">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-subject" role="tab" aria-controls="v-pills-home" aria-selected="true">Subject Overviews</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-syllabus" role="tab" aria-controls="v-pills-profile" aria-selected="false">Syllabus</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-text-books" role="tab" aria-controls="v-pills-messages" aria-selected="false">Text Books</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-Notes" role="tab" aria-controls="v-pills-settings" aria-selected="false">Notes</a>
                    <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-o-question" role="tab" aria-controls="v-pills-home" aria-selected="true">Old Questions</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-solution" role="tab" aria-controls="v-pills-profile" aria-selected="false">Solutions</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-c-question" role="tab" aria-controls="v-pills-messages" aria-selected="false">College Questions</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-videos" role="tab" aria-controls="v-pills-settings" aria-selected="false">Videos</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-assignments" role="tab" aria-controls="v-pills-settings" aria-selected="false">Assignments</a>
                    </div>
            </div>
        </div>
        </div>
        <div class="col-lg-10 col-md-9 col-12 mt-md-0 mt-5">
        <div class="row">
            <div class="col-12">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-subject" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="row" style="background-color:#d2caca;">
                            <div class="col-12">
                                <div class="row" style="margin:20px 0px 60px 0px;">
                                    <div class="col-lg-4 col-md-6 col-12 note-tp1-img">
                                        <img src="http://127.0.0.1:8000/./images/cprogramming.png">
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="note-tp1-mid-sec">
                                            <span>C-Programming</span>
                                            <span>Course Code:(CSC-101)</span>
                                            <span>Stream: Bsc.CSIT</span>
                                            <span>Semester/Year:First Semester</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12" style="display:grid;align-items:end;">
                                        <div class="note-tp1-end-sec">
                                            <div>1701 Share</div>
                                            <div class="social-icon-wrap">
                                                <span><i class="fab fa-facebook" aria-hidden="true"></i></span>
                                                <span><i class="fab fa-instagram-square" aria-hidden="true"></i></span>
                                                <span><i class="fab fa-youtube" aria-hidden="true"></i></span>
                                                <span><i class="fab fa-twitter" aria-hidden="true"></i></span>
                                                <span><i class="fab fa-product-hunt" aria-hidden="true"></i></span>
                                                <span><i class="fab fa-linkedin-in" aria-hidden="true"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 note-tp1-paragrap">
                                <p>
                                Cras rhoncus turpis ante. Vivamus facilisis massa id dapibus vestibulum. Duis faucibus venenatis efficitur. Vivamus lacus lacus,
                                rhoncus vel metus sit amet, pharetra facilisis eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames a
                                c turpis egestas. Sed ut pharetra felis. Duis consequat ante ex, id egestas nisi pellentesque vel.Cras rhoncus turpis ante. Vivamus
                                facilisis massa id dapibus vestibulum. Duis faucibus venenatis efficitur. Vivamus lacus lacus,rhoncus vel metus sit amet, pharetr
                                a facilisis eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed ut pharetra feli
                                s. Duis consequat ante ex, id egestas nisi pellentesque vel. 
                                </p>
                                <p>
                                Cras rhoncus turpis ante. Vivamus facilisis massa id dapibus vestibulum. Duis faucibus venenatis efficitur. Vivamus lacus lacus,
                                rhoncus vel metus sit amet, pharetra facilisis eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames a
                                c turpis egestas. Sed ut pharetra felis. Duis consequat ante ex, id egestas nisi pellentesque vel.Cras rhoncus turpis ante. Vivamus
                                facilisis massa id dapibus vestibulum. Duis faucibus venenatis efficitur. Vivamus lacus lacus,rhoncus vel metus sit amet, pharetr
                                a facilisis eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed ut pharetra feli
                                s. Duis consequat ante ex, id egestas nisi pellentesque vel. 
                                </p>
                                <p>
                                Cras rhoncus turpis ante. Vivamus facilisis massa id dapibus vestibulum. Duis faucibus venenatis efficitur. Vivamus lacus lacus,
                                rhoncus vel metus sit amet, pharetra facilisis eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames a
                                c turpis egestas. Sed ut pharetra felis. Duis consequat ante ex, id egestas nisi pellentesque vel.Cras rhoncus turpis ante. Vivamus
                                facilisis massa id dapibus vestibulum. Duis faucibus venenatis efficitur. Vivamus lacus lacus,rhoncus vel metus sit amet, pharetr
                                a facilisis eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed ut pharetra feli
                                s. Duis consequat ante ex, id egestas nisi pellentesque vel. 
                                </p>
                                <p>
                                Cras rhoncus turpis ante. Vivamus facilisis massa id dapibus vestibulum. Duis faucibus venenatis efficitur. Vivamus lacus lacus,
                                rhoncus vel metus sit amet, pharetra facilisis eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames a
                                c turpis egestas. Sed ut pharetra felis. Duis consequat ante ex, id egestas nisi pellentesque vel.Cras rhoncus turpis ante. Vivamus
                                facilisis massa id dapibus vestibulum. Duis faucibus venenatis efficitur. Vivamus lacus lacus,rhoncus vel metus sit amet, pharetr
                                a facilisis eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed ut pharetra feli
                                s. Duis consequat ante ex, id egestas nisi pellentesque vel. 
                                </p>
                            </div>
                        </div> 
                    </div>
                    <div class="tab-pane fade" id="v-pills-syllabus" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div class="row">
                            <div class="col-12 note-tp2-heading">
                                <span>Syllabus</span>
                            </div>
                            <div class="col-12 note-tp2-btn">
                                <div>
                                    <button class="btn btn-blu"><img src="http://127.0.0.1:8000/images/college_logo1.png">Download</button>
                                    <button class="btn btn-rd"><img src="http://127.0.0.1:8000/images/college_logo1.png">Share</button>
                                </div>
                            </div>
                            <div class="col-12 note-tp2-para">
                                <p>
                                    Cras rhoncus turpis ante. Vivamus facilisis massa id dapibus vestibulum. Duis faucibus venenatis efficitur. Vivamus lacus lacus,
                                    rhoncus vel metus sit amet, pharetra facilisis eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames a
                                    c turpis egestas. Sed ut pharetra felis. Duis consequat ante ex, id egestas nisi pellentesque vel.Cras rhoncus turpis ante. Vivamus
                                    facilisis massa id dapibus vestibulum. Duis faucibus venenatis efficitur. Vivamus lacus lacus,rhoncus vel metus sit amet, pharetr
                                    a facilisis eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed ut pharetra feli
                                    s. Duis consequat ante ex, id egestas nisi pellentesque vel. 
                                </p>
                                <p>
                                    Cras rhoncus turpis ante. Vivamus facilisis massa id dapibus vestibulum. Duis faucibus venenatis efficitur. Vivamus lacus lacus,
                                    rhoncus vel metus sit amet, pharetra facilisis eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames a
                                    c turpis egestas. Sed ut pharetra felis. Duis consequat ante ex, id egestas nisi pellentesque vel.Cras rhoncus turpis ante. Vivamus
                                    facilisis massa id dapibus vestibulum. Duis faucibus venenatis efficitur. Vivamus lacus lacus,rhoncus vel metus sit amet, pharetr
                                    a facilisis eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed ut pharetra feli
                                    s. Duis consequat ante ex, id egestas nisi pellentesque vel. 
                                </p>
                                <p>
                                    Cras rhoncus turpis ante. Vivamus facilisis massa id dapibus vestibulum. Duis faucibus venenatis efficitur. Vivamus lacus lacus,
                                    rhoncus vel metus sit amet, pharetra facilisis eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames a
                                    c turpis egestas. Sed ut pharetra felis. Duis consequat ante ex, id egestas nisi pellentesque vel.Cras rhoncus turpis ante. Vivamus
                                    facilisis massa id dapibus vestibulum. Duis faucibus venenatis efficitur. Vivamus lacus lacus,rhoncus vel metus sit amet, pharetr
                                    a facilisis eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed ut pharetra feli
                                    s. Duis consequat ante ex, id egestas nisi pellentesque vel. 
                                </p>
                                <p>
                                    Cras rhoncus turpis ante. Vivamus facilisis massa id dapibus vestibulum. Duis faucibus venenatis efficitur. Vivamus lacus lacus,
                                    rhoncus vel metus sit amet, pharetra facilisis eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames a
                                    c turpis egestas. Sed ut pharetra felis. Duis consequat ante ex, id egestas nisi pellentesque vel.Cras rhoncus turpis ante. Vivamus
                                    facilisis massa id dapibus vestibulum. Duis faucibus venenatis efficitur. Vivamus lacus lacus,rhoncus vel metus sit amet, pharetr
                                    a facilisis eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed ut pharetra feli
                                    s. Duis consequat ante ex, id egestas nisi pellentesque vel. 
                                </p>
                            </div>
                        </div> 
                    </div>
                    <div class="tab-pane fade" id="v-pills-text-books" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="notices-whole-wrap">
                                    <div style="background-color:#d80002;"></div>
                                    <div class="notices-top-img">
                                    <img src="http://127.0.0.1:8000/./images/cprogramming.png">
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>C-Program(CSC-101)</span>
                                            <span>Tribhuvan University</span>
                                            <span>BSc. CSIT</span>
                                            <span>First Semester</span>
                                            <span>Auther: Pradip Dhungana
                                        </span>
                                        </div>
                                        <div class="notices-end-detail" style="justify-items:end;margin-top:-20px;">
                                            <span></span>
                                            <span style="padding-right:5px;">
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
                                    <img src="http://127.0.0.1:8000/./images/cprogramming.png">
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>C-Program(CSC-101)</span>
                                            <span>Tribhuvan University</span>
                                            <span>BSc. CSIT</span>
                                            <span>First Semester</span>
                                            <span>Auther: Pradip Dhungana
                                        </span>
                                        </div>
                                        <div class="notices-end-detail" style="justify-items:end;margin-top:-20px;">
                                            <span></span>
                                            <span style="padding-right:5px;">
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
                                    <img src="http://127.0.0.1:8000/./images/cprogramming.png">
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>C-Program(CSC-101)</span>
                                            <span>Tribhuvan University</span>
                                            <span>BSc. CSIT</span>
                                            <span>First Semester</span>
                                            <span>Auther: Pradip Dhungana
                                        </span>
                                        </div>
                                        <div class="notices-end-detail" style="justify-items:end;margin-top:-20px;">
                                            <span></span>
                                            <span style="padding-right:5px;">
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
                                    <img src="http://127.0.0.1:8000/./images/cprogramming.png">
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>C-Program(CSC-101)</span>
                                            <span>Tribhuvan University</span>
                                            <span>BSc. CSIT</span>
                                            <span>First Semester</span>
                                            <span>Auther: Pradip Dhungana
                                        </span>
                                        </div>
                                        <div class="notices-end-detail" style="justify-items:end;margin-top:-20px;">
                                            <span></span>
                                            <span style="padding-right:5px;">
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
                                    <img src="http://127.0.0.1:8000/./images/cprogramming.png">
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>C-Program(CSC-101)</span>
                                            <span>Tribhuvan University</span>
                                            <span>BSc. CSIT</span>
                                            <span>First Semester</span>
                                            <span>Auther: Pradip Dhungana
                                        </span>
                                        </div>
                                        <div class="notices-end-detail" style="justify-items:end;margin-top:-20px;">
                                            <span></span>
                                            <span style="padding-right:5px;">
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
                                    <img src="http://127.0.0.1:8000/./images/cprogramming.png">
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>C-Program(CSC-101)</span>
                                            <span>Tribhuvan University</span>
                                            <span>BSc. CSIT</span>
                                            <span>First Semester</span>
                                            <span>Auther: Pradip Dhungana
                                        </span>
                                        </div>
                                        <div class="notices-end-detail" style="justify-items:end;margin-top:-20px;">
                                            <span></span>
                                            <span style="padding-right:5px;">
                                                <img src="http://127.0.0.1:8000/images/college_logo1.png">
                                                200 views
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-Notes" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="notices-whole-wrap">
                                    <div style="background-color:#d80002;"></div>
                                    <div class="notices-top-img">
                                    <img src="http://127.0.0.1:8000/./images/cprogramming.png">
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>C-Program(CSC-101)</span>
                                            <span>Tribhuvan University</span>
                                            <span>BSc. CSIT</span>
                                            <span>First Semester</span>
                                            <span>Auther: Pradip Dhungana
                                        </span>
                                        </div>
                                        <div class="notices-end-detail" style="justify-items:end;margin-top:-20px;">
                                            <span></span>
                                            <span style="padding-right:5px;">
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
                                    <img src="http://127.0.0.1:8000/./images/cprogramming.png">
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>C-Program(CSC-101)</span>
                                            <span>Tribhuvan University</span>
                                            <span>BSc. CSIT</span>
                                            <span>First Semester</span>
                                            <span>Auther: Pradip Dhungana
                                        </span>
                                        </div>
                                        <div class="notices-end-detail" style="justify-items:end;margin-top:-20px;">
                                            <span></span>
                                            <span style="padding-right:5px;">
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
                                    <img src="http://127.0.0.1:8000/./images/cprogramming.png">
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>C-Program(CSC-101)</span>
                                            <span>Tribhuvan University</span>
                                            <span>BSc. CSIT</span>
                                            <span>First Semester</span>
                                            <span>Auther: Pradip Dhungana
                                        </span>
                                        </div>
                                        <div class="notices-end-detail" style="justify-items:end;margin-top:-20px;">
                                            <span></span>
                                            <span style="padding-right:5px;">
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
                                    <img src="http://127.0.0.1:8000/./images/cprogramming.png">
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>C-Program(CSC-101)</span>
                                            <span>Tribhuvan University</span>
                                            <span>BSc. CSIT</span>
                                            <span>First Semester</span>
                                            <span>Auther: Pradip Dhungana
                                        </span>
                                        </div>
                                        <div class="notices-end-detail" style="justify-items:end;margin-top:-20px;">
                                            <span></span>
                                            <span style="padding-right:5px;">
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
                                    <img src="http://127.0.0.1:8000/./images/cprogramming.png">
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>C-Program(CSC-101)</span>
                                            <span>Tribhuvan University</span>
                                            <span>BSc. CSIT</span>
                                            <span>First Semester</span>
                                            <span>Auther: Pradip Dhungana
                                        </span>
                                        </div>
                                        <div class="notices-end-detail" style="justify-items:end;margin-top:-20px;">
                                            <span></span>
                                            <span style="padding-right:5px;">
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
                                    <img src="http://127.0.0.1:8000/./images/cprogramming.png">
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>C-Program(CSC-101)</span>
                                            <span>Tribhuvan University</span>
                                            <span>BSc. CSIT</span>
                                            <span>First Semester</span>
                                            <span>Auther: Pradip Dhungana
                                        </span>
                                        </div>
                                        <div class="notices-end-detail" style="justify-items:end;margin-top:-20px;">
                                            <span></span>
                                            <span style="padding-right:5px;">
                                                <img src="http://127.0.0.1:8000/images/college_logo1.png">
                                                200 views
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-o-question" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="notices-whole-wrap">
                                    <div style="background-color:#d80002;"></div>
                                    <div class="notices-top-img">
                                    <img src="http://127.0.0.1:8000/./images/cprogramming.png">
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>C-Program(CSC-101)</span>
                                            <span>Tribhuvan University</span>
                                            <span>BSc. CSIT</span>
                                            <span>First Semester</span>
                                            <span>Auther: Pradip Dhungana
                                        </span>
                                        </div>
                                        <div class="notices-end-detail" style="justify-items:end;margin-top:-20px;">
                                            <span></span>
                                            <span style="padding-right:5px;">
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
                                    <img src="http://127.0.0.1:8000/./images/cprogramming.png">
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>C-Program(CSC-101)</span>
                                            <span>Tribhuvan University</span>
                                            <span>BSc. CSIT</span>
                                            <span>First Semester</span>
                                            <span>Auther: Pradip Dhungana
                                        </span>
                                        </div>
                                        <div class="notices-end-detail" style="justify-items:end;margin-top:-20px;">
                                            <span></span>
                                            <span style="padding-right:5px;">
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
                                    <img src="http://127.0.0.1:8000/./images/cprogramming.png">
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>C-Program(CSC-101)</span>
                                            <span>Tribhuvan University</span>
                                            <span>BSc. CSIT</span>
                                            <span>First Semester</span>
                                            <span>Auther: Pradip Dhungana
                                        </span>
                                        </div>
                                        <div class="notices-end-detail" style="justify-items:end;margin-top:-20px;">
                                            <span></span>
                                            <span style="padding-right:5px;">
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
                                    <img src="http://127.0.0.1:8000/./images/cprogramming.png">
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>C-Program(CSC-101)</span>
                                            <span>Tribhuvan University</span>
                                            <span>BSc. CSIT</span>
                                            <span>First Semester</span>
                                            <span>Auther: Pradip Dhungana
                                        </span>
                                        </div>
                                        <div class="notices-end-detail" style="justify-items:end;margin-top:-20px;">
                                            <span></span>
                                            <span style="padding-right:5px;">
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
                                    <img src="http://127.0.0.1:8000/./images/cprogramming.png">
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>C-Program(CSC-101)</span>
                                            <span>Tribhuvan University</span>
                                            <span>BSc. CSIT</span>
                                            <span>First Semester</span>
                                            <span>Auther: Pradip Dhungana
                                        </span>
                                        </div>
                                        <div class="notices-end-detail" style="justify-items:end;margin-top:-20px;">
                                            <span></span>
                                            <span style="padding-right:5px;">
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
                                    <img src="http://127.0.0.1:8000/./images/cprogramming.png">
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>C-Program(CSC-101)</span>
                                            <span>Tribhuvan University</span>
                                            <span>BSc. CSIT</span>
                                            <span>First Semester</span>
                                            <span>Auther: Pradip Dhungana
                                        </span>
                                        </div>
                                        <div class="notices-end-detail" style="justify-items:end;margin-top:-20px;">
                                            <span></span>
                                            <span style="padding-right:5px;">
                                                <img src="http://127.0.0.1:8000/images/college_logo1.png">
                                                200 views
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-solution" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="notices-whole-wrap">
                                    <div style="background-color:#d80002;"></div>
                                    <div class="notices-top-img">
                                    <img src="http://127.0.0.1:8000/./images/cprogramming.png">
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>C-Program(CSC-101)</span>
                                            <span>Tribhuvan University</span>
                                            <span>BSc. CSIT</span>
                                            <span>First Semester</span>
                                            <span>Auther: Pradip Dhungana
                                        </span>
                                        </div>
                                        <div class="notices-end-detail" style="justify-items:end;margin-top:-20px;">
                                            <span></span>
                                            <span style="padding-right:5px;">
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
                                    <img src="http://127.0.0.1:8000/./images/cprogramming.png">
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>C-Program(CSC-101)</span>
                                            <span>Tribhuvan University</span>
                                            <span>BSc. CSIT</span>
                                            <span>First Semester</span>
                                            <span>Auther: Pradip Dhungana
                                        </span>
                                        </div>
                                        <div class="notices-end-detail" style="justify-items:end;margin-top:-20px;">
                                            <span></span>
                                            <span style="padding-right:5px;">
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
                                    <img src="http://127.0.0.1:8000/./images/cprogramming.png">
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>C-Program(CSC-101)</span>
                                            <span>Tribhuvan University</span>
                                            <span>BSc. CSIT</span>
                                            <span>First Semester</span>
                                            <span>Auther: Pradip Dhungana
                                        </span>
                                        </div>
                                        <div class="notices-end-detail" style="justify-items:end;margin-top:-20px;">
                                            <span></span>
                                            <span style="padding-right:5px;">
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
                                    <img src="http://127.0.0.1:8000/./images/cprogramming.png">
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>C-Program(CSC-101)</span>
                                            <span>Tribhuvan University</span>
                                            <span>BSc. CSIT</span>
                                            <span>First Semester</span>
                                            <span>Auther: Pradip Dhungana
                                        </span>
                                        </div>
                                        <div class="notices-end-detail" style="justify-items:end;margin-top:-20px;">
                                            <span></span>
                                            <span style="padding-right:5px;">
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
                                    <img src="http://127.0.0.1:8000/./images/cprogramming.png">
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>C-Program(CSC-101)</span>
                                            <span>Tribhuvan University</span>
                                            <span>BSc. CSIT</span>
                                            <span>First Semester</span>
                                            <span>Auther: Pradip Dhungana
                                        </span>
                                        </div>
                                        <div class="notices-end-detail" style="justify-items:end;margin-top:-20px;">
                                            <span></span>
                                            <span style="padding-right:5px;">
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
                                    <img src="http://127.0.0.1:8000/./images/cprogramming.png">
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>C-Program(CSC-101)</span>
                                            <span>Tribhuvan University</span>
                                            <span>BSc. CSIT</span>
                                            <span>First Semester</span>
                                            <span>Auther: Pradip Dhungana
                                        </span>
                                        </div>
                                        <div class="notices-end-detail" style="justify-items:end;margin-top:-20px;">
                                            <span></span>
                                            <span style="padding-right:5px;">
                                                <img src="http://127.0.0.1:8000/images/college_logo1.png">
                                                200 views
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-c-question" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="notices-whole-wrap">
                                    <div style="background-color:#d80002;"></div>
                                    <div class="notices-top-img">
                                    <img src="http://127.0.0.1:8000/./images/cprogramming.png">
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>C-Program(CSC-101)</span>
                                            <span>Tribhuvan University</span>
                                            <span>Contributer: Pradip Dhungana</span>
                                            <span>College: Amrit Science Campus</span>
                                            <span>First Semester</span>
                                            <span>Bsc.CSIT</span>
                                        </div>
                                        <div class="notices-end-detail" style="justify-items:end;margin-top:-20px;">
                                            <span></span>
                                            <span style="padding-right:5px;">
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
                                    <img src="http://127.0.0.1:8000/./images/cprogramming.png">
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>C-Program(CSC-101)</span>
                                            <span>Tribhuvan University</span>
                                            <span>Contributer: Pradip Dhungana</span>
                                            <span>College: Amrit Science Campus</span>
                                            <span>First Semester</span>
                                            <span>Bsc.CSIT</span>
                                        </div>
                                        <div class="notices-end-detail" style="justify-items:end;margin-top:-20px;">
                                            <span></span>
                                            <span style="padding-right:5px;">
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
                                    <img src="http://127.0.0.1:8000/./images/cprogramming.png">
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>C-Program(CSC-101)</span>
                                            <span>Tribhuvan University</span>
                                            <span>Contributer: Pradip Dhungana</span>
                                            <span>College: Amrit Science Campus</span>
                                            <span>First Semester</span>
                                            <span>Bsc.CSIT</span>
                                        </div>
                                        <div class="notices-end-detail" style="justify-items:end;margin-top:-20px;">
                                            <span></span>
                                            <span style="padding-right:5px;">
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
                                    <img src="http://127.0.0.1:8000/./images/cprogramming.png">
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>C-Program(CSC-101)</span>
                                            <span>Tribhuvan University</span>
                                            <span>Contributer: Pradip Dhungana</span>
                                            <span>College: Amrit Science Campus</span>
                                            <span>First Semester</span>
                                            <span>Bsc.CSIT</span>
                                        </div>
                                        <div class="notices-end-detail" style="justify-items:end;margin-top:-20px;">
                                            <span></span>
                                            <span style="padding-right:5px;">
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
                                    <img src="http://127.0.0.1:8000/./images/cprogramming.png">
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>C-Program(CSC-101)</span>
                                            <span>Tribhuvan University</span>
                                            <span>Contributer: Pradip Dhungana</span>
                                            <span>College: Amrit Science Campus</span>
                                            <span>First Semester</span>
                                            <span>Bsc.CSIT</span>
                                        </div>
                                        <div class="notices-end-detail" style="justify-items:end;margin-top:-20px;">
                                            <span></span>
                                            <span style="padding-right:5px;">
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
                                    <img src="http://127.0.0.1:8000/./images/cprogramming.png">
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>C-Program(CSC-101)</span>
                                            <span>Tribhuvan University</span>
                                            <span>Contributer: Pradip Dhungana</span>
                                            <span>College: Amrit Science Campus</span>
                                            <span>First Semester</span>
                                            <span>Bsc.CSIT</span>
                                        </div>
                                        <div class="notices-end-detail" style="justify-items:end;margin-top:-20px;">
                                            <span></span>
                                            <span style="padding-right:5px;">
                                                <img src="http://127.0.0.1:8000/images/college_logo1.png">
                                                200 views
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-videos" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="notices-whole-wrap">
                                    <div style="background-color:#d80002;"></div>
                                    <div class="notices-top-img">
                                        <iframe width="280" height="200" src="https://www.youtube.com/embed/vkRDOcma9Qk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>Title: C-Program(CSC-101)</span>
                                            <span>Contributer:Pradip Dhungana</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="notices-whole-wrap">
                                    <div style="background-color:#d80002;"></div>
                                    <div class="notices-top-img">
                                        <iframe width="280" height="200" src="https://www.youtube.com/embed/7nvpr7zh39s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>Title: C-Program(CSC-101)</span>
                                            <span>Contributer:Pradip Dhungana</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="notices-whole-wrap">
                                    <div style="background-color:#d80002;"></div>
                                    <div class="notices-top-img">
                                        <iframe width="280" height="200" src="https://www.youtube.com/embed/aUiswwr77L8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>Title: C-Program(CSC-101)</span>
                                            <span>Contributer:Pradip Dhungana</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="notices-whole-wrap">
                                    <div style="background-color:#d80002;"></div>
                                    <div class="notices-top-img">
                                        <iframe width="280" height="200" src="https://www.youtube.com/embed/vkRDOcma9Qk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>Title: C-Program(CSC-101)</span>
                                            <span>Contributer:Pradip Dhungana</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="notices-whole-wrap">
                                    <div style="background-color:#d80002;"></div>
                                    <div class="notices-top-img">
                                        <iframe width="280" height="200" src="https://www.youtube.com/embed/7nvpr7zh39s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>Title: C-Program(CSC-101)</span>
                                            <span>Contributer:Pradip Dhungana</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="notices-whole-wrap">
                                    <div style="background-color:#d80002;"></div>
                                    <div class="notices-top-img">
                                        <iframe width="280" height="200" src="https://www.youtube.com/embed/aUiswwr77L8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>Title: C-Program(CSC-101)</span>
                                            <span>Contributer:Pradip Dhungana</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-assignments" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="notices-whole-wrap">
                                    <div style="background-color:#d80002;"></div>
                                    <div class="notices-top-img">
                                    <img src="http://127.0.0.1:8000/./images/cprogramming.png">
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>C-Program(CSC-101)</span>
                                            <span>Tribhuvan University</span>
                                            <span>BSc. CSIT</span>
                                            <span>First Semester</span>
                                            <span>Auther: Pradip Dhungana
                                        </span>
                                        </div>
                                        <div class="notices-end-detail" style="justify-items:end;margin-top:-20px;">
                                            <span></span>
                                            <span style="padding-right:5px;">
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
                                    <img src="http://127.0.0.1:8000/./images/cprogramming.png">
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>C-Program(CSC-101)</span>
                                            <span>Tribhuvan University</span>
                                            <span>BSc. CSIT</span>
                                            <span>First Semester</span>
                                            <span>Auther: Pradip Dhungana
                                        </span>
                                        </div>
                                        <div class="notices-end-detail" style="justify-items:end;margin-top:-20px;">
                                            <span></span>
                                            <span style="padding-right:5px;">
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
                                    <img src="http://127.0.0.1:8000/./images/cprogramming.png">
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>C-Program(CSC-101)</span>
                                            <span>Tribhuvan University</span>
                                            <span>BSc. CSIT</span>
                                            <span>First Semester</span>
                                            <span>Auther: Pradip Dhungana
                                        </span>
                                        </div>
                                        <div class="notices-end-detail" style="justify-items:end;margin-top:-20px;">
                                            <span></span>
                                            <span style="padding-right:5px;">
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
                                    <img src="http://127.0.0.1:8000/./images/cprogramming.png">
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>C-Program(CSC-101)</span>
                                            <span>Tribhuvan University</span>
                                            <span>BSc. CSIT</span>
                                            <span>First Semester</span>
                                            <span>Auther: Pradip Dhungana
                                        </span>
                                        </div>
                                        <div class="notices-end-detail" style="justify-items:end;margin-top:-20px;">
                                            <span></span>
                                            <span style="padding-right:5px;">
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
                                    <img src="http://127.0.0.1:8000/./images/cprogramming.png">
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>C-Program(CSC-101)</span>
                                            <span>Tribhuvan University</span>
                                            <span>BSc. CSIT</span>
                                            <span>First Semester</span>
                                            <span>Auther: Pradip Dhungana
                                        </span>
                                        </div>
                                        <div class="notices-end-detail" style="justify-items:end;margin-top:-20px;">
                                            <span></span>
                                            <span style="padding-right:5px;">
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
                                    <img src="http://127.0.0.1:8000/./images/cprogramming.png">
                                    </div>
                                    <div style="background-color:#003ea3;"></div>
                                    <div class="notices-mid-wrap">
                                        <div class="notices-mid-detail">
                                            <span>C-Program(CSC-101)</span>
                                            <span>Tribhuvan University</span>
                                            <span>BSc. CSIT</span>
                                            <span>First Semester</span>
                                            <span>Auther: Pradip Dhungana
                                        </span>
                                        </div>
                                        <div class="notices-end-detail" style="justify-items:end;margin-top:-20px;">
                                            <span></span>
                                            <span style="padding-right:5px;">
                                                <img src="http://127.0.0.1:8000/images/college_logo1.png">
                                                200 views
                                            </span>
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
