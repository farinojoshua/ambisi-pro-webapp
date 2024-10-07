<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePropertyRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'developer_id' => 'required|exists:developers,developer_id',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Allow multiple photo uploads
            'bedrooms' => 'required|integer|min:0',
            'bathrooms' => 'required|integer|min:0',
            'land_area' => 'required|numeric|min:0',
            'building_area' => 'required|numeric|min:0',
            'electricity' => 'nullable|string|max:255',
            'water' => 'nullable|string|max:255',
            'garage' => 'required|boolean',
            'certificate' => 'nullable|string|max:255',
            'material_building' => 'nullable|string',
            'material_floor' => 'nullable|string',
            'dining_room' => 'nullable|string|max:255',
            'living_room' => 'nullable|string|max:255',
            'facilities' => 'nullable|array',
            'facilities.*' => 'nullable|string|max:255',
            'nearby_locations' => 'nullable|array',
            'nearby_locations.*' => 'nullable|string|max:255',
            'video_url' => 'nullable|url|max:255',
            'price' => 'required|numeric|min:0',
            'year_built' => 'nullable|string|max:4',
            'whatsapp_message' => 'nullable|string',
            'status' => 'required|in:ACTIVE,INACTIVE',
            'map_url' => 'nullable|url',
        ];
    }
}
