<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Create; //この行を上に追加
use App\User;//この行を上に追加
use App\Meeting;//この行を上に追加
use App\Tree_path;//この行を上に追加
use DB;

use Carbon\Carbon;

use Auth;//この行を上に追加
use Validator;//この行を上に追加


class MeetingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $auths = Auth::id();
    
    $tree_paths = Tree_path::where('ancestor_id', $auths)->orWhere('descendant_id', $auths)->get(['id']);
 


    $diff_day = Meeting::whereIn('tree_path_id',$tree_paths)->orderBy('day', 'desc')->value('day');
    $dt = new Carbon();
    $dt1 = $dt->diffInDays($diff_day);
   
    //メンバー一覧
    $tree_paths_menbers = Tree_path::where('ancestor_id', $auths)->get();
    //上司一覧
    $tree_paths_boss = Tree_path::where('descendant_id', $auths)->get();
    
    $meeting_ancestors = Meeting::where('descendant_id',$auths)->orderBy('day', 'desc')->get();
    $meeting_descendants = Meeting::where('ancestor_id',$auths)->orderBy('day', 'desc')->get();

    $meetings1 = Meeting::whereIn('tree_path_id',$tree_paths_menbers)->orderBy('day', 'desc')->get();

    $diff_day2s=Meeting::whereIn('day',function($query) {
       $query->select(DB::raw('MAX(day)'))->from('meetings')->groupBy('ancestor_id')->get();})->get();


    
    $meeting_maxdays = Meeting::with('users')
   ->where('ancestor_id', $auths)
   ->orWhere('descendant_id',$auths)
   ->select('descendant_id', 'ancestor_id', DB::raw('MAX(day) as day'))
   ->groupBy('ancestor_id', 'descendant_id')
   ->get();



    return view('meetings',compact('meetings','auths','tree_paths','meeting_descendants','meeting_ancestors','tree_paths_menbers','diff_day2s','tree_paths_boss','meeting_maxdays'));
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
            'ancestor_id' => 'required|max:255',
            'descendant_id' => 'required|max:255',
            'day' => 'required|max:255',
            'times' => 'required|max:255',
            'place' => 'required|max:255',
            'method' => 'required|max:255',
            'description_item1' => 'required|max:255',
            'description_item2' => 'required|max:255',
            'description_item3' => 'required|max:255',
            
        ]);
        
        //バリデーション:エラー
        if ($validator->fails()) {
            return  back()
                ->withInput()
                ->withErrors($validator);
        }
        
        //以下に登録処理を記述（Eloquentモデル）
        $meetings = new Meeting;
        $meetings->tree_path_id = '1';
        $meetings->ancestor_id =$request->ancestor_id;
        $meetings->descendant_id =$request->descendant_id;
        $meetings->day = $request->day;
        $meetings->times = $request->times;
        $meetings->place = $request->place;
        $meetings->method= $request->method;
        $meetings->create_id =$request->create_id;
        $meetings->description_item1 = $request->description_item1;
        $meetings->description_item2 =$request->description_item2;
        $meetings->description_item3 = $request->description_item3;
        $meetings->save();
        
        $roleId=$request->create_id;
        $meetings->members()->attach($roleId);
              
        $roleId1=$request->tree_path_id;
        $meetings->my_tree_paths()->attach($roleId1);
        
        return redirect('/meetings');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     
//詳細表
public function show(Meeting $meeting)
    {
    return view('meetingdetails',[
        'meeting'=> $meeting
        ]);
  
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
    public function destroy(Meeting $meeting)
    {
        $meeting->delete();       //追加
        return back();
    }
    

}
