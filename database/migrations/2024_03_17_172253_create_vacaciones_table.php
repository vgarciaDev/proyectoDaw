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
            $table->integer('worker_id');
            $table->string('name')->nullable(); 
            $table->string('solicitud_vacaciones')->nullable();
            $table->string('estado_solicitud')->nullable();
            $table->timestamps();

            $table->foreign('worker_id')
            ->references('id')
            ->on('workers')
            ->onDelete('cascade'); 
            
          
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
