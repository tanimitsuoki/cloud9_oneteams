<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tree_path extends Model
{
    
        protected $fillable = [
        'descendant_id',
    ];
         // Userテーブルとのリレーション （従テーブル側）
     public function users() {
        return $this->belongsTo('App\User','descendant_id');
    }
    
         public function users1() {
        return $this->belongsTo('App\User','ancestor_id');
    }
    
    
  // Meetingテーブルとの多対多リレーション
     public function my_meetings() {
        return $this->belongsToMany('App\Meeting');
    }
}
