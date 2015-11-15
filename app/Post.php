<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['img_url','description','publish'];
    public function setImgUrlAttribute($img_url)
    {
        $name = Carbon::now()->second.$img_url->getClientOriginalName();
        $this->attributes['img_url'] = $name;
        \Storage::disk('local')->put($name,\File::get($img_url));
    }


    public function user(){
        return $this->belongsTo('App\User','user_id');
        //return $this->belongsTo('App\User', 'local_key');
        //return $this->belongsTo('App\User', 'local_key', 'parent_key');
    }
}
