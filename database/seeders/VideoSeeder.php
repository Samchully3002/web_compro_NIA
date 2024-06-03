<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('media_videos')->insert([
            'title' => Str::random(10),
            'description' => Str::random(10),
            'url' => Str::random(10),
            'show'=>1,
            'deleted'=>0
        ]);

    }
}
