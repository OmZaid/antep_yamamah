<?php


namespace App\Http\Controllers;


class HomeController extends  controller
{
     public function about()
     {
      $name = 'yamamah hosen';
      $job = 'Bilgisayar Mühendisi';
      $city = 'hatay';
  return view('about', compact('name', 'job', 'city'));
    //}
}}