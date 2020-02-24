<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Response; // return Response::make()を使用する
use Input; // Input::get()を使用する

class RegistapisController extends Controller
{
  public function postpath()
  {
    //imgajax.jsから値を受け取る
    $image_path=Input::get('image_path');

    //jpgの文字が入っているか判定
    if(strpos($image_path,'jpg') !== false){
      //分類（クラス）と信頼度はランダムで出力するものとします。
      $rndclass = rand(1,4);
      $rndconfidence =  round( mt_rand() / mt_getrandmax() * 1, 3);

      //配列化
      $array = array(
        "success" => "true" ,
        "message" => "success" ,
        "estimated_data" => array(
            "class" => $rndclass ,
            "confidence" => $rndconfidence ,
        ),
      );
      //JSON形式にエンコード、returnしてimgajax.jsにレスポンスを返す
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
}
