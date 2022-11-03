<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;


class Character extends Model
{
    use HasFactory, Sortable;

    protected $fillable = [

        'intelligence',
        'strength',
        'speed',
        'durability',
        'power',
        'combat',
    ];

     public $sortable = ['intelligence', 'strength', 'speed', 'durability', 'power', 'combat'];


}
