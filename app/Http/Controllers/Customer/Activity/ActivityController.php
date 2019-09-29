<?php


namespace App\Http\Controllers\Customer\Activity;


use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ActivityController extends Controller
{

    public function index()
    {
        return view('customer.activity.index', ['activities' => $this->user()->activities()->get()]);
    }

    public function details(ActivityLog $activityLog)
    {
        static::hasModelAuthority($activityLog);
        static::validateAjax();
        
        return response()->json([
            'success' => true,
            'payload' => view('customer.activity.modal_details', compact('activityLog'))->render(),
        ]);
    }

}
