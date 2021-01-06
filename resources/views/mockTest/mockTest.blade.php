@extends('fontend.index3')
@section('contents')

<div class="container-fluid" style="background-color: #e9ecef;padding-left:0px;padding-right:0px;">
    <div class="row __coll-des-view">
        <div class="col-12">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Mock Test</li>
            </ul>
        </div>
    </div>
</div>
<div class="container-fluid mock-heros" style="background-image: url('{{ asset('images/mock.png')}}')">
</div>
<div class="container-fluid" style="background-color:#efefef;">
    <div class="row mx-3">
        <div class="col-12">
            {{-- <div class="row text-center mock-ss">
                <div class="col-12 mt-3">
                    <span>welcome to Saral Entrance</span>
                </div>
                <div class="col-12 my-3">
                    <span>our Services</span>
                </div>
            </div> --}}
            {{-- <div class="row my-3">
                <div class="col-lg-3 col-md-6 col-12"> 
                    <div class="row mr-md-0 mx-3">
                        <div class="col-12">
                            <div class="row mock-os-wrapper">
                                <div class="col-12 text-center">
                                <img src="{{asset('./images/mock1.png')}}">
                                </div>
                                <div class="col-12 text-center mock-os-head mb-3">
                                    <span>Entrance Prepration</span>
                                </div>
                                <div class="col-12 mock-os-para">
                                    <span>In publishing and graphic design, Lorem ipsum is a placeholder tex commonly used to demonstrate th e visual form of a document or a ty peface without relying on meaning ful content</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12"> 
                    <div class="row mr-md-0 mx-3">
                        <div class="col-12">
                            <div class="row mock-os-wrapper">
                                <div class="col-12 text-center">
                                <img src="{{asset('./images/mock1.png')}}">
                                </div>
                                <div class="col-12 text-center mock-os-head mb-3">
                                    <span>Ask Doubt</span>
                                </div>
                                <div class="col-12 mock-os-para">
                                    <span>In publishing and graphic design, Lorem ipsum is a placeholder tex commonly used to demonstrate th e visual form of a document or a ty peface without relying on meaning ful content</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12"> 
                    <div class="row mr-md-0 mx-3">
                        <div class="col-12">
                            <div class="row mock-os-wrapper">
                                <div class="col-12 text-center">
                                <img src="{{asset('./images/mock1.png')}}">
                                </div>
                                <div class="col-12 text-center mock-os-head mb-3">
                                    <span>Entrance Prepration</span>
                                </div>
                                <div class="col-12 mock-os-para">
                                    <span>In publishing and graphic design, Lorem ipsum is a placeholder tex commonly used to demonstrate th e visual form of a document or a ty peface without relying on meaning ful content</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12"> 
                    <div class="row mr-md-0 mx-3">
                        <div class="col-12">
                            <div class="row mock-os-wrapper">
                                <div class="col-12 text-center">
                                <img src="{{asset('./images/mock1.png')}}">
                                </div>
                                <div class="col-12 text-center mock-os-head mb-3">
                                    <span>Ask Doubt</span>
                                </div>
                                <div class="col-12 mock-os-para">
                                    <span>In publishing and graphic design, Lorem ipsum is a placeholder tex commonly used to demonstrate th e visual form of a document or a ty peface without relying on meaning ful content</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="row my-3">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="row online-course">
                        <div class="col-12 text-center">
                            <span>
                                <img src="http://127.0.0.1:8000/./images/saral_img1.png">
                            </span>
                            <span>
                                Online Mock Test
                            </span>
                            <span>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis suscipit ratione,
                                laboriosam facere vel error expedita nisi, vitae sit consectetur ipsum molestias
                                laudantium!
                                Temporibus culpa porro sequi fuga reprehenderit facilis!
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis suscipit ratione,
                                laboriosam facere vel error expedita nisi, vitae sit consectetur ipsum molestias
                                laudantium!
                                Temporibus culpa porro sequi fuga reprehenderit facilis!
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="row online-course">
                        <div class="col-12 text-center">
                            <span>
                                <img src="http://127.0.0.1:8000/./images/saral_img1.png">
                            </span>
                            <span>
                                Live Class
                            </span>
                            <span>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis suscipit ratione,
                                laboriosam facere vel error expedita nisi, vitae sit consectetur ipsum molestias
                                laudantium!
                                Temporibus culpa porro sequi fuga reprehenderit facilis!
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis suscipit ratione,
                                laboriosam facere vel error expedita nisi, vitae sit consectetur ipsum molestias
                                laudantium!
                                Temporibus culpa porro sequi fuga reprehenderit facilis!
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="row online-course">
                        <div class="col-12 text-center">
                            <span>
                                <img src="http://127.0.0.1:8000/./images/saral_img1.png">
                            </span>
                            <span>
                                Mock Test Exam
                            </span>
                            <span>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis suscipit ratione,
                                laboriosam facere vel error expedita nisi, vitae sit consectetur ipsum molestias
                                laudantium!
                                Temporibus culpa porro sequi fuga reprehenderit facilis!
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis suscipit ratione,
                                laboriosam facere vel error expedita nisi, vitae sit consectetur ipsum molestias
                                laudantium!
                                Temporibus culpa porro sequi fuga reprehenderit facilis!
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="row online-course">
                        <div class="col-12 text-center">
                            <span>
                                <img src="http://127.0.0.1:8000/./images/saral_img1.png">
                            </span>
                            <span>
                                Mock Test With College Visit
                            </span>
                            <span>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis suscipit ratione,
                                laboriosam facere vel error expedita nisi, vitae sit consectetur ipsum molestias
                                laudantium!
                                Temporibus culpa porro sequi fuga reprehenderit facilis!
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis suscipit ratione,
                                laboriosam facere vel error expedita nisi, vitae sit consectetur ipsum molestias
                                laudantium!
                                Temporibus culpa porro sequi fuga reprehenderit facilis!
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <div class="os-bottom-section">
                        <div class="os-bs-left" style="height: 50vh;">
                            <div class="os-bs-left1">
                                <span>Happy Student</span>
                                <span>1.5 K</span>
                            </div>
                            <div class="os-bs-left2">
                                <span>Old Questions</span>
                                <span>456</span>
                            </div>
                            <div class="os-bs-left3">
                                <span>Mock Test Paper</span>
                                <span>3201</span>
                            </div>
                            <div class="os-bs-left4">
                                <span>User Appeared</span>
                                <span>4320</span>
                            </div>
                            <div class="os-bs-left5">
                                <span>Mock Test Paper</span>
                                <span>3201</span>
                            </div>

                        </div>
                        <div class="os-bs-right">
                            <span style="">
                                List of top 10 Scorer
                            </span>
                            <table style="width:100%;margin-top:20px;margin:10px">
                                <tr>
                                    <th>Name</th>
                                    <th>Score</th>
                                </tr>
                                <tr>
                                    <td>Batman</td>
                                    <th>300</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row py-5">
                <div class="col-12">
                    <div class="row omtp-whole-wrapper">
                        <div class="col-12 omtp-heading">
                            <span>Online Mock Test Paper(Entrance)</span>
                        </div>
                        <div class="col-12 omtp-body">
                            <div class="omtp-section">
                                <div class="omtp-items1">
                                    <span><img src="{{asset('./images/mock1.png')}}"></span>
                                    <span>Msc Mock Test</span>
                                </div>
                                <div class="omtp-items2">
                                    <span><img src="{{asset('./images/mock1.png')}}"></span>
                                    <span>Msc Mock Test</span>
                                    </div>
                                <div class="omtp-items3">
                                    <span><img src="{{asset('./images/mock1.png')}}"></span>
                                    <span>Msc Mock Test</span>
                                </div>
                                <div class="omtp-items1">
                                    <span><img src="{{asset('./images/mock1.png')}}"></span>
                                    <span>Msc Mock Test</span>
                                </div>
                                <div class="omtp-items2">
                                    <span><img src="{{asset('./images/mock1.png')}}"></span>
                                    <span>Msc Mock Test</span>
                                </div>
                                <div class="omtp-items3">
                                    <span><img src="{{asset('./images/mock1.png')}}"></span>
                                    <span>Msc Mock Test</span>
                                </div>
                                <div class="omtp-items1">
                                    <span><img src="{{asset('./images/mock1.png')}}"></span>
                                    <span>Msc Mock Test</span>
                                </div>
                                <div class="omtp-items2">
                                    <span><img src="{{asset('./images/mock1.png')}}"></span>
                                    <span>Msc Mock Test</span>
                                    </div>
                                <div class="omtp-items3">
                                    <span><img src="{{asset('./images/mock1.png')}}"></span>
                                    <span>Msc Mock Test</span>
                                </div>
                                <div class="omtp-items1">
                                    <span><img src="{{asset('./images/mock1.png')}}"></span>
                                    <span>Msc Mock Test</span>
                                </div>
                                <div class="omtp-items2">
                                    <span><img src="{{asset('./images/mock1.png')}}"></span>
                                    <span>Msc Mock Test</span>
                                </div>
                                <div class="omtp-items3">
                                    <span><img src="{{asset('./images/mock1.png')}}"></span>
                                    <span>Msc Mock Test</span>
                                </div>
                                <div class="omtp-items1">
                                    <span><img src="{{asset('./images/mock1.png')}}"></span>
                                    <span>Msc Mock Test</span>
                                </div>
                                <div class="omtp-items2">
                                    <span><img src="{{asset('./images/mock1.png')}}"></span>
                                    <span>Msc Mock Test</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="row py-5">
                <div class="col-12">
                    <div class="owl-carousel6 owl-carousel owl-theme">
                        <div class="item">
                            <a data-fancybox="gallery" href="{{asset('gallery/gallery1.jpg')}}">
                                <img src="{{asset('gallery/gallery1.jpg')}}" alt=""/> 
                            </a>
                            <a data-fancybox="gallery" href="{{asset('gallery/gallery2.jpg')}}">
                                <img src="{{asset('gallery/gallery2.jpg')}}" alt=""/> 
                            </a>
                        </div>
                        <div class="item">
                            <a data-fancybox="gallery" href="{{asset('gallery/gallery3.jpg')}}">
                                <img src="{{asset('gallery/gallery3.jpg')}}" alt=""/> 
                            </a>
                            <a data-fancybox="gallery" href="{{asset('gallery/gallery4.jpg')}}">
                                <img src="{{asset('gallery/gallery4.jpg')}}" alt=""/> 
                            </a>
                        </div>
                        <div class="item">
                            <a data-fancybox="gallery" href="{{asset('gallery/gallery5.jpg')}}">
                                <img src="{{asset('gallery/gallery5.jpg')}}" alt=""/> 
                            </a>
                            <a data-fancybox="gallery" href="{{asset('gallery/gallery6.jpg')}}">
                                <img src="{{asset('gallery/gallery6.jpg')}}" alt=""/> 
                            </a>
                        </div>
                        <div class="item">
                            <a data-fancybox="gallery" href="{{asset('gallery/gallery7.jpg')}}">
                                <img src="{{asset('gallery/gallery7.jpg')}}" alt=""/> 
                            </a>
                            <a data-fancybox="gallery" href="{{asset('gallery/gallery8.jpg')}}">
                                <img src="{{asset('gallery/gallery8.jpg')}}" alt=""/> 
                            </a>
                        </div>
                        <div class="item">
                            <a data-fancybox="gallery" href="{{asset('gallery/gallery9.jpg')}}">
                                <img src="{{asset('gallery/gallery9.jpg')}}" alt=""/> 
                            </a>
                            <a data-fancybox="gallery" href="{{asset('gallery/gallery10.jpg')}}">
                                <img src="{{asset('gallery/gallery10.jpg')}}" alt=""/> 
                            </a>
                        </div>
                        <div class="item">
                            <a data-fancybox="gallery" href="{{asset('gallery/gallery11.jpg')}}">
                                <img src="{{asset('gallery/gallery11.jpg')}}" alt=""/> 
                            </a>
                            <a data-fancybox="gallery" href="{{asset('gallery/gallery12.jpg')}}">
                                <img src="{{asset('gallery/gallery12.jpg')}}" alt=""/> 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 omtp-heading">
                    <span>What Our Student Says??</span>
                </div>
            </div>
            <div class="row" style="position:relative;">
                <div class="col-12">
                    <div class="owl-carousel2 owl-carousel owl-theme">
                        <div class="oc2-whole-wrap">
                            <div style="display:grid;">
                                <div class="oc2-middle">
                                     <img src="{{asset('./images/saral_img3.png')}}">
                                </div>
                                <div class="oc2-bottom">
                                    <span>Briendra Bhatta</span>
                                    <span>2071 Batch Bsc.CSIT</span>
                                    <span>Entrance Topper(TU.IOST)</span>
                                </div>
                            </div>
                            <div class="oc2-top">
                                <span>This Company which run educational platform ”Saral Entrance” has supported me a lot in sec uring a good rank in the IOST exam taken by T U and I would like to thank it…
                                    ny which run educational platform ”Saral Entrance” has supported me a lot in sec uring a good rank in the IOST exam taken by T U and I would like to thank it…
                                </span>
                            </div>
                        </div>
                        <div class="oc2-whole-wrap">
                            <div style="display:grid;">
                                <div class="oc2-middle">
                                     <img src="{{asset('./images/saral_img3.png')}}">
                                </div>
                                <div class="oc2-bottom">
                                    <span>Briendra Bhatta</span>
                                    <span>2071 Batch Bsc.CSIT</span>
                                    <span>Entrance Topper(TU.IOST)</span>
                                </div>
                            </div>
                            <div class="oc2-top">
                                <span>This Company which run educational platform ”Saral Entrance” has supported me a lot in sec uring a good rank in the IOST exam taken by T U and I would like to thank it…
                                    ny which run educational platform ”Saral Entrance” has supported me a lot in sec uring a good rank in the IOST exam taken by T U and I would like to thank it…
                                </span>
                            </div>
                        </div>
                        <div class="oc2-whole-wrap">
                            <div style="display:grid;">
                                <div class="oc2-middle">
                                     <img src="{{asset('./images/saral_img3.png')}}">
                                </div>
                                <div class="oc2-bottom">
                                    <span>Briendra Bhatta</span>
                                    <span>2071 Batch Bsc.CSIT</span>
                                    <span>Entrance Topper(TU.IOST)</span>
                                </div>
                            </div>
                            <div class="oc2-top">
                                <span>This Company which run educational platform ”Saral Entrance” has supported me a lot in sec uring a good rank in the IOST exam taken by T U and I would like to thank it…
                                    ny which run educational platform ”Saral Entrance” has supported me a lot in sec uring a good rank in the IOST exam taken by T U and I would like to thank it…
                                </span>
                            </div>
                        </div>
                        <div class="oc2-whole-wrap">
                            <div style="display:grid;">
                                <div class="oc2-middle">
                                     <img src="{{asset('./images/saral_img3.png')}}">
                                </div>
                                <div class="oc2-bottom">
                                    <span>Briendra Bhatta</span>
                                    <span>2071 Batch Bsc.CSIT</span>
                                    <span>Entrance Topper(TU.IOST)</span>
                                </div>
                            </div>
                            <div class="oc2-top">
                                <span>This Company which run educational platform ”Saral Entrance” has supported me a lot in sec uring a good rank in the IOST exam taken by T U and I would like to thank it…
                                    ny which run educational platform ”Saral Entrance” has supported me a lot in sec uring a good rank in the IOST exam taken by T U and I would like to thank it…
                                </span>
                            </div>
                        </div>
                        <div class="oc2-whole-wrap">
                            <div style="display:grid;">
                                <div class="oc2-middle">
                                     <img src="{{asset('./images/saral_img3.png')}}">
                                </div>
                                <div class="oc2-bottom">
                                    <span>Briendra Bhatta</span>
                                    <span>2071 Batch Bsc.CSIT</span>
                                    <span>Entrance Topper(TU.IOST)</span>
                                </div>
                            </div>
                            <div class="oc2-top">
                                <span>This Company which run educational platform ”Saral Entrance” has supported me a lot in sec uring a good rank in the IOST exam taken by T U and I would like to thank it…
                                    ny which run educational platform ”Saral Entrance” has supported me a lot in sec uring a good rank in the IOST exam taken by T U and I would like to thank it…
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" style="background-color:#d0d0d2;">
    <div class="row mt-5 py-5 mx-5">
        <div class="col-12">
            <div class="omtfooter">
                <div class="omtfooter1">
                    <span>Master Entrance</span>
                    <span>AI for Everyone</span>
                    <span>Neuaral Network</span>
                    <span>AI for Everyone</span>
                    <span>Neuaral Network</span>
                    <span>AI for Everyone</span>
                    <span>Neuaral Network</span>
                    <span>AI for Everyone</span>
                    <span>Neuaral Network</span>
                </div>
                <div class="omtfooter1">
                    <span>Bachelor</span>
                    <span>AI for Everyone</span>
                    <span>Neuaral Network</span>
                    <span>AI for Everyone</span>
                    <span>Neuaral Network</span>
                    <span>AI for Everyone</span>
                    <span>Neuaral Network</span>
                    <span>AI for Everyone</span>
                    <span>Neuaral Network</span>
                </div>
                <div class="omtfooter1">
                    <span>ICAN</span>
                    <span>AI for Everyone</span>
                    <span>Neuaral Network</span>
                    <span>AI for Everyone</span>
                    <span>Neuaral Network</span>
                    <span>AI for Everyone</span>
                    <span>Neuaral Network</span>
                    <span>AI for Everyone</span>
                    <span>Neuaral Network</span>
                </div>
                <div class="omtfooter1">
                    <span>CTEVT Entrance</span>
                    <span>AI for Everyone</span>
                    <span>Neuaral Network</span>
                    <span>AI for Everyone</span>
                    <span>Neuaral Network</span>
                    <span>AI for Everyone</span>
                    <span>Neuaral Network</span>
                    <span>AI for Everyone</span>
                    <span>Neuaral Network</span>
                </div>
                <div class="omtfooter1">
                    <span>Bridge Course</span>
                    <span>AI for Everyone</span>
                    <span>Neuaral Network</span>
                    <span>AI for Everyone</span>
                    <span>Neuaral Network</span>
                    <span>AI for Everyone</span>
                    <span>Neuaral Network</span>
                    <span>AI for Everyone</span>
                    <span>Neuaral Network</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection