<?php

namespace App\Http\Controllers\Admin;

// use Illuminate\Http\Request;

// use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Log;

class LogsController extends Controller
{
    public function index()
    {
        $logs = Log::orderBy('id', 'desc')->get();
        return view('admin.logs.index', compact('logs'));
    }

    public function author($id)
    {
        $logs = Log::whereUserId($id)->get();
        return view('admin.logs.index', compact('logs'));
    }
}
