<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;

    protected $fillable = [
        'issue'
    ];

    public function image(){
        return $this->hasMany(Image::class);
    }

    public function comment(){
        return $this->hasMany(Comment::class);
    }
}
