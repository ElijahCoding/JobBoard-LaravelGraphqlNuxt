<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class JobTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 0;

        while ($i <= Job::query()->count()) {
            Job::inRandomOrder()->first()->tags()->attach(Tag::inRandomOrder()->first()->id);
            $i++;
        }
    }
}
