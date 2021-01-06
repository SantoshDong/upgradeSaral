<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*Home Page */
Route::get('/', 'NavigationController@index');

/*Sub page Start */
/*University page */
Route::get('/allUniversity', 'NavigationController@allUniversity');

Route::get('/universityDetail','NavigationController@universityDetail');

Route::get('/university-detail2', function () {
    return view('university.universityDetail2');
});
Route::get('/search-section', function () {
    return view('university.searchSection');
});
Route::get('/searchFilter', function () {
    return view('university.searchFilter');
});

/*Notes page */
Route::get('/notesTabs','NavigationController@notesTabs');
Route::get('/allNotes','NavigationController@allNotes');


/*Cources page */
Route::get('/allCourses', function () {
    return view('university.allCourses');
});

Route::get('/courseDetail', function(){
return view('AskAnswer.courseDetail');
});


/*Normal Page like Blog Notice, News */
Route::get('/allBlog','NavigationController@allBlog');

Route::get('/blogDetail', function () {
    return view('university.blogDetail');
});

Route::get('/allEvent', function () {
    return view('university.allEvent');
});
Route::get('/eventDetail', function () {
    return view('university.eventDetail');
});
Route::get('/allNotices', function () {
    return view('university.allNotices');
});
Route::get('/noticesDetail', function () {
    return view('university.noticesDetail');
});


/*home Tution Page */
Route::get('/homeTution', function () {
    return view('notes.homeTution');
});

Route::get('/tutionForm', function () {
    return view('notes.tutionForm');
});

Route::get('/tutionForm2', function () {
    return view('notes.tutionForm2');
});
Route::get('/formAcademic', function () {
    return view('notes.formAcademic');
});

Route::get('/formDocSubmit', function () {
    return view('notes.formDocSubmit');
});



/*Mock Test Page*/
Route::get('/mockTest', function () {
    return view('mockTest.mockTest');
});

Route::get('/mockSearch', function () {
    return view('mockTest.mockTestSearch');
});

Route::get('/modalTest', function () {
    return view('mockTest.modalTest');
});

Route::get('/modalTestResult', function () {
    return view('mockTest.modalTestResult');
});




/* FAQ Page */
Route::get('/qna', function(){
return view('AskAnswer.qna');
});


/*online Cources*/
Route::get('/onlineCourse', function(){
return view('Course/onlineCourse');
});


/*Profile */

Route::get('/personalProfile', function(){
return view('AskAnswer.personalProfile');
});
Route::get('/rewardPoint', function(){
    return view('AskAnswer.rewardPoints');
    });

Route::get('/uploadDocument', function(){
return view('Course/uploadDocument');
});
Route::get('/syllableContent', function(){
    return view('Course/syllableContent');
    });
    

/*login andsign up page */

Route::get('/logsin', function(){
return view('Course/logsin');
});
Route::get('/logsin2', function(){
return view ('Course/logsin2');
});

Route::get('/forTesting', function(){
    return view ('fontend.forTesting');
    });