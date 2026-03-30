<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h3 class="text-lg font-bold mb-4">
                        {{ __("You're logged in!") }}
                    </h3>

                    <div class="flex gap-4">

                        <!-- Upload Image -->
                        <a href="{{ route('images.create') }}"
                           class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                            Upload Image
                        </a>

                        <!-- View Images -->
                        <a href="{{ route('images.index') }}"
                           class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">
                            View My Images
                        </a>

                    </div>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>
