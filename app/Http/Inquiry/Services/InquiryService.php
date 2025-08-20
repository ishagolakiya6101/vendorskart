<?php

namespace App\Http\Inquiry\Services;
 use App\Http\Company\Models\Company;
 use App\Http\Material\Models\Material;
use App\Http\Inquiry\Models\Inquiry;

class InquiryService
{
    public function create()
    {
        $materials = Material::pluck('name','id')->toArray();
$companies = Company::pluck('name','id')->toArray();

        return view('inquiries.create' ,compact('materials','companies'));
    }
    public function store($request)
    {
        return Inquiry::create([
            'material' => $request->input('material'),
            'quantity' => $request->input('quantity'),
            'company_id' => $request->input('company_id'),

        ]);
    }
    public function show($id)
    {
        $data = Inquiry::find($id);
        if(empty($data))
            return redirect()->route('inquiries.index')->with('error', 'No record found.');
        return view('inquiries.create', compact('data'));
    }
    public function edit($id)
    {
        $data = Inquiry::find($id);
        if(empty($data))
            return redirect()->route('inquiries.index')->with('error', 'No record found.');
        return view('inquiries.create', compact('data'));
    }
    public function update($request,$data)
    {
        return $data->update([
            'material' => $request->input('material'),
            'quantity' => $request->input('quantity'),
            'company_id' => $request->input('company_id'),

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
