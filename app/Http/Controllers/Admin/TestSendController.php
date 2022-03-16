<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TestSend;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TestSendController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('test_send_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.test-send.index');
    }

    public function create()
    {
        abort_if(Gate::denies('test_send_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.test-send.create');
    }

    public function edit(TestSend $testSend)
    {
        abort_if(Gate::denies('test_send_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.test-send.edit', compact('testSend'));
    }

    public function show(TestSend $testSend)
    {
        abort_if(Gate::denies('test_send_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $testSend->load('colaborator', 'test');

        return view('admin.test-send.show', compact('testSend'));
    }
}
