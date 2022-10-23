<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'character_id',
        // 'image_id',
        'alignment',
        'height',
        'weight',
        'aliases',
    ];

    public function character()
    {
        return $this->belongsTo(Character::class);
    }

    // public function image()
    // {
    //     return $this->belongsTo(Image::class);
    // }

}
