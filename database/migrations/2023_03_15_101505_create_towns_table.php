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
        Schema::create('towns', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable(false);
            $table->text('address')->nullable(false);
            $table->float('size')->nullable(false);
            $table->text('phoneNumber')->nullable(true);
            $table->text('youTubeLink')->nullable(true);
            $table->text('picture')->nullable(true);
            $table->text('presentation')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('towns');
    }
};
