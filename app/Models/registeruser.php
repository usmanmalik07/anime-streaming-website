<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registeruser extends Model
{
    use HasFactory;
    protected $table = 'registeruser';
    protected $fillable = ['name', 'email', 'password'];
    

}
