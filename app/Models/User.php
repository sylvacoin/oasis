<?php

namespace App\Models;

use App\Models\v1\Investment;
use App\Models\v1\PaymentHistory;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getRole()
    {
        $roles = $this->getRoleNames();
        $role = '';

        if ($roles != null) {
            $role = $roles->first();
        }
        return $role;
    }

    public function investments()
    {
        return $this->hasMany(Investment::class);
    }

    public function payment_histories()
    {
        return $this->hasMany(PaymentHistory::class);
    }
}
