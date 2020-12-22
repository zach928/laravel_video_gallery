<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = "students";
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'state',
        'country',
                  ];
}
