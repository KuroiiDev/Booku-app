<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('borrowings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade');
            $table->foreignId('book_id')
                ->constrained('books')
                ->onDelete('cascade');
            $table->date('borrowed_date')->nullable()->comment('Tanggal approve / mulai dipinjam');
            $table->date('due_date')->nullable()->comment('Jatuh tempo, dihitung saat approve');
            $table->date('returned_date')->nullable()->comment('Tanggal dikembalikan & diverifikasi');
            $table->unsignedTinyInteger('duration_days')->default(7)->comment('Lama pinjam dalam hari');
            $table->enum('status', [
                'pending',          // Anggota baru request
                'approved',         // Admin setuju, belum diambil
                'borrowed',         // Buku sedang dipinjam
                'overdue',          // Melewati due_date
                'return_requested', // Anggota ajukan pengembalian
                'returned',         // Admin verifikasi, selesai
                'rejected',         // Admin tolak request
            ])->default('pending');
            $table->text('admin_note')->nullable()->comment('Catatan admin saat approve/reject');
            $table->text('return_note')->nullable()->comment('Catatan kondisi buku saat dikembalikan');
            $table->timestamps();

            $table->index('status');
            $table->index('due_date');
            $table->index(['user_id', 'status']);
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('borrowings');
    }
};
