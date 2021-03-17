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
    
   <form action="{{ url('user_edits')}}" method="GET">
        <div class="a">
　     <label class="b">ユーザー一覧</label>
　      <div class="c">
    　 <button type="submit" class="btn btn-primary" >管理者編集</button>
    　 </div>
    　 　</div>
   </form> 
  @if (count($users) > 0)

        <div class="card-body" style="padding: 0;">
            <div class="card-body"　style="padding: 0;">
                <table class="table table-striped task-table">
                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>名前</th>
                        <th>email</th>
                        <th>役職</th>
                        <th>管理者権限</th>
                        <th>組織設定</th>
                         <th>削除</th>
                    </thead>
                    <!-- テーブル本体 -->
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <!-- 投稿タイトル -->
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
                                <td class="table-text">
　　　　　　　　　　　　　　　　　　<div>{{ $user->flag }}</div>
                                </td> 
                                

                               <td class="table-text">
                                    <form action="{{ url('tree_paths/'.$user->id) }}" method="GET">
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger">
                                                設定
                                            </button>
                                    </form>
                               </td>
                                <td class="table-text">
                                    <form action="{{ url('user_lists/'.$user->id) }}" method="POST">
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
        
    @endsection