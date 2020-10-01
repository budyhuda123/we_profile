<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index(){
      return "Halo ini adalah method index, dalam controller HomeController.";
  }

  public function home(){
		return view('home');
	}

	public function tentang(){
		return view('tentang');
	}

	public function kontak(){
		return view('kontak');
	}

  public function login(){
		return view('login');
	}

}
