<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tiket extends Model
{
    use HasFactory;
    protected $table = 'tb_tiket';
    protected $primaryKey = 'id_tiket';
    protected $fillable = ['id_tiket','id_pesawat','tanggal_pesan','rute','harga'];
    public $incrementing = false;
    public $timestamps = false;
}
