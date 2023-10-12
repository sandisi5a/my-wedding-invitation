<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Undangan extends Model
{
    use HasFactory;

    protected $table = 'undangan';
    protected $fillable = [
        'id',
        'nama',
        'kota',
        'kehadiran',
        'ucapan'
        ];
    use HasFactory;
}
