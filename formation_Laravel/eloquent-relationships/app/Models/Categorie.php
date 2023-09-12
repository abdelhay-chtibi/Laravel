<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    Protected $fillable = ['nom'];

    
    public function produits()
    {
        return $this->hasMany(Produit::class);
    }

    // public function categorie()
    // {
    //     return $this->belongsTo(Categorie::class);
    // }
}
