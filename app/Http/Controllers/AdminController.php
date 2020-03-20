<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Message;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $all_students = Student::all();
        
        return view('add', compact('all_students', $all_students));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'phone_number' => 'bail|required|numeric|digits:11'
        ]);
        $store_student = new Student;
        $phone_number = $request->phone_number;
        $store_student->phone_number = $phone_number;
        $store_student->save();
        return redirect()->back()->with('success', 'Student phone number has been added');
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

    public function send(Request $request)
    {
        
        $request->validate([
            'message' => 'required|min:10|max:255'
        ]);
        
        $new_message  = new Message;
        $new_message->message = $request->get('message');
        $new_message->user_id  = Auth::user()->id;
        
        //$new_message->save();
        // if ($new_message->save();) {
            # do the next tablecode...
            // if that next table is successful then redirect else whatever      }
        
        

        //Messaging REST API
        $message = Message::where('message',$request->get('message'))->select('message')->first();
        //return $message;
        $phone_numbers = Student::all('phone_number');
        
        
        
        

        $username = 'gabrielfemi';
        $password = 'Portedjester_20';
        $messages = array(
        array('to'=>'+2348167345364', 'body'=>'Hello World!')
        );  
        function send_message ( $post_body, $url, $username, $password) {
            $ch = curl_init( );
            $headers = array(
            'Content-Type:application/json',
            'Authorization:Basic '. base64_encode("$username:$password")
            );
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt ( $ch, CURLOPT_URL, $url );
            curl_setopt ( $ch, CURLOPT_POST, 1 );
            curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
            curl_setopt ( $ch, CURLOPT_POSTFIELDS, $post_body );
            // Allow cUrl functions 20 seconds to execute
            curl_setopt ( $ch, CURLOPT_TIMEOUT, 20 );
            // Wait 10 seconds while trying to connect
            curl_setopt ( $ch, CURLOPT_CONNECTTIMEOUT, 10 );
            $output = array();
            $output['server_response'] = curl_exec( $ch );
            $curl_info = curl_getinfo( $ch );
            $output['http_status'] = $curl_info[ 'http_code' ];
            $output['error'] = curl_error($ch);
            curl_close( $ch );
            return $output;
            } 

        $result = send_message( json_encode($messages), 'https://api.bulksms.com/v1/messages?auto-unicode=true&longMessageMaxParts=30', $username, $password );

        if ($result['http_status'] != 201) {
        print "Error sending: " . ($result['error'] ? $result['error'] : "HTTP status ".$result['http_status']."; Response was " .$result['server_response']);
        } else {
        print "Response " . $result['server_response'];
        // Use json_decode($result['server_response']) to work with the response further
        }

        
        



    }
}
