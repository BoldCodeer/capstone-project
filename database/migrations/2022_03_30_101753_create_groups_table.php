<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('teamName');
            $table->string('teamLeader');
            $table->string('course');
            $table->string('section');
            $table->string('lastName1');
            $table->string('firstName1');
            $table->string('mI1');
            $table->string('lastName2');
            $table->string('firstName2');
            $table->string('mI2');
            $table->string('lastName3');
            $table->string('firstName3');
            $table->string('mI3');
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
        Schema::dropIfExists('groups');
    }
};
