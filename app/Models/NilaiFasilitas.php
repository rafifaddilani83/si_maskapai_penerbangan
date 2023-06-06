<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiFasilitas extends Model
{
    use HasFactory;
    protected $table = 'tb_nilaifasilitas';
    protected $primaryKey = 'id_fasilitas';
    protected $fillable = ['id_fasilitas','id_maskapai','nilai_KriteriaFasilitas'];
    public $incrementing = false;
    public $timestamps = false;
}
