<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonanTable extends Migration
{
    public function up()
    {
        Schema::create('permohonan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap'); // Pastikan tipe data dan panjangnya sama dengan di tabel users
            $table->enum('jenis_permohonan', ['0', 'perubahan data mahasiswa']);
            $table->text('catatan_adm')->nullable();
            $table->text('catatan_user')->nullable();
            $table->enum('status', ['0', 'pending', 'draft', 'proses', 'selesai']);
            $table->timestamps();
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