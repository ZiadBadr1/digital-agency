<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['name', 'description', 'icon'];

    public function icon():string
    {
        return $this->icon ? asset('storage/' . $this->icon) : asset('images/icon.png');
    }
}
