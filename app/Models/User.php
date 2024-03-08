<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
    ];

    public function phoneNumber(): HasOne
    {
        return $this->hasOne(PhoneBookModel::class);
    }

    public function country(): HasOne
    {
        return $this->hasOne(UserCountry::class);
    }
}
