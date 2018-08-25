<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bounty extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // 'fullname', 
        'email', 'work_link','eth_address',
    ];
}
