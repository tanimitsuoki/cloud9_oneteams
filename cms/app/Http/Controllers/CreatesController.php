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

class CreatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $creates = DB::select('select * from creates ORDER BY updated_at DESC LIMIT 1');
    $user_id = Auth::id();
    $tree_paths = DB::table('tree_paths')->where('ancestor_id',$user_id)->get();

    return view('meeting_creates',compact('creates','meetings','tree_paths'));
        
    }
    
    public function index1()
    {
        
        return view('creates');
    }
    
    
    public function index2()
    {

    $tree_paths = Tree_path::get();
    $meetings = Meeting::get();
    $auths = Auth::user();
    return view('meetings',compact('creates','meetings','auths','tree_paths'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
  $validator = Validator::make($request->all(), [
            'item1' => 'required|max:255',
            'item2' => 'required|max:255',
            'item3' => 'required|max:255',
            
        ]);
        
        //バリデーション:エラー
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        
        //以下に登録処理を記述（Eloquentモデル）
        $creates = new Create;
        $creates->item1 = $request->item1;
        $creates->item2 = $request->item2;
        $creates->item3 = $request->item3;
        
        
        $creates->save();
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
}
