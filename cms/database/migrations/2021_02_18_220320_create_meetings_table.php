<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tree_path_id');            
            $table->string('day'); 
            $table->string('times');  
            $table->string('place');
            $table->string('method');  
            $table->integer('create_id');            
            $table->string('description_item1');
            $table->string('description_item2');
            $table->string('description_item3');
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
        Schema::dropIfExists('meeting_tree_path');
        Schema::dropIfExists('meetings');

    }
}
