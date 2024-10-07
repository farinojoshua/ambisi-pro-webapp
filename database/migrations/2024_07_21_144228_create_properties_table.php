<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->uuid('property_id')->primary();
            $table->uuid('developer_id');
            $table->string('name');
            $table->text('description');
            $table->string('location');
            $table->json('photos');
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
            $table->decimal('price', 12, 2);
            $table->string('year_built')->nullable();
            $table->text('whatsapp_message')->nullable();
            $table->string('created_by');
            $table->string('updated_by');
            $table->string('deleted_by')->nullable();
            $table->string('status')->default('ACTIVE');
            $table->text('map_url')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('developer_id')->references('developer_id')->on('developers')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
