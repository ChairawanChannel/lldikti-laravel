<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonanTable extends Migration
{
    public function up()
    {
        Schema::create('permohonan', function (Blueprint $table) {
            $table->id(); // Kolom id (primary key, auto increment)
            $table->string('nama_lengkap'); // Kolom nama_lengkap
            $table->enum('jenis_permohonan', ['0', 'perubahan data mahasiswa']); // Kolom jenis_permohonan sebagai enum
            $table->text('catatan_adm')->nullable(); // Kolom catatan_adm (boleh kosong)
            $table->text('catatan_user')->nullable(); // Kolom catatan_user (boleh kosong)
            $table->enum('status', ['0', 'pending', 'draft', 'proses', 'selesai']); // Kolom status sebagai enum
            $table->timestamps(); // Kolom created_at dan updated_at
        });

        // Menambahkan foreign key ke tabel users
        Schema::table('permohonan', function (Blueprint $table) {
            $table->foreign('nama_lengkap')->references('nama_lengkap')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('permohonan');
    }
}