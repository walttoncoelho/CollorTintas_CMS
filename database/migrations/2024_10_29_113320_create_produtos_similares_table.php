<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('produtos_similares', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produto_id')->constrained('produtos')->onDelete('cascade');
            $table->foreignId('produto_similar_id')->constrained('produtos')->onDelete('cascade');
            $table->timestamps();

            // Evita duplicação de registros na combinação dos IDs
            $table->unique(['produto_id', 'produto_similar_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('produtos_similares');
    }
};
