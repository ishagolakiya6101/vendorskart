<?php

namespace App\Http\Material\Services;

use App\Http\MaterialCategory\Models\MaterialCategory;
use App\Http\Material\Models\Material;

class MaterialService
{
    public function create()
    {
        $material_categories = MaterialCategory::pluck('name', 'id')->toArray();

        return view('materials.create', compact('material_categories'));
    }
    public function store($request)
    {
        return Material::create([
            'name' => $request->input('name'),
            'category_id' => $request->input('category_id'),

        ]);
    }
    public function show($id)
    {
        $data = Material::find($id);
        if (empty($data))
            return redirect()->route('materials.index')->with('error', 'No record found.');
        return view('materials.create', compact('data'));
    }
    public function edit($id)
    {
        $data = Material::find($id);
        if (empty($data))
            return redirect()->route('materials.index')->with('error', 'No record found.');
        return view('materials.create', compact('data'));
    }
    public function update($request, $data)
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
