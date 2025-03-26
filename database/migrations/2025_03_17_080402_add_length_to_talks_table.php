<?php

use App\Enums\TalkLength;
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
            $table->string('length')->default(TalkLength::NORMAL); // Add length column with default value
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
            $table->dropColumn('length'); // Remove length column
        });
    }
};
