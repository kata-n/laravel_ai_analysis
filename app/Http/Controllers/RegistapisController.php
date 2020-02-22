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

      //image_pathのパス名の末数字の数からクラス分けを行います
      //imgajax.jsにレスポンスを返す
      if($image_path==1){
        return Response::make('クラス1です');
      }
      else if($image_path<=0){
        return Response::make('クラス2です');
      }
      else if($image_path>=29){
        return Response::make('クラス3です');
      }
      else{
        return Response::make('どれにも当てはまりません');
      }
    }
}
