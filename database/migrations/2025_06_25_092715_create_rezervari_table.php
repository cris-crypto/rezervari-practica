<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ForeignKeyDefinition;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rezervari', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
           $table->string('nume');
           $table->string('email');
            $table->string('telefon');
            $table->string('filmul');
            $table->timestamp('data_rezervare');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rezervari');
    }
};

Schema::create('students', function (Blueprint $table) {
    $table->id();
    $table->string('nume');
    $table->string('email');
    $table->integer('telefon');
    $table->string('filmul');
    $table->timestamp('data_rezervare');
    $table->timestamps();
});
