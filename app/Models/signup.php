<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class signup extends Model
{
    public $timestamps=false;

    protected $table = 'signup';

    use HasFactory;
}
