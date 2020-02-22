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
      $image_path=Input::get('image_path'); //imgajax.jsから値を受け取る

      if($image_path==1){
        return Response::make('平成元年です！'); // heisei.jsに値を返す
      }
      else if($image_path<=0){
        return Response::make('その年は平成じゃないですよ！'); // heisei.jsに値を返す
      }
      else if($image_path>=29){
        return Response::make('未来のことはわからないです……。'); //heisei.jeに値を返す
      }
      else{
        return Response::make('平成'.$heisei.'年です！'); //imgajax.jsに値を返す
      }
    }
}
