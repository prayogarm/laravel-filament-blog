<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address','city', 'phone', 'sumber', 'project'];

    protected $casts = [
        'project' => 'array',
    ];

    public function handleClient()
    {
        return $this->hasOne(HandleClient::class);
    }

    public function visitShowroom()
    {
        return $this->hasOne(VisitShowroom::class);
    }
}
