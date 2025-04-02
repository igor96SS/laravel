<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $data = Contact::all();
        return view('index',['data'=>$data]);
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'name' => 'required|string|min:6',
            'contact' => 'required|size:9|unique:contacts,contact',
            'email' => 'required|email|unique:contacts,email'
        ]);

        // Create a new contact
        $contact = new Contact();
        $contact->name = $request->input('contactname');
        $contact->email = $request->input('contactemail');
        $contact->phone = $request->input('contactphone');
        $contact->save();

        return redirect()->route('index')->with('success', 'Contact added successfully!');
    }

    public function show($id){
        $contact = Contact::findOrFail($id);
        return view('contactDetails', compact('contact'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|min:6',
            'contact' => 'required|size:9|unique:contacts,contact',
            'email' => 'required|email|unique:contacts,email'
        ]);

        $contact = Contact::findOrFail($id); // Get the contact
        $contact->update([
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact
        ]);

        return redirect()->route('index')->with('success', 'Contact updated successfully.');
    }
    
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id); // Find the contact
        $contact->delete(); // Soft delete it
        return redirect()->back()->with('success', 'Contact deleted successfully.');
    }
}
