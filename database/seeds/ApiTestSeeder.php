<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApiTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $imgs = [
          $img1 = [
            'image_path' => '/image/d03f1d36ca69348c51aa/c413eac329e1c0d03/test.jpg',
            'success' => 'true',
            'message' => 'success',
            'class' => 3,
            'confidence' => 0.8683,
            'request_timestamp' => '20200220',
            'response_timestamp' => '20200220',
          ],
          $img2 = [
            'image_path' => '/image/d03f1d36ca69348c51aa/c413eac329e1c0d03/test2.jpg',
            'success' => 'false',
            'message' => 'Error:E50012',
            'request_timestamp' => '20200220',
            'response_timestamp' => '20200220',
          ]
        ];
        foreach ($imgs as $img) {
        DB::table('ai_analysis_log')->insert($img);
        }
    }
}
