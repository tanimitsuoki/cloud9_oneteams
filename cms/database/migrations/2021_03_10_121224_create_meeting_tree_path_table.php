<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingTreePathTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meeting_tree_path', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('meeting_id');
            $table->unsignedBigInteger('tree_path_id');
            $table->foreign('meeting_id')->references('id')->on('meetings')->onDelete('cascade'); //外部キー参照
            $table->foreign('tree_path_id')->references('id')->on('tree_paths')->onDelete('cascade'); //外部キー参照
            $table->unique(['meeting_id', 'tree_path_id'],'uq_roles'); //Laravelは複合主キーが扱いにくいのでユニークで代用
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
        
        Schema::dropIfExists('meeting_tree_path');
Schema::dropIfExists('tree_paths');
    }
}
