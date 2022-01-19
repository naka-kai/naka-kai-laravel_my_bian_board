<?php

namespace Database\Seeders;

use App\Models\Area;
use App\Models\Inside;
use App\Models\Outside;
use App\Models\Post;
use App\Models\Prefecture;
use App\Models\Wanted;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            AreaSeeder::class,
            PrefectureSeeder::class,
            AgeSeeder::class,
            WantedSeeder::class,
            OutsideSeeder::class,
            InsideSeeder::class,
            PostSeeder::class,
            PostOutsideSeeder::class,
            PostInsideSeeder::class,
            PostWantedSeeder::class
        ]);
    }
}
