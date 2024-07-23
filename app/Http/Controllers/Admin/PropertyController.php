<?php

namespace App\Http\Controllers\Admin;

use App\Models\Property;
use App\Models\Developer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\StorePropertyRequest;
use App\Http\Requests\UpdatePropertyRequest;

class PropertyController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Property::with('developer');

            return DataTables::of($query)
                ->addIndexColumn()
                ->addColumn('developer_name', function ($property) {
                    return $property->developer->name;
                })
                ->addColumn('action', function ($property) {
                    return '
                        <div class="flex gap-2">
                        <a class="block w-full px-2 py-1 mb-1 text-xs text-center text-white transition duration-500 bg-gray-700 border border-gray-700 rounded-md select-none ease hover:bg-gray-800 focus:outline-none focus:shadow-outline"
                            href="' . route('admin.properties.show', $property->property_id) . '">
                            Details
                        </a>
                        <a class="block w-full px-2 py-1 mb-1 text-xs text-center text-white transition duration-500 bg-gray-700 border border-gray-700 rounded-md select-none ease hover:bg-gray-800 focus:outline-none focus:shadow-outline"
                            href="' . route('admin.properties.edit', $property->property_id) . '">
                            Edit
                        </a>
                        <form class="block w-full" action="' . route('admin.properties.destroy', $property->property_id) . '" method="POST">
                            <button class="w-full px-2 py-1 text-xs text-white transition duration-500 bg-red-500 border border-red-500 rounded-md select-none btn-delete ease hover:bg-red-600 focus:outline-none focus:shadow-outline">
                                Delete
                            </button>
                            ' . method_field('delete') . csrf_field() . '
                        </form>
                        </div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.properties.index');
    }

    public function create()
    {
        $developers = Developer::all();
        return view('admin.properties.create', compact('developers'));
    }

    public function store(StorePropertyRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['property_id'] = (string) Str::uuid();
        $validatedData['created_by'] = Auth::user()->name;
        $validatedData['updated_by'] = Auth::user()->name;

        if ($request->hasFile('photo_url')) {
            $validatedData['photo_url'] = $request->file('photo_url')->store('properties', 'public');
        }

        // Convert facilities and nearby_locations to JSON
        $validatedData['facilities'] = json_encode(array_filter($request->facilities ?? []));
        $validatedData['nearby_locations'] = json_encode(array_filter($request->nearby_locations ?? []));

        Property::create($validatedData);

        return redirect()->route('admin.properties.index')->with('success', 'Property created successfully.');
    }

    public function show(Property $property)
    {
        return view('admin.properties.show', compact('property'));
    }

    public function edit(Property $property)
    {
        $developers = Developer::all();
        return view('admin.properties.edit', compact('property', 'developers'));
    }

    public function update(UpdatePropertyRequest $request, Property $property)
    {
        $validatedData = $request->validated();
        $validatedData['updated_by'] = Auth::user()->name;

        if ($request->hasFile('photo_url')) {
            // Delete the old image if it exists
            if ($property->photo_url) {
                Storage::disk('public')->delete($property->photo_url);
            }
            $validatedData['photo_url'] = $request->file('photo_url')->store('properties', 'public');
        }

        // Convert facilities and nearby_locations to JSON
        $validatedData['facilities'] = json_encode(array_filter($request->facilities ?? []));
        $validatedData['nearby_locations'] = json_encode(array_filter($request->nearby_locations ?? []));

        $property->update($validatedData);

        return redirect()->route('admin.properties.index')->with('success', 'Property updated successfully.');
    }

    public function destroy(Property $property)
    {
        // Delete the image if it exists
        if ($property->photo_url) {
            Storage::disk('public')->delete($property->photo_url);
        }

        $property->deleted_by = Auth::user()->name;
        $property->save();
        $property->delete();

        return redirect()->route('admin.properties.index')->with('success', 'Property deleted successfully.');
    }
}
