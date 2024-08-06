<?php

namespace App\Http\Controllers;

use App\Models\message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function request(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $data=new message();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->subject=$request->subject;
        $data->message=$request->message;
        $data->save();
        return redirect()->to('/contact#contactForm')->with('success_message_message', 'Your message has been sent. Thank you!');
        // return redirect()->back()->with('success_message_message', 'Your message has been sent. Thank you!');
    }

   // for adim panel message CRUD
   function getMessages(){
    $messages = message::get()->all();
    return view('messages.index', compact('messages'));
    }
function showMessageForm(){
    return view('messages.form');
}
function editMessage($id){
    $data['alldata']=message::find($id);
    return view('messages.edit_form',$data);
}
function addMessage(Request $request){
    $data = new message();
    $data->name = $request->name;
    $data->email = $request->email;
    $data->subject = $request->subject;
    $data->message = $request->message;
    $data->save();
    return redirect()->route('getMessages');
}
public function updateMessage(Request $request)
{
    $id =$request->id;
    $data=message::find($id);
    $data->name = $request->name;
    $data->email = $request->email;
    $data->subject = $request->subject;
    $data->message = $request->message;
    $data->save();
    return redirect()->route('getMessages');

}
public function deleteMessage($id)
{
    $data =message::find($id);
    $data->delete();
    return redirect()->route('getMessages');
}
}
