<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ContactInfo;

class ContactInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = ContactInfo::orderBy('id', 'desc')->get();
        return view('backend.pages.contact.manage', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contacts = new ContactInfo();
        $contacts->phone_Number             = $request->phone_Number;
        $contacts->address             = $request->address;
        $contacts->Facebook        = $request->Facebook;
        $contacts->youtube        = $request->youtube;
        $contacts->instagram        = $request->instagram;
        $contacts->email        = $request->email;
        $contacts->save();

        return redirect()->route('manageContact');
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
        $contact = ContactInfo::find($id);
        if ( !is_null($contact) ){
            return view('backend.pages.contact.edit', compact('contact'));
        }
        else{
            return route('manageContact');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactInfo $ContactInfo, $id)
    {
        $category = ContactInfo::find($id);
        $category->phone_Number             = $request->phone_Number;
        $category->address             = $request->address;
        $category->Facebook        = $request->Facebook;
        $category->youtube        = $request->youtube;
        $category->instagram        = $request->instagram;
        $category->email        = $request->email;
        $category->save();

        return redirect()->route('manageContact');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactInfo $ContactInfo,$id)
    {
        $ContactInfo=ContactInfo::find($id);
        if ( !is_null($ContactInfo) ){
            $ContactInfo->delete(); 
        }
        return redirect()->route('manageContact');
    }
}
