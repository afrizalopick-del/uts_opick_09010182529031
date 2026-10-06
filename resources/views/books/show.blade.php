<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">Detail Buku</h2>
    </x-slot>

    <div class="py-8 max-w-3xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white p-6 shadow rounded">
            <table class="w-full mb-4">
                <tr><td class="py-2 font-medium w-40">Judul</td><td>{{ $book->title }}</td></tr>
                <tr><td class="py-2 font-medium">Penulis</td><td>{{ $book->author }}</td></tr>
                <tr><td class="py-2 font-medium">Penerbit</td><td>{{ $book->publisher }}</td></tr>
                <tr><td class="py-2 font-medium">Tahun Terbit</td><td>{{ $book->year }}</td></tr>
                <tr><td class="py-2 font-medium">Stok</td><td>{{ $book->stock }}</td></tr>
                <tr><td class="py-2 font-medium">Kategori</td><td>{{ $book->category->name }}</td></tr>
            </table>
            <a href="{{ route('books.index') }}" class="px-4 py-2 bg-gray-300 rounded">Kembali</a>
        </div>
    </div>
</x-app-layout>