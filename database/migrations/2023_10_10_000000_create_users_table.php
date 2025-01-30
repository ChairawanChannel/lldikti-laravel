<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->enum('role', ['pts', 'umum']);
                $table->string('nama_lengkap');
                $table->string('nomor_telepon');
                $table->string('email');
                $table->string('nama_pts')->nullable();
                $table->string('jabatan')->nullable();
                $table->string('password');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
