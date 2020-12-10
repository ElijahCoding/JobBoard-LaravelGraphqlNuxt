<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'Laravel',
                'slug' => 'laravel',
            ],
            [
                'title' => 'Livewire',
                'slug' => 'livewire',
            ],
            [
                'title' => 'VueJS',
                'slug' => 'vue',
            ],
            [
                'title' => 'Python',
                'slug' => 'python',
            ]
        ];

        Tag::query()->insert($data);
    }
}
