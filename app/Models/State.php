<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{

    protected $fillable = ['country_id', 'name', 'initials'];

    public function cities(){
        return $this->hasMany(City::class);
    }

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }
}
