<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    //Table Name
    protected $table = 'users';

    //Primary key
    public $primaryKey = 'id';

}
