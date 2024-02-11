<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            [
                'name' => 'Laravel',
            ],
            [
                'name' => 'Vue.js',
            ],
            [
                'name' => 'React',
            ],
        ];
        foreach ($tags as $tag) {
            $new_tag = new \App\Models\Tag;
            $new_tag->name = $tag['name'];
            $new_tag->save();
        }
    }
}
