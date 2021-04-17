<?php

namespace App;

use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

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
        'remember_token', 'api_token', 'password', 'token'
    ];

    // $user->api_token

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

    /**
     * The channels the user receives notification broadcasts on.
     *
     * @return string
     */
    public function receivesBroadcastNotificationsOn()
    {
        return 'participants.' . $this->id;
    }

    public function getIsAdminAttribute($value)
    {
        return in_array($this->email, config('app.admin_emails'));
    }

    public function scopeWithScores($q)
    {
        return $q->addSelect(['score' => QuestionResponse::selectRaw('SUM(score) as score')->whereColumn('user_id', 'users.id')]);
    }

    public function scopeActive($q)
    {
        return $q->where('disqualified', false);
    }

    public function responses()
    {
        return $this->hasMany(QuestionResponse::class);
    }

    public function getSplitTimeAttribute($value)
    {
        return $this->responses->sum->split_time;
    }
}
