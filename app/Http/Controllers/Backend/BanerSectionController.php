<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BanerSection;
use Illuminate\Http\Request;

class BanerSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.baner section.index',['banners'=>BanerSection::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.baner section.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        BanerSection::addBanner($request);
        return to_route('banerSection.create')->with('notification','New Banner Added Successfully!');
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
    public function edit(string $id)
    {
        $banner = BanerSection::where('id',$id)->first();
        return view('backend.baner section.edit',['banners' => $banner]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BanerSection $banerSection)
    {
        BanerSection::updateBanner($request, $banerSection);
        return to_route('banerSection.index')->with('notification','Banner Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $banner = BanerSection::find($id);
        if ($banner->image) {
            if (file_exists($banner->image)) {
                unlink($banner->image);
            }
        }
        $banner->delete();
        return to_route('banerSection.index')->with('notification','Banner Deleted Successfully!');
    }
}
