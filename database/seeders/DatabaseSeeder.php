<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Job;
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

        $user = User::factory()->create([
            'name' => 'Yehezkiel Wiradhika',
            'email' => 'yehezkiel1086@gmail.com'
        ]);

        Job::factory(6)->create([
            'user_id' => $user->id
        ]);
    }
}
