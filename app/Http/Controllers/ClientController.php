<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Carbon\Carbon;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClientController extends Controller
{
    /**
     * @return Factory|View
     */
    public function getIndex()
    {
        // set default date range
        $from = Carbon::now()->subYears(10)->toDateString();
        $to = Carbon::now()->toDateString();

        $clients = Client::with(['payments' => function ($paymentQuery) use($from, $to) {
            $paymentQuery->whereBetween('created_at', [$from, $to])->get();;
        }])->get();

        return view('client.index', compact('clients', 'from', 'to'));
    }

    /**
     * @param Request $request
     * @return Factory|View
     */
    public function postIndex(Request $request)
    {
        $from = $request->get('from');
        $to = $request->get('to');

        $clients = Client::with(['payments' => function ($paymentQuery) use($from, $to) {
            $paymentQuery->whereBetween('created_at', [$from, $to])->get();;
        }])->get();

        return view('client.index', compact('clients', 'from', 'to'));
    }
}
