<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Apitest;

class ShowapisController extends Controller
{
  //一覧表示画面
  public function show()
  {
    $lists = Apitest::all();
    return view('toppage/show',compact('lists'));
  }

  //登録画面
  public function regist()
  {
    return view('toppage/regist');
  }
}
