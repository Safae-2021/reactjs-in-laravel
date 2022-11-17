<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function __invoke()
    {
       $contacts = Contact::all();
       return response()->json($contacts);
    }

    public function __create(Request $req )
    {
        $contact = Contact::create([
            'name' =>$req->name,
            'phone'=>$req->phone,
        ]);
       return response()->json($contact);
    }

    public function __edit($contact_id)
    {
        $contact = Contact::find($contact_id);
        return response()->json($contact);
    }

    public function __update(Request $req,$contact_id)
    {
        $contact = Contact::find($contact_id)->update([
            'name' =>$req->name,
            'phone'=>$req->phone,
        ]);
       return response()->json($contact);
    }

    public function __delete($contact_id)
    {
        $contact = Contact::find($contact_id)->delete();
       return response()->json($contact);
    }

    // public function add()
    // {
    //    return view('add');
    // }

}
