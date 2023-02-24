<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('room_id')->nullable()->comment('房间号');
            $table->string('area')->default('')->comment('面积');
            $table->string('price')->default('')->comment('价格');
            $table->text('imagefiles')->comment('图片');
            $table->text('video')->comment('视频');
            $table->string('desc')->default('')->comment('描述');
            $table->string('local')->default('')->comment('商圈');
            $table->string('price_type')->default('')->comment('付款方式');
            $table->string('floor')->default('')->comment('楼层');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
