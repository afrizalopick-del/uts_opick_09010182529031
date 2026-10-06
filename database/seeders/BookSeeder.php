<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create(['category_id' => 1, 'title' => 'Belajar Laravel', 'author' => 'Budi Santoso', 'publisher' => 'Informatika', 'year' => 2022, 'stock' => 10]);
        Book::create(['category_id' => 1, 'title' => 'Dasar Pemrograman PHP', 'author' => 'Rina Wijaya', 'publisher' => 'Andi', 'year' => 2021, 'stock' => 7]);
        Book::create(['category_id' => 2, 'title' => 'Laskar Pelangi', 'author' => 'Andrea Hirata', 'publisher' => 'Bentang', 'year' => 2005, 'stock' => 5]);
        Book::create(['category_id' => 2, 'title' => 'Bumi', 'author' => 'Tere Liye', 'publisher' => 'Gramedia', 'year' => 2014, 'stock' => 8]);
        Book::create(['category_id' => 3, 'title' => 'Kosmos', 'author' => 'Carl Sagan', 'publisher' => 'Gramedia', 'year' => 2013, 'stock' => 4]);
    }
}