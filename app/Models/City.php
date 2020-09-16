<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['state_id', 'name'];

    public function state(){
        return $this->belongsTo(State::class);
    }

    public function companies(){
        return $this->belongsToMany(Company::class, 'city_companies');
    }

    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }

}
