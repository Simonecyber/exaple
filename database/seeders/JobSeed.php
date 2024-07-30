<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         Job::factory(30)->create();
    }
}