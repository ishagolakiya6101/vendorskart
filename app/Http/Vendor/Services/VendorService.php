<?php

namespace App\Http\Vendor\Services;
 use App\Http\VendorCategory\Models\VendorCategory;
use App\Http\Vendor\Models\Vendor;

class VendorService
{
    public function create()
    {
        $vendor_categories = VendorCategory::pluck('name','id')->toArray();

        return view('vendors.create' ,compact('vendor_categories'));
    }
    public function store($request)
    {
        return Vendor::create([
            'name' => $request->input('name'),
            'category_id' => $request->input('category_id'),

        ]);
    }
    public function show($id)
    {
        $data = Vendor::find($id);
        if(empty($data))
            return redirect()->route('vendor_list.index')->with('error', 'No record found.');
        return view('vendors.create', compact('data'));
    }
    public function edit($id)
    {
        $data = Vendor::find($id);
        if(empty($data))
            return redirect()->route('vendor_list.index')->with('error', 'No record found.');
        return view('vendors.create', compact('data'));
    }
    public function update($request,$data)
    {
        return $data->update([
            'name' => $request->input('name'),
            'category_id' => $request->input('category_id'),

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
