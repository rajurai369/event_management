<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = Category::first();
        Event::create([
            'title' => 'Laravel Workshop',
            'description' => 'Learn Laravel in-depth',
            'date' => now(),
            'location' => 'Kathmandu',
            'category_id' => $category->id
        ]);

    }
}
