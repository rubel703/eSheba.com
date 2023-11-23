<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Appoinment;
use Illuminate\Http\Request;

class AppoinmentController extends Controller
{
    public function viewAppoinment(){
        return view('backend.appoinment.view',['appoinment' => Appoinment::all()]);
    }

    public function destroyMessage(int $id){
        $msg = Appoinment::find($id);
            $msg->delete();
            return back()->with('notification','Appoinment deleted successfully');
    }
}
