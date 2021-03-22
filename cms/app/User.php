<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','position', 'password','flag',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
 // Tree_pathテーブルとのリレーション （主テーブル側）
    public function o_tree_patshs() {
       return $this->hasMany('App\Tree_path','descendant_id');
   }  
   
       public function o_tree_patshs1() {
       return $this->hasMany('App\Tree_path','ancestor_id');
   }   
   // meetingsテーブルとのリレーション （主テーブル側）
    public function o_meetings() {
       return $this->hasMany('App\Meeting','descendant_id');
   }  
   
       public function o_meetings1(){
       return $this->hasMany('App\Meeting','ancestor_id');
   }    

    
}
