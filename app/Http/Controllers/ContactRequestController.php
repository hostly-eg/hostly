<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactRequest;
class ContactRequestController extends Controller
{
    public function index()
    {
        $contact_requests = ContactRequest::all();
        return view('admin.contact_requests.index', compact('contact_requests'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $contact_request = new ContactRequest();
        $contact_request->name = $request->name;
        $contact_request->email = $request->email;
        $contact_request->phone = $request->phone;
        $contact_request->subject = $request->subject;
        $contact_request->message = $request->message;
        $contact_request->save();
        return redirect()->back()->with('success', 'Contact request sent successfully');
    }
    public function read($id)
    {
        $contact_request = ContactRequest::find($id);
        $contact_request->is_read = true;
        $contact_request->save();
        return redirect()->back()->with('success', 'Contact request read successfully');
    }
    public function destroy($id)
    {
        $contact_request = ContactRequest::find($id);
        $contact_request->delete();
        return redirect()->back()->with('success', 'Contact request deleted successfully');
    }
}
