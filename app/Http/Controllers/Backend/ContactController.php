<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function viewContact(){
        return view('backend.contact.view',['contact' => Contact::all()]);
    }

    public function destroyMessage(int $id){
        $message = Contact::find($id);
            $message->delete();
            return back()->with('notification','Contact deleted successfully');
    }
}
