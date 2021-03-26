<?php
namespace App\Http\Controllers;

use App\Models\UsersPhoneNumber;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

class NotificationController extends Controller
{
   /**
 * Send message to a selected users
 */
public function sendCustomMessage(Request $request)
{
    $validatedData = $request->validate([
        'users' => 'required|array',
        'body' => 'required|unique:posts|max:140',
    ]);
    $recipients = $validatedData["users"];
    // iterate over the array of recipients and send a twilio request for each
    foreach ($recipients as $recipient) {
        $this->sendMessage($validatedData["body"], $recipient);
    }
    return back()->with(['success' => "Messages on their way!"]);
}

// /**
//  * Sends sms to user using Twilio's programmable sms client
//  * @param String $message Body of sms
//  * @param Number $recipients string or array of phone number of recepient
//  */
private function sendMessage($message, $recipients)
{
    $account_sid = getenv("TWILIO_SID");
    $auth_token = getenv("TWILIO_AUTH_TOKEN");
    $twilio_number = getenv("TWILIO_NUMBER");
    $client = new Client($account_sid, $auth_token);
    $client->messages->create($recipients, 
            ['from' => $twilio_number, 'body' => $message] );
}

}
