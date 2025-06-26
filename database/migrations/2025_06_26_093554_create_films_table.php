<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('films', function (Blueprint $table) {
        $table->id();
        $table->string('titlu');
        $table->string('gen');
        $table->integer('an_lansare');
        $table->timestamps();
    });
}
};
