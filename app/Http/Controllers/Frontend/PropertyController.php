<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index(Request $request)
    {
        $properties = Property::where('status', 'ACTIVE')
            ->with('developer')
            ->paginate(10);

        return view('frontend.properties.index', compact('properties'));
    }

    public function show($id)
    {
        $property = Property::with('developer')->findOrFail($id);
        return view('frontend.properties.detail', compact('property'));
    }
}

