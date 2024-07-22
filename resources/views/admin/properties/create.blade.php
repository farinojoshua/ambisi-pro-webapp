<x-app-layout>
    <x-slot name="title">Add Property</x-slot>
    <x-slot name="header">
      <h2 class="text-xl font-semibold leading-tight text-gray-800">
        <a href="#!" onclick="window.history.go(-1); return false;">
          ←
        </a>
        {!! __('Property &raquo; Add') !!}
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
          <form class="w-full" action="{{ route('admin.properties.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-wrap -mx-3">
              <div class="w-full px-3 mb-6">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="name">
                  Property Name
                </label>
                <input value="{{ old('name') }}" name="name"
                       class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                       id="name" type="text" placeholder="Property Name" required>
              </div>
              <div class="w-full px-3 mb-6">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="developer_id">
                  Developer
                </label>
                <select name="developer_id" id="developer_id" class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" required>
                  <option value="">Select Developer</option>
                  @foreach($developers as $developer)
                    <option value="{{ $developer->developer_id }}" {{ old('developer_id') == $developer->developer_id ? 'selected' : '' }}>
                      {{ $developer->name }}
                    </option>
                  @endforeach
                </select>
              </div>
              <div class="w-full px-3 mb-6">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="location">
                  Location
                </label>
                <input value="{{ old('location') }}" name="location"
                       class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                       id="location" type="text" placeholder="Location" required>
              </div>
              <div class="w-full px-3 mb-6">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="photo_url">
                  Photo URL
                </label>
                <input value="{{ old('photo_url') }}" name="photo_url"
                       class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                       id="photo_url" type="url" placeholder="Photo URL" required>
              </div>
              <div class="w-full px-3 mb-6 md:w-1/2">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="bedrooms">
                  Bedrooms
                </label>
                <input value="{{ old('bedrooms') }}" name="bedrooms"
                       class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                       id="bedrooms" type="number" placeholder="Bedrooms" required>
              </div>
              <div class="w-full px-3 mb-6 md:w-1/2">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="bathrooms">
                  Bathrooms
                </label>
                <input value="{{ old('bathrooms') }}" name="bathrooms"
                       class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                       id="bathrooms" type="number" placeholder="Bathrooms" required>
              </div>
              <div class="w-full px-3 mb-6 md:w-1/2">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="land_area">
                  Land Area
                </label>
                <input value="{{ old('land_area') }}" name="land_area"
                       class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                       id="land_area" type="number" step="0.01" placeholder="Land Area" required>
              </div>
              <div class="w-full px-3 mb-6 md:w-1/2">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="building_area">
                  Building Area
                </label>
                <input value="{{ old('building_area') }}" name="building_area"
                       class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                       id="building_area" type="number" step="0.01" placeholder="Building Area" required>
              </div>
              <div class="w-full px-3 mb-6">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="electricity">
                  Electricity
                </label>
                <input value="{{ old('electricity') }}" name="electricity"
                       class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                       id="electricity" type="text" placeholder="Electricity">
              </div>
              <div class="w-full px-3 mb-6">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="water">
                  Water
                </label>
                <input value="{{ old('water') }}" name="water"
                       class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                       id="water" type="text" placeholder="Water">
              </div>
              <div class="w-full px-3 mb-6">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="garage">
                  Garage
                </label>
                <select name="garage" id="garage" class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" required>
                  <option value="1" {{ old('garage') == '1' ? 'selected' : '' }}>Yes</option>
                  <option value="0" {{ old('garage') == '0' ? 'selected' : '' }}>No</option>
                </select>
              </div>
              <div class="w-full px-3 mb-6">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="certificate">
                  Certificate
                </label>
                <input value="{{ old('certificate') }}" name="certificate"
                       class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                       id="certificate" type="text" placeholder="Certificate">
              </div>
              <div class="w-full px-3 mb-6">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="material_building">
                  Material Building
                </label>
                <textarea name="material_building" id="material_building"
                          class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                          placeholder="Material Building">{{ old('material_building') }}</textarea>
              </div>
              <div class="w-full px-3 mb-6">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="material_floor">
                  Material Floor
                </label>
                <textarea name="material_floor" id="material_floor"
                          class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                          placeholder="Material Floor">{{ old('material_floor') }}</textarea>
              </div>
              <div class="w-full px-3 mb-6">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="dining_room">
                  Dining Room
                </label>
                <input value="{{ old('dining_room') }}" name="dining_room"
                       class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                       id="dining_room" type="text" placeholder="Dining Room">
              </div>
              <div class="w-full px-3 mb-6">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="living_room">
                  Living Room
                </label>
                <input value="{{ old('living_room') }}" name="living_room"
                       class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                       id="living_room" type="text" placeholder="Living Room">
              </div>

              <!-- Facilities -->
              <div class="w-full px-3 mb-6">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="facilities">
                  Facilities
                </label>
                <div id="facilities-container">
                  <div class="flex mb-2">
                    <input type="text" name="facilities[]"
                           class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                           placeholder="Facility">
                    <button type="button" class="px-2 py-1 ml-2 text-white bg-red-500 rounded" onclick="this.parentElement.remove()">Remove</button>
                  </div>
                </div>
                <button type="button" class="px-4 py-2 mt-2 text-white bg-blue-500 rounded" onclick="addFacility()">Add Facility</button>
              </div>

              <!-- Nearby Locations -->
              <div class="w-full px-3 mb-6">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="nearby_locations">
                  Nearby Locations
                </label>
                <div id="nearby-locations-container">
                  <div class="flex mb-2">
                    <input type="text" name="nearby_locations[]"
                           class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                           placeholder="Nearby Location">
                    <button type="button" class="px-2 py-1 ml-2 text-white bg-red-500 rounded" onclick="this.parentElement.remove()">Remove</button>
                  </div>
                </div>
                <button type="button" class="px-4 py-2 mt-2 text-white bg-blue-500 rounded" onclick="addNearbyLocation()">Add Nearby Location</button>
              </div>

              <div class="w-full px-3 mb-6">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="video_url">
                  Video URL
                </label>
                <input value="{{ old('video_url') }}" name="video_url"
                       class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                       id="video_url" type="url" placeholder="Video URL">
              </div>
              <div class="w-full px-3 mb-6">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="whatsapp_message">
                  WhatsApp Message
                </label>
                <textarea name="whatsapp_message" id="whatsapp_message"
                          class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                          placeholder="WhatsApp Message">{{ old('whatsapp_message') }}</textarea>
              </div>
              </div>
              <div class="w-full px-3 mb-6">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="status">
                  Status
                </label>
                <select name="status" id="status" class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" required>
                  <option value="ACTIVE" {{ old('status') == 'ACTIVE' ? 'selected' : '' }}>Active</option>
                  <option value="INACTIVE" {{ old('status') == 'INACTIVE' ? 'selected' : '' }}>Inactive</option>
                </select>
              </div>
            </div>
            <div class="flex flex-wrap mb-6 -mx-3">
              <div class="w-full px-3 text-right">
                <button type="submit"
                        class="px-4 py-2 font-bold text-white bg-green-500 rounded shadow-lg hover:bg-green-700">
                  Add Property
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script>
      function addFacility() {
        const container = document.getElementById('facilities-container');
        const div = document.createElement('div');
        div.className = 'flex mb-2';
        div.innerHTML = `
          <input type="text" name="facilities[]"
                 class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                 placeholder="Facility">
          <button type="button" class="px-2 py-1 ml-2 text-white bg-red-500 rounded" onclick="this.parentElement.remove()">Remove</button>
        `;
        container.appendChild(div);
      }

      function addNearbyLocation() {
        const container = document.getElementById('nearby-locations-container');
        const div = document.createElement('div');
        div.className = 'flex mb-2';
        div.innerHTML = `
          <input type="text" name="nearby_locations[]"
                 class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                 placeholder="Nearby Location">
          <button type="button" class="px-2 py-1 ml-2 text-white bg-red-500 rounded" onclick="this.parentElement.remove()">Remove</button>
        `;
        container.appendChild(div);
      }
    </script>
</x-app-layout>
