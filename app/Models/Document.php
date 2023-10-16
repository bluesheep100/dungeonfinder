<?php

namespace App\Models;

use cebe\markdown\MarkdownExtra;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'title', 'content'];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function toHTML(): string
    {
        return (new MarkdownExtra())->parse($this->content);
    }
}
