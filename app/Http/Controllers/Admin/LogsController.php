<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Log;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('log_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $logs = Log::all();

        return view('admin.logs.index', compact('logs'));
    }

    public function show(Log $log)
    {
        abort_if(Gate::denies('log_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.logs.show', compact('log'));
    }
}
