<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Likable;

class Tweet extends Model {
    
    use Likable, HasFactory;

    protected $guarded = [];

    public function user() {

        return $this->belongsTo(User::class, 'user_id');
    }

    public function tags() {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}
