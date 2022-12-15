<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        #radaccts
        Schema::connection('mysql')->table('pgsql_radaccts', function ($table) {
            $table->foreign('username')->references('username')->on('pgsql_customers')->onDelete('cascade')->onUpdate('cascade');
        });

        #radchecks
        Schema::connection('mysql')->table('pgsql_radchecks', function ($table) {
            $table->foreign('username')->references('username')->on('pgsql_customers')->onDelete('cascade')->onUpdate('cascade');
        });

        #radpostauths
        Schema::connection('mysql')->table('pgsql_radpostauths', function ($table) {
            $table->foreign('username')->references('username')->on('pgsql_customers')->onDelete('cascade');
        });

        #radreplies
        Schema::connection('mysql')->table('pgsql_radreplies', function ($table) {
            $table->foreign('username')->references('username')->on('pgsql_customers')->onDelete('cascade')->onUpdate('cascade');
        });

        #radusergroups
        Schema::connection('mysql')->table('pgsql_radusergroups', function ($table) {
            $table->foreign('username')->references('username')->on('pgsql_customers')->onDelete('cascade')->onUpdate('cascade');
        });

        // pgsql_radacct_histories
        Schema::connection('mysql')->table('pgsql_radacct_histories', function ($table) {
            $table->foreign('username')->references('username')->on('pgsql_customers')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
