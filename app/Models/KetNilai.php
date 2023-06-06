<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KetNilai extends Model
{
    use HasFactory;
    protected $table = 'tb_ket_nilai';
    protected $primaryKey = 'id_keterangan';
    protected $fillable = ['id_keterangan', 'keterangan_nilai', 'range_nilai', 'bobot_nilai'];
    public $incrementing = false; //default e true
    public $timestamps = false; //default timestamps migrate ""Created at updated at
}
