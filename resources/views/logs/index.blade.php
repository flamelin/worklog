@extends('layouts.app')
@section('content')

    <div class="container col-md-8 col-md-offset-2">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4>歷史日誌</h4>
            </div>
            @if ($logs->isEmpty())
                <p> There is no log.</p>
            @else
                <table class="table">
                    <thead>
                    <tr>
                        <th>日期</th>
                        <th>完成</th>
                        <th>明日</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($logs as $log)
                        <tr>
                            <td>{{ $log->date }}</td>
                            <td>{!! nl2br($log->done) !!}</td>
                            <td>{!! nl2br($log->future) !!}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                    {{ $logs->links() }}
                </div>
            @endif
        </div>
    </div>

@endsection
