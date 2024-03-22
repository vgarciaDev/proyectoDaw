<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    protected $table = 'workers';

    protected $fillable = [
        'name', 'date_of_birth', 'gender', 'address', 'phone_1', 'phone_2',
        'email', 'dni', 'hire_date', 'position', 'department', 'salary', 
        'marital_status', 'ss_number', 'contract_type', 'proffesional_category',
        'irpf_withholding', 'ss_contribution', 'bank_account', 'rol', 'password'
    ];
    
    public $timestamps = false;
}
