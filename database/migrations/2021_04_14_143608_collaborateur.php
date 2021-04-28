<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Collaborateur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collaborateurs', function (Blueprint $table) {
            $table->id();
                $table->enum('civility',['men', "woman", "non-binary"]);
                $table->string('lastName', 100);
                $table->string('firstName', 100);
                $table->text('street');
                $table->integer('zipcode');
                $table->string('town', 100);
                $table->integer('phone')->nullable()->default(+33);
                $table->string('email');
                $table->text('entreprise')->constrained('entreprise')->onDelete('cascade');
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
