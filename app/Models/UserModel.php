<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class UserModel extends model
{
    use HasFactory;
    protected $table = "user";
    protected $fillable = ['email'];
    protected $primaryKey = "user_id";
    public $timestamps = false; 
}
