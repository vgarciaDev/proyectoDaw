<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timekeeping extends Model
{
    use HasFactory;

    protected $table = 'timekeeping';

    protected $fillable = ['worker_id', 'clock_in', 'clock_in_pause', 'clock_out_pause', 'pause_time', 'clock_out','date', 'total_time'];
    
    public $timestamps = false;
}
