<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\View\View;

class UserController extends Controller
{
    public function student2() {
        return view('userstudent');
    }
    public function teacher2() {
        return view('userteacher');
    }
    public function admin2() {
        return view('useradmin');
    }
}
