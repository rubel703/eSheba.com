<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Appoinment;
use App\Models\Contact;
use App\Models\Department;
use App\Models\Doctor;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.dashboard.index', [
            'appoinments' => Appoinment::all(),
            'departments' => Department::all(),
            'doctors'     => Doctor::all(),
            'contacts'     => Contact::all(),
        ]);
    }
}
