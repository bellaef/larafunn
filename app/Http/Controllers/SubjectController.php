<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\View\View;

class SubjectController extends Controller
{
    public function student1() {
        return view('substudent');
    }
    public function teacher1() {
        return view('subteacher');
    }
    public function admin1() {
        return view('subadmin');
    }
}
