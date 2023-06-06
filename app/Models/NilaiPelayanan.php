<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiPelayanan extends Model
{
    use HasFactory;
    protected $table = 'tb_nilaipelayanan';
    protected $primaryKey = 'id_pelayanan';
    protected $fillable = ['id_pelayanan','id_maskapai','nilai_KriteriaPelayanan'];
    public $incrementing = false;
    public $timestamps = false;
}
