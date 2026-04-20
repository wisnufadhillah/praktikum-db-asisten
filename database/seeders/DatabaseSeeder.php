<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@amikom.ac.id'],
            [
                'name' => 'Admin Amikom',
                'password' => bcrypt('password'),
                'role' => 'admin',
            ]
        );

        $catTech = Category::firstOrCreate([
            'name' => 'Technology & Research',
            'slug' => 'technology-research',
        ]);

        $catCyber = Category::firstOrCreate([
            'name' => 'Cybersecurity',
            'slug' => 'cybersecurity',
        ]);

        $catDesign = Category::firstOrCreate([
            'name' => 'UI/UX Design',
            'slug' => 'ui-ux-design',
        ]);

        $catSport = Category::firstOrCreate([
            'name' => 'Olahraga & E-Sport',
            'slug' => 'olahraga-esport',
        ]);

        
        Event::create([
            'category_id' => $catDesign->id,
            'title' => 'UI/UX Masterclass: Apple Developer Standard',
            'description' => 'Pelajari cara menyusun portofolio UI/UX yang memenuhi standar industri dan Apple Developer Academy.',
            'date' => '2026-06-15 09:00:00',
            'location' => 'Amikom Creative Hub',
            'price' => 75000,
            'stock' => 50,
            'poster_path' => 'posters/event-uiux.png',
        ]);

        Event::create([
            'category_id' => $catSport->id,
            'title' => 'E-Sport U-Champ 2026',
            'description' => 'Turnamen E-Sport tingkat universitas terbesar tahun ini. Buktikan timmu adalah yang terbaik!',
            'date' => '2026-07-20 10:00:00',
            'location' => 'Amikom E-Sport Arena',
            'price' => 150000,
            'stock' => 32, 
            'poster_path' => 'posters/event-esport.png',
        ]);

        Event::create([
            'category_id' => $catCyber->id,
            'title' => 'Bug Bounty Bootcamp: IDOR & Session Management',
            'description' => 'Workshop intensif mencari dan melaporkan kerentanan tingkat menengah hingga tinggi pada sistem web.',
            'date' => '2026-06-05 13:00:00',
            'location' => 'Lab Keamanan Siber',
            'price' => 100000,
            'stock' => 40,
            'poster_path' => 'posters/event-cyber.png',
        ]);

        Event::create([
            'category_id' => $catTech->id,
            'title' => 'Full-Stack Web Developer Summit',
            'description' => 'Eksplorasi ekosistem pengembangan web modern menggunakan PHP Laravel, Tailwind CSS, dan React.',
            'date' => '2026-05-25 08:30:00',
            'location' => 'Ruang Cinema',
            'price' => 50000,
            'stock' => 150,
            'poster_path' => 'posters/event-web.png',
        ]);

        Event::create([
            'category_id' => $catDesign->id,
            'title' => 'Fintech App Prototype Challenge',
            'description' => 'Kompetisi merancang purwarupa aplikasi dompet digital dengan fokus pada pemetaan perjalanan pengguna (User Journey).',
            'date' => '2026-08-10 09:00:00',
            'location' => 'Online / Zoom',
            'price' => 35000,
            'stock' => 100,
            'poster_path' => 'posters/event-fintech.png',
        ]);

        Event::create([
            'category_id' => $catSport->id,
            'title' => 'Poseidon Swimming Championship',
            'description' => 'Kompetisi renang antar fakultas dengan tema mitologi air. Terbuka untuk semua gaya renang.',
            'date' => '2026-09-12 07:00:00',
            'location' => 'Kolam Renang Universitas',
            'price' => 45000,
            'stock' => 80,
            'poster_path' => 'posters/event-swim.png',
        ]);
    }
}