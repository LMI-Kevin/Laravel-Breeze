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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('pwp')->unique();
            $table->string('brand');
            $table->string('details');
            $table->string('name');
            $table->date('start_date');
            $table->date('end_date');
            $table->text('deliverables');
            $table->string('terms');
            $table->integer('amount');
            $table->integer('number_of_kols');
            $table->integer('number_of_posts');
            $table->string('status')->nullable();
            $table->date('date_fulfilled')->nullable();
            $table->text('remarks')->nullable();
            $table->date('date_forwarded')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
