<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIspitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ispits', function (Blueprint $table) {
            $table->id();
            $table->string('predmet');
            $table->boolean('pismeno')->default(false);
            $table->dateTime('vremeDatum');
            // $table->foreignId('salaId');
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
        Schema::dropIfExists('ispits');
    }
}
