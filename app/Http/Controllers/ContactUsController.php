<?php

namespace App\Http\Controllers;

use App\DataTables\ContactusDataTables;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ContactusDataTables $dataTable)
    {
        return $dataTable->render('admin.contacts.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $message = Contact::findorfail($id);
        return view('admin.contacts.show', compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $amenity = Contact::find($id);
        $amenity->delete();
        return response()->json(['status' => 'success', 'message' =>  __('dashboard.deleted_success')]);
    }


}
