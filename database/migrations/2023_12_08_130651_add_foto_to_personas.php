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
<<<<<<< HEAD
        Schema::table('personas', function (Blueprint $table) {
            $table->string('foto')->nullable(); 
=======
        Schema::table('persona', function (Blueprint $table) {
            $table->string('foto')->nullable(); // O ajusta el tipo de columna según tus necesidades
>>>>>>> 9ef35377d7b015e35684bc2e99b43f20a50cde51
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<< HEAD
        Schema::table('personas', function (Blueprint $table) {
=======
        Schema::table('persona', function (Blueprint $table) {
>>>>>>> 9ef35377d7b015e35684bc2e99b43f20a50cde51
            //
        });
    }
};
