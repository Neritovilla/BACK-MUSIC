<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $table = 'song';
    protected $primaryKey = 'id_song';
    protected $fillable = [
        'title',
        'album',
        'id_category',
        'duration',
        'audio_file',
        'release_year',
        'composer',
        'lyrics',
        'entry_date',
        'views',
        'status',
    ];

    // Relación con la categoría
    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }
}
