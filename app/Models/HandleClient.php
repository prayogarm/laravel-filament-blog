<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HandleClient extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id', 'follow_up_1', 'follow_up_2', 'follow_up_3', 'follow_up_4',
        'status_follow_up', 'booking_fee', 'notes'
    ];

    protected $casts = [
        'follow_up_1' => 'date',
        'follow_up_2' => 'date',
        'follow_up_3' => 'date',
        'follow_up_4' => 'date',
        'booking_fee' => 'boolean',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
