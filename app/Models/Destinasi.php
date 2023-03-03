<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinasi extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $date = ['created_at'];

    public function kotas()
    {
        return $this->belongsTo(Kota::class, 'id_kota', 'id');
    }

    public function Rating()
    {
        return $this->hasMany(Rating::class, 'nama_wisata'.'id');
    }
}
