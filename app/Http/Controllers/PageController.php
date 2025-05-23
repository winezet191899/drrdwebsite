<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('index');
    }

    public function form() {
        return view('form');
    }

    public function service() {
        return view('service');
    }

    public function testimonial() {
        return view('testimonial');
    }

    public function training() {
        return view('training');
    }
}

