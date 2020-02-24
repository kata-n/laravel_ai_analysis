<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apitest extends Model
{
  //SQLのテーブル名を指定
  protected $table = 'ai_analysis_log';
  //primarykeyを設定
  protected $primaryKey = 'id';
  //変更しない
  protected $guarded = ['id'];

  //UnixTimestamp
  protected $dateFormat = 'U';

  //デフォルトのカラム名を使わない
  const CREATED_AT = 'request_timestamp';
  const UPDATED_AT = 'response_timestamp';
  protected $dates = [
    'request_timestamp',
    'response_timestamp',
  ];

}
