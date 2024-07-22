<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAppointmentRequest;
use App\Http\Requests\UpdateAppointmentRequest;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Appointment::with('property');

            return DataTables::of($query)
                ->addColumn('property_name', function ($appointment) {
                    return $appointment->property->name;
                })
                ->addColumn('action', function ($appointment) {
                    return '
                        <div class="flex gap-2">
                        <a class="block w-full px-2 py-1 mb-1 text-xs text-center text-white transition duration-500 bg-gray-700 border border-gray-700 rounded-md select-none ease hover:bg-gray-800 focus:outline-none focus:shadow-outline"
                            href="' . route('admin.appointments.edit', $appointment->appointment_id) . '">
                            Edit
                        </a>
                        <form class="block w-full" action="' . route('admin.appointments.destroy', $appointment->appointment_id) . '" method="POST">
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

        return view('admin.appointments.index');
    }

    public function create()
    {
        $properties = Property::all();
        return view('admin.appointments.create', compact('properties'));
    }

    public function store(StoreAppointmentRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['appointment_id'] = (string) Str::uuid();
        $validatedData['created_by'] = Auth::user()->name;
        $validatedData['updated_by'] = Auth::user()->name;

        Appointment::create($validatedData);

        return redirect()->route('admin.appointments.index')->with('success', 'Appointment created successfully.');
    }

    public function edit(Appointment $appointment)
    {
        $properties = Property::all();
        return view('admin.appointments.edit', compact('appointment', 'properties'));
    }

    public function update(UpdateAppointmentRequest $request, Appointment $appointment)
    {
        $validatedData = $request->validated();
        $validatedData['updated_by'] = Auth::user()->name;

        $appointment->update($validatedData);

        return redirect()->route('admin.appointments.index')->with('success', 'Appointment updated successfully.');
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->deleted_by = Auth::user()->name;
        $appointment->save();
        $appointment->delete();

        return redirect()->route('admin.appointments.index')->with('success', 'Appointment deleted successfully.');
    }
}
