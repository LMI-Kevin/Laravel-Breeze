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
        Schema::create('kol_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('pwp');
            $table->string('name');
            $table->string('tiktok');
            $table->string('moa');
            $table->string('detail');
            $table->string('remark')->nullable();
            $table->text('posting');
            $table->boolean('for_payment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kol_transactions');
    }
};
