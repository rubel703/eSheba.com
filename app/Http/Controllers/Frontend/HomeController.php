<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Appoinment;
use App\Models\BanerSection;
use App\Models\Contact;
use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home.index', ['departments'=> Department::all(), 'doctors'=> Doctor::all(),'banners'=>BanerSection::all()]);
    }
    public function about()
    {
        return view('frontend.about.index', ['departments'=> Department::all(), 'doctors'=> Doctor::all()]);
    }
    public function doctor()
    {
        return view('frontend.doctor.index', ['departments'=> Department::all(), 'doctors'=> Doctor::all()]);
    }
    public function news()
    {
        return view('frontend.news.index', ['departments'=> Department::all(), 'doctors'=> Doctor::all()]);
    }
    public function contact()
    {
        return view('frontend.contact.index', ['departments'=> Department::all(), 'doctors'=> Doctor::all()]);
    }

    //Appoinment--------------
    public function store(Request $request)
    {
        $appoinment               = new Appoinment();
        $appoinment->dept_name    = $request->dept_name;
        $appoinment->doctor_name  = $request->doctor_name;
        $appoinment->date         = $request->date;
        $appoinment->time         = $request->time;
        $appoinment->name         = $request->name;
        $appoinment->phone        = $request->phone;
        $appoinment->message      = $request->message;
        $appoinment->save();

        return back()->with('notification', 'Your Appoinment Successfully Submitted, Thank You');
    }

    //contact-------------------
    public function storeContact(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required | max:20',
                'subject' => 'required | max:30',
                'phone' => 'required | numeric',
                'message' => 'required'
            ],
            [
                'name.required' => 'please enter your name',
                'name.max' => 'name must be less than 20 charecters!',
                'subject.required' => 'please enter your subject',
                'subject.max' => 'subject must be less than 30 charecters!',
                'phone.required' => 'please enter your phone number',
                'phone.numeric' => 'please enter the correct phone number',
                'message.required' => 'please enter your message'
            ]
        );

        $contact           = new Contact();
        $contact->name     = $request->name;
        $contact->email    = $request->email;
        $contact->subject  = $request->subject;
        $contact->phone    = $request->phone;
        $contact->message  = $request->message;
        $contact->save();

        return back()->with('notification', 'Your Query Successfully Submitted, Thank You');
    }
}
