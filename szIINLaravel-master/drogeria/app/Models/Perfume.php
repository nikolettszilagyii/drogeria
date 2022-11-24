<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfume extends Model
{
    use HasFactory;

    public $timestamps = false; 

    protected $fillable = [

        "name",
        "type",
        "price"
    ];
}
