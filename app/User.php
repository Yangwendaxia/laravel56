<?php

namespace App;

use Cache;
use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Log;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function recordLastActivedAt(){
        Log::info('In user model');
        $now = Carbon::now()->toDateTimeString();

        $update_key = 'actived_time_for_update';
        $update_data = Cache::get($update_key);
        $update_data[$this->id] = $now;
        Cache::forever($update_key,$update_data);

        $show_key = 'actived_time_data';
        $show_data = Cache::get($show_key);
        $show_data[$this->id] = $now;

        Cache::forever($show_key,$show_data);

    }
}
