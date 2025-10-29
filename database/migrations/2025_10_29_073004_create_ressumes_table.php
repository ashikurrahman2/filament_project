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
        Schema::create('ressumes', function (Blueprint $table) {
            $table->id();
            $table->string('designation')->nullable();
            $table->string('designation_summary')->nullable();
            $table->string('pass_year')->nullable();
            $table->string('institute_name')->nullable();
            $table->string('institute_summary')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ressumes');
    }
};
