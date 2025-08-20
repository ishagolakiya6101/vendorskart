<?php

namespace App\Http\Industry\Services;

use App\Http\Industry\Models\Industry;

class IndustryService
{
    public function create()
    {

        return view('industries.create');
    }
    public function store($request)
    {
        return Industry::create([
            'name' => $request->input('name'),

        ]);
    }
    public function show($id)
    {
        $data = Industry::find($id);
        if (empty($data))
            return redirect()->route('industries.index')->with('error', 'No record found.');
        return view('industries.create', compact('data'));
    }
    public function edit($id)
    {
        $data = Industry::find($id);
        if (empty($data))
            return redirect()->route('industries.index')->with('error', 'No record found.');
        return view('industries.create', compact('data'));
    }
    public function update($request, $data)
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
