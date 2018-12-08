<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Contact;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = DB::table('contacts')->orderBy('created_at', 'desc')->paginate(20);
        return view('admin.contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::check()) {
            $contact = Contact::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'body' => $request->input('body'),
            ]);
            if ($contact){
                return redirect()->back()
                    ->with('success', 'Contact created successfully');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        $contact = Contact::where('id',$contact->id)->first();
        return view('admin.contacts.show', ['contact' => $contact]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        $contact = Contact::find($contact->id);
        return view('admin.contacts.edit', ['contact'=>$contact]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $ContactUpdate = Contact::where('id', $contact->id)
            ->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'body' => $request->input('body'),

            ]);
        if ($ContactUpdate)
        {
            return redirect()->back()
                ->with('success', 'Contact updated Successfully');
        }
        return back()->withInput()->with('errors', 'The Problem could not be updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $findContact = Contact::find($id);
        $findContact->delete();
        return redirect()->back()->with('success', 'The Contact Deleted Successfully');
    }
}
