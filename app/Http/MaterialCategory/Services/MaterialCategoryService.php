<?php

namespace App\Http\MaterialCategory\Services;
use App\Http\MaterialCategory\Models\MaterialCategory;

class MaterialCategoryService
{
    public function create()
    {
        
        return view('material_categories.create');
    }
    public function store($request)
    {
        return MaterialCategory::create([
            'name' => $request->input('name'),

        ]);
    }
    public function show($id)
    {
        $data = MaterialCategory::find($id);
        if(empty($data))
            return redirect()->route('material_categories.index')->with('error', 'No record found.');
        return view('material_categories.create', compact('data'));
    }
    public function edit($id)
    {
        $data = MaterialCategory::find($id);
        if(empty($data))
            return redirect()->route('material_categories.index')->with('error', 'No record found.');
        return view('material_categories.create', compact('data'));
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
