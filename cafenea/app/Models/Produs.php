<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produs extends Model
{
    use HasFactory;

    protected $table = 'produse';

    protected $fillable = [
        'name',
        'categorie_id',
        'pret',
    ];

    public function categorie()
    {
        return $this->hasOne(Categorie::class, 'id', 'categorie_id');
    }
}
