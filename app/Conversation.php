<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    /**
     * Mass assignable attributes
     * 
     * @var array
     */

     protected $fillable = ['chatid', 'first_name', 'last_name', 'profile_pix'];
}
