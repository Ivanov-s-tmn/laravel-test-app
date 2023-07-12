<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('b24_contact_id')->unique();
            $table->unsignedBigInteger('b24_deal_id');
            $table->unsignedBigInteger('b24_manager_id')->nullable();
            $table->string('manager')->nullable();
            $table->string('position')->nullable();
            $table->string('phone')->nullable();
            $table->string('avatar')->nullable();
            $table->enum('status', ['New', 'Sent', 'Viewed'])->default('New')->nullable();
            $table->date('date_end')->nullable();
            $table->timestamp("createAt")->nullable();
        });
    }

    public function down(): void
    {
            Schema::dropIfExists('offers');
    }
};
