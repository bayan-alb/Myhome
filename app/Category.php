<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function properties(){
        return $this->hasMany('App\Meal' , 'category_id');
    }
 
}
