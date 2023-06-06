<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiKualitas extends Model
{
    use HasFactory;
    protected $table = 'tb_nilaikualitas';
    protected $primaryKey = 'id_kualitas';
    protected $fillable = ['id_kualitas','id_maskapai','nilai_KriteriaKualitas'];
    public $incrementing = false;
    public $timestamps = false;
}
