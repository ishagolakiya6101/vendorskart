<?php

namespace App\Http\Material\Controllers;

use App\DataTables\MaterialDataTable;
use App\Http\Controllers\Controller;
use App\Http\Material\Services\MaterialService;
use App\Http\Material\Requests\createMaterialRequest;
use App\Http\Material\Requests\updateMaterialRequest;
use App\Http\Material\Models\Material;
use Exception;
use Illuminate\Support\Facades\DB;

class MaterialController extends Controller
{ 
    private $MaterialService;

    public function __construct(MaterialService $MaterialService){
        $this->MaterialService = $MaterialService;
        $this->middleware('permission:view-material')->only(['index']);
        $this->middleware('permission:create-material')->only(['create', 'store']);
        $this->middleware('permission:edit-material')->only(['edit', 'update']);
        $this->middleware('permission:delete-material')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(MaterialDataTable $dataTable)
    {
        return $dataTable->render('materials.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->MaterialService->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(createMaterialRequest $request)
    {
        try {
            $createRecord = DB::transaction(function () use ($request) {
                $createRecord = $this->MaterialService->store($request);
                return [
                    'createRecord' => $createRecord,
                ];
            });
            if ($createRecord['createRecord']) {
                DB::commit();
                return redirect()->route('materials.index')->with('success', 'record created successfully');
            }
            DB::rollback();
            return redirect()->route('materials.index')->with('error', 'can not create record');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('materials.index')->with('error', 'something_went_wrong');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return $this->MaterialService->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return $this->MaterialService->edit($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updateMaterialRequest $request,$id)
    {
        try {
            $data = Material::find($id);
            if (!$data) {
                return redirect()->route('materials.index')->with('error', 'record not found');
            }
            $updateRecord = DB::transaction(function () use ($request, $data) {
                $updateRecord = $this->MaterialService->update($request, $data);
                return [
                    'updateRecord' => $updateRecord,
                ];
            });
            if ($updateRecord['updateRecord']) {
                DB::commit();
                return redirect()->route('materials.index')->with('success', 'record updated successfully');
            }
            DB::rollback();
            return redirect()->route('materials.index')->with('error', 'can not update record');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('materials.index')->with('error', 'something_went_wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $data = Material::find($id);
            if (!$data) {
                return redirect()->route('materials.index')->with('error', 'record not found');
            }
            $deleteRecord = DB::transaction(function () use ($data) {
                $deleteRecord = $this->MaterialService->destroy($data);
                return [
                    'deleteRecord' => $deleteRecord,
                ];
            });
            if ($deleteRecord['deleteRecord']) {
                DB::commit();
                return redirect()->route('materials.index')->with('success', 'record deleted successfully');
            }
            DB::rollback();
            return redirect()->route('materials.index')->with('error', 'can not delete record');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('materials.index')->with('error', 'something_went_wrong');
        }
    }
}
