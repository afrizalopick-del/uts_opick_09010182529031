<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">Daftar Buku</h2>
    </x-slot>

    <div class="py-8 max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white p-6 shadow rounded">
            @if (session('success'))
                <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">{{ session('success') }}</div>
            @endif

            <a href="{{ route('books.create') }}" class="inline-block mb-4 px-4 py-2 bg-blue-600 text-white rounded">+ Tambah Buku</a>

            <table class="w-full text-left border">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="p-2">No</th>
                        <th class="p-2">Judul</th>
                        <th class="p-2">Penulis</th>
                        <th class="p-2">Kategori</th>
                        <th class="p-2">Stok</th>
                        <th class="p-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($books as $book)
                        <tr class="border-t">
                            <td class="p-2">{{ $loop->iteration }}</td>
                            <td class="p-2">{{ $book->title }}</td>
                            <td class="p-2">{{ $book->author }}</td>
                            <td class="p-2">{{ $book->category->name }}</td>
                            <td class="p-2">{{ $book->stock }}</td>
                            <td class="p-2 flex gap-2">
                                <a href="{{ route('books.show', $book) }}" class="px-3 py-1 bg-gray-600 text-white rounded">Detail</a>
                                <a href="{{ route('books.edit', $book) }}" class="px-3 py-1 bg-yellow-500 text-white rounded">Edit</a>
                                <form action="{{ route('books.destroy', $book) }}" method="POST" onsubmit="return confirm('Yakin hapus buku ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="px-3 py-1 bg-red-600 text-white rounded">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="6" class="p-4 text-center">Belum ada data buku.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>