<?php

namespace App\Http\Controllers\Course_Rep\Message;

use App\Http\Controllers\Course_Rep\Course_Rep_Controller;
use Twilio\Rest\Client;
use Illuminate\Http\Request;
use App\Course_Rep\Message\Message;
use Illuminate\Support\Facades\Auth;

class MessageController extends Course_Rep_Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $messages = Message::where('id',Auth::id())->get();
        return view('course_rep.messages.index', compact('messages', $messages));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_students = $this->get_all_students();
        return view('course_rep.messages.send', compact('all_students', $all_students));
    }

    /**
     * Break Store the Message in the database
     *
     * @param  \Illuminate\Http\Request  $request
     * @param string $message
     * @param string $twilio_number
     * @param string $auth_id
     * @param string $auth_token
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required|min:10|max:191'
        ]);
        
        
        // if ($new_message->save();) {
        # do the next tablecode...
        // if that next table is successful then redirect else whatever      }

        $message = $request->only('message');


    // TWILIO REST API
    try {
    // Your Account SID and Auth Token from twilio.com/console
        $account_sid = 'AC45a2dad812bb662dc11a77335d38c14a';
        $auth_token = '535569c8159f51d75d36ab91c92ffaf9';
        // In production, these should be environment variables. E.g.:
        // $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

        // A Twilio number you own with SMS capabilities
        $twilio_number = "+12057934134";
        
        
        $client = new Client($account_sid, $auth_token);
        if($client->messages->create(
            // Where to send a text message (your cell phone?)
            
        '+2348126950044',
            array(
                'from' => $twilio_number,
                'body' => $message.'. Sent by '. Auth::user()->name
            )
        )){
            // Set message status to 1 if it is sent then redirect back to admin page

            Message::create([
                'message' => $data['message'],
                'message_status' => 1,
                'user_id' => Auth::id(),
            ]);

            return back()->with('success','Message successfully sent');
        }
            
            
        
        
    }catch (\Exception $e) {
        
        // will return user to previous screen with error message and input
        
        return back()->withError('Failed to send. Kindly check your connection and try again.')->withInput();
    }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
