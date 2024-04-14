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
        Schema::create('vacaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('worker_id');
            $table->string('name');
            $table->unsignedInteger('solicitud_vacaciones');
            $table->string('estado_solicitud');
            $table->timestamps();

            $table->foreign('worker_id')
                  ->references('id')
                  ->on('workers')
                  ->onDelete('cascade'); // Opcional: elimina las vacaciones si se elimina el trabajador
            $table->foreign('name') 
                  ->references('name')
                  ->on('workers')
                  ->onDelete('cascade'); // Opcional: elimina las vacaciones si se elimina el trabajador
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacaciones');
    }
};
