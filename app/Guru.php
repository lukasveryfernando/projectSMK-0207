<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';
    public $incrementing = false;
    protected $primaryKey = 'id_guru';
    protected $fillable = ['nama_guru', 'status_guru', 'status'];
}
