<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_worker extends Model
{
    protected $table = 'courses_workers';

    protected $fillable = ['id','id_course', 'id_worker'];

    public $timestamps = false;
}
