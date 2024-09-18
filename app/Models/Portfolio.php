<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'kategori_id', 
        'designer_id', 
        'description', 
        'type', 
        'size', 
        'jumlah_ruangan', 
        'location', 
        'cover', 
        'images', 
        'gambar_hasil', 
        'before_after' 
    ];
    
    protected $casts = [
        'images' => 'array',
        'gambar_hasil' => 'array',
        'before_after' => 'array',
    ];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    public function designer(){
        return $this->belongsTo(Designer::class);
    }
}
