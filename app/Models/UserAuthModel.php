<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class UserAuthModel extends Model
{
    use AuthenticatableTrait;
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'google_id',
    ];
}
