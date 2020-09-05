<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $fillable = ['code', 'name'];

    public function department(){
        return $this->hasMany('App\Department', 'facultyId', 'id');
    }
}
