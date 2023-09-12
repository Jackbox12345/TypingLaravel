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
        Schema::create('typingTest', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->integer('wpm');
            $table->integer('mistake');
            $table->integer('cpm');
            $table->string('status');
            $table->string('accuracy');
            $table->timestamps();
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
