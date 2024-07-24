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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('name', 60);
            $table->string('scientific_name',60);
            $table->string('taxonomic_group',60);
            $table->string('class',40);
            $table->string('family',40);
            $table->string('species',40);
            $table->string('habitat',40);
            $table->boolean('protected');
            $table->date('date_of_arrival');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
