<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
      $title = "Home Page";
      return view('pages.index')->with('title', $title);
    }

    public function about() {
      $title = "About Page";
      return view('pages.about')->with('title', $title);
    }

    public function contact() {
      $title = "Contact Page";
      return view('pages.contact')->with('title', $title);
    }

    public function portfolio() {
      $title = "Portfolio Page";
      return view('pages.portfolio')->with('title', $title);
    }

    public function products() {
      $title = "Prodcts Page";
      return view('pages.products')->with('title', $title);
    }

}
