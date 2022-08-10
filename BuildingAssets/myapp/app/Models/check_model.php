<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class check_model extends Model
{
    use HasFactory;
    //fillabe used for adding new data in the model database
    protected $fillable = [
        'name',
        'email',
        'address',
    ];
}
