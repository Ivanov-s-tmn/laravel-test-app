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
            $table->unsignedBigInteger('b24_manager_id');
            $table->string('manager');
            $table->string('position');
            $table->string('phone');
            $table->string('avatar');
            $table->enum('status', ['New', 'Sent', 'Viewed'])->default('New');
            $table->date('date_end')->nullable();
            $table->timestamp("createAt");
        });
    }

    public function down(): void
    {
        if (app()->isLocal()) {
            Schema::dropIfExists('offers');
        }
    }
};
