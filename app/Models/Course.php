<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Workers;

class Course extends Model
{
    protected $table = 'candidates';

    protected $fillable = ['name', 'lastname', 'tel', 'mail',
    'education_title_1', 'education_center_1', 'education_year_1', 
    'education_title_2', 'education_center_2', 'education_year_2',
    'education_title_3', 'education_center_3', 'education_year_3',
    'experience_position_1', 'experience_company_1', 'experience_date_1', 'experience_description_1',
    'experience_position_2', 'experience_company_2', 'experience_date_2', 'experience_description_2',
    'experience_position_3', 'experience_company_3', 'experience_date_3', 'experience_description_3',
    'job_offer', 'url_cv'];

    public function worker()
    {
        return $this->belongsToMany(Workers::class, 'curso_trabajador', 'curso_id', 'trabajador_id');
    }
    public $timestamps = false;
}
