<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['client_id', 'name'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function handleClient()
    {
        return $this->hasOne(HandleClient::class);
    }

    public function visitShowroom()
    {
        return $this->hasOne(VisitShowroom::class);
    }
}
