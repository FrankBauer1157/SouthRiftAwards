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
    
    Schema::table('nominations', function (Blueprint $table) {
        if (!Schema::hasColumn('nominations', 'ip_address')) {
            $table->ipAddress('ip_address')->nullable();
        }

        if (!Schema::hasColumn('nominations', 'user_agent')) {
            $table->string('user_agent')->nullable();
        }


    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('nominations', function (Blueprint $table) {
            //
        });
    }
};
