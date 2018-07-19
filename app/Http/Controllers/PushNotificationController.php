<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PushNotification;
use Sly\NotificationPusher\Adapter\Gcm;

class PushNotificationController extends Controller
{
    public function push()
    {
      $deviceToken ='865405035306773';
      PushNotification::app('AppAndroid')
                ->to($deviceToken)
                ->send('Hello World, i`m a push message');
    }
}
