<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneBookModel extends Model
{
    use HasFactory;

    protected $table = 'phone_book';
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'phone'
    ];
}
