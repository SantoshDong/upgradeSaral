@extends('fontend.index')
@section('contents')

<div class="container-fluid" style="background-color: #e9ecef;">
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
<div class="container-fluid ht-hero-img" style="background-image: url('{{ asset('./images/home_tution.png')}}'">
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
    <div class="container">
        <div class="row">
            <div class="col-12" style="text-align:end;margin:20px 0px;font-weight:600;">
                <span>Helpline Number: +977-9845417277</span>
            </div>
            <div class="col-12 ht-heading-section">
                <span>Basic Info</span>
            </div>
            <div class="col-12 py-5" style="background-color:#ffffff;">
                <form class="tq-whole-wrapper">
                    <div class="row tutionFormTabs">
                        <div class="col-12">
                            <div class="col-12 ht-heading-step">
                                <span>Step 1</span>
                            </div>
                            <div class="row for-rf-gap">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="control-label">Name</label>
                                        </div>
                                        <div class="col-12">
                                            <input type="text" class="form-control" placeholder="name"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="control-label">Email Address</label>
                                        </div>
                                        <div class="col-12">
                                            <input type="email" class="form-control" placeholder="email"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row for-rf-gap">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-6">
                                                <div class="row">
                                                <div class="col-12" style="margin-bottom:0px;">
                                                        <label class="control-label" for="date">Date</label>
                                                </div>
                                                <div class="col-12" >
                                                        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text" />
                                                </div>
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-12" style="margin-bottom:0px;">
                                                        <label class="control-label" >Gender</label>
                                                </div>
                                                <div class="col-12">
                                                        <select class="form-control">
                                                            <option>male</option>
                                                            <option>female</option>
                                                            <option>others</option>
                                                        </select>
                                                </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="contorl-label">Phone Number</label>
                                            <input type="text" class="form-control"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 for-rf-gap">
                                    <label class="form-label">Parmanent Address</label>
                                </div>
                                <div class="col-12 for-rf-gap">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label class="form-label">
                                                        Proviences
                                                    </label>
                                                </div>
                                                <div class="col-12">
                                                    <select class="form-control">
                                                        <option>proviences 1</option>
                                                        <option>proviences 2</option>
                                                        <option>proviences 3</option>
                                                        <option>proviences 4</option>
                                                        <option>proviences 5</option>
                                                        <option>proviences 6</option>
                                                        <option>proviences 7</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label class="form-label">
                                                        district
                                                    </label>
                                                </div>
                                                <div class="col-12">
                                                    <select class="form-control">
                                                        <option>District 1</option>
                                                        <option>District 2</option>
                                                        <option>District 3</option>
                                                        <option>District 4</option>
                                                        <option>District 5</option>
                                                        <option>District 6</option>
                                                        <option>District 7</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 for-rf-gap">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label class="form-label">
                                                        Municipal
                                                    </label>
                                                </div>
                                                <div class="col-12">
                                                    <select class="form-control">
                                                        <option>Municipal 1</option>
                                                        <option>Municipal 2</option>
                                                        <option>Municipal 3</option>
                                                        <option>Municipal 4</option>
                                                        <option>Municipal 5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label class="form-label">
                                                        Ward
                                                    </label>
                                                </div>
                                                <div class="col-12">
                                                    <select class="form-control">
                                                        <option>Ward 1</option>
                                                        <option>Ward 2</option>
                                                        <option>Ward 3</option>
                                                        <option>Ward 4</option>
                                                        <option>Ward 5</option>
                                                        <option>Ward 6</option>
                                                        <option>Ward 7</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 for-rf-gap">
                                    <label class="form-label">Location Detail</label>
                                </div>
                                <div class="col-12 for-rf-gap">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label class="form-label">
                                                        City
                                                    </label>
                                                </div>
                                                <div class="col-12">
                                                    <select class="form-control">
                                                        <option>City 1</option>
                                                        <option>City 2</option>
                                                        <option>City 3</option>
                                                        <option>City 4</option>
                                                        <option>City 5</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label class="form-label">
                                                        Location
                                                    </label>
                                                </div>
                                                <div class="col-12">
                                                    <select class="form-control">
                                                        <option>Location 1</option>
                                                        <option>Location 2</option>
                                                        <option>Location 3</option>
                                                        <option>Location 4</option>
                                                        <option>Location 5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 for-rf-gap">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label class="form-label">
                                                        Nearly Landmark
                                                    </label>
                                                </div>
                                                <div class="col-12">
                                                    <select class="form-control">
                                                        <option>Landmark 1</option>
                                                        <option>Landmark 2</option>
                                                        <option>Landmark 3</option>
                                                        <option>Landmark 4</option>
                                                        <option>Landmark 5</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="row tutionFormTabs">
                        <div class="col-12 ht-heading-step">
                            <span>Step 2</span>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                               <div class="col-12">
                                   <div class="tutor-academic-question">
                                        <span>Currently Study?:</span>
                                   </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                      </div>
                               </div>
                               <div class="col-12">
                                <div class="tutor-academic-question">
                                     <span>Have you taught home tution before?:</span>
                                </div>
                                   <div class="form-check form-check-inline">
                                     <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio3" value="option1" checked>
                                     <label class="form-check-label" for="inlineRadio1">Yes</label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                     <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio4" value="option2">
                                     <label class="form-check-label" for="inlineRadio2">No</label>
                                   </div>
                            </div>
                            <div class="col-12">
                                <div class="tutor-academic-question">
                                     <span>Do You have teaching Experience ?:</span>
                                </div>
                                   <div class="form-check form-check">
                                     <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio5" value="option1" checked>
                                     <label class="form-check-label" for="inlineRadio1">No I haven't taught before</label>
                                   </div>
                                   <div class="form-check form-check">
                                     <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio6" value="option2">
                                     <label class="form-check-label" for="inlineRadio2">Yes I have 1 year experience</label>
                                   </div>
                                   <div class="form-check form-check">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio7" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Yes I have 2+ year experience</label>
                                  </div>
                            </div>
                            <div class="col-12">
                                <div class="tutor-academic-question">
                                     <span>Are you willing to teach at school institudes:</span>
                                </div>
                                <div class="form-check form-check">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio8" value="option1" checked>
                                  <label class="form-check-label" for="inlineRadio1">Yes i want to explore opporitunitues</label>
                                </div>
                                <div class="form-check form-check">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio9" value="option2">
                                  <label class="form-check-label" for="inlineRadio2">No, I want have only tutions only</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="tutor-academic-question">
                                     <span>Which mechine do you Prefer?:</span>
                                </div>
                                   <div class="form-check form-check">
                                     <input class="form-check-input" type="radio" name="inlineRadioOptions4" id="inlineRadio10" value="option1" checked>
                                     <label class="form-check-label" for="inlineRadio1">English</label>
                                   </div>
                                   <div class="form-check form-check">
                                     <input class="form-check-input" type="radio" name="inlineRadioOptions4" id="inlineRadio11" value="option2">
                                     <label class="form-check-label" for="inlineRadio2">Nepali</label>
                                   </div>
                            </div>
                            <div class="col-12">
                                <div class="tutor-academic-question">
                                     <span>Which level do you want to teach?:</span>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="tutor-aq-cb-wrao">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck">
                                                  Check me out
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck2">
                                                <label class="form-check-label" for="gridCheck">
                                                  Check me out
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck3">
                                                <label class="form-check-label" for="gridCheck">
                                                  Check me out
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck4">
                                                <label class="form-check-label" for="gridCheck">
                                                  Check me out
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck5">
                                                <label class="form-check-label" for="gridCheck">
                                                  Check me out
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck6">
                                                <label class="form-check-label" for="gridCheck">
                                                  Check me out
                                                </label>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                               <div class="col-12">
                                   <div class="tutor-academic-question">
                                        <span>Current Level:</span>
                                   </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions6" id="inlineRadio14" value="option1" checked>
                                        <label class="form-check-label" for="inlineRadio1">+2 level</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions6" id="inlineRadio15" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Bachelor</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions6" id="inlineRadio16" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Master</label>
                                      </div>
                               </div>
                               <div class="col-12">
                                <div class="tutor-academic-question">
                                     <span>Are you shool Teacher ?:</span>
                                </div>
                                   <div class="form-check form-check-inline">
                                     <input class="form-check-input" type="radio" name="inlineRadioOptions7" id="inlineRadio17" value="option1" checked>
                                     <label class="form-check-label" for="inlineRadio1">Yes i am</label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                     <input class="form-check-input" type="radio" name="inlineRadioOptions7" id="inlineRadio18" value="option2">
                                     <label class="form-check-label" for="inlineRadio2">No</label>
                                   </div>
                            </div>
                            <div class="col-12">
                                <div class="tutor-academic-question">
                                     <span>How Will take Saral shikshya Home Tution?:</span>
                                </div>
                                   <div class="form-check form-check-inline">
                                     <input class="form-check-input" type="radio" name="inlineRadioOptions8" id="inlineRadio19" value="option1" checked>
                                     <label class="form-check-label" for="inlineRadio1">full Time</label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                     <input class="form-check-input" type="radio" name="inlineRadioOptions8" id="inlineRadio20" value="option2">
                                     <label class="form-check-label" for="inlineRadio2">Part Time</label>
                                   </div>
                            </div>
                            <div class="col-12">
                                <div class="tutor-academic-question">
                                     <span>Time Frame:</span>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions9" id="inlineRadio21" value="option1" checked>
                                  <label class="form-check-label" for="inlineRadio1">Morning</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions9" id="inlineRadio22" value="option2">
                                  <label class="form-check-label" for="inlineRadio2">Evening</label>
                                </div>
                                <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="inlineRadioOptions9" id="inlineRadio23" value="option3">
                                 <label class="form-check-label" for="inlineRadio2">Flexible</label>
                               </div>
                            </div>
                            <div class="col-12">
                                <div class="tutor-academic-question">
                                     <span>Tution Nature:</span>
                                </div>
                                   <div class="form-check form-check-inline">
                                     <input class="form-check-input" type="radio" name="inlineRadioOptions10" id="inlineRadio24" value="option1" checked>
                                     <label class="form-check-label" for="inlineRadio1">Single student</label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                     <input class="form-check-input" type="radio" name="inlineRadioOptions10" id="inlineRadio25" value="option2">
                                     <label class="form-check-label" for="inlineRadio2">group Students</label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions10" id="inlineRadio26" value="option3">
                                    <label class="form-check-label" for="inlineRadio2">Any</label>
                                  </div>
                            </div>
                            <div class="col-12">
                                <div class="tutor-academic-question">
                                     <span>Tution Area:</span>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions11" id="inlineRadio27" value="option1" checked>
                                  <label class="form-check-label" for="inlineRadio1">Inside my Location</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions11" id="inlineRadio28" value="option2">
                                  <label class="form-check-label" for="inlineRadio2">Around my Location</label>
                                </div>
                                <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="inlineRadioOptions11" id="inlineRadio29" value="option3">
                                 <label class="form-check-label" for="inlineRadio2">Wider Range of Locations</label>
                               </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="row tutionFormTabs">
                        <div class="col-12">
                            <div class="col-12 ht-heading-step">
                                <span>Step 3</span>
                            </div>
                            <div class="row for-rf-gap">
                                <div class="col-12">
                                    <label class="control-label">SEE/SLC School Name</label>
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="Student" />
                                </div>
                            </div>
                            <div class="row for-rf-gap">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="control-label">Division/GPA:</label>
                                        </div>
                                        <div class="col-12">
                                            <select class="form-control">
                                                <option>GPA 0.1</option>
                                                <option>GPA 0.2</option>
                                                <option>GPA 0.3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="control-label">Upload your Document</label>
                                        </div>
                                        <div class="col-12">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                                <label class="custom-file-label" for="validatedCustomFile">Choose
                                                    file...</label>
                                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row for-rf-gap">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="control-label">Current Passed Colleges Name:</label>
                                        </div>
                                        <div class="col-12">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row for-rf-gap">
                                <div class="col-12 ">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label class="form-label">
                                                        Student Phone Nuber
                                                    </label>
                                                </div>
                                                <div class="col-12">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label class="form-label">
                                                        Guardian Phone Nuber
                                                    </label>
                                                </div>
                                                <div class="col-12">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row for-rf-gap">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="control-label">Upload your Citizenship</label>
                                        </div>
                                        <div class="col-12">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                                <label class="custom-file-label" for="validatedCustomFile">Choose
                                                    file...</label>
                                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="control-label">Upload your PP Size Photo</label>
                                        </div>
                                        <div class="col-12">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                                <label class="custom-file-label" for="validatedCustomFile">Choose
                                                    file...</label>
                                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="col-12 for-rf-gap" style="text-align:end;">
                    <span class="btn" onclick="prevFunction()" id="tf-prev" style="background-color: #0b46a7;color:#ffffff;padding:5px 15px!important;float:left;">Prev</span>
                    <span class="btn" onclick="nextFunction()" id="tf-next" style="background-color: #0b46a7;color:#ffffff;padding:5px 15px!important;float:right;">Next</span>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
