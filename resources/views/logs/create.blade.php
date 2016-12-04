@extends('layouts.app')

@section('content')

<div class="panel-body">

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>新增工作日誌失敗!</strong>
            <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form action="{{ url('log') }}" method="POST" class="form-horizontal">
        {!! csrf_field() !!}

        <div class="form-group">
            <label for="name" class="col-sm-3 control-label">姓名</label>

            <div class="col-sm-6">
                <input type="text" id="name" name="name" value="{{ Auth::user()->name }}" class="form-control" readonly="readonly">
            </div>
        </div>

        <div class="form-group">
            <label for="date" class="col-sm-3 control-label">日期</label>

            <div class="col-sm-6">
                <input type="date" id="date" name="date" value="{{ !empty(old('date')) ? old('date') : date('Y-m-d') }}" class="form-control" required="required">
            </div>
        </div>

        <div class="form-group">
            <label for="done" class="col-sm-3 control-label">今日完成項目</label>

            <div class="col-sm-6">
                <textarea rows="5" id="done" name="done" class="form-control" required="required">{{ old('done') }}</textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="future" class="col-sm-3 control-label">明日預計項目</label>

            <div class="col-sm-6">
                <textarea rows="5" id="future" name="future" class="form-control" required="required">{{ old('future') }}</textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default center-block">
                    <i class="fa fa-check"></i> 儲存
                </button>
            </div>
        </div>
    </form>
</div>

{!! env('LOG_NOTE') !!}

@endsection
