<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('job');
            $table->string('society');
            $table->string('dates');
            $table->longText('skills');
            $table->longText('location');
            $table->longText('duration');
            $table->string('icon');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
