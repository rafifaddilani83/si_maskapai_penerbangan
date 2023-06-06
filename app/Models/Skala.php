<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skala extends Model
{
    use HasFactory;
    protected $table = 'tb_skala';
    protected $primaryKey = 'id_skala';
    protected $fillable = ['id_skala', 'jenis_kriteria', 'bobot_penilaian']; //kolom ditabel
    public $incrementing = false; //default e true
    public $timestamps = false; //default timestamps migrate ""Created at updated at
}
