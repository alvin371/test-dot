<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    use HasFactory;
    protected $table = "penulis";
    protected $guarded = [];

    public function buku()
    {
        return $this->belongsToMany(Buku::class, 'buku_penulis','buku_id','penulis_id');
    }
}
