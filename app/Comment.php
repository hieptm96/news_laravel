<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = ['content','user_id','post_id'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public $timestamps = true;

    public function user(){
    	return $this->belongsTo('App\User','user_id','id');
    }

    public function post(){
    	return $this->belongsTo('App\Post','post_id','id');
    }
}
