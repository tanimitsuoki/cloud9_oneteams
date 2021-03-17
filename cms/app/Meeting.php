<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    //
     // createテーブルとの多対多リレーション
     public function members() {
        return $this->belongsToMany('App\Create');
    }
    
     // Tree_pathテーブルとの多対多リレーション
     public function my_tree_paths() {
        return $this->belongsToMany('App\Tree_path');
    }
        protected $casts = [
        '$foos' => 'collection'
    ];

    
}
