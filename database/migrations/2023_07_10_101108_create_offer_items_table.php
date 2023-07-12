<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('offer_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('offer_id');
            $table->text('cid')->unique();
            $table->string('type')->nullable();
            $table->unsignedDouble('square')->nullable();
            $table->string('price')->nullable();
            $table->string('complex')->nullable();
            $table->string('house')->nullable();
            $table->text('description')->nullable();
            $table->json('images')->nullable();
            $table->boolean('likes')->default(false);

            $table->foreign('offer_id')->references('id')->on('offers');
        });
    }

    public function down(): void
    {
            Schema::dropIfExists('offer_items');
    }
};
