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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('person_image')->nullable();
            $table->string('banner_title')->nullable();
            $table->string('person_name')->nullable();
            $table->string('person_designation')->nullable();
            $table->string('person_country')->nullable();
            $table->integer('total_experience')->nullable();
            $table->integer('complete_projects')->nullable();
            $table->integer('client_satisfaction')->nullable();
            $table->integer('total_awards')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
