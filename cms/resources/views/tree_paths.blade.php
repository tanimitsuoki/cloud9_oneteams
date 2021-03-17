@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


<!-- 設定者情報 -->
        <div class="card-body">
            <div class="card-body">
                <p><P>
                <table class="table table-striped task-table">
                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>名前</th>
                        <th>email</th>
                        <th>役職</th>
                    </thead>
                    <!-- テーブル本体 -->
                    <tbody>
                            <tr>
                                <td class="table-text">
                                    <div>{{ $user->name }}</div>
                                </td>
                                 <!-- 投稿詳細 -->
                                <td class="table-text">
                                    <div>{{ $user->email }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $user->position }}</div>
                                </td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
<!-- 部下情報-->
        @if (count($tree_paths) > 0)
        <div class="card-body" >
            <div class="card-body">
                <table class="table table-striped task-table">
                    <p>部下一覧<P>
                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>名前</th>
                        <th>email</th>
                        <th>役職</th>
                         <th>削除</th>
                    </thead>
                    <!-- テーブル本体 -->
                    <tbody>
                        @foreach ($tree_paths as $tree_path)
                            <tr>
                                <!-- 投稿タイトル -->
                                <td class="table-text">
                                    <div>{{ $tree_path->users->name}}</div>
                                </td>
                                 <!-- 投稿詳細 -->
                                <td class="table-text">
                                    <div>{{ $tree_path->users->email }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $tree_path->users->position }}</div>
                                </td>
                                
                                <td class="table-text">
                                    <form action="{{ url('tree_paths/'.$tree_path->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger">
                                                削除
                                            </button>
                                    </form>
                               </td>                              
                               
                            </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>  
        @endif  
        
        
        
        
     <form action="{{  url('tree_paths/update')}}" method="POST">
        <div class="a">
　     <label class="b"></label>
　      <div class="c">
        <button type="submit" class="btn btn-primary">追加</button>
         <input type="hidden" id="userid" name="userid" value="{{ $user->id}}">  {{ csrf_field() }}
        </div>
        </div>
        
    <!-- 直部下設定 -->
            <div class="card-body">
             <div class="card-body">
                <p><P>
                <table class="table table-striped task-table">

                    <thead>
                        <th>直部下1</th>
                        <th>直部下2</th>
                        <th>直部下3</th>
                        <th>直部下4</th>
                        <th>直部下5</th>
                    </thead>
                              <tbody>
                            <tr>
                                <td class="table-text">
                                    <select　name="id[]"　>
                                      @foreach($users as $index)
                                       @continue($index->id == $user->id)
                                        <option value="{{ $index->id}}">{{ $index->name }}</option>
                                      @endforeach
                                       <option value="0" selected>---</option>
                                    </select>{{ csrf_field() }}    
                                </td>
                                <td class="table-text">
                                    <select　name="id[]"　>
                                      @foreach($users as $index)
                                      @continue($index->id == $user->id)
                                        <option value="{{ $index->id}}">{{ $index->name }}</option>

                                      @endforeach
                                       <option value="0" selected>---</option>
                                    </select> {{ csrf_field() }}  
                                </td>
　　　　　　　　　　　　　　　　　　　　　　 
                                <td class="table-text">
                                     <select　name="id[]"　>
                                      @foreach($users as $index)
                                       @continue($index->id == $user->id)
                                        <option value="{{ $index->id}}">{{ $index->name }}</option>
                                      @endforeach
                                       <option value="0" selected>---</option>
                                    </select>
                                </td>
                                <td class="table-text">
                                     <select　name="id[]"　>
                                      @foreach($users as $index)
                                       @continue($index->id == $user->id)
                                        <option value="{{ $index->id}}">{{ $index->name }}</option>
                                      @endforeach
                                       <option  value="0"　selected>---</option>
                                    </select>
                                </td>
                               <td class="table-text">
                                    <select　name="id[]"　>
                                      @foreach($users as $index)
                                       @continue($index->id == $user->id)
                                        <option value="{{ $index->id}}">{{ $index->name }}</option>
                                      @endforeach
                                       <option value="0" selected>---</option>
                                    </select>
                                </td>
                            </tr>
                    </tbody>
                </table>      
                  </div>
               </div>           
     
    @endsection