<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersNewFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('middlename');
            $table->string('surname');
            $table->string('address_line1');
            $table->string('address_line2');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('zipcode');
            $table->string('phone');
            $table->string('photo');
            $table->string('birth_date');
            $table->string('gender');
            $table->string('hobby');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('middlename');
            $table->dropColumn('surname');
            $table->dropColumn('address_line1');
            $table->dropColumn('address_line2');
            $table->dropColumn('country');
            $table->dropColumn('state');
            $table->dropColumn('city');
            $table->dropColumn('zipcode');
            $table->dropColumn('phone');
            $table->dropColumn('photo');
            $table->dropColumn('birth_date');
            $table->dropColumn('gender');
            $table->dropColumn('hobby');
        });
    }
}
