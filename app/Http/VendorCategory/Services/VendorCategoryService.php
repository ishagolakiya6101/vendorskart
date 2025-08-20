<?php

namespace App\Http\VendorCategory\Services;
use App\Http\VendorCategory\Models\VendorCategory;

class VendorCategoryService
{
    public function create()
    {
        
        return view('vendor_categories.create');
    }
    public function store($request)
    {
        return VendorCategory::create([
            'name' => $request->input('name'),

        ]);
    }
    public function show($id)
    {
        $data = VendorCategory::find($id);
        if(empty($data))
            return redirect()->route('vendor_categories.index')->with('error', 'No record found.');
        return view('vendor_categories.create', compact('data'));
    }
    public function edit($id)
    {
        $data = VendorCategory::find($id);
        if(empty($data))
            return redirect()->route('vendor_categories.index')->with('error', 'No record found.');
        return view('vendor_categories.create', compact('data'));
    }
    public function update($request,$data)
    {
        return $data->update([
            'name' => $request->input('name'),

        ]);
    }
    public function destroy($data)
    {
        try {
            return $data->delete();
        } catch (\Exception $e) {
            return false;
        }
    }
}
