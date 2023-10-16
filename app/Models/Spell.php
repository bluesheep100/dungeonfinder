<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spell extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    const SCHOOLS = [
        'abjuration',
        'conjuration',
        'divination',
        'enchantment',
        'evocation',
        'illusion',
        'necromancy',
        'transmutation',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
