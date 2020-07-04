<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable=['question','answer'];

    // bikin relasi ka options table
    public function options() {
        return $this->hasMany('App\Option');
    }
}
