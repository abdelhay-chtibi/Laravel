<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Phone extends Model
{
    use HasFactory;
    //belongsTo dans la classe au se trouve le clé étrangaire 
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
