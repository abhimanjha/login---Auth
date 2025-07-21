<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Specify which fields are mass assignable
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Hide sensitive fields like password when serializing
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
