<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Developer;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDeveloperRequest;
use App\Http\Requests\UpdateDeveloperRequest;
use Yajra\DataTables\Facades\DataTables;

class DeveloperController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $query = Developer::query();

            return DataTables::of($query)
                ->addColumn('action', function ($developer) {
                    return '
                        <div class="flex gap-2">
                        <a class="block w-full px-2 py-1 mb-1 text-xs text-center text-white transition duration-500 bg-gray-700 border border-gray-700 rounded-md select-none ease hover:bg-gray-800 focus:outline-none focus:shadow-outline"
                            href="' . route('admin.developers.edit', $developer->id) . '">
                            Edit
                        </a>
                        <form class="block w-full" action="' . route('admin.developers.destroy', $developer->id) . '" method="POST">
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
        $developer = Developer::create($request->validated());

        return redirect()->route('admin.developers.index')->with('success', 'Developer created successfully.');
    }

    public function edit(Developer $developer)
    {
        return view('admin.developers.edit', compact('developer'));
    }

    public function update(UpdateDeveloperRequest $request, Developer $developer)
    {
        $developer->update($request->validated());

        return redirect()->route('admin.developers.index')->with('success', 'Developer updated successfully.');
    }

    public function destroy(Developer $developer)
    {
        $developer->delete();

        return redirect()->route('admin.developers.index')->with('success', 'Developer deleted successfully.');
    }
}
