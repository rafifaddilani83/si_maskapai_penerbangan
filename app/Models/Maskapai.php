<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maskapai extends Model
{
    use HasFactory;
    protected $table = 'tb_maskapai';
    protected $primaryKey = 'id_maskapai';
    protected $fillable = ['id_maskapai','nama','kode_maskapai'];
    public $incrementing = false;
    public $timestamps = false;
}
