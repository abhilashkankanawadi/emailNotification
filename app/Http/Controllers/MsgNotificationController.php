<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MsgNotificationController extends Controller
{
    public function msg()
    {
        $to=[9173488832445,918880282865];
        $nexmo = app('Nexmo\Client');
        foreach ($to as $key) {
          $nexmo->message()->send([
            'to' => $key,
            'from' => '918880282865',
            'text' => 'Hi This is Demo message from team DE.'
          ]);
        }
      return 'message Sent Succssfully';
    }
}
