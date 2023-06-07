<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pec extends Model
{
    use HasFactory;

    protected  $fillable = [
        'pec_name',
        'pec_address',
        'pec_status',
        'pec_location'
    ];
}
