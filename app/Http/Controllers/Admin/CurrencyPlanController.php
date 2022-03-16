<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CurrencyPlan;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CurrencyPlanController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('currency_plan_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.currency-plan.index');
    }

    public function create()
    {
        abort_if(Gate::denies('currency_plan_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.currency-plan.create');
    }

    public function edit(CurrencyPlan $currencyPlan)
    {
        abort_if(Gate::denies('currency_plan_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.currency-plan.edit', compact('currencyPlan'));
    }

    public function show(CurrencyPlan $currencyPlan)
    {
        abort_if(Gate::denies('currency_plan_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.currency-plan.show', compact('currencyPlan'));
    }
}
