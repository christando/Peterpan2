<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $table = "driver";

    protected $fillable = [
        'username',
        'first_name',
        'last_name',
        'email',
        'password'
    ];
}
