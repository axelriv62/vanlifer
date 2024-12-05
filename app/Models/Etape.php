<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etape extends Model {
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['titre', 'resume', 'description', 'debut', 'fin', 'voyage_id'];

    public function voyage() {
        return $this->belongsTo(Voyage::class);
    }

    public function medias() {
        return $this->HasMany(Media::class);
    }

    public function casts() {
        return [
            'debut' => 'datetime',
            'fin' => 'datetime',
        ];
    }
}
