<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ruangan extends Model
{
    use HasFactory;
    protected $table = 'ruangans';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'namaRuangan',
        'gedung_id',
    ];

    public function gedung(): BelongsTo
    {
        return $this->belongsTo(gedung::class);
    }
}
