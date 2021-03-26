<?php
namespace App\Http\Controllers;

use App\Models\UsersPhoneNumber;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

class HomeController extends Controller
{
    public function show()
{
    $users = UsersPhoneNumber::all(); //query db with model
    return view('welcome', compact("users")); //return view with data
}


// /**
//  * Store a new user phone number.
//  *
//  * @param  Request  $request
//  * @return Response
//  **/
public function storePhoneNumber(Request $request)
{
    //run validation on data sent in
    $validatedData = $request->validate([
        'phone_number' => 'required|unique:users_phone_number|numeric|digits:11'
        
    ]);
    $user_phone_number_model = new UsersPhoneNumber($request->all());
    $user_phone_number_model->save();
    $this->sendMessage('User registration successful!!', $request->phone_number);
    return back()->with(['success'=>"{$request->phone_number} registered"]);
}


}
