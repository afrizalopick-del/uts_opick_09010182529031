<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">Edit Buku</h2>
    </x-slot>

    <div class="py-8 max-w-3xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white p-6 shadow rounded">
            <form action="{{ route('books.update', $book) }}" method="POST">
                @csrf
                @method('PUT')
                @include('books._form')
                <button class="px-4 py-2 bg-blue-600 text-white rounded">Update</button>
                <a href="{{ route('books.index') }}" class="px-4 py-2 bg-gray-300 rounded">Batal</a>
            </form>
        </div>
    </div>
</x-app-layout>