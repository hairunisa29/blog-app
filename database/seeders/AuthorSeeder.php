<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('authors')->insert([
            [
                'author_name' => 'Leehan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'author_name' => 'Steven',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'author_name' => 'Shiyan',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
