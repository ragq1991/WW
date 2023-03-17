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
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable(false);
            $table->decimal('priceRUB', 15, 2)->nullable(false);
            $table->decimal('priceUSD', 15, 2)->nullable(false);
            $table->tinyText('defaultCurrency')->nullable(false);
            $table->Integer('countFloor')->nullable(false);
            $table->Integer('countBedroom')->nullable(false);
            $table->decimal('size', 10, 2)->nullable(false);
            $table->foreignId('houseType_id')->references('id')->on('house_types');
            $table->foreignId('town_id')->references('id')->on('towns');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('houses');
    }
};
