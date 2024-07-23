<x-app-layout>
    <x-slot name="title">Property Details</x-slot>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            <a href="{{ route('admin.properties.index') }}">←</a>
            Property Details: {{ $property->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                <div class="border-t border-gray-200">
                    <dl>
                        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Property Name</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $property->name }}</dd>
                        </div>
                        <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Developer</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $property->developer->name }}</dd>
                        </div>
                        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Description</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $property->description }}</dd>
                        </div>
                        <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Location</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $property->location }}</dd>
                        </div>
                        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Photo</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">
                                <img src="{{ Storage::url($property->photo_url) }}" alt="{{ $property->name }}" class="h-auto max-w-full">
                            </dd>
                        </div>
                        <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Bedrooms</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $property->bedrooms }}</dd>
                        </div>
                        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Bathrooms</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $property->bathrooms }}</dd>
                        </div>
                        <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Land Area</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $property->land_area }} m²</dd>
                        </div>
                        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Building Area</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $property->building_area }} m²</dd>
                        </div>
                        <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Electricity</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $property->electricity ?? 'N/A' }}</dd>
                        </div>
                        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Water</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $property->water ?? 'N/A' }}</dd>
                        </div>
                        <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Garage</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $property->garage ? 'Yes' : 'No' }}</dd>
                        </div>
                        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Certificate</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $property->certificate ?? 'N/A' }}</dd>
                        </div>
                        <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Material Building</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $property->material_building ?? 'N/A' }}</dd>
                        </div>
                        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Material Floor</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $property->material_floor ?? 'N/A' }}</dd>
                        </div>
                        <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Dining Room</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $property->dining_room ?? 'N/A' }}</dd>
                        </div>
                        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Living Room</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $property->living_room ?? 'N/A' }}</dd>
                        </div>
                        <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Facilities</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">
                                @if($property->facilities)
                                    <ul class="pl-5 list-disc">
                                        @foreach(json_decode($property->facilities) as $facility)
                                            <li>{{ $facility }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    N/A
                                @endif
                            </dd>
                        </div>
                        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Nearby Locations</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">
                                @if($property->nearby_locations)
                                    <ul class="pl-5 list-disc">
                                        @foreach(json_decode($property->nearby_locations) as $location)
                                            <li>{{ $location }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    N/A
                                @endif
                            </dd>
                        </div>
                        <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Video URL</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">
                                @if($property->video_url)
                                    <a href="{{ $property->video_url }}" target="_blank" class="text-blue-600 hover:text-blue-800">View Video</a>
                                @else
                                    N/A
                                @endif
                            </dd>
                        </div>
                        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">WhatsApp Message</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $property->whatsapp_message ?? 'N/A' }}</dd>
                        </div>
                        <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Status</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $property->status }}</dd>
                        </div>
                        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Price</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">${{ number_format($property->price, 2) }}</dd>
                        </div>
                        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Year Built</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $property->year_built ?? 'N/A' }}</dd>
                        </div>
                        <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Created By</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $property->created_by }}</dd>
                        </div>
                        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Updated By</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $property->updated_by }}</dd>
                        </div>
                        <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Created At</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $property->created_at->format('F d, Y H:i:s') }}</dd>
                        </div>
                        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Updated At</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $property->updated_at->format('F d, Y H:i:s') }}</dd>
                        </div>
                    </dl>
                </div>
            </div>
            <div class="flex justify-between mt-6">
                <a href="{{ route('admin.properties.index') }}" class="px-4 py-2 text-gray-800 bg-gray-300 rounded hover:bg-gray-400">Back to List</a>
                <div>
                    <a href="{{ route('admin.properties.edit', $property->property_id) }}" class="px-4 py-2 mr-2 text-white bg-blue-500 rounded hover:bg-blue-600">Edit</a>
                    <form action="{{ route('admin.properties.destroy', $property->property_id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-4 py-2 text-white bg-red-500 rounded hover:bg-red-600" onclick="return confirm('Are you sure you want to delete this property?')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
