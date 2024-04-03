<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gedung extends Model
{
    use HasFactory;
    protected $table = 'gedungs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'namaGedung',
    ];
}
