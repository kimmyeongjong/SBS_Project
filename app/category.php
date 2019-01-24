<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table= 'categories';
    protected $fillable = [
        'category_num',
        'category_name',
        'top_category'
    ];

    protected $appends = ['categories'];

    public function getCommentsAttribute(){
        return $this->hasMany('App\category','category_num' ,'top_category')->get();
    }
}
