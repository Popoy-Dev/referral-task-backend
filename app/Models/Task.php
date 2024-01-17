<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['given_name', 'surname', 'email', 'phone', 'home_name', 'street', 'suburb', 'state', 'postcode', 'country',];

}
