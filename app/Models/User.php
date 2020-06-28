<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Illuminate\Auth\Notifications\ResetPassword;
use Hash;


/**
 * Class User
 * @package App\Models
 *
 * @property Transaction[] $transactions
 * @property Wallet[] $wallets
 * @property Coin[] $coins
 * @property string $avatar
 *
 * @property int $id
 * @property int $balance
 * @property string $name
 * @property string $email
 * @property string $password
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $email_verified_at
 * @property string $role
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
        'name', 'email', 'password','role_id', 'hasMasternode'
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
    ];

    /**
     * Hash password
     * @param $input
     */
    public function setPasswordAttribute($input)
    {
        if ($input)
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
    }

    public function getAvatarAttribute($size)
    {
        $size = $size ?? 32;
        return get_gravatar($this->email, $size);
    }

    public function transactions()
    {
        return $this->hasManyThrough(Transaction::class, Wallet::class);
    }

    public function coins()
    {
        return $this->hasManyThrough(Coin::class, Wallet::class);
    }

    public function wallets()
    {
        return $this->hasMany(Wallet::class);
    }

    public function getBalanceAttribute()
    {
        return $this->wallets->sum('balance');
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }

    public function sendPasswordResetNotification($token)
    {
       $this->notify(new ResetPassword($token));
    }

    public function masternodes(){
        return $this->hasMany(Masternode::class);
    }
}
