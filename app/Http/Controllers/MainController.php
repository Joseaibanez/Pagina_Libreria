<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function inicio() {
        return view('main-page');
    }
    public function productos() {
        return view('productos-page');
    }
    public function info() {
        return view('info-page');
    }
    public function work() {
        return view('work-page');
    }
    public function login() {
        return view('login-page');
    }
}
