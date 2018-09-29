<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SakiemonController extends Controller
{
  public function add()
  {
      return view('sakiemon.create');
  }

}
