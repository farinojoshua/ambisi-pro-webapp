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
            'developer_id' => 'required|exists:developers,id',
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'photo_url' => 'required|url|max:255',
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
            'facilities' => 'nullable|json',
            'nearby_locations' => 'nullable|json',
            'video_url' => 'nullable|url|max:255',
            'whatsapp_message' => 'nullable|string',
        ];
    }
}
