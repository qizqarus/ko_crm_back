<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_photo',
        'project_name',
        'location',
        'status',
        'mentor',
        'partner',
        'start_date',
        'end_date',
        'problem_prerequisites',
        'problem_description',
        'solutions',
        'innovation',
        'equipment_cost',
        'transportation_expenses',
        'services_cost',
        'rent_cost',
        'raw_materials_cost',
        'other_cost',
        'resources',
        'participants',
    ];

    public function attachments()
    {
        return $this->hasMany(Attachment::class);
    }

    public function projectPhoto(): Attribute
    {
        return Attribute::make(
            get: fn($value) => env('APP_URL', 'http://localhost:8000/') . 'storage/' . $value
        );
    }
}
