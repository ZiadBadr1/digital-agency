<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable
{
    protected $fillable = ['name', 'email', 'password','avatar'];

    public function avatar(): string
    {
        return $this->avatar ? asset('storage/'.$this->avatar) : asset('storage/default.png');
    }
}
