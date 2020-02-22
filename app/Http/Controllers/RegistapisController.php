<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Request;

class RegistapisController extends Controller
{
    public function postpath(Request $inputpath){
      $url = 'https://shikatana.com/contents/10-apitest/api/reception.php';

      $data = $inputpath->path1;
//      $path = http_build_query($data, "", "&");
//      $path = json_encode($data);
      $options = array(
        'http' => array(
        'method' => 'POST',
        'header' => 'Content-Type:application/x-www-form-urlencoded; charset=UTF-8',
        'content' => $data
        )
      );
      // ストリームコンテキスト生成
      $context = stream_context_create($options);
      // POST送信
      $result = file_get_contents($url, true, $context);
      // レスポンス表示
      echo $result;
    }
}
