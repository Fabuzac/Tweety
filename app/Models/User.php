<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, Followable;

    protected $fillable = [
        'username',
        'avatar',
        'name',
        'email',
        'password',
    ];
    // protected $guarded = [];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute($value) {

        //return "https://i.pravatar.cc/200?u=" . $this->email;
        // return asset($value);
        
        return asset('storage/'.$value ? : '/images/default-avatar.jpg');
    }

    public function setPasswordAttribute($value) {

        $this->attributes['password'] = bcrypt($value);

    }

    public function timeline() {

        $ids = $this->follows()->pluck('id');
        $ids->push($this->id);

        return Tweet::whereIn('user_id', $ids)->latest()->paginate(30);

    }

    public function tweets() {

        return $this->hasMany(Tweet::class)->latest();

    }

    // public function getRouteKeyName() {
    //     return 'name';
    // }

    public function path($append = '') {
    
        $path = route('profile', $this->username);

        return $append ? "{$path}/{$append}" : $path;
    
    // Pour utiliser, href="{ $user->path('edit) }"
    }
    
    
}
