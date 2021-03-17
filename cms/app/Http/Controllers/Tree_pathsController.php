<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Create; //この行を上に追加
use App\User;//この行を上に追加
use App\Meeting;//この行を上に追加
use App\Tree_path;//この行を上に追加
use DB;

use Auth;//この行を上に追加
use Validator;//この行を上に追加

class Tree_pathsController extends Controller
{
    
    public function index()
    {
        
        $users = User::get();
        return view('tree_paths',[
            'users'=> $users
            ]);

    }
    
        public function index1(User $user)
    {
    $creates = DB::select('select * from creates ORDER BY updated_at DESC LIMIT 1');
    $user_id = Auth::id();
    
    $tree_paths = Tree_path::where('ancestor_id', $user_id )->orWhere('descendant_id', $user_id )->get();

    return view('meeting_creates',compact('creates','tree_paths'));
        
    }
    
    
    public function show(User $user)
    {

   $tree_paths = Tree_path::where('ancestor_id',$user->id)->get();
   $users = User::get();

    return view('tree_paths',compact('users','user','tree_paths'));
    }
    
  public function store(Request $request)
{

    
        $validator = Validator::make($request->all(), [
        'id' => 'required|max:255',
         'userid' => 'required|max:255',
    ]);
    //バリデーション:エラー 
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
    
       $i = 0;
   foreach((array)$request->id as $id){

    if ($id > 0){
       $tree_paths = new Tree_path;
       $tree_paths->ancestor_id = $request->userid;
       $tree_paths->descendant_id = $request->id[$i];
       $tree_paths->path_length = '1';
       $tree_paths->save(); 
       $i++;
   }}
       return back();
}  

    public function destroy(Tree_path $tree_path)
    {
        $tree_path->delete();       //追加
        return back();
    } 

}
