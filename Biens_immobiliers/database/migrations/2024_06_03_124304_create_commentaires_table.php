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
        Schema::create('commentaires', function (Blueprint $table) {
            $table->id();
            $table->string('nom_auteur');
            $table->string('contenu');
            $table->timestamps();
            $table->foreignId('bien_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commentaires');

        Schema::table('commentaires', function (Blueprint $table) {
            $table->dropForeign('commentaires_bien_id_foreign');
    
        });
    }

};
