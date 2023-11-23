<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.department.index',['department'=>Department::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.department.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'dept_name' => 'required | max:30',
        ], 
        [
            'dept_name.required' => 'Please give a Department Name',
        ]);

        $department              = new Department();
        $department->dept_name        = $request->dept_name;
        $department->save();
        return to_route('create')->with('notification','Department Added Successfully');
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
        $department = Department::where('id',$id)->first();
        return view('backend.department.edit',['dept' => $department]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'dept_name' => 'required | max:30',
        ], 
        [
            'dept_name.required' => 'Please give a Department Name',
        ]);

        $department              = Department::find($id);
        $department->dept_name        = $request->dept_name;
        $department->save();
        return to_route('index')->with('notification','Department Updated Successfully');
    }

    /**
     * Remove the specified resource from storage. 
     */
    public function destroy(int $id)
    {
        $dept = Department::find($id);
        $dept->delete();
        return to_route('index')->with('notification','Department Deleted Successfully');
    }
}
