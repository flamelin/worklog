@extends('admin.layouts.app')
@section('content')

    <div class="container col-md-8 col-md-offset-2">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4>使用者列表</h4>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @if ($users->isEmpty())
                <p>目前沒有任何使用者。</p>
            @else
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>姓名</th>
                        <th>Email</th>
                        <th>註冊日期</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{!! $user->id !!}</td>
                            <td><a href="{!! url('/admin/logs/author/'. $user->name) !!}">{!! $user->name !!}</a></td>
                            <td>{!! $user->email !!}</td>
                            <td>{!! $user->created_at !!}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>

@endsection
