<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitShowroom extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id', 'consultation_status', 'booking_fee','tau_hip_dari','rating_maps', 'notes'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
