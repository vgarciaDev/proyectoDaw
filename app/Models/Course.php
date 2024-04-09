<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Worker;

class Course extends Model
{
    protected $table = 'courses';

    protected $fillable = ['title', 'duration', 'description', 'initial_date',
    'end_date', 'difficulty', 'state', 'long_description'];

    public $timestamps = false;
}
