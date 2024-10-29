<?php

namespace Database\Seeders;

use App\Models\Masalliq;
use App\Models\Ovqat;
use App\Models\OvqatMasalliq;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        $this->call([
            CategorySeeder::class,
            PostSeeder::class,
            ProductSeeder::class,
            LikeSeeder::class,
            CommentSeeder::class,
            OrderSeeder::class,
            UsersSeeder::class,
            CompanySeeder::class,
            CompanyProductSeeder::class
        ]);
        for ($i=1; $i <=20 ; $i++) { 
            Ovqat::create(['name'=>'Ovqat'.$i]);
        }

        for ($i=1; $i <=20 ; $i++) { 
            Masalliq::create(['name'=>'Masalliq'.$i]);
        }

        for ($i=1; $i <=1000; $i++) { 
            OvqatMasalliq::create(['ovqat_id' => rand(1,20), 'masalliq_id'=>rand(1,20)]);
        }
    }
}
