<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class penempatan extends Model
{
    use HasFactory;
    protected $table = 'penempatans';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'barang_id',
        'ruangan_id',
        'nomorUrut',
        'barcode',
    ];

    public function barang(): BelongsTo
    {
        return $this->belongsTo(barang::class);
    }

    public function ruangan(): BelongsTo
    {
        return $this->belongsTo(ruangan::class);
    }

    public function scopeSearch($query, $value){
        $query->whereHas('ruangan', function (Builder $query) use ($value) {
            $query->where('namaRuangan', 'like', "%{$value}%");
        })->orWhereHas('barang', function (Builder $query) use ($value) {
            $query->where('namaBarang', 'like', "%{$value}%");
        });
    }

}
