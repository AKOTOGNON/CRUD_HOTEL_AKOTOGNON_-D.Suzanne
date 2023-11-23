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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
             $table->string('nom');
              $table->string('description');
               $table->string('nom_chambre');
                $table->string('prix');
                 $table->string('nombre_lit');
                  $table->string('adulte_max');
                   $table->string('enfant_max');
                    $table->string('atribus');
                   $table->string('statu');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
