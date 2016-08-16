<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AppController extends Controller
{

  public function index()
  {
    return view('app');
  }

  public function home()
  {
    return view('home');
  }

  public function film()
  {
    return view('film');
  }
}