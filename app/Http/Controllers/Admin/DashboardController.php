<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function index()
    {
//        $authenticatable = auth()->user();
//        return dd($authenticatable->roles);
//        foreach (json_encode($authenticatable->roles) as $role) { if ($role == 'ADMIN') return true;} return false;
//        return dd($authenticatable->hasRole('ADMIN'));
        return view('admin.dashboard');
    }

}
