<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    public function addNew($input)
    {
        $check = static::where('remember_token', $input['remember_token'])->first();

        if (is_null($check)) {
            return static::create($input);
        }

        return $check;
    }

    public function incrementLevel()
    {
        return $this->increment('level');
    }
}
