@extends('fontend.index')
@section('contents')

<div class="container-fluid" style="background-color: #e9ecef;padding-left:0px;padding-right:0px;">
    <div class="row __coll-des-view mx-2">
        <div class="col-12">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Mock Test</a></li>
                <li class="breadcrumb-item active" aria-current="page">Course Detail</li>
            </ul>
        </div>
    </div>
</div>
<div class="container-fluid" style="background-color:#0b46a7;">
    <div class="row searchFilter-top-heading py-3 mx-md-3 mx-0">
        <div class="col-12 text-center ">
            <span>Profile</span>
        </div>
    </div>
    <div class="row pp-button-section mx-md-3 mx-0">
        <div class="col-12">
            <button class="btn sells-btn">Sells</button>
            <button class="btn donate-btn">Donates</button>
        </div>
    </div>
</div>
<div class="container-fluid mb-3" style="background-color:#efefef;">
    <div class="row pt-3 px-md-3">
        <div class="col-lg-3 col-md-4 col-12">
            <div class="row" style="background-color:#0b46a7;">
                <div class="col-12" style="height:150px;">
                    <div class="pp-r-img">
                        <span>
                            <img src="{{asset('images/saral_img2.png')}}">
                        </span>
                        <span>
                            <i class="fas fa-camera"></i>
                        </span>
                    </div>
                </div>
                <div class="col-12">
                    <div class="pp-r-detail text-center">
                        <span>Birendra Bhatta</span>
                        <span>Id Type: Student</span>
                        <span>Saral Id: 03121</span>
                    </div>
                </div>
                <div class="col-12 my-3">
                    <span style="color:#ffffff;">Your Resume is 16% complete</span>
                </div>
                <div class="col-12">
                    <div class="progress" style="height:1rem!important;border-radius:20px!important;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="60"
                            aria-valuemin="0" aria-valuemax="60"></div>
                    </div>
                </div>
                <div class="col-12 my-3">
                    <span style="color:#ffffff;font-size:1.2rem;">Your Points: 50</span>
                </div>
                <div class="col-12 my-3">
                    <div class="pp-r-yp">
                        <div class="pp-r-yp-items">
                            <span>
                                <i class="fas fa-thumbs-up" aria-hidden="true"></i>
                            </span>
                            <span>50</span>
                            <span>Total Share</span>
                        </div>
                        <div class="pp-r-yp-items">
                            <span>
                                <i class="fas fa-thumbs-up" aria-hidden="true"></i>
                            </span>
                            <span>50</span>
                            <span>Total Uploads</span>
                        </div>
                        <div class="pp-r-yp-items">
                            <span>
                                <i class="fas fa-thumbs-up" aria-hidden="true"></i>
                            </span>
                            <span>50</span>
                            <span>Total Answers</span>
                        </div>
                        <div class="pp-r-yp-items">
                            <span>
                                <i class="fas fa-thumbs-up" aria-hidden="true"></i>
                            </span>
                            <span>50</span>
                            <span>Total Votes</span>
                        </div>
                        <div class="pp-r-yp-items">
                            <span>
                                <i class="fas fa-thumbs-up" aria-hidden="true"></i>
                            </span>
                            <span>50</span>
                            <span>Total Reviews</span>
                        </div>
                        <div class="pp-r-yp-items">
                            <span>
                                <i class="fas fa-thumbs-up" aria-hidden="true"></i>
                            </span>
                            <span>50</span>
                            <span>Total Asked</span>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row mb-3    ">
                        <div class="col-12">
                            <div id="pp-check">
                                <span>
                                    <input type="checkbox" id="homeT" name="homeT" value="Bike">
                                </span>
                                <span>
                                    <label for="homeT">Home Tution</label><br>
                                </span>
                            </div>
                            <div id="pp-check">
                            <span>
                                <input type="checkbox" id="homeT" name="homeT" value="Bike">
                            </span>
                            <span>
                                <label for="homeT">Online Class</label><br>
                            </span>
                            </div>
                            <div id="pp-check">
                            <section>
                                <i class="fas fa-thumbs-up" aria-hidden="true"></i>
                            </section>
                            <section>
                                Refer and Earn
                            </section>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn-danger" name="logout" style="border-radius:30px;padding:5px 20px;">Logout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-8 col-12">
            <div class="row mb-3">
                <div class="col-12">
                    <div class="ana-tablinks-wrap1">
                        <section onclick="anaPanel(event, 'ana-panel1')" class="anaTabs ana-active">
                            Personal Info 
                        </section>
                        <section onclick="anaPanel(event, 'ana-panel2')" class="anaTabs">
                            Educations
                        </section>
                        <section onclick="anaPanel(event, 'ana-panel3')" class="anaTabs">
                            Home Tutions
                        </section>
                        <section onclick="anaPanel(event, 'ana-panel4')" class="anaTabs">
                            Rewards
                        </section>
                        <section onclick="anaPanel(event, 'ana-panel5')" class="anaTabs">
                            Settings
                        </section>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div id="ana-panel1" class="anapanel">
                        <div class="row">
                            <div class="col-12" id="pppanel-heading">
                                <span>Personal profile</span>
                            </div>
                            <div class="col-12 pparea">
                                <textarea name="area" rows="3" id="pp5" placeholder="Tell us a bit about yourself..."></textarea>
                            </div>
                        </div>
                        <form action="">
                        <div class="row">
                            <div class="col-12" id="pppanel-heading">
                                <span>Detail</span>
                            </div>
                            <div class="col-12">
                                    <div id="pparea1">
                                        <div class="pparea-wrapper">
                                            <div class="pparea-item-l">
                                                <span>
                                                    <label for="fname">First Name</label>
                                                </span>
                                                <span>
                                                    <input class="form-control" type="text" name="fname" placeholder="first name"/>
                                                </span>
                                            </div>
                                            <div class="pparea-item-r">
                                                <span>
                                                    <label for="sname">Sur Name</label>
                                                </span>
                                                <span>
                                                    <input class="form-control" type="text" name="sname" placeholder="sur name"/>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="pparea-wrapper">
                                            <div class="pparea-item-l">
                                                <span>
                                                    <label for="email">Email Address</label>
                                                </span>
                                                <span>
                                                    <input class="form-control" type="email" name="fname" placeholder="Enter email"/>
                                                </span>
                                            </div>
                                            <div class="pparea-item-r">
                                                <span>
                                                    <label for="date">Date of Birth</label>
                                                </span>
                                                <span>
                                                    <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="pparea-wrapper">
                                            <div class="pparea-item-l">
                                                <span>
                                                    <label for="gender">Gender</label>
                                                </span>
                                                <span>
                                                    <select class="form-control">
                                                        <option>male</option>
                                                        <option>female</option>
                                                        <option>others</option>
                                                    </select>
                                                </span>
                                            </div>
                                            <div class="pparea-item-r">
                                                <span>
                                                    <label for="phone">Phone Number</label>
                                                </span>
                                                <span>
                                                    <input class="form-control" type="text" name="fname" placeholder="Pnone no"/>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pparea1-sub-head">
                                        <span>Parmanent Address</span>
                                    </div>
                                    <div id="pparea1">
                                        <div class="pparea-wrapper">
                                            <div class="pparea-item-l">
                                                <span>
                                                    <label for="province">Province</label>
                                                </span>
                                                <span>
                                                    <input class="form-control" type="text" name="province" placeholder="enter province"/>
                                                </span>
                                            </div>
                                            <div class="pparea-item-r">
                                                <span>
                                                    <label for="distrct">District</label>
                                                </span>
                                                <span>
                                                    <input class="form-control" type="text" name="district" placeholder="District"/>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="pparea-wrapper">
                                            <div class="pparea-item-l">
                                                <span>
                                                    <label for="municipal">Municipal</label>
                                                </span>
                                                <span>
                                                    <input class="form-control" type="text" name="municipal" placeholder="Municipal"/>
                                                </span>
                                            </div>
                                            <div class="pparea-item-r">
                                                <span>
                                                    <label for="ward">ward</label>
                                                </span>
                                                <span>
                                                    <input class="form-control" type="text" name="ward" placeholder="ward"/>
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="pparea1-sub-head">
                                        <span>Temporary Address</span>
                                    </div>
                                    <div id="pparea1">
                                        <div class="pparea-wrapper">
                                            <div class="pparea-item-l">
                                                <span>
                                                    <label for="province">Province</label>
                                                </span>
                                                <span>
                                                    <input class="form-control" type="text" name="province" placeholder="enter province"/>
                                                </span>
                                            </div>
                                            <div class="pparea-item-r">
                                                <span>
                                                    <label for="distrct">District</label>
                                                </span>
                                                <span>
                                                    <input class="form-control" type="text" name="district" placeholder="District"/>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="pparea-wrapper">
                                            <div class="pparea-item-l">
                                                <span>
                                                    <label for="municipal">Municipal</label>
                                                </span>
                                                <span>
                                                    <input class="form-control" type="text" name="municipal" placeholder="Municipal"/>
                                                </span>
                                            </div>
                                            <div class="pparea-item-r">
                                                <span>
                                                    <label for="city">City</label>
                                                </span>
                                                <span>
                                                    <input class="form-control" type="text" name="city" placeholder="city"/>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="pparea-wrapper">
                                            <div class="pparea-item-l">
                                                <span>
                                                    <label for="landmark">Nearby Landmark</label>
                                                </span>
                                                <span>
                                                    <input class="form-control" type="text" name="landmark" placeholder="landmark"/>
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-12" style="text-align:end;">
                                <button class="btn btn-danger" type="submit"> Submit</button>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div id="ana-panel2" class="anapanel">
                        <div class="row">
                            <div class="col-12">
                                <form action="">
                                    <div class="row">
                                        <div class="col-12" id="pppanel-heading">
                                            <span>Currently Study</span>
                                        </div>
                                        <div class="col-12">
                                                <div id="pparea1">
                                                    <div class="pparea-wrapper">
                                                        <div class="pparea-item-l">
                                                            <span>
                                                                <label for="university">University</label>
                                                            </span>
                                                            <span>
                                                                <input class="form-control" type="text" name="fname" placeholder="first name"/>
                                                            </span>
                                                        </div>
                                                        <div class="pparea-item-r">
                                                            <span>
                                                                <label for="collegeName">college Name</label>
                                                            </span>
                                                            <span>
                                                                <input class="form-control" type="text" name="collegeName" placeholder="college name"/>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="pparea-wrapper">
                                                        <div class="pparea-item-l">
                                                            <span>
                                                                <label for="email">Faculties</label>
                                                            </span>
                                                            <span>
                                                                <input class="form-control" type="text" name="faculties" placeholder="Enter faculties"/>
                                                            </span>
                                                        </div>
                                                        <div class="pparea-item-r">
                                                            <span>
                                                                <label for="level">level</label>
                                                            </span>
                                                            <span>
                                                                <input class="form-control" type="text" name="level" placeholder="Enter level"/>     
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="pparea-wrapper">
                                                        <div class="pparea-item-l">
                                                            <span>
                                                                <label for="subject">Subject</label>
                                                            </span>
                                                            <span>
                                                                <select class="form-control">
                                                                    <option>subject1</option>
                                                                    <option>subject2</option>
                                                                    <option>subject3</option>
                                                                </select>
                                                            </span>
                                                        </div>
                                                        <div class="pparea-item-r">
                                                            <span>
                                                                <label for="semester">Semester/Year</label>
                                                            </span>
                                                            <span>
                                                            <select class="form-control">
                                                                <option>first Semester</option>
                                                                <option>second Semester</option>
                                                                <option>Third Semester</option>
                                                                <option value=""> Fourth Semester</option>
                                                                <option>Fifth Semester</option>
                                                                <option>Sixth Semester</option>
                                                                <option value="">Seventh Semester</option>
                                                                <option value="">Eighth Semester</option>
                                                            </select>
                                                        </span>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-12" style="text-align:end;">
                                            <button class="btn btn-danger" type="submit"> Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="ana-panel3" class="anapanel">
                        <div class="row my-3">
                            <div class="col-12">
                                <span style="font-size:1.3rem;font-weight:600;margin-right:10px;">if you are new in Home Tution Please fill up the form</span>
                                <span class="btn btn-primary">Fill up form</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="row mx-2">
                                    <div class="col-12 py-2" style="background-color:#0b46a7;color:#ffffff;letter-spacing:1px;">
                                        <span>Home Tutions details</span>
                                    </div>
                                </div>
                                <div class="row mx-2">
                                    <div class="col-12 py-2 home-tution-detail">
                                        <span>Previous Finesh Home Turions: 10</span>
                                        <span>Previous Number of Student you Teach: 45</span>
                                        <span>Currently Running Home Tutions: 5</span>
                                        <span>Your Total Income: Rs 45000 NRP</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-12">
                                <div class="row mx-2">
                                    <div class="col-12 py-2" style="background-color:#0b46a7;color:#ffffff;letter-spacing:1px;">
                                        <span>If you are currently taking home Tutions fill this form</span>
                                    </div>
                                </div>
                                <form action="">
                                <div class="row mx-2" style="background-color:#ffffff;">

                                    <div class="col-12 py-2 htd-form">
                                        <span>
                                            <label for="location">Current tutions Locations</label>
                                        </span>
                                        <span>
                                            <input class="form-control" name="location" type="text">
                                        </span>
                                        <span>
                                            <label for="shift">Current tutions Locations</label>
                                        </span>
                                        <span>
                                            <select class="form-control" name="shift" id="">
                                                <option value="">Morning</option>
                                                <option value="">day</option>
                                            </select>
                                        </span>
                                        <span>
                                            <label for="studentNO">Total No of Student in this Tutions:</label>
                                        </span>
                                        <span>
                                            <input class="form-control" name="studentNo" type="text">
                                        </span>
                                        <span>
                                            <label for="location">Level of Student:</label>
                                        </span>
                                        <span>
                                            <input class="form-control" name="location" type="text">
                                        </span>
                                        <span>
                                            <label for="location">Total salary of this tutions:</label>
                                        </span>
                                        <span>
                                            <input class="form-control" name="location" type="text">
                                        </span>
                                    </div>
                                    <div class="col-12 pb-3" style="text-align:end;">
                                        <input class="btn btn-danger" type="submit" name="submit" value="submit">
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-12">
                                <span>Currently Home Tutions details</span>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 htd-table">
                                            <table>
                                                <tr>
                                                    <th>S.N.</th>
                                                    <th>Locations</th>
                                                    <th>Salary of this tutions</th>
                                                    <th>Total Number of Student</th>
                                                    <th>Shift</th>
                                                    <th>Level of Student</th>
                                                    <th>Active Status</th>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Balaju</td>
                                                    <td>10,000/-</td>
                                                    <td>2</td>
                                                    <td>Evening</td>
                                                    <td>class 5</td>
                                                    <td>Running</td>
                                                </tr>
                                                <tr>
                                                <td>1</td>
                                                <td>Balaju</td>
                                                <td>10,000/-</td>
                                                <td>2</td>
                                                <td>Evening</td>
                                                <td>class 5</td>
                                                <td>Running</td>
                                            </tr>
                                            </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="ana-panel4" class="anapanel">
                        <div class="row">
                            <div class="col-12" id="pppanel-heading">
                                <span>Rewards Pints Cashback</span>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-12">
                                <div id="reward-pc">
                                    <div class="reward-pc-l">
                                        <img src="{{asset('./images/blueOver.png')}}">
                                        <div class="reward-pc-li">
                                            <div class="reward-pc-li1 text-justify">
                                                <span>Earn Points</span>
                                                <span>One Membership. Multiple Benefits.</span>
                                                <span>With PAYBACK, your mobile number is your identification to access  and enter a world full of amazing rewards. You can simply sign-up  by linking your phone number and login to generate a 4-digit PIN that acts as your password, eachtime you log in to your account</span>
                                            </div>
                                            <div class="reward-pc-li2 text-justify">
                                            <span>Your PAYBACK Accoun</span>
                                            <span>Once you log in, you will be taken to a dashboard with quick access to your PAYBACK Account, your Card Information, Transaction History and Orders that you have placed on the upper right corner alongside your Name and Points tally. You can view your Transaction History to understand how many Points you  have earned on which transaction while your Orders reflect the status of each order that you have placed.</span>
                                        </div>
                                        <div class="reward-pc-li3 text-justify">
                                            <span>Do More With Your Points</span>
                                            <span>With PAYBACK, your mobile number is your identification to access  and enter a world full of amazing rewards. You can simply sign-up  by linking your phone number and login to generate a 4-digit PIN that acts as your password, eachtime you log in to your account</span>
                                        </div>
                                        <div class="reward-pc-li4 text-justify">
                                            <span>Points Update</span>
                                            <span>Your PAYBACK Points gets updated upon making a transaction and are reflected in your PAYBACK  Account. You can view your complete  transaction history and keep a tab on  your point details at the click of a button.</span>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="reward-pc-r">
                                        <div class="reward-pc-rii">
                                            <div class="reward-pc-r-items">
                                                <span>1000 Points</span>
                                                <span>Sepcial Saral Shiksya T-shirt</span>
                                            </div>
                                            <div class="reward-pc-r-items">
                                                <span>1000 Points</span>
                                                <span>Sepcial Saral Shiksya T-shirt</span>
                                            </div>
                                            <div class="reward-pc-r-items">
                                                <span>1000 Points</span>
                                                <span>Sepcial Saral Shiksya T-shirt</span>
                                            </div>
                                            <div class="reward-pc-r-items">
                                                <span>1000 Points</span>
                                                <span>Sepcial Saral Shiksya T-shirt</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="ana-panel5" class="anapanel">
                        <div class="row">
                            <div class="col-12" id="pppanel-heading">
                                <span>Setting</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="row" style="background-color:#ffffff; margin:20px;">
                                    <div class="col-12 text-center mb-4">
                                        <div class="pp-panel5">
                                            <span>Change password</span>
                                        </div>
                                    </div>
                                    <div class="col-12 my-3">
                                        <form action="">
                                            <div class="pp-panel5-form" >
                                                <span>
                                                    <label for="oldPassword">OLD PASSWORD</label>
                                                </span>
                                                <span>
                                                    <input class="form-control" type="text" name="oldPassword"/>
                                                </span>
                                            </div>
                                            <div class="pp-panel5-form" >
                                                <span>
                                                        <label for="newPassword">NEW PASSWORD</label>
                                                </span>
                                                <span>
                                                        <input class="form-control" type="text" name="NewPassword"/>
                                                </span>
                                                </div>
                                            <div class="pp-panel5-form" >
                                                <span>
                                                        <label for="rnewPassword">OLD PASSWORD</label>
                                                </span>
                                                <span>
                                                        <input class="form-control" type="text" name="rnewPassword"/>
                                                </span>
                                                </div>
                                        </form>
                                    </div>
                                    <div class="col-12 my-3 text-center">
                                            <button class="btn btn-danger btn-large">Saves</button>
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
