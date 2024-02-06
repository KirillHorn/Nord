<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;
use Database\Seeders\statusplace;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('statusplases', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });

        Artisan::call('db:seed', ['--class'=>statusplace::class]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        {
            Schema::dropIfExists('statusplases');
        }
    }
};
