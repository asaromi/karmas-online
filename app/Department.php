<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['facultyId', 'name'];

    public function faculty(){
        return $this->belongsTo('App\Faculty', 'facultyId', 'id');
    }

    public function degree(){
        return $this->belongsTo('App\Degree', 'degreeId', 'id');
    }

    public function student(){
        return $this->hasMany('App\User', 'departmentId', 'id');
    }
}