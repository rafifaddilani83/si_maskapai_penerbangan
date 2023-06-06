<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user1 extends Model
{
    use HasFactory;
    protected $table = 'tb_user';
    protected $primaryKey = 'id_user';
    protected $fillable = ['id_user','username','email','password'];
    public $incrementing = false;
    public $timestamps = false;
}
