<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'video_mode',
        'video_row',
        'margin',
        'hover',
    ];
protected $casts = [
  'padding' => 'array'
];
}
