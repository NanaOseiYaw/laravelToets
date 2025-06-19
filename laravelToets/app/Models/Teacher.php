<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;


class Teacher extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'hobby'];

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
}

