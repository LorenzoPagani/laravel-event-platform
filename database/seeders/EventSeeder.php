<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'name' => 'Laravel Event',
                'user_id' => 2,
            ],
            [
                'name' => 'Vue.js Event',
                'user_id' => 1,
            ],
            [
                'name' => 'React Event',
                'user_id' => 3,
            ],
        ];
        foreach ($events as $event) {
            $new_event = new \App\Models\Event;
            $new_event->name = $event['name'];
            $new_event->save();
        }
    }
}
