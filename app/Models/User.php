<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['first_name', 'last_name', 'phone_number', 'gender', 'email', 'date_of_birth','biography'];
}
