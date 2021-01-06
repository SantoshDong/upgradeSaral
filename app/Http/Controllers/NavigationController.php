<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    //
    public function index(){
        return view('fontend.homePage');
    }
    public function allUniversity(){
        return view('university.allUniversity');
    }
    public function notesTabs(){
        return view('notes.notesTabs');
    }
    public function allNotes(){
        return view('notes.allNotes');
    }
    public function universityDetail(){
        return view('university.universityDetail');
    }
    public function allBlog(){
        return view('university.allBlog');
    }
}
