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
@if( Auth::check() )

        <!-- バリデーションエラーの表示に使用-->
            @include('common.errors')
        <!-- バリデーションエラーの表示に使用-->
        
        
                <div class="card-body">
            <div class="card-body">
                <table class="table table-striped task-table">
                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>上司</th>
                    </thead>
                    <!-- テーブル本体 -->　
                    <tbody>
                         @foreach ($tree_paths_boss as $tree_paths_bos)
                         <tr>  
                         　 <td>
                             <div>{{  $tree_paths_bos->users1->name}}</div>
                             </td>                      
                      @endforeach
                      

                            </tr>
                        
                    </tbody>
                </table>
            </div>
        </div> 


        <div class="card-body">
            <div class="card-body">
                <table class="table table-striped task-table">
                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>部下</th>
                    </thead>
                    <!-- テーブル本体 -->　
                    <tbody>
                         @foreach ($tree_paths_menbers as $tree_paths_menber)
                         <tr>  
                         　 <td>
                             <div>{{  $tree_paths_menber->users->name}}</div>
                             </td>                      
                      @endforeach
                      

                            </tr>
                        
                    </tbody>
                </table>
            </div>
        </div> 
        
  @if (count($meeting_maxdays) > 0)
        <div class="card-body">
            <div class="card-body">
                <table class="table table-striped task-table">
                  <label>最新面談一覧</label>
                    <thead>
                        <th>上司名</th>
                        <th>部下名</th>
                        <th>日付</th>
                    </thead>
                    <!-- テーブル本体 -->　
                    <tbody>
                        @foreach ($meeting_maxdays as $meeting_maxday)
                        <tr>   
                         　 <td>
                             　<div>{{  $meeting_maxday->users1->name}}</div>
                             </td>                      
                             <td>
                             　<div>{{  $meeting_maxday->users->name}}</div>
                             </td>    
                             <td class="table-text">
                               <div>{{ $meeting_maxday->day}}</div>
                             </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>  
        @endif      
        
        
        
        
        
        
        
  @if (count($meeting_ancestors) > 0)
        <div class="card-body">
            <div class="card-body">
                <table class="table table-striped task-table">
                  <label>上司面談一覧</label>
                    <thead>
                        <th>上司名</th>
                        <th>部下名</th>
                        <th>日付</th>
　　　　　　　　　　　　<th>詳細</th>
　　　　　　　　　　　　<th>削除</th>
                    </thead>
                    <!-- テーブル本体 -->　
                    <tbody>
                        @foreach ($meeting_ancestors as $meeting_ancestor)
                        <tr>   
                         　 <td>
                             　<div>{{  $meeting_ancestor->users1->name}}</div>
                             </td>                      
                             <td>
                             　<div>{{  $meeting_ancestor->users->name}}</div>
                             </td>    
                             <td class="table-text">
                               <div>{{ $meeting_ancestor->day}}</div>
                             </td>
                             <td class="table-text">
                               <a href="{{ url('meeting/'.$meeting_ancestor->id) }}" class="btn btn-primary">詳細</a>
                             </td>
                             <td class="table-text">
                               <form action="{{ url('meetings/'.$meeting_ancestor->id) }}" method="POST">
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
        
 @if (count($meeting_descendants) > 0)
        <div class="card-body">
            <div class="card-body">
                <table class="table table-striped task-table">
                  <label>部下面談一覧</label>
                    <thead>
                        <th>上司名</th>
                        <th>部下名</th>
                        <th>日付</th>
　　　　　　　　　　　　<th>詳細</th>
　　　　　　　　　　　　<th>削除</th>
                    </thead>
                    <!-- テーブル本体 -->　
                    <tbody>
                        @foreach ($meeting_descendants as $meeting_descendant)
                        <tr>   
                         　 <td>
                             　<div>{{  $meeting_descendant->users1->name}}</div>
                             </td>                      
                             <td>
                             　<div>{{  $meeting_descendant->users->name}}</div>
                             </td>    
                             <td class="table-text">
                               <div>{{ $meeting_descendant->day}}</div>
                             </td>
                             <td class="table-text">
                               <a href="{{ url('meeting/'.$meeting_descendant->id) }}" class="btn btn-primary">詳細</a>
                             </td>
                             <td class="table-text">
                               <form action="{{ url('meetings/'.$meeting_descendant->id) }}" method="POST">
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
 @endif
@endsection