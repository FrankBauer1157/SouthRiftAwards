<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContestantsTable extends Migration
{
    public function up()
    {
        Schema::create('contestants', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name of the contestant
            $table->unsignedBigInteger('category_id'); // Foreign key to the categories table
            $table->timestamps();

            // Enforce relationships
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('contestants');
    }
}
