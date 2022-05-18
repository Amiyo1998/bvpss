<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data['contacts'] = Contact::all();
        $data['title']  = __("contact");
        return view('backend.pages.contact.index', $data);
    }
    public function show($id)
    {
        $data['title']     =__("contact/show");
        $data['contact'] = Contact::where('id',$id)->first();
        return view('backend.pages.contact.show', $data);
    }
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contact.index')->with('message', 'Contact deleted succesfull!!');
    }
}
