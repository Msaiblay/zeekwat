<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=['name','coverphoto','description','requirement','accessstatus','price','allowdiscount','publicstatus','language_id','subcategory_id','user_id'];

    public function chapters(){
        return $this->hasMany('App\Models\Chapter');
    }
    public function users(){
        return $this->belongsTo('App\Models\user');
    }
}
