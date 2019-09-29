<?php


namespace App\Http\Controllers\Customer;


use App\Http\Controllers\Controller;
use App\Models\Session;

class DashboardController extends Controller
{

    public function index()
    {
        return view('customer.dashboard');
    }

}
