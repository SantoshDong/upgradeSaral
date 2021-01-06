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
                <span>Submit Document</span>
            </div>
            <div class="col-12 ht-heading-step">
                <span>Step 3</span>
            </div>
            <div class="col-12 py-5" style="background-color:#ffffff;">
                <form class="tq-whole-wrapper">
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
                    <div class="col-12 for-rf-gap">
                        <span style="float:left;">
                            <button type="submit" class="btn"
                                style="background-color: #0b46a7;color:#ffffff;padding:5px 15px!important;">back</button>
                        </span>
                        <span style="float:right;">
                            <button type="submit" class="btn"
                                style="background-color: #dc4b38;color:#ffffff;padding:5px 15px!important;">Submit</button>
                        </span>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>

@endsection
