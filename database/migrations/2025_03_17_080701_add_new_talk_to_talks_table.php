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
        Schema::table('talks', function (Blueprint $table) {
            $table->boolean('new_talk')->default(true); // Adds the 'new_talk' column with default value 'true'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('talks', function (Blueprint $table) {
            $table->dropColumn('new_talk'); // Removes the 'new_talk' column in case of rollback
        });
    }
};
