<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tree_paths_day extends Model
{
    //
      Public function tree_path()
  {
    // Profileモデルのデータを引っ張てくる
    return $this->hasOne('App\tree_path');
  }
    
}
