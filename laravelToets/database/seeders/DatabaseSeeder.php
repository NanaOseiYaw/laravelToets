<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teacher;
use App\Models\Subject;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Teacher::factory(5)->create()->each(function ($teacher) {
            // Maak per docent 1-3 vakken aan
            Subject::factory(rand(1,3))->create([
                'teacher_id' => $teacher->id,
            ]);
        });
    }
}
