<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWeb extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'last_name',
        'first_name',
        'email',
        'send_mail',
        'password',
    ];

}
