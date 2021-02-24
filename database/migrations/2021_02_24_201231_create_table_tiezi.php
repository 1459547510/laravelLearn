<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTiezi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_tiezi', function (Blueprint $table) {
            $table->increments('id');      //主键
            $table->string('title');
            $table->text('content');
            $table->timestamps();  //添加时间字段
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_tiezi');   //如果存在删除
    }
}
