<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiHarga extends Model
{
    use HasFactory;
    protected $table = 'tb_nilaiharga';
    protected $primaryKey = 'id_harga';
    protected $fillable = ['id_harga','id_maskapai','nilai_KriteriaHarga'];
    public $incrementing = false;
    public $timestamps = false;
}
