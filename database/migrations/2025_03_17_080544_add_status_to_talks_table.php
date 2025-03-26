<?php

use App\Enums\TalkStatus;
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
            $table->string('status')->default(TalkStatus::SUBMITTED); // Add the 'status' column with the default value
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
            $table->dropColumn('status'); // Drop the 'status' column in the 'down' method
        });
    }
};
