<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('anggotas', function (Blueprint $table) {
            $table->string('no_hp')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->text('alasan')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('anggotas', function (Blueprint $table) {
            $table->dropColumn(['no_hp', 'jenis_kelamin', 'alasan']);
        });
    }
};