<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Arr;

/**
 * Class User
 * @package App\Models
 * @property mixed id
 * @property mixed first_name
 * @property mixed last_name
 * @property mixed money
 * @property mixed email
 * @property mixed password
 * @property mixed roles
 * @property mixed birthday
 * @property mixed registered_with
 * @property mixed state
 * @property mixed phone_number
 * @property mixed account_type
 * @property mixed company_name
 * @property mixed company_contact
 * @property mixed company_ustid
 */
class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'money', 'password', 'roles', 'registered_with', 'state', 'salutation', 'first_name', 'birthday',
        'last_name', 'street', 'house_number', 'postcode', 'city', 'region', 'country', 'phone_number', 'account_type',
        'company_name', 'company_contact', 'company_ustid'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'birthday' => 'datetime'
    ];

    /*
     * Functions
     */

    public function doesntOwn( $model, $foreignKey = null, $strict = false )
    {
        return !$this->owns($model, $foreignKey, $strict);
    }

    public function owns( $model, $foreignKey = null, $strict = false )
    {
        $foreignKey = $foreignKey ?: $this->getForeignKey();
        if ( $strict ) {
            return $this->getKey() === $model->{$foreignKey};
        }

        return $this->getKey() == $model->{$foreignKey};
    }

    public function hasRole($value)
    {
        foreach ($this->roles as $role) { if ($value == $role) return true;} return false;
    }

    /*
     * Attributes
     */

    public function getRolesAttribute($value) {
        return json_decode($value);
    }

    public function setRolesAttribute($value) {
        $this->attributes['roles'] = json_encode($value);
    }

    /*
     * Eloquents
     */

    public function activities()
    {
        return $this->hasMany(ActivityLog::class, 'user_id', 'id');
    }

    public function sessions()
    {
        return $this->hasMany(Session::class, 'user_id', 'id');
    }

    public function notificationsEloquent()
    {
        return $this->hasMany(Notification::class, 'user_id', 'id');
    }

}
