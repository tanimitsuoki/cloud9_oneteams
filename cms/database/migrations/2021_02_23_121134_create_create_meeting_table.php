<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreateMeetingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_meeting', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('meeting_id');
            $table->unsignedBigInteger('create_id');
            $table->foreign('meeting_id')->references('id')->on('meetings')->onDelete('cascade'); //外部キー参照
            $table->foreign('create_id')->references('id')->on('creates')->onDelete('cascade'); //外部キー参照
            $table->unique(['meeting_id', 'create_id'],'uq_roles'); //Laravelは複合主キーが扱いにくいのでユニークで代用
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
        

        Schema::dropIfExists('create_meeting');
                Schema::dropIfExists('creates');
        Schema::dropIfExists('meetings');
    }
}
