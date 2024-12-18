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

    public function suivant() {
        return Etape::whereRaw("voyage_id=? and debut=?", [$this->voyage_id, $this->fin])->first();
    }


    public function precedent() {
        return Etape::whereRaw("voyage_id=? and fin=?", [$this->voyage_id, $this->debut])->first();
    }


    public function casts() {
        return [
            'debut' => 'datetime',
            'fin' => 'datetime',
        ];
    }

    public static function create(array $attributes)
    {
        $etape = new self($attributes);
        $etape->save();
        return $etape;
    }

}
