<?php


namespace App\Http\Controllers;


class HomeController extends  controller
{
     public function about()
     {
      $name = 'yamamah hosen';
      $job = 'ICT Engineer';
      $city = 'hatay/antakya';
  return view('about', compact('name', 'job', 'city'));
    //}
}}