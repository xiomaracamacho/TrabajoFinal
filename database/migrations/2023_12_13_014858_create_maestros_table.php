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
        Schema::create('maestros', function (Blueprint $table) {
            $table->increments('id')->unsigned(false);
            $table->string('nombreP');
            $table->string('apellido');
            $table->integer('IdenP')->unique();
            $table->string('emailP')->unique();;
            $table->string('areaP')->unique();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maestros');
    }
};
