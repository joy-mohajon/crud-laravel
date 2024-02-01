<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permission extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function roles()
    {
        return $this->belongsToMany(Role::class, "role_permission");
    }
}
