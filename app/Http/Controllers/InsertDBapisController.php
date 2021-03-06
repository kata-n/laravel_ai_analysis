<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Apitest;
use Carbon\Carbon;

class InsertDBapisController extends Controller
{
  //DBへ登録
  public function create(Request $request)
  {
    //バリデーション
    $request->validate([
      'img_path' => 'required|string|max:255',
      'status' => 'required|string|max:255',
      'details' => 'required|string|max:255',
    ]);

    $registApi = new Apitest;
    $carbon = Carbon::now()->timestamp;
    $registApi->image_path = $request->img_path;
    $registApi->success = $request->status;
    $registApi->message = $request->details;
    $registApi->class = $request->classification;
    $registApi->confidence = $request->confidence;
    $registApi->request_timestamp = $carbon;
    $registApi->response_timestamp = $carbon;

    $registApi->save();
    return redirect('/')->with('flash_message','登録しました');
  }
}
