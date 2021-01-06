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
                <span>Step 1</span>
            </div>
            <div class="col-12 py-5" style="background-color:#ffffff;">
            <form class="">
                <div class="row for-rf-gap tq-whole-wrapper">
                    <div class="col-md-6">
                       <div class="row">
                           <div class="col-12">
                                <label class="control-label">Student Name</label>
                           </div>
                           <div class="col-12">
                                <input type="text" class="form-control" placeholder="Student"/>
                           </div>
                       </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-12">
                                <label class="control-label">Guardian Name</label>
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="guaridan Name"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row for-rf-gap tq-whole-wrapper">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                   <div class="row">
                                    <div class="col-12" style="margin-bottom:0px;">
                                            <label class="control-label" for="date">Date of Birth</label>
                                    </div>
                                    <div class="col-12">
                                            <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text" />
                                    </div>
                                   </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-12" style="margin-bottom:0px;">
                                            <label class="control-label">Gender</label>
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
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-12">
                                <label class="contorl-label"> Guardian Phone Number</label>
                                <input type="text" class="form-control"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row for-rf-gap tq-whole-wrapper">
                    <div class="col-12 for-rf-gap">
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
                    <div class="col-12 for-rf-gap">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-12">
                                        <label class="form-label">
                                            School/College Name
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
                                            Grade/Level
                                        </label>
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 for-rf-gap">
                        <label class="form-label"> Address</label>
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
                                    <div class="col-md-12">
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
                    <div class="col-12 for-rf-gap" style="text-align:end;">
                        <button type="submit" class="btn" style="background-color: #0b46a7;color:#ffffff;padding:5px 15px!important;">Submit</button>
                     </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

@endsection
