<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create(['name' => 'Teknologi', 'description' => 'Buku tentang komputer dan pemrograman']);
        Category::create(['name' => 'Fiksi', 'description' => 'Novel dan cerita fiksi']);
        Category::create(['name' => 'Sains', 'description' => 'Buku ilmu pengetahuan alam']);
    }
}