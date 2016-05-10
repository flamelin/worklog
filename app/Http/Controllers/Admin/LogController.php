<?php

namespace App\Http\Controllers\Admin;

// use Illuminate\Http\Request;

// use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Log;

class LogController extends Controller
{
    public function index()
    {
        $logs = Log::all();
        return view('admin.logs.index', compact('logs'));
    }

    public function author($id)
    {
        $logs = Log::where('name', $id)->get();
        return view('admin.logs.index', compact('logs'));
    }
}
