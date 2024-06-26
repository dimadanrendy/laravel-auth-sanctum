<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;
    protected $fillable = ['role_name'];

    public function user()
    {
        return $this->belongsToMany(User::class, 'user_role');
    }
}
