<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perangkingan extends Model
{
    use HasFactory;
    protected $table = 'tb_perangkingan';
    protected $primaryKey = 'id_perangkingan';
    protected $fillable = ['id_perangkingan','id_maskapai','nilai_vector_S','nilai_vector_V','rangking'];
    public $incrementing = false;
    public $timestamps = false;
}
