<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
class MailController extends Controller
{
  public function mailing()
  {
    $user = User::all();
    //return $user->toArray();
    foreach ($user as $key => $value) {
      Mail::send('BulkMail',['user'=>$value->name],function($message) use($value)
      {
        $message->to($value->email);
        $message->subject('Test E-Mail');
      });
      //return response()->json(['message'=>'task success']);
    }
    return Redirect('home');
    //$data=['name'=>'Hi. Thanks for joining Us','clickHere'=>'know more about design esthetics'];
    // $fetch['email']=$user->email;
    // Mail::send('BulkMail',['user'=>$user],function($message) use($user)
    // {
    //   $message->to($user->email);
    // });
    // //return response()->json(['message'=>'task success']);
    // return view('home');
  }
}
