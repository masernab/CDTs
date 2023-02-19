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
        Schema::create('cdts', function (Blueprint $table) {
            $table->id();
            $table->double('minimum_amount');
            $table->double('maximum_amount');
            $table->string('minimum_days');
            $table->string('maximum_days');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cdts');
    }
};
