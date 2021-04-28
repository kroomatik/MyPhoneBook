<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Entreprise extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('street');
            $table->string('zipcode');
            $table->string('town');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
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
}
