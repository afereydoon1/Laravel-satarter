<?php

namespace App\Models\Users;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class AdminUser extends User
{
    use HasFactory;
    protected $fillable = ['name','email','phone','password','isAdmin'];
}
