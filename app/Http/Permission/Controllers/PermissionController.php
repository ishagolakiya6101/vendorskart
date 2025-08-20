<?php

namespace App\Http\Permission\Controllers;

use App\DataTables\PermissionDataTable;
use App\Http\Controllers\Controller;
use App\Http\Permission\Services\PermissionService;
use App\Http\Permission\Requests\createPermissionRequest;
use App\Http\Permission\Requests\updatePermissionRequest;
use App\Http\Permission\Models\Permission;
use Exception;
use Illuminate\Support\Facades\DB;

class PermissionController extends Controller
{ 
    private $PermissionService;

    public function __construct(PermissionService $PermissionService){
        $this->PermissionService = $PermissionService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(PermissionDataTable $dataTable)
    {
        return $dataTable->render('permissions.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->PermissionService->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(createPermissionRequest $request)
    {
        try {
            $createRecord = DB::transaction(function () use ($request) {
                $createRecord = $this->PermissionService->store($request);
                return [
                    'createRecord' => $createRecord,
                ];
            });
            if ($createRecord['createRecord']) {
                DB::commit();
                return redirect()->route('permissions.index')->with('success', 'record created successfully');
            }
            DB::rollback();
            return redirect()->route('permissions.index')->with('error', 'can not create record');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('permissions.index')->with('error', 'something_went_wrong');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return $this->PermissionService->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return $this->PermissionService->edit($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updatePermissionRequest $request,$id)
    {
        try {
            $data = Permission::find($id);
            if (!$data) {
                return redirect()->route('permissions.index')->with('error', 'record not found');
            }
            $updateRecord = DB::transaction(function () use ($request, $data) {
                $updateRecord = $this->PermissionService->update($request, $data);
                return [
                    'updateRecord' => $updateRecord,
                ];
            });
            if ($updateRecord['updateRecord']) {
                DB::commit();
                return redirect()->route('permissions.index')->with('success', 'record updated successfully');
            }
            DB::rollback();
            return redirect()->route('permissions.index')->with('error', 'can not update record');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('permissions.index')->with('error', 'something_went_wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $data = Permission::find($id);
            if (!$data) {
                return redirect()->route('permissions.index')->with('error', 'record not found');
            }
            $deleteRecord = DB::transaction(function () use ($data) {
                $deleteRecord = $this->PermissionService->destroy($data);
                return [
                    'deleteRecord' => $deleteRecord,
                ];
            });
            if ($deleteRecord['deleteRecord']) {
                DB::commit();
                return redirect()->route('permissions.index')->with('success', 'record deleted successfully');
            }
            DB::rollback();
            return redirect()->route('permissions.index')->with('error', 'can not delete record');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('permissions.index')->with('error', 'something_went_wrong');
        }
    }
}
