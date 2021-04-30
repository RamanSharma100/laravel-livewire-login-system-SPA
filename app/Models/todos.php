<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todos extends Model
{
    use HasFactory;

    public $fillable = ['todo', 'user_id'];

    public function user()
    {
        return $this->hasOne(User::class, 'id');
    }
}