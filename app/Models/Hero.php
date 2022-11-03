<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Hero extends Model
{
    use HasFactory, Sortable;


    protected $fillable = [
        'image',
        'name',
        'character_id',
        'alignment',
        'height',
        'weight',
        'aliases',
    ];

    public function character()
    {
        return $this->belongsTo(Character::class);
    }

}
