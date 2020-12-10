<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class JobsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = app(Faker::class);

        $data = [
            [
                'user_id' => User::query()->inRandomOrder()->first()->id,
                'job_title' => $faker->title,
                'job_location' => $faker->address,
                'job_link' => $faker->url,
                'company_name' => $faker->firstName,
                'company_logo' => $faker->lastName,
            ],
            [
                'user_id' => User::query()->inRandomOrder()->first()->id,
                'job_title' => $faker->title,
                'job_location' => $faker->address,
                'job_link' => $faker->url,
                'company_name' => $faker->firstName,
                'company_logo' => $faker->lastName,
            ],
            [
                'user_id' => User::query()->inRandomOrder()->first()->id,
                'job_title' => $faker->title,
                'job_location' => $faker->address,
                'job_link' => $faker->url,
                'company_name' => $faker->firstName,
                'company_logo' => $faker->lastName,
            ],
            [
                'user_id' => User::query()->inRandomOrder()->first()->id,
                'job_title' => $faker->title,
                'job_location' => $faker->address,
                'job_link' => $faker->url,
                'company_name' => $faker->firstName,
                'company_logo' => $faker->lastName,
            ],
        ];

        Job::query()->insert($data);
    }
}
