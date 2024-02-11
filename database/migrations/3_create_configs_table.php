<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;
use Database\Seeders\config;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->id();
            $table->string('CPU');
            $table->string('RAM');
            $table->string('card');
            $table->string('monitor');
            $table->string('keyboard');
            $table->string('mouse');
            $table->string('headphones');
            $table->timestamps();
        });

        Artisan::call('db:seed', ['--class'=>config::class]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configs');
    }
};
