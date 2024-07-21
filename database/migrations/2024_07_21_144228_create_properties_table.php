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
        Schema::create('properties', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('developer_id');
            $table->string('name');
            $table->string('location');
            $table->string('photo_url');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->decimal('land_area', 10, 2);
            $table->decimal('building_area', 10, 2);
            $table->string('electricity')->nullable();
            $table->string('water')->nullable();
            $table->boolean('garage');
            $table->string('certificate')->nullable();
            $table->text('material_building')->nullable();
            $table->text('material_floor')->nullable();
            $table->string('dining_room')->nullable();
            $table->string('living_room')->nullable();
            $table->json('facilities')->nullable();
            $table->json('nearby_locations')->nullable();
            $table->string('video_url')->nullable();
            $table->text('whatsapp_message')->nullable();
            $table->timestamps();

            $table->foreign('developer_id')->references('id')->on('developers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
