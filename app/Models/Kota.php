<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Destinasi()
    {
        return $this->hasMany(Destinasi::class, 'nama_kota'.'id');
    }

    public function KotaDetail()
    {
        return $this->hasMany(KotaDetail::class, 'nama_kota'.'id');
    }
}
