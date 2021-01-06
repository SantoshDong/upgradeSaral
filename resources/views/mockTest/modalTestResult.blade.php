@extends('fontend.index3')
@section('contents')

<div class="container-fluid" style="background-color: #e9ecef;padding-left:0px;padding-right:0px;">
    <div class="container">
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
</div>
<div class="container-fluid" style="background-color:#b0ace5">
    <div class="row py-2">
        <div class="col-12 text-center mockSearch-heading">
            <span>Bsc.Csit Modal Test(Mock Test-I)</span>
        </div>
    </div>
</div>
<div class="container-fluid" style="background-color:#efefef;">
        <div class="row py-5 mx-5">
            <div class="col-12">
                <div class="row">
                    <div class="col-9">
                        <div class="row">
                            <div class="col-12">
                                <div class="row pt-4 pb-1" style="background-color:#dedcf8;">
                                    <div class="col-8">
                                        <div class="mt-test-tl-section">
                                            <section onclick="mtPanel(event, 'mt-panel1')" class="mtTabs mt-active">
                                                English
                                            </section>
                                            <section onclick="mtPanel(event, 'mt-panel2')" class="mtTabs">
                                                Physics
                                            </section>
                                            <section onclick="mtPanel(event, 'mt-panel3')" class="mtTabs">
                                                chemestry
                                            </section>
                                            <section onclick="mtPanel(event, 'mt-panel4')"class="mtTabs">
                                                Mathematics
                                            </section>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-test-tr-section">
                                            <span>Full Marks: 100</span>
                                            <span>PassMarks: 40</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div id="mt-panel1" class="mtpanel">
                                    <div class="row my-3">
                                        <div class="col-12" style="text-align:end;">
                                            <div class="view-paper-wrap">
                                                <button class="btn view-paper">
                                                <img src="{{asset('./images/college_logo1.png')}}">
                                                View Paper
                                                </button>
                                                <button class="btn download-paper">
                                                    <img src="{{asset('./images/college_logo1.png')}}">
                                                    Bookmarks
                                                    </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-12 text-center">
                                            <span>English Mock Test</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>1. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div style="background-color:#e4e4e4;box-shadow:0px 0px 3px rgba(0, 0, 0, 0.7);">
                                                    <div class="mq-count-bottom">
                                                        <span>
                                                            A. The Misty Mountains
                                                        </span>
                                                        <span class="mock-right-answer">b. option 2
                                                        </span>
                                                        <span class="mock-wrong-answer">c. option 3</span>
                                                        <span>d. option 4</span>
                                                    </div>   
                                                    <div class="mq-count-bottom1 text-center">
                                                        <span>75% of users have answer correctly</span>
                                                    </div>
                                                    <div class="mq-count-bottom2">
                                                        <span>Hints: One third of the Himalayan range is found in Nepal..</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>1. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div style="background-color:#e4e4e4;box-shadow:0px 0px 3px rgba(0, 0, 0, 0.7);">
                                                    <div class="mq-count-bottom">
                                                        <span>
                                                            A. The Misty Mountains
                                                        </span>
                                                        <span class="mock-right-answer">b. option 2
                                                        </span>
                                                        <span class="mock-wrong-answer">c. option 3</span>
                                                        <span>d. option 4</span>
                                                    </div>   
                                                    <div class="mq-count-bottom1 text-center">
                                                        <span>75% of users have answer correctly</span>
                                                    </div>
                                                    <div class="mq-count-bottom2">
                                                        <span>Hints: One third of the Himalayan range is found in Nepal..</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>1. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div style="background-color:#e4e4e4;box-shadow:0px 0px 3px rgba(0, 0, 0, 0.7);">
                                                    <div class="mq-count-bottom">
                                                        <span>
                                                            A. The Misty Mountains
                                                        </span>
                                                        <span class="mock-right-answer">b. option 2
                                                        </span>
                                                        <span class="mock-wrong-answer">c. option 3</span>
                                                        <span>d. option 4</span>
                                                    </div>   
                                                    <div class="mq-count-bottom1 text-center">
                                                        <span>75% of users have answer correctly</span>
                                                    </div>
                                                    <div class="mq-count-bottom2">
                                                        <span>Hints: One third of the Himalayan range is found in Nepal..</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>1. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div style="background-color:#e4e4e4;box-shadow:0px 0px 3px rgba(0, 0, 0, 0.7);">
                                                    <div class="mq-count-bottom">
                                                        <span>
                                                            A. The Misty Mountains
                                                        </span>
                                                        <span class="mock-right-answer">b. option 2
                                                        </span>
                                                        <span class="mock-wrong-answer">c. option 3</span>
                                                        <span>d. option 4</span>
                                                    </div>   
                                                    <div class="mq-count-bottom1 text-center">
                                                        <span>75% of users have answer correctly</span>
                                                    </div>
                                                    <div class="mq-count-bottom2">
                                                        <span>Hints: One third of the Himalayan range is found in Nepal..</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>1. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div style="background-color:#e4e4e4;box-shadow:0px 0px 3px rgba(0, 0, 0, 0.7);">
                                                    <div class="mq-count-bottom">
                                                        <span>
                                                            A. The Misty Mountains
                                                        </span>
                                                        <span class="mock-right-answer">b. option 2
                                                        </span>
                                                        <span class="mock-wrong-answer">c. option 3</span>
                                                        <span>d. option 4</span>
                                                    </div>   
                                                    <div class="mq-count-bottom1 text-center">
                                                        <span>75% of users have answer correctly</span>
                                                    </div>
                                                    <div class="mq-count-bottom2">
                                                        <span>Hints: One third of the Himalayan range is found in Nepal..</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>1. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div style="background-color:#e4e4e4;box-shadow:0px 0px 3px rgba(0, 0, 0, 0.7);">
                                                    <div class="mq-count-bottom">
                                                        <span>
                                                            A. The Misty Mountains
                                                        </span>
                                                        <span class="mock-right-answer">b. option 2
                                                        </span>
                                                        <span class="mock-wrong-answer">c. option 3</span>
                                                        <span>d. option 4</span>
                                                    </div>   
                                                    <div class="mq-count-bottom1 text-center">
                                                        <span>75% of users have answer correctly</span>
                                                    </div>
                                                    <div class="mq-count-bottom2">
                                                        <span>Hints: One third of the Himalayan range is found in Nepal..</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>1. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div style="background-color:#e4e4e4;box-shadow:0px 0px 3px rgba(0, 0, 0, 0.7);">
                                                    <div class="mq-count-bottom">
                                                        <span>
                                                            A. The Misty Mountains
                                                        </span>
                                                        <span class="mock-right-answer">b. option 2
                                                        </span>
                                                        <span class="mock-wrong-answer">c. option 3</span>
                                                        <span>d. option 4</span>
                                                    </div>   
                                                    <div class="mq-count-bottom1 text-center">
                                                        <span>75% of users have answer correctly</span>
                                                    </div>
                                                    <div class="mq-count-bottom2">
                                                        <span>Hints: One third of the Himalayan range is found in Nepal..</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>1. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div style="background-color:#e4e4e4;box-shadow:0px 0px 3px rgba(0, 0, 0, 0.7);">
                                                    <div class="mq-count-bottom">
                                                        <span>
                                                            A. The Misty Mountains
                                                        </span>
                                                        <span class="mock-right-answer">b. option 2
                                                        </span>
                                                        <span class="mock-wrong-answer">c. option 3</span>
                                                        <span>d. option 4</span>
                                                    </div>   
                                                    <div class="mq-count-bottom1 text-center">
                                                        <span>75% of users have answer correctly</span>
                                                    </div>
                                                    <div class="mq-count-bottom2">
                                                        <span>Hints: One third of the Himalayan range is found in Nepal..</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>1. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div style="background-color:#e4e4e4;box-shadow:0px 0px 3px rgba(0, 0, 0, 0.7);">
                                                    <div class="mq-count-bottom">
                                                        <span>
                                                            A. The Misty Mountains
                                                        </span>
                                                        <span class="mock-right-answer">b. option 2
                                                        </span>
                                                        <span class="mock-wrong-answer">c. option 3</span>
                                                        <span>d. option 4</span>
                                                    </div>   
                                                    <div class="mq-count-bottom1 text-center">
                                                        <span>75% of users have answer correctly</span>
                                                    </div>
                                                    <div class="mq-count-bottom2">
                                                        <span>Hints: One third of the Himalayan range is found in Nepal..</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>1. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div style="background-color:#e4e4e4;box-shadow:0px 0px 3px rgba(0, 0, 0, 0.7);">
                                                    <div class="mq-count-bottom">
                                                        <span>
                                                            A. The Misty Mountains
                                                        </span>
                                                        <span class="mock-right-answer">b. option 2
                                                        </span>
                                                        <span class="mock-wrong-answer">c. option 3</span>
                                                        <span>d. option 4</span>
                                                    </div>   
                                                    <div class="mq-count-bottom1 text-center">
                                                        <span>75% of users have answer correctly</span>
                                                    </div>
                                                    <div class="mq-count-bottom2">
                                                        <span>Hints: One third of the Himalayan range is found in Nepal..</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div id="mt-panel2" class="mtpanel">
                                    <div class="row my-3">
                                        <div class="col-12" style="text-align:end;">
                                            <div class="view-paper-wrap">
                                                <button class="btn view-paper">
                                                <img src="{{asset('./images/college_logo1.png')}}">
                                                View Paper
                                                </button>
                                                <button class="btn download-paper">
                                                    <img src="{{asset('./images/college_logo1.png')}}">
                                                    View Paper
                                                    </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-12 text-center">
                                            <span>Psysics Mock Test</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>1. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div class="mq-count-bottom">
                                                   <span>A. The Misty Mountains
                                                </span>
                                                <span>b. option 2
                                                </span>
                                                <span>c. option 3</span>
                                                <span>d. option 4</span>
                                                </div>   
                                            </div>
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>2. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div class="mq-count-bottom">
                                                   <span>A. The Misty Mountains
                                                </span>
                                                <span>b. option 2
                                                </span>
                                                <span>c. option 3</span>
                                                <span>d. option 4</span>
                                                </div>   
                                            </div>
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>3. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div class="mq-count-bottom">
                                                   <span>A. The Misty Mountains
                                                </span>
                                                <span>b. option 2
                                                </span>
                                                <span>c. option 3</span>
                                                <span>d. option 4</span>
                                                </div>   
                                            </div>
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>4. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div class="mq-count-bottom">
                                                   <span>A. The Misty Mountains
                                                </span>
                                                <span>b. option 2
                                                </span>
                                                <span>c. option 3</span>
                                                <span>d. option 4</span>
                                                </div>   
                                            </div>
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>5. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div class="mq-count-bottom">
                                                   <span>A. The Misty Mountains
                                                </span>
                                                <span>b. option 2
                                                </span>
                                                <span>c. option 3</span>
                                                <span>d. option 4</span>
                                                </div>   
                                            </div>
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>6. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div class="mq-count-bottom">
                                                   <span>A. The Misty Mountains
                                                </span>
                                                <span>b. option 2
                                                </span>
                                                <span>c. option 3</span>
                                                <span>d. option 4</span>
                                                </div>   
                                            </div>
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>7. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div class="mq-count-bottom">
                                                   <span>A. The Misty Mountains
                                                </span>
                                                <span>b. option 2
                                                </span>
                                                <span>c. option 3</span>
                                                <span>d. option 4</span>
                                                </div>   
                                            </div>
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>8. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div class="mq-count-bottom">
                                                   <span>A. The Misty Mountains
                                                </span>
                                                <span>b. option 2
                                                </span>
                                                <span>c. option 3</span>
                                                <span>d. option 4</span>
                                                </div>   
                                            </div>
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>9. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div class="mq-count-bottom">
                                                   <span>A. The Misty Mountains
                                                </span>
                                                <span>b. option 2
                                                </span>
                                                <span>c. option 3</span>
                                                <span>d. option 4</span>
                                                </div>   
                                            </div>
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>10. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div class="mq-count-bottom">
                                                   <span>A. The Misty Mountains
                                                </span>
                                                <span>b. option 2
                                                </span>
                                                <span>c. option 3</span>
                                                <span>d. option 4</span>
                                                </div>   
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div id="mt-panel3" class="mtpanel">
                                    <div class="row my-3">
                                        <div class="col-12" style="text-align:end;">
                                            <div class="view-paper-wrap">
                                                <button class="btn view-paper">
                                                <img src="{{asset('./images/college_logo1.png')}}">
                                                View Paper
                                                </button>
                                                <button class="btn download-paper">
                                                    <img src="{{asset('./images/college_logo1.png')}}">
                                                    View Paper
                                                    </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-12 text-center">
                                            <span>Chemestry Mock Test</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>1. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div class="mq-count-bottom">
                                                   <span>A. The Misty Mountains
                                                </span>
                                                <span>b. option 2
                                                </span>
                                                <span>c. option 3</span>
                                                <span>d. option 4</span>
                                                </div>   
                                            </div>
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>2. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div class="mq-count-bottom">
                                                   <span>A. The Misty Mountains
                                                </span>
                                                <span>b. option 2
                                                </span>
                                                <span>c. option 3</span>
                                                <span>d. option 4</span>
                                                </div>   
                                            </div>
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>3. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div class="mq-count-bottom">
                                                   <span>A. The Misty Mountains
                                                </span>
                                                <span>b. option 2
                                                </span>
                                                <span>c. option 3</span>
                                                <span>d. option 4</span>
                                                </div>   
                                            </div>
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>4. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div class="mq-count-bottom">
                                                   <span>A. The Misty Mountains
                                                </span>
                                                <span>b. option 2
                                                </span>
                                                <span>c. option 3</span>
                                                <span>d. option 4</span>
                                                </div>   
                                            </div>
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>5. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div class="mq-count-bottom">
                                                   <span>A. The Misty Mountains
                                                </span>
                                                <span>b. option 2
                                                </span>
                                                <span>c. option 3</span>
                                                <span>d. option 4</span>
                                                </div>   
                                            </div>
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>6. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div class="mq-count-bottom">
                                                   <span>A. The Misty Mountains
                                                </span>
                                                <span>b. option 2
                                                </span>
                                                <span>c. option 3</span>
                                                <span>d. option 4</span>
                                                </div>   
                                            </div>
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>7. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div class="mq-count-bottom">
                                                   <span>A. The Misty Mountains
                                                </span>
                                                <span>b. option 2
                                                </span>
                                                <span>c. option 3</span>
                                                <span>d. option 4</span>
                                                </div>   
                                            </div>
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>8. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div class="mq-count-bottom">
                                                   <span>A. The Misty Mountains
                                                </span>
                                                <span>b. option 2
                                                </span>
                                                <span>c. option 3</span>
                                                <span>d. option 4</span>
                                                </div>   
                                            </div>
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>9. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div class="mq-count-bottom">
                                                   <span>A. The Misty Mountains
                                                </span>
                                                <span>b. option 2
                                                </span>
                                                <span>c. option 3</span>
                                                <span>d. option 4</span>
                                                </div>   
                                            </div>
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>10. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div class="mq-count-bottom">
                                                   <span>A. The Misty Mountains
                                                </span>
                                                <span>b. option 2
                                                </span>
                                                <span>c. option 3</span>
                                                <span>d. option 4</span>
                                                </div>   
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div id="mt-panel4" class="mtpanel">
                                    <div class="row my-3">
                                        <div class="col-12" style="text-align:end;">
                                            <div class="view-paper-wrap">
                                                <button class="btn view-paper">
                                                <img src="{{asset('./images/college_logo1.png')}}">
                                                View Paper
                                                </button>
                                                <button class="btn download-paper">
                                                    <img src="{{asset('./images/college_logo1.png')}}">
                                                    View Paper
                                                    </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-12 text-center">
                                            <span>Mathematics Mock Test</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>1. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div class="mq-count-bottom">
                                                   <span>A. The Misty Mountains
                                                </span>
                                                <span>b. option 2
                                                </span>
                                                <span>c. option 3</span>
                                                <span>d. option 4</span>
                                                </div>   
                                            </div>
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>2. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div class="mq-count-bottom">
                                                   <span>A. The Misty Mountains
                                                </span>
                                                <span>b. option 2
                                                </span>
                                                <span>c. option 3</span>
                                                <span>d. option 4</span>
                                                </div>   
                                            </div>
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>3. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div class="mq-count-bottom">
                                                   <span>A. The Misty Mountains
                                                </span>
                                                <span>b. option 2
                                                </span>
                                                <span>c. option 3</span>
                                                <span>d. option 4</span>
                                                </div>   
                                            </div>
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>4. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div class="mq-count-bottom">
                                                   <span>A. The Misty Mountains
                                                </span>
                                                <span>b. option 2
                                                </span>
                                                <span>c. option 3</span>
                                                <span>d. option 4</span>
                                                </div>   
                                            </div>
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>5. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div class="mq-count-bottom">
                                                   <span>A. The Misty Mountains
                                                </span>
                                                <span>b. option 2
                                                </span>
                                                <span>c. option 3</span>
                                                <span>d. option 4</span>
                                                </div>   
                                            </div>
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>6. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div class="mq-count-bottom">
                                                   <span>A. The Misty Mountains
                                                </span>
                                                <span>b. option 2
                                                </span>
                                                <span>c. option 3</span>
                                                <span>d. option 4</span>
                                                </div>   
                                            </div>
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>7. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div class="mq-count-bottom">
                                                   <span>A. The Misty Mountains
                                                </span>
                                                <span>b. option 2
                                                </span>
                                                <span>c. option 3</span>
                                                <span>d. option 4</span>
                                                </div>   
                                            </div>
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>8. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div class="mq-count-bottom">
                                                   <span>A. The Misty Mountains
                                                </span>
                                                <span>b. option 2
                                                </span>
                                                <span>c. option 3</span>
                                                <span>d. option 4</span>
                                                </div>   
                                            </div>
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>9. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div class="mq-count-bottom">
                                                   <span>A. The Misty Mountains
                                                </span>
                                                <span>b. option 2
                                                </span>
                                                <span>c. option 3</span>
                                                <span>d. option 4</span>
                                                </div>   
                                            </div>
                                            <div class="mq-count-wrap">
                                                <div class="mq-count-top">
                                                    <span>10. The mountain range known as the "White Mountains" in Nepal is better known by what name in the western world ?</span>
                                                </div>
                                                <div class="mq-count-bottom">
                                                   <span>A. The Misty Mountains
                                                </span>
                                                <span>b. option 2
                                                </span>
                                                <span>c. option 3</span>
                                                <span>d. option 4</span>
                                                </div>   
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                           <div class="col-12">
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <form action="#">
                                            <div class="mq-count-btn-section">
                                                <button id="bmockPrev" class="btn next" onclick="mockNext(-1)">Prev</button>
                                                <button id="bmockNext" class="btn next" onclick="mockNext(+1)">Next</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                           </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row mt-rc-whole ml-md-2 ml-0" >
                            <div class="col-12">
                                <div class="mt-right-count">
                                    <span>2 hr</span>
                                    <span>0 min</span>
                                    <span>0 sec</span>
                                    <span>Left</span>
                                </div>

                                {{-- <div class="buttons">
                                    <button data-command="start" class="btn">Start</button>
                                </div> --}}
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12">
                                        <div style="border-top:2px solid #ff0000;
                                        border-bottom:2px solid #ff0000;
                                        padding:10px 0px;">
                                            <div class="mt-right-count1">
                                                <span class="mtrc1">
                                                    1
                                                </span>
                                                <span class="mtrc1">
                                                    2
                                                </span>
                                                <span class="mtrc1">
                                                    3
                                                </span>
                                                <span class="mtrc1">
                                                    4
                                                </span>
                                                <span class="mtrc1">
                                                    5
                                                </span>
                                                <span class="mtrc1">
                                                    6
                                                </span>
                                                <span class="mtrc1">
                                                    7
                                                </span>
                                                <span class="mtrc1">
                                                    8
                                                </span>
                                                <span class="mtrc1">
                                                    9
                                                </span>
                                                <span class="mtrc1">
                                                    10
                                                </span>
                                                <span class="mtrc1">
                                                    11
                                                </span>
                                                <span class="mtrc1">
                                                    12
                                                </span>
                                                <span class="mtrc1">
                                                    13
                                                </span>
                                                <span class="mtrc1">
                                                    14
                                                </span> 
                                                <span class="mtrc1">
                                                    15
                                                </span>
                                                <span class="mtrc1">
                                                    16
                                                </span>
                                                <span class="mtrc1">
                                                    17
                                                </span>
                                                <span class="mtrc1">
                                                    18
                                                </span>
                                                <span class="mtrc1">
                                                    19
                                                </span>
                                                <span class="mtrc1">
                                                    20
                                                </span>
                                                <span class="mtrc1">
                                                    21
                                                </span>
                                                <span class="mtrc1">
                                                    22
                                                </span>
                                            
                                                <span class="mtrc1">
                                                    23
                                                </span>
                                                <span class="mtrc1">
                                                    24
                                                </span>
                                                <span class="mtrc1">
                                                    25
                                                </span>
                                                <span class="mtrc1">
                                                    26
                                                </span>
                                            
                                                <span class="mtrc1">
                                                    27
                                                </span>
                                                <span class="mtrc1">
                                                    28
                                                </span>
                                                <span class="mtrc1">
                                                    29
                                                </span>
                                                <span class="mtrc1">
                                                    30
                                                </span>
                                            
                                                <span class="mtrc1">
                                                    31
                                                </span>
                                                <span class="mtrc1">
                                                    32
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    {{-- <div class="col-12 font-weight-bold">
                                        legend
                                    </div> --}}
                                    <div class="col-12">
                                        <div class="mtr-legend">
                                            <div class="legend-ans">
                                                <span class="legend-ans-span">0</span>
                                                <span>Answered</span>
                                            </div>
                                            <div class="legend-not-ans">
                                                <span class="legend-not-ans-span">0</span>
                                                <span>Not Answered</span>
                                            </div>
                                            {{-- <div class="legend-marked">
                                                <span class="legend-mark-span">0</span>
                                                <span>Marked</span>
                                            </div>
                                            <div class="legend-not-visit">
                                                <span class="legend-not-visit-span">100</span>
                                                <span>Not Visited</span>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-12 font-weight-bold">
                                        Result
                                    </div>
                                    <div class="col-12">
                                        <div class="mtr-result">
                                            <span>80/100</span>
                                            <span>80%</span>
                                            <span>Your Rank:20</span>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <div class="mtr-result-wrap">
                                            <div>
                                                <span>Correct</span>
                                            </div>
                                            <div>
                                                <span>InCorrect</span>
                                            </div>
                                            <div class="mtr-result-left">
                                                <span class="mtr-rl-eng">
                                                    25
                                                </span>
                                                <span>English</span>
                                                <span class="mtr-rl-eng">
                                                    25
                                                </span>
                                                <span>Maths</span>
                                                <span class="mtr-rl-eng">
                                                    25
                                                </span>
                                                <span>Physics</span>
                                                <span class="mtr-rl-eng">
                                                    25
                                                </span>
                                                <span>Chemestry</span>
                                            </div>
                                            <div class="mtr-result-right">
                                                <span class="result-red-span">25</span>
                                                <span>English</span>
                                                <span class="result-red-span">25</span>
                                                <span>Maths</span>
                                                <span class="result-red-span">25</span>
                                                <span>Physics</span>
                                                <span class="result-red-span">25</span>
                                                <span>Chemestry</span>
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
