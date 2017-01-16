<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name','slug','parent_id'];

    public $timestamps = true;

    use SoftDeletes;
	protected $datas = ['deleted_at'];

    public function posts(){
    	return $this->hasMany('App\Post','post_id','id');
    }
}