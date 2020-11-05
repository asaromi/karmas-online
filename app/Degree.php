<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    protected $fillable = ['name'];

    public function department(){
        return $this->hasMany('App\Degree', 'degreeId', 'id');
    }
}
