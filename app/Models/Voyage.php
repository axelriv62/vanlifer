<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voyage extends Model {
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'titre', 'description', 'resume', 'continent', 'user_id', 'en_ligne', 'visuel'
    ];

    public function editeur() {
        return $this->belongsTo(User::class);
    }

    public function avis() {
        return $this->hasMany(Avis::class);
    }

    public function likes() {
        return $this->belongsToMany(User::class, 'likes');
    }

    public function casts() {
        return [
            'en_ligne' => 'boolean',
        ];
    }
}
