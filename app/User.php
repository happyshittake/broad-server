<?php

namespace Broad;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Broad\User
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $unreadNotifications
 * @method static \Illuminate\Database\Query\Builder|\Broad\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Broad\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Broad\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\Broad\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\Broad\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\Broad\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Broad\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
}
