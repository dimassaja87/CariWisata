<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WisataDetail extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $date = ['created_at'];

    public function wisatas()
    {
        return $this->belongsTo(Wisata::class, 'id_wisata', 'id');
    }
}
