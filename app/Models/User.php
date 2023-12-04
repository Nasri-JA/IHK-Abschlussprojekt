<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    public $timestamps = false;

    protected $fillable = [
        'avatar_path',
        'guard_id',
        'first_name',
        'last_name',
        'birthday',
        'email',
        'password',
        'last_login'
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    protected $casts = [
        'last_login' => 'datetime',
        'created_at' => 'datetime',
    ];

    protected $appends = [
        'avatar_path',
    ];

    protected function avatar(): Attribute
    {
        return Attribute::make(
            get: function () {
                return "https://ui-avatars.com/api/?name={$this->fullName}&background=random&color=ffffff&length=2";
            }
        );
    }

    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn () => "{$this->first_name} {$this->last_name}"
        );
    }
}
