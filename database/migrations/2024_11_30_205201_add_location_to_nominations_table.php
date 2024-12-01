<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('nominations', function (Blueprint $table) {
            $table->text('location')->nullable()->after('user_agent');
        });
    }

    public function down()
    {
        Schema::table('nominations', function (Blueprint $table) {
            $table->dropColumn('location');
        });
    }
};
