<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayrollController extends Controller
{
    //

    public function payrollDetails()
    {
        return view('dashboard.payroll.payroll_details');
    }
}
