<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BobotNilai extends Model
{
    use HasFactory;
    protected $table = 'tb_bobotnilai';
    protected $primaryKey = 'id_bobotNilai';
    protected $fillable = ['id_bobotNilai','id_maskapai','bobot_NilaiFasilitas','bobot_NilaiHarga','bobot_NilaiPelayanan','bobot_NilaiKualitas'];
    public $incrementing = false;
    public $timestamps = false;
}
