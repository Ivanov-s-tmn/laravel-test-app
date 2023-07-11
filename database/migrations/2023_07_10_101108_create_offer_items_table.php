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
            $table->string('type');
            $table->unsignedDouble('square');
            $table->string('price');
            $table->string('complex');
            $table->string('house');
            $table->text('description');
            $table->json('images');
            $table->boolean('likes')->default(false);

            $table->foreign('offer_id')->references('id')->on('offers');
        });
    }

    public function down(): void
    {
        if (app()->isLocal()) {
            Schema::dropIfExists('offer_items');
        }
    }
};
