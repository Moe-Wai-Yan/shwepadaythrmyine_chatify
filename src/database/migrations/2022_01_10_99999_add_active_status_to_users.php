<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddActiveStatusToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ec_users', function (Blueprint $table) {
            // if not exist, add the new column
            if (!Schema::hasColumn('ec_users', 'active_status')) {
                $table->boolean('active_status')->default(0);
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ec_users', function (Blueprint $table) {
            $table->dropColumn('active_status');
        });
    }
}
