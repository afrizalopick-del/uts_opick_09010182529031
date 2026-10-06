@if ($errors->any())
    <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">
        <ul class="list-disc ml-5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="mb-4">
    <label class="block mb-1 font-medium">Judul</label>
    <input type="text" name="title" value="{{ old('title', $book->title ?? '') }}" class="w-full border-gray-300 rounded">
</div>

<div class="mb-4">
    <label class="block mb-1 font-medium">Penulis</label>
    <input type="text" name="author" value="{{ old('author', $book->author ?? '') }}" class="w-full border-gray-300 rounded">
</div>

<div class="mb-4">
    <label class="block mb-1 font-medium">Penerbit</label>
    <input type="text" name="publisher" value="{{ old('publisher', $book->publisher ?? '') }}" class="w-full border-gray-300 rounded">
</div>

<div class="mb-4">
    <label class="block mb-1 font-medium">Tahun Terbit</label>
    <input type="number" name="year" value="{{ old('year', $book->year ?? '') }}" class="w-full border-gray-300 rounded">
</div>

<div class="mb-4">
    <label class="block mb-1 font-medium">Stok</label>
    <input type="number" name="stock" value="{{ old('stock', $book->stock ?? '') }}" class="w-full border-gray-300 rounded">
</div>

<div class="mb-4">
    <label class="block mb-1 font-medium">Kategori</label>
    <select name="category_id" class="w-full border-gray-300 rounded">
        <option value="">-- Pilih Kategori --</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" @selected(old('category_id', $book->category_id ?? '') == $category->id)>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
</div>