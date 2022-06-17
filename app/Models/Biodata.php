<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $fillable = ['nama', 'pekerjaan', 'tanggal_lahir', 'no_telp', 'alamat'];
    protected $table = 'biodatas';
    protected $primaryKey = 'id';
    use HasFactory;
}
