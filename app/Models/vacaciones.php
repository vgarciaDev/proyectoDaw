<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vacaciones extends Model
{
    use HasFactory;

    protected $table = 'vacaciones';

    protected $fillable = ['user', 'solicitud de vacaciones', 'estado solicitud'];

    public $timestamps = false;
}
