<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sepeda extends Model
{
    protected $table = 'sepeda';
    protected $primaryKey = 'kodesepeda';
    public $timestamps = false;

    protected $fillable = [
        'merksepeda',
        'stocksepeda',
        'tersedia',
    ];
}
