<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['name', 'position', 'image', 'facebook', 'twitter', 'linkedin', 'instagram'];

    public function image(): string
    {
        return $this->image ? asset('storage/'.$this->image) : asset('storage/default.png');
    }
}
