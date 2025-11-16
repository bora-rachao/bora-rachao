<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sport extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id_sport';

    protected $fillable = ['name', 'description', 'image'];
}
