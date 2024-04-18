<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
    * Write code on method
    *
    * @return response()
    */
    public function index() {
        return view ('/landing/pages/contact');
    }

    /**
    * Write code on method
    *
    * @return response()
    */

    public function store(Request $request)
{
    $request->validate([
        'first' => 'required',
        'last' => 'required',
        'email' => 'required|email',
        'department' => 'required',
        'message' => 'required',
    ]);

    // Simpan data ke dalam tabel 'contacts'
    $contact = new Contact();
    $contact->first = $request->first;
    $contact->last = $request->last;
    $contact->email = $request->email;
    $contact->department = $request->department;
    $contact->message = $request->message;
    $contact->save();

    // Jika Anda ingin mengirim email notifikasi, Anda dapat melakukannya di sini

    return redirect()->back()->with('success', 'Message Successfully Sent');
}
    
}
