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
        
        
        
        
        
  @if (count($meetings) > 0)
        <div class="card-body">
            <div class="card-body">
                <table class="table table-striped task-table">
                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>面談実施者</th>
                        <th>面談対象者</th>
                        <th>日付</th>
　　　　　　　　　　　　<th>詳細</th>
                    </thead>
                    <!-- テーブル本体 -->　
                    <tbody>
                        @foreach ($meetings as $meeting)
                        <tr>   
                         　 <td>
                         　@foreach ($meeting->my_tree_paths as $tree_path)
                             <div>{{ $tree_path->users1->name}}</div>
                            @endforeach
                             </td>                      
                        
                             <td>
                            @foreach ($meeting->my_tree_paths as $tree_path)
                             <div>{{ $tree_path->users->name}}</div>
                            @endforeach
                             </td>    
                               
                            
                                <td class="table-text">
                                    <div>{{ $meeting->day}}</div>
                                </td>
                               <td class="table-text">
                                   <a href="{{ url('meeting/'.$meeting->id) }}" class="btn btn-primary">詳細</a>
                               </td>
                               
            
                               
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>  
        @endif

 
@endsection