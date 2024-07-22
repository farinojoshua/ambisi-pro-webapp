<x-app-layout>
    <x-slot name="title">Edit Developer</x-slot>
    <x-slot name="header">
      <h2 class="text-xl font-semibold leading-tight text-gray-800">
        <a href="#!" onclick="window.history.go(-1); return false;">
          ←
        </a>
        {!! __('Developer &raquo; Edit') !!}
      </h2>
    </x-slot>

    <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div>
          @if ($errors->any())
            <div class="mb-5" role="alert">
              <div class="px-4 py-2 font-bold text-white bg-red-500 rounded-t">
                There's something wrong!
              </div>
              <div class="px-4 py-3 text-red-700 bg-red-100 border border-t-0 border-red-400 rounded-b">
                <p>
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
                </p>
              </div>
            </div>
          @endif
          <form class="w-full" action="{{ route('admin.developers.update', $developer->developer_id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="flex flex-wrap -mx-3">
              <div class="w-full px-3 mb-6">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="name">
                  Developer Name
                </label>
                <input value="{{ old('name', $developer->name) }}" name="name"
                       class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                       id="name" type="text" placeholder="Developer Name" required>
              </div>
              <div class="w-full px-3 mb-6">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="logo_url">
                  Logo URL
                </label>
                <input value="{{ old('logo_url', $developer->logo_url) }}" name="logo_url"
                       class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                       id="logo_url" type="text" placeholder="Logo URL">
              </div>
            </div>
            <div class="flex flex-wrap mb-6 -mx-3">
              <div class="w-full px-3 text-right">
                <button type="submit"
                        class="px-4 py-2 font-bold text-white bg-green-500 rounded shadow-lg hover:bg-green-700">
                  Update Developer
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </x-app-layout>
