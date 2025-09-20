<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'user';
    protected $guarded = ['id'];

    public function kelas()
    {
        return $this->belongTo(kelas::class, 'kelas_id');
    }
}