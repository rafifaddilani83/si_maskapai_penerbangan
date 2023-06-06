<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesawat extends Model
{
    use HasFactory;
    protected $table = 'tb_pesawat';
    protected $primaryKey = 'id_pesawat';
    protected $fillable = ['id_pesawat','id_maskapai','nama_pesawat','tanggal_pembuatan','tanggal_operasional','status'];
    public $incrementing = false;
    public $timestamps = false;
}
