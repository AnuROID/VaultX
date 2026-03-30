<x-app-layout>

<div class="max-w-3xl mx-auto mt-10">

    <div class="bg-white shadow-lg rounded-xl p-8">

        <h2 class="text-2xl font-bold mb-6 text-gray-800">
            Upload Image
        </h2>

        <form method="POST" action="{{ route('images.store') }}" enctype="multipart/form-data" class="space-y-4">
            @csrf

            <input
                type="file"
                name="image"
                class="w-full border rounded-lg p-3"
            >

            <button
                type="submit"
                class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition"
            >
                Upload Image
            </button>

        </form>

    </div>

</div>

</x-app-layout>
