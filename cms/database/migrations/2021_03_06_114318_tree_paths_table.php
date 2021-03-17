<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TreePathsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                if (Schema::hasTable('tree_paths')) {
            // テーブルが存在していればリターン
            return;
                }
        Schema::create('tree_paths', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('ancestor_id');
            $table->integer('descendant_id');
	        $table->integer('path_length');
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
         Schema::dropIfExists('users');
        Schema::dropIfExists('tree_paths');
    }
}
