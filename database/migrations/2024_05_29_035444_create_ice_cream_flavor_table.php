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
        Schema::create('eskrims_flavors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('flavors_id')->references('id')->on('flavors');
            $table->foreignId('eskrims_id')->references('id')->on('eskrims');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ice_cream_flavors');
    }
};
