<?php

namespace App\Http\Controllers\Notifications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SalesOrderController extends Controller
{
    public function getSalesPaymentDues()
    {
        return view('notifications.sales_payment_due');
    }
}
