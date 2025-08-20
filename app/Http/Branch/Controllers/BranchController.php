<?php

namespace App\Http\Branch\Controllers;

use App\DataTables\BranchDataTable;
use App\Http\Controllers\Controller;
use App\Http\Branch\Services\BranchService;
use App\Http\Branch\Requests\createBranchRequest;
use App\Http\Branch\Requests\updateBranchRequest;
use App\Http\Branch\Models\Branch;
use Exception;
use Illuminate\Support\Facades\DB;

class BranchController extends Controller
{ 
    private $BranchService;

    public function __construct(BranchService $BranchService){
        $this->BranchService = $BranchService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(BranchDataTable $dataTable)
    {
        return $dataTable->render('branches.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->BranchService->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(createBranchRequest $request)
    {
        try {
            $createRecord = DB::transaction(function () use ($request) {
                $createRecord = $this->BranchService->store($request);
                return [
                    'createRecord' => $createRecord,
                ];
            });
            if ($createRecord['createRecord']) {
                DB::commit();
                return redirect()->route('branches.index')->with('success', 'record created successfully');
            }
            DB::rollback();
            return redirect()->route('branches.index')->with('error', 'can not create record');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('branches.index')->with('error', 'something_went_wrong');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return $this->BranchService->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return $this->BranchService->edit($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updateBranchRequest $request,$id)
    {
        try {
            $data = Branch::find($id);
            if (!$data) {
                return redirect()->route('branches.index')->with('error', 'record not found');
            }
            $updateRecord = DB::transaction(function () use ($request, $data) {
                $updateRecord = $this->BranchService->update($request, $data);
                return [
                    'updateRecord' => $updateRecord,
                ];
            });
            if ($updateRecord['updateRecord']) {
                DB::commit();
                return redirect()->route('branches.index')->with('success', 'record updated successfully');
            }
            DB::rollback();
            return redirect()->route('branches.index')->with('error', 'can not update record');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('branches.index')->with('error', 'something_went_wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $data = Branch::find($id);
            if (!$data) {
                return redirect()->route('branches.index')->with('error', 'record not found');
            }
            $deleteRecord = DB::transaction(function () use ($data) {
                $deleteRecord = $this->BranchService->destroy($data);
                return [
                    'deleteRecord' => $deleteRecord,
                ];
            });
            if ($deleteRecord['deleteRecord']) {
                DB::commit();
                return redirect()->route('branches.index')->with('success', 'record deleted successfully');
            }
            DB::rollback();
            return redirect()->route('branches.index')->with('error', 'can not delete record');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('branches.index')->with('error', 'something_went_wrong');
        }
    }
}
