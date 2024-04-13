<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class gedung extends Model
{
    use HasFactory;
    protected $table = 'gedungs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'namaGedung',
    ];

    

    public function ruangans(): HasMany
    {
        return $this->hasMany(ruangan::class);
    }
}
