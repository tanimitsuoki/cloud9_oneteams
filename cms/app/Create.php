<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Create extends Model
{
 // Meetingテーブルとの多対多リレーション
     public function my_teams() {
        return $this->belongsToMany('App\Meeting');
    }
}
