<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
   //Returns the Home Page
   public function getIndex()
   {
        return view('welcome');
   } 
   
   //Returns the about page
   public function getAbout()
   {
      $npoName = "Marabele Business Club";
        return view('pages.about')->with("npoName", $npoName);
   }
}