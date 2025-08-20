<?php

namespace App\Http\Industry\Controllers;

use App\DataTables\IndustryDataTable;
use App\Http\Controllers\Controller;
use App\Http\Industry\Services\IndustryService;
use App\Http\Industry\Requests\createIndustryRequest;
use App\Http\Industry\Requests\updateIndustryRequest;
use App\Http\Industry\Models\Industry;
use Exception;
use Illuminate\Support\Facades\DB;

class IndustryController extends Controller
{ 
    private $IndustryService;

    public function __construct(IndustryService $IndustryService){
        $this->IndustryService = $IndustryService;
        $this->middleware('permission:view-industry')->only(['index']);
        $this->middleware('permission:create-industry')->only(['create', 'store']);
        $this->middleware('permission:edit-industry')->only(['edit', 'update']);
        $this->middleware('permission:delete-industry')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(IndustryDataTable $dataTable)
    {
        return $dataTable->render('industries.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->IndustryService->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(createIndustryRequest $request)
    {
        try {
            $createRecord = DB::transaction(function () use ($request) {
                $createRecord = $this->IndustryService->store($request);
                return [
                    'createRecord' => $createRecord,
                ];
            });
            if ($createRecord['createRecord']) {
                DB::commit();
                return redirect()->route('industries.index')->with('success', 'record created successfully');
            }
            DB::rollback();
            return redirect()->route('industries.index')->with('error', 'can not create record');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('industries.index')->with('error', 'something_went_wrong');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return $this->IndustryService->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return $this->IndustryService->edit($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updateIndustryRequest $request,$id)
    {
        try {
            $data = Industry::find($id);
            if (!$data) {
                return redirect()->route('industries.index')->with('error', 'record not found');
            }
            $updateRecord = DB::transaction(function () use ($request, $data) {
                $updateRecord = $this->IndustryService->update($request, $data);
                return [
                    'updateRecord' => $updateRecord,
                ];
            });
            if ($updateRecord['updateRecord']) {
                DB::commit();
                return redirect()->route('industries.index')->with('success', 'record updated successfully');
            }
            DB::rollback();
            return redirect()->route('industries.index')->with('error', 'can not update record');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('industries.index')->with('error', 'something_went_wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $data = Industry::find($id);
            if (!$data) {
                return redirect()->route('industries.index')->with('error', 'record not found');
            }
            $deleteRecord = DB::transaction(function () use ($data) {
                $deleteRecord = $this->IndustryService->destroy($data);
                return [
                    'deleteRecord' => $deleteRecord,
                ];
            });
            if ($deleteRecord['deleteRecord']) {
                DB::commit();
                return redirect()->route('industries.index')->with('success', 'record deleted successfully');
            }
            DB::rollback();
            return redirect()->route('industries.index')->with('error', 'can not delete record');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('industries.index')->with('error', 'something_went_wrong');
        }
    }
}
