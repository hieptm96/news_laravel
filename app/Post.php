<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['title','slug','content','thumb_img','highlight','view','category_id'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public $timestamps = true;

    public function category(){
    	return $this->belongsTo('App\Category','category_id','id');
    }

    public function comments(){
    	return $this->hasMany('App\Comment','post_id','id');
    }
}
