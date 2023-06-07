<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'file_name',
        'file_path',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}