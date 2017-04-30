<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWinddirectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('winddirections', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('time_stamp');
            $table->string('datee')->nullable();
            $table->string('timee')->nullable();
            $table->string('winddirection')->nullable();
            $table->string('comment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('winddirections');
    }
}
