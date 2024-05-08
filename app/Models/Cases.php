<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    use HasFactory;
    protected $fillable = [
        'case_type',
        'case_description',
        'case_document',
        'client_name',
        'client_contact',
        'case_status',
        'case_deadline',
        'user_id',
    ];

    public function caseRulings()
    {
        return $this->hasMany(CaseRuling::class, 'cases_id');
    }

}
