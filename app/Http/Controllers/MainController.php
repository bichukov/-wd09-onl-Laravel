<?php

namespace App\Http\Controllers;
use App\Models\Banner;

class MainController extends Controller
{
  public function main()
  {
      $banners=Banner::all();
   return view('main', ['banners'=>$banners]);
  }

  public function promotions()
  {
   return view('promotions');
  }

    public function about()
  {
   return view('about');
  }

    public function delivery_moscow()
  {
   return view('delivery-moscow');
  }
    public function delivery_regions()
  {
   return view('delivery-regions');
  }
    public function return()
  {
   return view('return');
  }
    public function designers()
  {
   return view('designers');
  }
    public function contacts()
  {
   return view('contacts');
  }

}
