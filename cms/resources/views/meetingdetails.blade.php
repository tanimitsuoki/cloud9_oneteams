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
 <form action="{{ url('meetings') }}" method="POST" class="form-horizontal">
{{ csrf_field() }}
     <table>
     <tr>
    　　<th>上司名</th>
    　　<th>部下名</th>
    　　<th>面談実施日</th>
    　　<th>面談場所</th>
    　　<th>面談方法</th>　　
    　　<th>面談時間</th>
    　　<th></th>
    
    　</tr>
    　<tr>
    　　<td>{{ $meeting->users1->name}}</td>
　　　　<td>{{ $meeting->users->name}}</td>
    　　<td>{{ $meeting->day}}</td>
    　　<th>{{ $meeting->place}}</th>
    　　<th>{{ $meeting->method}}</th>
    　　<th>{{ $meeting->times}}分</th>

    　</tr>
    </table>
    
         <table>
    　　@foreach($meeting->members as $create)
      <tr>
    　　<td>{{ $create->item1}}</td>
    　　<td>{{ $meeting->description_item1}}</td>
    　</tr>　  　
    　<tr>
    　　<td>{{ $create->item2}}</td>
    　　<td>{{ $meeting->description_item2}}</td>
    　</tr>　
    　<tr>　
    　　<td>{{ $create->item3}}</td>
    　　<td>{{ $meeting->description_item3}}</td>
    　</tr>
    </table>
    @endforeach
    @endif
    @endsection
        
    
    
