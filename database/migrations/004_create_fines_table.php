<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('fines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('borrowing_id')
                ->unique()
                ->constrained('borrowings')
                ->onDelete('cascade');
            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade');
            $table->unsignedSmallInteger('overdue_days')->comment('Jumlah hari keterlambatan');
            $table->unsignedInteger('amount_per_day')->default(1000)->comment('Tarif denda per hari (Rupiah)');
            $table->unsignedInteger('total_amount')->comment('Total denda = overdue_days × amount_per_day');
            $table->enum('status', ['unpaid', 'paid'])->default('unpaid');
            $table->timestamp('paid_at')->nullable();
            $table->text('note')->nullable()->comment('Catatan tambahan dari admin');
            $table->timestamps();

            $table->index(['user_id', 'status']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fines');
    }
};
