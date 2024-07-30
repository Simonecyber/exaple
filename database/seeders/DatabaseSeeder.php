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

       

        User::factory()->create([
            'first_name' => 'Simone',
            'last_name' => 'Dev',
            'email' => 'test@example.com',
        ]);

        $this->call(JobSeed::class);
    }
}