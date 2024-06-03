<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media_videos extends Model
{
    use HasFactory;

    protected $table = 'media_videos';

    protected $fillable = [
        'title',
        'description',
        'url',
        'show',
        'deleted'
    ];
}
