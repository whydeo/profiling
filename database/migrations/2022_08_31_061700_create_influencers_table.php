<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfluencersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('influencers', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->unsignedBigInteger('katinflu_id');
            // $table->foreign('katinflu_id')->references('id')->on('katinflus')->onDelete('cascade');
            $table->string('nama');
            $table->string('katinflu')->nullable();
            $table->string('headline');
            $table->string('alamat');
            $table->string('gender');
            $table->string('instagram')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('inflow')->nullable();
            $table->string('tikflow')->nullable();
            $table->string('foto');
            $table->text('bio');
            $table->string('birthday');
            $table->string('minimum_price');
            $table->string('email')->unique();
            // $table->string('minimum_price');
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
        Schema::dropIfExists('influencers');
    }
}
