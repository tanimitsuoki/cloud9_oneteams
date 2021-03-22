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

@if( Auth::check() )        
 <form action="{{ url('meetings') }}" method="POST" class="form-horizontal">
{{ csrf_field() }}
     <table>
     <tr>
    　　<th>上司</th>
    　　<th>部下</th>
    　　<th>面談実施日</th>
    　　<th>面談場所</th>
    　　<th>面談方法</th>　　
    　　<th>面談時間</th>
    　　<th></th>
    　</tr>
    　<tr>
    　    
    　<td>  
    　　<select　name="ancestor_id">
    　   <option value='' disabled　selected >選択してください</option>
    　    <option value="{{$user->id}}">{{ $user->name }}</option>
    　   @foreach($tree_ancestors as $tree_pat1)
         <option value="{{ $tree_pat1->ancestor_id}}">{{ $tree_pat1->users1->name }}</option>
       　 @endforeach>{{ csrf_field() }}  
       　
    　　</td>
    　
    　  <td>  
    　　<select　name="descendant_id">
    　   <option value='' disabled　selected >選択してください</option>
    　    <option value="{{$user->id}}">{{ $user->name }}</option>
    　    @foreach($tree_descendants as $tree_path)

         <option value="{{ $tree_path->descendant_id}}">{{ $tree_path->users->name }}</option>

       　 @endforeach>{{ csrf_field() }}  
    　　</td>
    　　
    　　<td><input type="date" name="day"></input></td>
    　　<th><input type="text"　style="width:200px;" name="place"></input></th>
    　　　　<th><select name="method">
    　　　　　　　　　　　　    <option value='' disabled　selected >選択してください</option>
                    <option value="real">リアル</option>
                    <option value="online">オンライン</option>
                <option value="others">その他</option>
                </select>
            </th>
    　　<th><input type="text"　style="width:60px;" name="times"></input></th>
    　　<th>分</th>
    
    　</tr>
    </table>
       
    
    
 @foreach($creates as $create)
 <table>
 <tr style="height: 30px;">
　　<th style="width: 100px;"><a href="{{ url('/creates') }}"> 面談項目</a></th>
　　<th>面談詳細</th>
　</tr>
　<tr>
　　<td> {{ $create->item1 }}</td>
　　<td>
    　　 <textarea　 style="width: 1000px;height: 80px;" name="description_item1">
    　　 </textarea>
　　</td>
　</tr>
　<tr>
　　<td>{{ $create->item2 }}</td>
　　<td>
    　　    <textarea style="width: 1000px;height: 80px;" name="description_item2">
    　　 　  </textarea>
　　    </td>
　</tr>
　　<tr>
　　<td>{{ $create->item3 }}</td>
　　<td><textarea　 style="width: 1000px;height: 80px;" name="description_item3"></td>
　　  </textarea>
　</tr>
　 <input type="hidden" id="userid" name="create_id" value="{{ $create->id}}">
</table>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-primary">
                        登録
                    </button>
                </div>
            </div>
</form>
 @endforeach
 @endif
 @endsection