<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable= ['name', 'description', 'position', 'image'];

    public function image():string
    {
        return $this->image ? asset('storage/'.$this->image) : asset('storage/default.png');
    }
}
