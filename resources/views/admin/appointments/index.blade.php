@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Appointments</h1>
    <div class="mb-10">
        <a href="{{ route('admin.appointments.create') }}"
           class="px-4 py-2 font-bold text-white bg-green-500 rounded shadow-lg hover:bg-green-700">
          + Add Appointment
        </a>
    </div>
    <table class="table table-bordered" id="appointments-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Property Name</th>
                <th>Appointment Date</th>
                <th>Created By</th>
                <th>Updated By</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>
</div>
@endsection

@push('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $('#appointments-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('admin.appointments.index') }}',
            columns: [
                { data: 'appointment_id', name: 'appointment_id' },
                { data: 'property_name', name: 'property_name' },
                { data: 'appointment_date', name: 'appointment_date' },
                { data: 'created_by', name: 'created_by' },
                { data: 'updated_by', name: 'updated_by' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });
    });
</script>
@endpush
