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
 <form action="{{  url('user_edits/update')}}" method="POST">
        <div class="a">
　     <label class="b">ユーザー一覧</label>
　      <div class="c">
        <button type="submit" class="btn btn-primary">登録</button>
        </div>
        </div>
      
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
                                        <select name="flag[]">
                                        @if ($user->flag ==="管理者")
                                            <option value="管理者"　selected>管理者</option>
                                            <option value="メンバー">メンバー</option>
                                        @else
                                            <option value="管理者">管理者</option>
                                            <option value="メンバー"　selected>メンバー</option>
                                         @endif
                                        </select>
                                <input type="hidden" id="userid" name="id[]" value="{{ $user->id}}">  {{ csrf_field() }}
                                </td>                             
                            </tr>
                             </form>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>  
        @endif
        @endif
    @endsection