<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subcategory extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=['name','category_id'];
//    protected $table='subcategories';

    public function category(){
        return $this->belongsTo('App\Models\Categoty');
    }
}
