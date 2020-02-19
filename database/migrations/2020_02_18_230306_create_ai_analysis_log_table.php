<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAiAnalysisLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ai_analysis_log', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image_path')->nullable();
            $table->string('success')->nullable();
            $table->string('message')->nullable();
            $table->unsignedInteger('class')->nullable();
            $table->unsignedDecimal('confidence', 5, 4)->nullable();
            $table->unsignedInteger('request_timestamp')->nullable();
            $table->unsignedInteger('response_timestamp')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ai_analysis_log');
    }
}
