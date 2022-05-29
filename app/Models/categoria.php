<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as MongoModel;

class categoria extends MongoModel
{
    use HasFactory;

    protected $fillable = [
        'descripcion'
    ];
}
