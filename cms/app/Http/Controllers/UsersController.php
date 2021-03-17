<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Create; //この行を上に追加
use App\User;//この行を上に追加
use App\Meeting;//この行を上に追加
use App\Tree_paths;//この行を上に追加
use DB;

use Auth;//この行を上に追加
use Validator;//この行を上に追加


class UsersController extends Controller
{
    public function index()
    {
        
        $users = User::get();
        return view('user_lists',[
            'users'=> $users
            ]);
    }
    
    public function destroy(User $user)
    {
        $user->delete();       //追加
        return redirect('/user_lists');  //追加
    } 
    
     public function edit()
    {
          $users = User::get();
        return view('user_edits',[
            'users'=> $users
            ]);
    }
    
     public function update1(Request $request)
    {
    //バリデーション
    $validator = Validator::make($request->all(), [
        'flag' => 'required|max:255',
    ]);
    //バリデーション:エラー 
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
    // Eloquent モデル
    $users = User::find($request->id);
    $users->flag = $request->flag;
    $users->save(); 
    return redirect('/user_lists');
    }
    
    
    
public function update(Request $request)
{

    
        $validator = Validator::make($request->all(), [
        'flag' => 'required|max:255',
    ]);
    //バリデーション:エラー 
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
    
       $i = 0;
   foreach((array)$request->id as $id){
       
       $users = User::find($id);
       $users->flag = $request->flag[$i];
       $users->save(); 
       $i++;
   }
       return redirect('/user_lists'); 
   
}}

