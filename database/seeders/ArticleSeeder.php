<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = [
            [
                'title' => 'Cara cepat menjahit pakaian',
                'content' => '<h2>Langkah-langkah:</h2><ol><li>Siapkan bahan dan alat jahit.</li><li>Potong kain sesuai pola.</li><li>Jahit bagian-bagian kain bersama-sama.</li><li>Selesaikan dengan finishing seperti menjahit tepi kain.</li></ol>',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Panduan lengkap merawat mesin jahit',
                'content' => '<h2>Langkah-langkah:</h2><ol><li>Bersihkan mesin jahit secara rutin.</li><li>Ganti jarum dan benang secara berkala.</li><li>Periksa dan oleskan pelumas pada bagian yang bergerak.</li><li>Jaga mesin jahit dari debu dan kelembapan.</li></ol>',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]

        ];
        foreach ($articles as $article) {
            Article::create($article);
        }
    }
}
