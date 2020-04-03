<?php

namespace App\Http\Controllers\Course_Rep\Message;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course_Rep\Message\PersonalMessage;
use Illuminate\Support\Facades\Auth;

class PersonalMessageController extends Controller
{
    /**
     * Show your personal messages.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personal_messages = PersonalMessage::where('sent_by',Auth::user()->email)->get();
        return view('course_rep.messages.personal_message.index', compact('personal_messages', $personal_messages));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('course_rep.messages.personal_message.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        PersonalMessage::create([
            'message' => $request->message,
            'sent_by' => Auth::user()->email,
        ]);

        return redirect()->route('personal_message')->with('success', 'Sent successfully');
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
