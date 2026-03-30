<x-app-layout>

    <div class="max-w-7xl mx-auto mt-10 px-6">

        <div class="flex justify-between items-center mb-6">

            <h2 class="text-2xl font-bold text-gray-800">
                Your Images
            </h2>

            <a href="/upload" class="bg-green-600 text-white px-5 py-2 rounded-lg hover:bg-green-700">
                Upload New
            </a>

        </div>

        <form method="GET" action="{{ route('images.index') }}" class="mb-4">
            <input type="text" value="{{ request(('search')) }}" name="search" placeholder="Search images.." class="border p-2 rounded">
            <button class="bg-blue-500 text-white px-3 py-1 rounded">
                Search
</button>
        </form>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

            @foreach($images as $image)

                        <?php
                $decrypted = Crypt::decrypt($image->data);
                $base64 = base64_encode($decrypted);
                                ?>

                        <div class="bg-white shadow rounded-xl overflow-hidden">

                            <img src="data:image/png;base64,{{$base64}}" class="w-full h-48 object-cover">
                            <p class="text-sm text-black text-center">
{{ $image->name }}
</p>

                            <div class="p-4 flex justify-between items-center">

                                <a href="{{ route('images.download', $image->id) }}"
                                    class="bg-blue-500 text-white px-4 py-1 rounded hover:bg-blue-600">
                                    Download
                                </a>

                                <form method="POST" action="{{ route('images.destroy', $image->id) }}">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="bg-red-500 text-white px-4 py-1 rounded hover:bg-red-600">
                                        Delete
                                    </button>

                                </form>

                            </div>

                        </div>

            @endforeach

        </div>

    </div>

</x-app-layout>
