<?php


namespace App\Http\Controllers\Customer\Notification;


use App\Http\Controllers\Controller;

class NotificationController extends Controller
{

    public function index()
    {
        return view('customer.notification.index', ['notifications' => $this->user()->notificationsEloquent()->get()]);
    }

}
