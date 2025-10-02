<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'user"'; // tabel sesuai database kamu
    protected $fillable = ['nama', 'nim', 'kelas_id'];

    // Relasi ke tabel kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    // Fungsi ambil user join kelas
    public function getUser()
    {
        return $this->join('kelas', 'user.kelas_id', '=', 'kelas.id')
                    ->select('user.*', 'kelas.nama_kelas')
                    ->get();
    }
}
