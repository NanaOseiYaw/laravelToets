<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Teacher::factory(5)->create()->each(function($docent){
            \App\Models\Subject::factory(3)->create(['teacher_id' => $docent->id]);
        });
    }
}