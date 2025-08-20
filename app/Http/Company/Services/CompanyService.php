<?php

namespace App\Http\Company\Services;

use App\Http\Industry\Models\Industry;
use App\Models\User;
use App\Http\Company\Models\Company;

class CompanyService
{
    public function create()
    {
        $users = User::pluck('name', 'id')->toArray();
        $industries = Industry::pluck('name', 'id')->toArray();

        return view('companies.create', compact('users', 'industries'));
    }
    public function store($request)
    {
        return Company::create([
            'name' => $request->input('name'),
            'company_code' => $request->input('company_code'),
            'logo' => $request->input('logo'),
            'address' => $request->input('address'),
            'contact_person' => $request->input('contact_person'),
            'industry_id' => $request->input('industry_id'),

        ]);
    }
    public function show($id)
    {
        $data = Company::find($id);
        if (empty($data))
            return redirect()->route('companies.index')->with('error', 'No record found.');
        return view('companies.create', compact('data'));
    }
    public function edit($id)
    {
        $users = User::pluck('name', 'id')->toArray();
        $industries = Industry::pluck('name', 'id')->toArray();
        $data = Company::find($id);
        if (empty($data))
            return redirect()->route('companies.index')->with('error', 'No record found.');
        return view('companies.create', compact('data','users', 'industries'));
    }
    public function update($request, $data)
    {
        return $data->update([
            'name' => $request->input('name'),
            'company_code' => $request->input('company_code'),
            'logo' => $request->input('logo'),
            'address' => $request->input('address'),
            'contact_person' => $request->input('contact_person'),
            'industry_id' => $request->input('industry_id'),

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
