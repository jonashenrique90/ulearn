<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Access extends Model
{
    //
  protected $fillable = ['user_id', 'first_name', 'last_name', 'email', 'ip', 'datetime'];
}
