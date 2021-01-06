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
            <div class="col-12 ht-heading-step">
                <span>Step 2</span>
            </div>
            <div class="col-12 py-5" style="background-color:#ffffff;">
            <form>
                <div class="row tq-whole-wrapper">
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
            </form>
            </div>
        </div>
    </div>
</div>

@endsection
