<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategoris';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'namaKategori',
    ];

    public function barangs(): HasMany
    {
        return $this->hasMany(Barang::class);
    }
}
