<x-app-layout>
    <x-slot name="title">Admin</x-slot>
    <x-slot name="header">
      <h2 class="text-xl font-semibold leading-tight text-gray-800">
        {{ __('Properties') }}
      </h2>
    </x-slot>

    <x-slot name="script">
      <script>
        // AJAX DataTable
        var datatable = $('#dataTable').DataTable({
          processing: true,
          serverSide: true,
          stateSave: true,
          ajax: {
            url: '{!! url()->current() !!}',
          },
          columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
            { data: 'name', name: 'name' },{ data: 'location', name: 'location' },
          { data: 'developer.name', name: 'developer.name' },
          { data: 'bedrooms', name: 'bedrooms' },
          { data: 'bathrooms', name: 'bathrooms' },
          { data: 'status', name: 'status' },
          { data: 'action', name: 'action', orderable: false, searchable: false, width: '15%' },
        ],
        language: {
          url: '//cdn.datatables.net/plug-ins/1.12.1/i18n/id.json'
        },
      });

      // Sweet Alert Delete Confirmation
      $('body').on('click', '.btn-delete', function (e) {
        e.preventDefault();
        var form = $(this).parents('form');
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            form.submit();
          }
        });
      });
    </script>
  </x-slot>

  <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="mb-10">
        <a href="{{ route('admin.properties.create') }}"
           class="px-4 py-2 font-bold text-white bg-green-500 rounded shadow-lg hover:bg-green-700">
          + Add Property
        </a>
      </div>
      <div class="overflow-hidden shadow sm:rounded-md">
        <div class="px-4 py-5 bg-white sm:p-6">
          <table id="dataTable">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Location</th>
                <th>Developer</th>
                <th>Bedrooms</th>
                <th>Bathrooms</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
