<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colleges', function (Blueprint $table) {
            $table->id();
            $table->string('ar_title')->nullable();
            $table->string('en_title')->nullable();
            $table->text('ar_description')->nullable();
            $table->text('en_description')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('slug')->unqiue();
            $table->date('started_at')->nullable();
            $table->float('lat')->nullable();
            $table->float('lng')->nullable();
            $table->enum('type',['faculty','institute','deanship'])->default('faculty');
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
        Schema::dropIfExists('colleges');
    }
}
