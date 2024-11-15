<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    // Index method to display all contacts
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contactus.contact', compact('contacts'));
    }


    // frontend
    public function contactFront()
    {
        return view('contact');
    }

    // Show method to display a specific contact
    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.contactus.show', compact('contact'));
    }

    // Show a form to create a new contact
    public function create()
    {
        return view('contacts.create');
    }

    // Store method to store the newly created contact
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
            'subscribe' => 'boolean',
        ]);

        Contact::create($request->all());

        return redirect('/')
            ->with('success', 'Contact message sent successfully.');
    }

    // Show a form to edit the contact
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.contactus.edit', compact('contact'));
    }

    // Update method to update the contact
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
            'subscribe' => 'boolean',
        ]);

        $contact = Contact::findOrFail($id);
        $contact->update($request->all());

        return redirect()->route('contacts.index')
            ->with('success', 'Contact updated successfully');
    }

    // Delete method to delete the contact
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('contacts.index')
            ->with('success', 'Contact deleted successfully');
    }
}
