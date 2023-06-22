<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rams', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('serijski_broj');
            $table->string('materijal');
            $table->string('dimenzije');
        });
        Schema::create('kabinas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('serijski_broj');
            $table->string('materijal');
            $table->string('broj_sedista');
        });
        Schema::create('sanduks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('serijski_broj');
            $table->string('materijal');
            $table->string('dimenzije');
        });
        Schema::create('tips', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('serijski_broj');
            $table->string('naziv_tipa_vozila');
        });
        Schema::create('nadogradnjas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('serijski_broj');
            $table->string('naziv_nadogradnje');
        });
        Schema::create('vozilos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('serijski_broj');
            $table->unsignedBigInteger('tip_id');
            $table->unsignedBigInteger('ram_id');
            $table->unsignedBigInteger('kabina_id');
            $table->unsignedBigInteger('sanduk_id');
            $table->string('status');
            $table->unsignedBigInteger('nadogradnja_id');
            $table->foreign('ram_id')->references('id')->on('rams');
            $table->foreign('kabina_id')->references('id')->on('kabinas');
            $table->foreign('sanduk_id')->references('id')->on('sanduks');
            $table->foreign('tip_id')->references('id')->on('tips');
            $table->foreign('nadogradnja_id')->references('id')->on('nadogradnjas');
            
        });
      
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vozilos');
        Schema::dropIfExists('rams');
        Schema::dropIfExists('kabinas');
        Schema::dropIfExists('sanduks');
        Schema::dropIfExists('tips');
        Schema::dropIfExists('nadogradnjas');
    }
};
