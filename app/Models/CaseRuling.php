<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseRuling extends Model
{
    use HasFactory;

    protected $fillable = [
        'cases_id',
        'case_ruling',
        'case_results',
        'user_id',
    ];
}
