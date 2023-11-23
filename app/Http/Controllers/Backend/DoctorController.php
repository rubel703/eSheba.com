<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.doctor.index', ['doctors' => Doctor::all(), 'department'=>Department::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.doctor.create', ['department' => Department::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        


        $doctors              = new Doctor();
        $doctors->department_id = $request->department_id;
        $doctors->name        = $request->name;
        $doctors->designition = $request->designition;
        $doctors->description = $request->description;
        $doctors->phone       = $request->phone;
        $image                = $request->image;
        if ($image) {
            $imageName  = 'doctor-img' . time() . rand() . '.' . $image->extension();
            $directory = 'upload/doctors-img/';
            $image->move($directory, $imageName);
            $doctors->image = $directory . $imageName;
        }
        $doctors->save();
        return to_route('createdoctor')->with('notification', 'New Doctor  Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $doctor = Doctor::where('id', $id)->first();
        return view('backend.doctor.edit', ['doctor' => $doctor, 'department' => Department::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $doctors              = Doctor::find($id);
        $doctors->department_id = $request->department_id;
        $doctors->name        = $request->name;
        $doctors->designition = $request->designition;
        $doctors->description = $request->description;
        $doctors->phone       = $request->phone;
        $image                = $request->image;

        if ($image) {
            if (file_exists($doctors->image)) {
                unlink($doctors->image);
            }
            $imageName  = 'doctor-img' . time() . rand() . '.' . $image->extension();
            $directory = 'upload/doctors-img/';
            $image->move($directory, $imageName);
            $doctors->image = $directory . $imageName;
        }
        $doctors->save();
        return to_route('indexdoctor')->with('notification', 'Doctor Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $doctor = Doctor::find($id);
        if ($doctor->image) {
            if (file_exists($doctor->image)) {
                unlink($doctor->image);
            }
        }
        $doctor->delete();
        return to_route('indexdoctor')->with('notification', 'Doctor Deleted Successfully');
    }
}
