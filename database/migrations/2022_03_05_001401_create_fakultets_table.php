<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFakultetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fakultets', function (Blueprint $table) {
            $table->id();
            $table->string('naziv');
            $table->string('adresa');
            $table->string('email');
            $table->foreignId('univerzitet_id')->constrained('univerzitets');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fakultets');
    }
}
