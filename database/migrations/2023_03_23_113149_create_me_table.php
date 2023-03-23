<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('me', function (Blueprint $table) {
            $table->id();
            $table->string('picture');
            $table->string('description');
            $table->string('job');
            $table->string('baseline');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('me');
    }
};
