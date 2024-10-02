@extends('layouts.admin')
@section('title', '登録済プロフィールの一覧')
<!--  -->
@section('content')
    <div class="container">
        <div class="row">
            <h2>プロフィール一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('admin.profie.add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            
        </div>
        <div class="row">
            <div class="list-profie col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">名前</th>
                                <th width="10%">性別</th>
                                <th width="10%">趣味</th>
                                <th width="50%">自己紹介欄</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $profie)
                                <tr>
                                    <th>{{ $profie->id }}</th>
                                    <td>{{ Str::limit($profie->title, 100) }}</td>
                                    <td>{{ Str::limit($profie->body, 250) }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ route('admin.profie.edit', ['id' => $profie->id]) }}">編集</a>
                                        </div>
                                        <div>
                                            <a href="{{ route('admin.news.delete', ['id' => $profie->id]) }}">削除</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection