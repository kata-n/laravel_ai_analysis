<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Apitest;

class showapisController extends Controller
{
  //一覧表示画面
  public function show()
  {
    $lists = Apitest::all();
    return view('toppage/show',compact('lists'));
  }
}
