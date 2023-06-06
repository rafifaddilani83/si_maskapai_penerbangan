<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;
    protected $table = 'tb_penilaian';
    protected $primaryKey = 'id_penilaian';
    protected $fillable = ['id_penilaian','id_maskapai','id_fasilitas','id_harga','id_pelayanan','id_kualitas'];
    public $incrementing = false;
    public $timestamps = false;
}
