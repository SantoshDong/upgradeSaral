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
                <span>Donate or sells Study Materials</span>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <span>Upload Documets</span>
            </div>
            <div class="col-12 text-center">
                <span>To be able to upload study materials documents and pdf files all you like for the 5 times at a
                    day.</span>
            </div>
        </div>
        <div class="row">
            <div class="col-12">

                <div class="slideshow-container">
                <form action="" Method="post">
                    <div class="mySlides mySlides1 fade">
                        <div class="row">
                            <div class="col-12 my-5">
                                <div class="top-circle-wrap1">
                                    <span>Course</span>
                                    <span>Upload</span>
                                    <span>Details</span>
                                    <span>Done</span>
                                </div>
                                <div class="top-circle-wrap top-circle-wrap">
                                    <div>
                                        <span class="ud-circle"></span>
                                    </div>
                                    <div>
                                        <span class="ud-circlez"></span>
                                    </div>
                                    <div>
                                        <span class="ud-circlez"></span>
                                    </div>
                                    <div>
                                        <span class="ud-circlez"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mySlides2-inner-wrap">
                            <div class="col-12">
                                <div class="row mt-3 mb-3">
                                    <div class="col-12 ud-ms-p2 py-2">
                                        <span>Step 1:</span>
                                        <span>Choose a course for which you'd like to upload documents</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 my-2">
                                        <div class="step1-form-w">
                                            <div class="step1-label-w">
                                                <label for="s1-university">University:</label>
                                            </div>
                                            <div class="step1-text-w">
                                                <span>
                                                    <i class="fas fa-search" aria-hidden="true"></i>
                                                </span>
                                                <span>
                                                    <input name="s1-university" type="text" placeholder="search university..">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 my-2">
                                        <div class="step1-form-w">
                                            <div class="step1-label-w">
                                                <label for="s1-course">Course</label>
                                            </div>
                                            <div class="step1-text-w">
                                                <span>
                                                    <i class="fas fa-search" aria-hidden="true"></i>
                                                </span>
                                                <span>
                                                    <input name="s1-course" type="text" placeholder="Search by course code and or name.">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 my-2">
                                       <div class="step1-select">
                                            <div>
                                                <span>Do you Want to Sells or Donate Study materials</span>
                                                <select class="form-control" name="" id="">
                                                    <option value="">Donates</option>
                                                    <option value="">sells</option>
                                                </select>
                                            </div>
                                            <div></div>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row step1-table2">
                            <div class="col-12 d-flex py-3">
                                <span>No documents to share? That's not a problem</span>
                                <span class="btn btn-large">You Can Easily Views Study materials</span>
                            </div>
                        </div>
                    </div>
                    <div class="mySlides mySlides2">
                        <div class="row">
                            <div class="col-12 my-5">
                                <div class="top-circle-wrap1">
                                    <span>Course</span>
                                    <span>Upload</span>
                                    <span>Details</span>
                                    <span>Done</span>
                                </div>
                                <div class="top-circle-wrapi top-circle-wrap">
                                    <div>
                                        <span class="ud-circle"></span>
                                    </div>
                                    <div>
                                        <span class="ud-circle"></span>
                                    </div>
                                    <div>
                                        <span class="ud-circlez"></span>
                                    </div>
                                    <div>
                                        <span class="ud-circlez"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <div class="row mySlides2-inner-wrap">
                            <div class="col-12">
                                <div class="row mt-3">
                                    <div class="col-12 ud-ms-p2 py-2">
                                        <span>Step 2:</span>
                                        <span>Now you can upload as many files as yout want!</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 ud-ms-p2-b">
                                         <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                         <span>University:</span>
                                         <span>Tribhuvan University</span>                            
                                    </div>
                                    <div class="col-12 ud-ms-p2-b">
                                        <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                        <span>Courses:</span>
                                        <span>BSc. CSIT</span>                            
                                   </div>
                                   <div class="col-12 ud-ms-p2-b">
                                    <span><img src="{{asset('./images/college_logo1.png')}}"></span>
                                    <span>Status:</span>
                                    <span>Donate or Sales</span>                            
                                   </div>
                                   <div class="col-12">
                                      <input type="file" name="files[]" id="fileElem" multiple  accept="application/pdf, text/plain, image/*" onchange="addFiles(event)">
                                      <label  id="drop-area" for="fileElem"
                                      ondragover = "overDefault(event)"
                                      ondragenter = "overDefault(event)"
                                      ondragleave = "overDefault(event)"
                                      ondrop = "overDefault(event); addFiles(event);">
                                      <span><i class="fas fa-file-upload"></i></span>
                                      <span id="fileLabelText">Drag & Drop File</span>
                                      <span>Or if you prefer</span>
                                      <span class="btn btn-primary btn-file-ud">Brows my Files</span>
                                    </label>
                                  </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-12" style="border-bottom:1px solid #bcbcbc;">
                                        <span>Supported files: pdf, doc, docx</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <span>list of File which is selected</span>
                                    </div>
                                    <div class="col-12">
                                        <div id="fileList"></div>
                                    </div>
                                </div>
                            </div>
                       </div>
                    </div>
                    <div class="mySlides mySlides3">
                        <div class="row">
                            <div class="col-12 my-5">
                                <div class="top-circle-wrap1">
                                    <span>Course</span>
                                    <span>Upload</span>
                                    <span>Details</span>
                                    <span>Done</span>
                                </div>
                                <div class="top-circle-wrapii top-circle-wrap">
                                    <div>
                                        <span class="ud-circle"></span>
                                    </div>
                                    <div>
                                        <span class="ud-circle"></span>
                                    </div>
                                    <div>
                                        <span class="ud-circle"></span>
                                    </div>
                                    <div>
                                        <span class="ud-circlez"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mySlides2-inner-wrap">
                            <div class="col-12">
                                <div class="row mt-3">
                                    <div class="col-12 ud-ms-p2 py-2">
                                        <span>Step 3:</span>
                                        <span>Now you can fill up details about course</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <span>Bca Ecglish.docx</span>
                                    </div>
                                    <div class="col-12">
                                        <div class="row mySlides3-inner">
                                            <div class="col-12 mySlides3-ii">
                                                <div>
                                                    <label for="catagory">Category:</label>
                                                </div>
                                                <div>
                                                    <select name="select-cata" class="form-control">
                                                        <option selected disabled>select category</option>
                                                        <option value="ud-notes">Notes</option>
                                                        <option value="ud-old">Old Question</option>
                                                        <option value="ud-college">College Questions</option>
                                                        <option value="ud-o">Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                           <div class="col-12">
                                                <div class="row for-ud-notes">
                                                    <div class="col-12 mySlides3-ii">
                                                        <div>
                                                            <label for="year">Year/Semester:</label>
                                                        </div>
                                                        <div>
                                                            <select name="select-cata" class="form-control">
                                                                <option value="">First Year</option>
                                                                <option value="">Second Year</option>
                                                                <option value="">Third Year</option>
                                                                <option value="">Fourth Year</option>
                                                                <option value="">Fifth Year</option>
                                                                <option value="">Sixth Year</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mySlides3-ii">
                                                        <div>
                                                            <label for="Sname">Subject Name</label>
                                                        </div>
                                                        <div class="mySlides3-ii4th">
                                                            <select name="select-cata" class="form-control">
                                                                <option value="">C programming</option>
                                                                <option value="">Java</option>
                                                                <option value="">English</option>
                                                                <option value="">Math</option>
                                                                <option value="">Engineering</option>
                                                                <option value="">project</option>
                                                            </select>
                                                                <label for="" class="ii4th-label">or add subject Name</label>
                                                                <input class="form-contriol" type="text" name="or-subName" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mySlides3-ii5th">
                                                                <div>
                                                                    <label for="Eyear">Exam Year:</label>
                                                                </div>
                                                                <div>
                                                                <input class="form-control" name="title" type="text"/>
                                                                </div>
                                                                <div>
                                                                
                                                                </div>
                                                        </div>
                                                        </div>
                                                    <div class="col-12">
                                                        <div class="mySlides3-ii5th">
                                                            <div>
                                                                <label for="title">Title:</label>
                                                            </div>
                                                            <div>
                                                                <input class="form-control" name="title" type="text"/>
                                                            </div>
                                                            <div>
                                                                <span>Please give your document a descriptive and clear title</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mySlides3-ii5th">
                                                            <div>
                                                                <label for="description">Description:</label>
                                                            </div>
                                                            <div>
                                                                <input class="form-control" name="description" type="text">
                                                            </div>
                                                            <div>
                                                                <span>Please give as much additional information as possible.</span>
                                                                <span>Such as the name of the teacher.</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                           </div>
                                            <div class="col-12">
                                                <div class="row ud-notes box">
                                                    <div class="col-12 mySlides3-ii">
                                                        <div>
                                                            <label for="year">Year/Semester:</label>
                                                        </div>
                                                        <div>
                                                            <select name="select-cata" class="form-control">
                                                                <option value="">First Year</option>
                                                                <option value="">Second Year</option>
                                                                <option value="">Third Year</option>
                                                                <option value="">Fourth Year</option>
                                                                <option value="">Fifth Year</option>
                                                                <option value="">Sixth Year</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mySlides3-ii">
                                                        <div>
                                                            <label for="Sname">Subject Name</label>
                                                        </div>
                                                        <div class="mySlides3-ii4th">
                                                            <select name="select-cata" class="form-control">
                                                                <option value="">C programming</option>
                                                                <option value="">Java</option>
                                                                <option value="">English</option>
                                                                <option value="">Math</option>
                                                                <option value="">Engineering</option>
                                                                <option value="">project</option>
                                                            </select>
                                                                <label for="" class="ii4th-label">or add subject Name</label>
                                                                <input class="form-contriol" type="text" name="or-subName" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mySlides3-ii5th">
                                                                <div>
                                                                    <label for="Eyear">Exam Year:</label>
                                                                </div>
                                                                <div>
                                                                <input class="form-control" name="title" type="text"/>
                                                                </div>
                                                                <div>
                                                                
                                                                </div>
                                                        </div>
                                                        </div>
                                                    <div class="col-12">
                                                        <div class="mySlides3-ii5th">
                                                            <div>
                                                                <label for="title">Title:</label>
                                                            </div>
                                                            <div>
                                                                <input class="form-control" name="title" type="text"/>
                                                            </div>
                                                            <div>
                                                                <span>Please give your document a descriptive and clear title</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mySlides3-ii5th">
                                                            <div>
                                                                <label for="description">Description:</label>
                                                            </div>
                                                            <div>
                                                                <input class="form-control" name="description" type="text">
                                                            </div>
                                                            <div>
                                                                <span>Please give as much additional information as possible.</span>
                                                                <span>Such as the name of the teacher.</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                {{--old fill box section--}}
                                                <div class="ud-old box">
                                                    <div class="row mySlides3-inner">
                                                        <div class="col-12 mySlides3-ii">
                                                            <div>
                                                                <label for="Etip">Year/Semester:</label>
                                                            </div>
                                                            <div>
                                                                <select name="select-cata" class="form-control">
                                                                    <option value="">First Year</option>
                                                                    <option value="">Second Year</option>
                                                                    <option value="">Third Year</option>
                                                                    <option value="">Fourth Year</option>
                                                                    <option value="">Fifth Year</option>
                                                                    <option value="">Sixth Year</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mySlides3-ii">
                                                            <div>
                                                                <label for="Sname">Subject Name</label>
                                                            </div>
                                                            <div class="mySlides3-ii4th">
                                                                <select name="select-cata" class="form-control">
                                                                    <option value="">C programming</option>
                                                                    <option value="">Java</option>
                                                                    <option value="">English</option>
                                                                    <option value="">Math</option>
                                                                    <option value="">Engineering</option>
                                                                    <option value="">project</option>
                                                                </select>
                                                                    <label for="" class="ii4th-label">or add subject Name</label>
                                                                    <input class="form-contriol" type="text" name="or-subName" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mySlides3-ii">
                                                            <div>
                                                                <label for="Eyear">Exam Year</label>
                                                            </div>
                                                            <div class="mySlides3-ii4th">
                                                                    <input class="form-control" type="text">
                                                                    <label for="" class="ii4th-label">Exam Tips</label>
                                                                    <input class="form-contriol" type="text" name="or-subName" />
                                                            </div>
                                                        </div>
                    
                                                        <div class="col-12">
                                                           <div class="mySlides3-ii5th">
                                                                <div>
                                                                    <label for="title">Title:</label>
                                                                </div>
                                                                <div>
                                                                   <input class="form-control" name="title" type="text"/>
                                                                </div>
                                                                <div>
                                                                    <span>Please give your document a descriptive and clear title</span>
                                                                </div>
                                                           </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="mySlides3-ii5th">
                                                                <div>
                                                                    <label for="description">Description:</label>
                                                                </div>
                                                                <div>
                                                                    <input class="form-control" name="description" type="text">
                                                                </div>
                                                                <div>
                                                                    <span>Please give as much additional information as possible.</span>
                                                                    <span>Such as the name of the teacher.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                {{-- college fill box section --}}
                                                <div class="ud-college box">
                                                    <div class="row mySlides3-inner">
                                                        <div class="col-12 mySlides3-ii">
                                                            <div>
                                                                <label for="Etip">Year/Semester:</label>
                                                            </div>
                                                            <div>
                                                                <select name="select-cata" class="form-control">
                                                                    <option value="">First Year</option>
                                                                    <option value="">Second Year</option>
                                                                    <option value="">Third Year</option>
                                                                    <option value="">Fourth Year</option>
                                                                    <option value="">Fifth Year</option>
                                                                    <option value="">Sixth Year</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mySlides3-ii">
                                                            <div>
                                                                <label for="Sname">Subject Name</label>
                                                            </div>
                                                            <div class="mySlides3-ii4th">
                                                                <select name="select-cata" class="form-control">
                                                                    <option value="">C programming</option>
                                                                    <option value="">Java</option>
                                                                    <option value="">English</option>
                                                                    <option value="">Math</option>
                                                                    <option value="">Engineering</option>
                                                                    <option value="">project</option>
                                                                </select>
                                                                    <label for="" class="ii4th-label">or add subject Name</label>
                                                                    <input class="form-contriol" type="text" name="or-subName" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mySlides3-ii">
                                                            <div>
                                                                <label for="Eyear">Exam Year</label>
                                                            </div>
                                                            <div class="mySlides3-ii4th">
                                                                    <input class="form-control" type="text">
                                                                    <label for="" class="ii4th-label">Exam Tips</label>
                                                                    <input class="form-contriol" type="text" name="or-subName" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                           <div class="mySlides3-ii5th">
                                                                <div>
                                                                    <label for="title">Title:</label>
                                                                </div>
                                                                <div>
                                                                   <input class="form-control" name="title" type="text"/>
                                                                </div>
                                                                <div>
                                                                    <span>Please give your document a descriptive and clear title</span>
                                                                </div>
                                                           </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="mySlides3-ii5th">
                                                                <div>
                                                                    <label for="description">Description:</label>
                                                                </div>
                                                                <div>
                                                                    <input class="form-control" name="description" type="text">
                                                                </div>
                                                                <div>
                                                                    <span>Please give as much additional information as possible.</span>
                                                                    <span>Such as the name of the teacher.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                {{-- others fill box section --}}
                                                <div class="ud-o box">
                                                    <div class="row mySlides3-inner">
                                                        <div class="col-12 mySlides3-ii">
                                                            <div>
                                                                <label for="Etip">Year/Semester:</label>
                                                            </div>
                                                            <div>
                                                                <select name="select-cata" class="form-control">
                                                                    <option value="">First Year</option>
                                                                    <option value="">Second Year</option>
                                                                    <option value="">Third Year</option>
                                                                    <option value="">Fourth Year</option>
                                                                    <option value="">Fifth Year</option>
                                                                    <option value="">Sixth Year</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mySlides3-ii">
                                                            <div>
                                                                <label for="Sname">Subject Name</label>
                                                            </div>
                                                            <div class="mySlides3-ii4th">
                                                                <select name="select-cata" class="form-control">
                                                                    <option value="">C programming</option>
                                                                    <option value="">Java</option>
                                                                    <option value="">English</option>
                                                                    <option value="">Math</option>
                                                                    <option value="">Engineering</option>
                                                                    <option value="">project</option>
                                                                </select>
                                                                    <label for="" class="ii4th-label">or add subject Name</label>
                                                                    <input class="form-contriol" type="text" name="or-subName" />
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                           <div class="mySlides3-ii5th">
                                                                <div>
                                                                    <label for="title">Title:</label>
                                                                </div>
                                                                <div>
                                                                   <input class="form-control" name="title" type="text"/>
                                                                </div>
                                                                <div>
                                                                    <span>Please give your document a descriptive and clear title</span>
                                                                </div>
                                                           </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="mySlides3-ii5th">
                                                                <div>
                                                                    <label for="description">Description:</label>
                                                                </div>
                                                                <div>
                                                                    <input class="form-control" name="description" type="text">
                                                                </div>
                                                                <div>
                                                                    <span>Please give as much additional information as possible.</span>
                                                                    <span>Such as the name of the teacher.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row my-3">
                                                    <div class="col-12 step4-panel">
                                                        <button id="ud-submit" type="submit" name="ud-submit" onclick="hifive()">Submit Document</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       </div>
                    </div>
                    <div class="mySlides mySlides4">
                        <div class="row">
                            <div class="col-12 my-5">
                                <div class="top-circle-wrap1">
                                    <span>Course</span>
                                    <span>Upload</span>
                                    <span>Details</span>
                                    <span>Done</span>
                                </div>
                                <div class="top-circle-wrapiii top-circle-wrap">
                                    <div>
                                        <span class="ud-circle"></span>
                                    </div>
                                    <div>
                                        <span class="ud-circle"></span>
                                    </div>
                                    <div>
                                        <span class="ud-circle"></span>
                                    </div>
                                    <div>
                                        <span class="ud-circle"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12">
                               <div class="upload-done">
                                   <div class="upload-done-img">
                                       <img src="{{asset('images/hifive.jpg')}}">
                                   </div>
                                   <div class="upload-done-heading">
                                       <span>High five!</span>
                                       <span>Thanks for sharing your documents</span>
                                       <span> We'll publish them within a few minutes.</span>
                                   </div>
                               </div>
                            </div>
                            <div class="col-12">
                                <div class="upload-done-ls-wrap for-siroe">
                                    <div class="ud-hf-ls-img">
                                       <img src="{{asset('images/saral_logo.png')}}">
                                    </div>
                                    <div>
                                        <span>Get Double Premium Assess on Your next upload!</span>
                                    </div>
                                    <div class="ud-hf-upload-more">
                                        <span><img src="{{asset('images/saral_img2.png')}}"></span>
                                        <span>Upload More Study Materials</span>
                                    </div>
                                    <div>
                                        <span>For every document you upload now, you'll receive some coins then you will get cash prize.</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row step1-table2">
                            <div class="col-12 d-flex py-3">
                                <span>No documents to share? That's not a problem</span>
                                <span class="btn btn-large">You Can Easily Views Study materials</span>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row py-3 mt-3" style="box-shadow:0px 5px 5px #bdbdbd;">
                    <div class="col-12">
                        <div class="mySlides-btn">
                            <span>
                                <a onclick="showPrev()" id="minus-prev"><button class="btn ud-prev">Prev</button></a>
                            </span>
                            <span style="align-self:end;justify-self:end;">
                                <a onclick="showNext()" id="plus-next"><button class="btn ud-next">Next</button></a>
                            </span>
                        </div>
                    </div>
                </div>

                </div>
                <br>
            </div>
        </div>
    </div>
</div>
@endsection

