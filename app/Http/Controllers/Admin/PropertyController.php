<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\Developer;
use Illuminate\Http\Request;
use App\Http\Requests\StorePropertyRequest;
use App\Http\Requests\UpdatePropertyRequest;
use Yajra\DataTables\Facades\DataTables;

class PropertyController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $query = Property::with('developer');

            return DataTables::of($query)
                ->addColumn('developer_name', function ($property) {
                    return $property->developer->name;
                })
                ->addColumn('action', function ($property) {
                    return '
                        <div class="flex gap-2">
                        <a class="block w-full px-2 py-1 mb-1 text-xs text-center text-white transition duration-500 bg-gray-700 border border-gray-700 rounded-md select-none ease hover:bg-gray-800 focus:outline-none focus:shadow-outline"
                            href="' . route('admin.properties.edit', $property->id) . '">
                            Edit
                        </a>
                        <form class="block w-full" action="' . route('admin.properties.destroy', $property->id) . '" method="POST">
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
        $property = Property::create($request->validated());

        return redirect()->route('admin.properties.index')->with('success', 'Property created successfully.');
    }

    public function edit(Property $property)
    {
        $developers = Developer::all();
        return view('admin.properties.edit', compact('property', 'developers'));
    }

    public function update(UpdatePropertyRequest $request, Property $property)
    {
        $property->update($request->validated());

        return redirect()->route('admin.properties.index')->with('success', 'Property updated successfully.');
    }

    public function destroy(Property $property)
    {
        $property->delete();

        return redirect()->route('admin.properties.index')->with('success', 'Property deleted successfully.');
    }
}
