<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $fillable = ['Nome'];

    public function musicas()
    {
        return $this->hasMany(Musica::class);
    }
}
