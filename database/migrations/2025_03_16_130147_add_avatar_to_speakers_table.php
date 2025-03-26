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
        Schema::table('speakers', function (Blueprint $table) {
            $table->text('avatar')->nullable(); // Adding 'avatar' as a nullable 'text' column
        });
    }

    public function down()
    {
        Schema::table('speakers', function (Blueprint $table) {
            $table->dropColumn('avatar'); // Drop the 'avatar' column during rollback
        });
    }

};
