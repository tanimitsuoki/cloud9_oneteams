<!-- resources/views/posts.blade.php -->
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

    <!-- Bootstrapの定形コード… -->
    <div class="card-body">
        <div class="card-title">
            面談フォーム
        </div>
        <!-- バリデーションエラーの表示に使用-->
            @include('common.errors')
        <!-- バリデーションエラーの表示に使用-->
        <!-- 投稿フォーム -->
        <form action="{{ url('creates') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            
            <!-- 投稿のタイトル -->
            <dl class="form-group">
              <dt>
                面談フォーム1
             </dt>
                <dd>
                    <input type="text" name="item1">
                </dd>
   
            </dl>
             <dl class="form-group">
              <dt>
                面談フォーム2
             </dt>
                <dd>
                    <input type="text" name="item2">
                </dd>
            </dl>
              <dl class="form-group">
              <dt>
                面談フォーム3
             </dt>
                <dd>
                    <input type="text" name="item3">
                </dd>
            </dl>         
            
            <!--　登録ボタン -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-primary">
                        登録
                    </button>
                </div>
            </div>
        </form>
    </div>
    <!-- 全ての投稿リスト -->
    

@endsection