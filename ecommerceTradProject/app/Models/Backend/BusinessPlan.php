<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessPlan extends Model
{
    use HasFactory;
    protected $fillable = [
        'experience', 
        'businessName',
        'sortDescription',
        'longDescription',
    
    ];
}
