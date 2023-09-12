<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    Protected $fillable = ['nom' ,'prix','quantite'];
    
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
