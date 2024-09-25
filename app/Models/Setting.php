<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['name', 'address', 'phone', 'email', 'facebook', 'twitter', 'linkedin', 'instagram', 'logo'];

    public function logo():string
    {
        return $this->logo ? asset('storage/'.$this->logo) : asset('storage/logo.png');
    }
}
