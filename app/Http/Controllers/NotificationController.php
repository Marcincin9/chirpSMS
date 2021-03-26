<?php
namespace App\Http\Controllers;

use App\Models\UsersNotification;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

class NotificationController extends Controller
{
   /**
 * Send message to a selected users
 */


// public function index()
// {
//   $notifications = Notification::all();
//   return view('notifications.index', ['notifications' => $notifications]);
// }

// public function storeCustomMessage(Request $request)
//    {
//     $notification = new Notification();
        
//     $notification->phone_number = $request->phone_number;
//     $notification->body = $request->body;
//     $notification->save();

//     return redirect()->route('notifications.index');
     
//    }

}
