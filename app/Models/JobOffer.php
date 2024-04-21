<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobOffer extends Model
{
    use HasFactory;
    protected $table = 'job_offers';

    protected $fillable = ['title', 'location', 'hours', 'description'];
    public $timestamps = false;
}
