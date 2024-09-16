<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($kategori) {
            if (!$kategori->slug) {
                $kategori->slug = Str::slug($kategori->name);
            }
        });

        static::updating(function ($kategori) {
            if (!$kategori->slug) {
                $kategori->slug = Str::slug($kategori->name);
            }
        });
    }

    public function portfolios(){
        return $this->hasMany(Portfolio::class);
    }
}
