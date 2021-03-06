@extends('admin.layouts.app')
@section('content')

    <div class="container col-md-8 col-md-offset-2">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4>全部日誌</h4>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @if ($logs->isEmpty())
                <p> There is no log.</p>
            @else
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>日期</th>
                        <th>姓名</th>
                        <th>完成</th>
                        <th>明日</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($logs as $log)
                        <tr>
                            <td>{!! $log->id !!}</td>
                            <td>{!! $log->date !!}</td>
                            <td><a href="{!! url('/admin/logs/author/'. $log->user->id) !!}">{!! $log->user->name !!}</a></td>
                            <td>{!! $log->done !!}</td>
                            <td>{!! $log->future !!}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>

@endsection
