<?php

namespace App\Http\Controllers\Admin;

use App\Models\Developer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\StoreDeveloperRequest;
use App\Http\Requests\UpdateDeveloperRequest;

class DeveloperController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Developer::query();

            return DataTables::of($query)
                ->addIndexColumn()
                ->addColumn('action', function ($developer) {
                    return '
                        <div class="flex gap-2">
                        <a class="block w-full px-2 py-1 mb-1 text-xs text-center text-white transition duration-500 bg-gray-700 border border-gray-700 rounded-md select-none ease hover:bg-gray-800 focus:outline-none focus:shadow-outline"
                            href="' . route('admin.developers.edit', $developer->developer_id) . '">
                            Edit
                        </a>
                        <form class="block w-full" action="' . route('admin.developers.destroy', $developer->developer_id) . '" method="POST">
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

        return view('admin.developers.index');
    }

    public function create()
    {
        return view('admin.developers.create');
    }

    public function store(StoreDeveloperRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['developer_id'] = (string) Str::uuid();
        $validatedData['created_by'] = Auth::user()->name;
        $validatedData['updated_by'] = Auth::user()->name;

        if ($request->hasFile('logo_url')) {
            $validatedData['logo_url'] = $request->file('logo_url')->store('developers', 'public');
        }

        Developer::create($validatedData);

        return redirect()->route('admin.developers.index')->with('success', 'Developer created successfully.');
    }

    public function edit(Developer $developer)
    {
        return view('admin.developers.edit', compact('developer'));
    }

    public function update(UpdateDeveloperRequest $request, Developer $developer)
    {
        $validatedData = $request->validated();
        $validatedData['updated_by'] = Auth::user()->name;

        if ($request->hasFile('logo_url')) {
            // Delete the old image if it exists
            if ($developer->logo_url) {
                Storage::disk('public')->delete($developer->logo_url);
            }
            $validatedData['logo_url'] = $request->file('logo_url')->store('developers', 'public');
        }

        $developer->update($validatedData);

        return redirect()->route('admin.developers.index')->with('success', 'Developer updated successfully.');
    }

    public function destroy(Developer $developer)
    {
        // Delete the image if it exists
        if ($developer->logo_url) {
            Storage::disk('public')->delete($developer->logo_url);
        }

        $developer->deleted_by = Auth::user()->name;
        $developer->save();
        $developer->delete();

        return redirect()->route('admin.developers.index')->with('success', 'Developer deleted successfully.');
    }
}
