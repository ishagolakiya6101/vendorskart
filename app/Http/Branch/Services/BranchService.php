<?php

namespace App\Http\Branch\Services;

use App\Http\Company\Models\Company;
use App\Models\User;
use App\Http\Branch\Models\Branch;

class BranchService
{
    public function create()
    {
        $users = User::pluck('name', 'id')->toArray();
        $companies = Company::pluck('name', 'id')->toArray();

        return view('branches.create', compact('users', 'companies'));
    }
    public function store($request)
    {
        return Branch::create([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'contact_person' => $request->input('contact_person'),
            'company_id' => $request->input('company_id'),

        ]);
    }
    public function show($id)
    {
        $data = Branch::find($id);
        if (empty($data))
            return redirect()->route('branches.index')->with('error', 'No record found.');
        return view('branches.create', compact('data'));
    }
    public function edit($id)
    {
        $data = Branch::find($id);
        if (empty($data))
            return redirect()->route('branches.index')->with('error', 'No record found.');
        return view('branches.create', compact('data'));
    }
    public function update($request, $data)
    {
        return $data->update([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'contact_person' => $request->input('contact_person'),
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
