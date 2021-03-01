<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chapter extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=['name','course_id'];
    public function course(){
        return $this->belongsTo('App\Models\Course');
    }
    public function lessons(){
        return $this->hasMany('App\Models\Lesson');
    }
}
