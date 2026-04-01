<?php
namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        Article::factory()->count(5)->create();
    }
}
