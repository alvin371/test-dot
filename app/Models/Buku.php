<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = "bukus";
    protected $guarded = [];
    public function penulis()
    {
        return $this->belongsToMany(Penulis::class, 'buku_penulis');
    }
}
