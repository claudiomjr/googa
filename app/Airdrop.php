<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airdrop extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullname', 'email', 'twitter_profile','telegram_profile','reddit_profile','medium_profile','bitcointalk_profile','eth_address',
    ];

}
