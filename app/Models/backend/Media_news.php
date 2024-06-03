<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media_news extends Model
{
    use HasFactory;

    protected $table = 'media_news';

    protected $fillable = [
        'title',
        'content',
        'img_url',
        'show',
        'deleted'
    ];
}
