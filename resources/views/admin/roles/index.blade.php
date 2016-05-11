@extends('admin.layouts.app')
@section('title', '所有角色')
@section('content')

    <div class="container col-md-8 col-md-offset-2">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4>角色列表</h4>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @if ($roles->isEmpty())
                <p> 沒有任何角色。 </p>
            @else
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>名稱</th>
                        <th>顯示名稱</th>
                        <th>說明</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($roles as $role)
                        <tr>
                            <td>{!! $role->id !!}</td>
                            <td>{!! $role->name !!}</td>
                            <td>{!! $role->display_name !!}</td>
                            <td>{!! $role->description !!}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>

@endsection
