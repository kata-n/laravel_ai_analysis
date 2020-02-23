<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Apitest;
use Response; // return Response::make()を使用する
use Input; // Input::get()を使用する

class RegistapisController extends Controller
{
  public function postpath()
  {
    $image_path=Input::get('image_path'); //imgajax.jsから値を受け取る

    //image_pathのパス名の末数字の数からクラス分けを行います
    //imgajax.jsにレスポンスを返す
    if($image_path==1){
      $array = array(
        "success" => "true" ,
        "message" => "success" ,
        "estimated_data" => array(
            "class" => 1 ,
            "confidence" => 0.8888 ,
        ),
      );
      $json = json_encode( $array , JSON_PRETTY_PRINT );
      return \Response::json($json);
    }
    else if($image_path==2){
      $array = array(
        "success" => "true" ,
        "message" => "success" ,
        "estimated_data" => array(
            "class" => 2 ,
            "confidence" => 0.8585 ,
        ),
      );
      $json = json_encode( $array , JSON_PRETTY_PRINT );
      return \Response::json($json);
    }
    else{
      $array = array(
        "success" => "false" ,
        "message" => "Error:E50012" ,
        "estimated_data" => array(
        ),
      );
      $json = json_encode( $array , JSON_PRETTY_PRINT );
      return \Response::json($json);
    }
  }

  //DBへ登録
  public function create(Request $request)
  {
//    //バリデーション
//    $request->validate([
//      'image_path' => 'required|string|max:255',
//      'success' => 'required|string|max:255',
//      'message' => 'required|string|max:255',
//    ]);

    $registApi = new Apitest;
    $registApi->image_path = $request->image_path;
    $registApi->success = $request->status;
    $registApi->message = $request->details;
    $registApi->class = $request->classification;
    $registApi->confidence = $request->confidence;

    $registApi->save();
    return redirect('/')->with('flash_message','登録しました');
  }
}
