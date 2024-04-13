<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class barang extends Model
{
    use HasFactory;
    protected $table = 'barangs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'kategori_id',
        'namaBarang',
        'tglBeli',
        'jlhBeli',
        'hargaSatuan',
        'totalHarga',
        'tempatBeli',
        'asalBarang',
        'kepemilikan',
    ];

    public function penempatan()
    {
        return $this->hasMany('App\Models\Penempatan', 'barang_id');
    }

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }

    public function scopeSearch($query, $value){
        $query->where('namaBarang','like', "%{$value}%");
    }
}
