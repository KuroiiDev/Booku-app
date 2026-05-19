<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('slug', 120)->unique();
            $table->string('description')->nullable();
            $table->string('color', 7)->default('#3B82F6')->comment('Hex color untuk badge UI');
            $table->timestamps();
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
