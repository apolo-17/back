<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'dni',
        'born_date',
        'address',
        'photo_url',
        'user_id'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function entities()
    {
        return $this->belongsToMany(Entity::class);
    }
}
