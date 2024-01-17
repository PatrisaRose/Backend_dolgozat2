<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brands extends Model
{
    use HasFactory;

    protected $primaryKey = 'brand_id';


    protected $fillable = [
        'name',
        'country',
    ];


}
