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
        Schema::create('stats', function (Blueprint $table) {
            $table->id();
            $table->integer("wins");
            $table->integer("losts");
            // Foreign key
                $table->unsignedBigInteger('player_id');
                $table->foreign('player_id')
                    ->references('id')
                    ->on('players')
                    ->onDelte('cascade')
                    ->onUpdate('cascade')
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stats');
    }
};
