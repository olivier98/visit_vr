<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use jeremykenedy\LaravelRoles\Traits\HasRoleAndPermission;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoleAndPermission;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function visitor()
    {
        return $this->belongsTo(Visitor::class);
    }

    public function exhibitor()
    {
        return $this->belongsTo(Exhibitor::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    
    public function hasAnyRoles($roles){

        if($this->roles()->whereIn('name', $roles)->first())
        {
            return true;
        }
        return false;
    }

    public function hasRole($role){

        if($this->roles()->where('name', $role)->first())
        {
            return true;
        }
        return false;
    }

    public function whereHas(){
        $users = User::whereHas('roles', function ($query) {
            $query->where('name', 'admin');
        })->get();
    }
}
