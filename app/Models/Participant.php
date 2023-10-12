<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $table = 'Participant';
    protected $fillable = [
        'id',
        'name',
        'location',
        'url'
        ];
    use HasFactory;
}
