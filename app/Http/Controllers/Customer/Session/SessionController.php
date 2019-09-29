<?php


namespace App\Http\Controllers\Customer\Session;


use App\Http\Controllers\Controller;
use App\Models\Session;

class SessionController extends Controller
{

    public function index()
    {
        return view('customer.session.index', ['sessions' => $this->user()->sessions()->get()]);
    }

    public function destory(Session $session)
    {
        static::hasModelAuthority($session);
        try {
            $session->delete();
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
            ]);
        }
        return response()->json([
            'success' => true,
        ]);
    }

}
