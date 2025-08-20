<?php

namespace App\Http\Company\Controllers;

use App\DataTables\CompanyDataTable;
use App\Http\Controllers\Controller;
use App\Http\Company\Services\CompanyService;
use App\Http\Company\Requests\createCompanyRequest;
use App\Http\Company\Requests\updateCompanyRequest;
use App\Http\Company\Models\Company;
use Exception;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{ 
    private $CompanyService;

    public function __construct(CompanyService $CompanyService){
        $this->CompanyService = $CompanyService;
        $this->middleware('permission:view-company')->only(['index']);
        $this->middleware('permission:create-company')->only(['create', 'store']);
        $this->middleware('permission:edit-company')->only(['edit', 'update']);
        $this->middleware('permission:delete-company')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(CompanyDataTable $dataTable)
    {
        return $dataTable->render('companies.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->CompanyService->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(createCompanyRequest $request)
    {
        try {
            $createRecord = DB::transaction(function () use ($request) {
                $createRecord = $this->CompanyService->store($request);
                return [
                    'createRecord' => $createRecord,
                ];
            });
            if ($createRecord['createRecord']) {
                DB::commit();
                return redirect()->route('companies.index')->with('success', 'record created successfully');
            }
            DB::rollback();
            return redirect()->route('companies.index')->with('error', 'can not create record');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('companies.index')->with('error', 'something_went_wrong');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return $this->CompanyService->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return $this->CompanyService->edit($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updateCompanyRequest $request,$id)
    {
        try {
            $data = Company::find($id);
            if (!$data) {
                return redirect()->route('companies.index')->with('error', 'record not found');
            }
            $updateRecord = DB::transaction(function () use ($request, $data) {
                $updateRecord = $this->CompanyService->update($request, $data);
                return [
                    'updateRecord' => $updateRecord,
                ];
            });
            if ($updateRecord['updateRecord']) {
                DB::commit();
                return redirect()->route('companies.index')->with('success', 'record updated successfully');
            }
            DB::rollback();
            return redirect()->route('companies.index')->with('error', 'can not update record');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('companies.index')->with('error', 'something_went_wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $data = Company::find($id);
            if (!$data) {
                return redirect()->route('companies.index')->with('error', 'record not found');
            }
            $deleteRecord = DB::transaction(function () use ($data) {
                $deleteRecord = $this->CompanyService->destroy($data);
                return [
                    'deleteRecord' => $deleteRecord,
                ];
            });
            if ($deleteRecord['deleteRecord']) {
                DB::commit();
                return redirect()->route('companies.index')->with('success', 'record deleted successfully');
            }
            DB::rollback();
            return redirect()->route('companies.index')->with('error', 'can not delete record');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('companies.index')->with('error', 'something_went_wrong');
        }
    }
}
