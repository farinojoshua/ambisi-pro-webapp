<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->uuid('appointment_id')->primary();
            $table->uuid('property_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->timestamp('appointment_date');
            $table->string('status');
            $table->text('notes')->nullable();
            $table->string('source');
            $table->string('created_by');
            $table->string('updated_by');
            $table->string('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('property_id')->references('property_id')->on('properties')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
