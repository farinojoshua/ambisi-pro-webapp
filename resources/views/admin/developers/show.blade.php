<x-app-layout>
    <x-slot name="title">Developer Details</x-slot>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            <a href="{{ route('admin.developers.index') }}">←</a>
            Developer Details: {{ $developer->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                <div class="border-t border-gray-200">
                    <dl>
                        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Developer Name
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">
                                {{ $developer->name }}
                            </dd>
                        </div>
                        <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Logo URL
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">
                                @if($developer->logo_url)
                                    <img src="{{ $developer->logo_url }}" alt="Developer Logo" class="max-w-xs">
                                @else
                                    <span class="text-gray-500">No Logo</span>
                                @endif
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
            <div class="mt-5">
                <a href="{{ route('admin.developers.index') }}" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Back To List Developers
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
