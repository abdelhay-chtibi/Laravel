<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Comment extends Model
{
    use HasFactory;
    protected $fillable =['desc'];
    protected $hidden=['created_at' , 'updated_at'];
    
    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }
}
