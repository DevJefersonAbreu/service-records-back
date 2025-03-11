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
        Schema::create('service_records', function (Blueprint $table) {
            $table->id(); // Coluna de ID primário auto-incremento
            $table->string('full_name'); // Coluna para o nome completo
            $table->string('address'); // Coluna para o endereço
            $table->string('phone_number'); // Coluna para o número de telefone
            $table->date('date'); // Coluna para a data do atendimento
            $table->timestamps(); // Colunas created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_records');
    }
};
