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
        Schema::create('user_portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('bio')->default("Hey, I am Student");
            $table->text('education')->nullable();
            $table->text('work_experience')->nullable();
            $table->foreignId('user_id')->default('1')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_portfolio');
    }
};
