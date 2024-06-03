<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    protected $table = 'our_business';

    protected $fillable = [
        'title',
        'description',
        'url',
        'show',
        'deleted'
    ];
}
