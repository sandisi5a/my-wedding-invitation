<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $table = 'Attendance';
    protected $fillable = [
        'id',
        'name',
        'location',
        'contribution',
        'url'
        ];
    use HasFactory;
    
}
