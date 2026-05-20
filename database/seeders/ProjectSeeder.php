<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'title' => 'Web Portofolio Dinamis',
            'description' => 'Proyek portofolio pertama menggunakan Laravel, GCE, Cloudflare, dan Supabase.',
            'media' => 'images/web_dinamis.png',
        ]);
    }
}
