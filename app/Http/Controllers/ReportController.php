<?php

namespace App\Http\Controllers;

use App\Models\PurchaseOrder;
use App\Models\SalesOrder;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $purchaseTotal = 0, $salesTotal = 0)
    {
        if (!empty($request->dateStart) && !empty($request->dateEnd)) {
            $dateStart = $request->dateStart;
            $dateEnd = $request->dateEnd;

            $purchaseTotal = PurchaseOrder::whereBetween('created_at', [
                $request->dateStart,
                Carbon::parse($request->dateEnd)->endOfDay(),
            ])->sum('total');

            $salesTotal = SalesOrder::whereBetween('created_at', [
                $request->dateStart,
                Carbon::parse($request->dateEnd)->endOfDay(),
            ])->sum('total');
        }

        $profit = $salesTotal - $purchaseTotal;

        return view('report.index', compact('purchaseTotal', 'salesTotal', 'profit'));
    }
}
