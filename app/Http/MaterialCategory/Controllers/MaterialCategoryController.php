<?php

namespace App\Http\MaterialCategory\Controllers;

use App\DataTables\MaterialCategoryDataTable;
use App\Http\Controllers\Controller;
use App\Http\MaterialCategory\Services\MaterialCategoryService;
use App\Http\MaterialCategory\Requests\createMaterialCategoryRequest;
use App\Http\MaterialCategory\Requests\updateMaterialCategoryRequest;
use App\Http\MaterialCategory\Models\MaterialCategory;
use Exception;
use Illuminate\Support\Facades\DB;

class MaterialCategoryController extends Controller
{ 
    private $MaterialCategoryService;

    public function __construct(MaterialCategoryService $MaterialCategoryService){
        $this->MaterialCategoryService = $MaterialCategoryService;
        $this->middleware('permission:view-material')->only(['index']);
        $this->middleware('permission:create-material')->only(['create', 'store']);
        $this->middleware('permission:edit-material')->only(['edit', 'update']);
        $this->middleware('permission:delete-material')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(MaterialCategoryDataTable $dataTable)
    {
        return $dataTable->render('material_categories.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->MaterialCategoryService->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(createMaterialCategoryRequest $request)
    {
        try {
            $createRecord = DB::transaction(function () use ($request) {
                $createRecord = $this->MaterialCategoryService->store($request);
                return [
                    'createRecord' => $createRecord,
                ];
            });
            if ($createRecord['createRecord']) {
                DB::commit();
                return redirect()->route('material_categories.index')->with('success', 'record created successfully');
            }
            DB::rollback();
            return redirect()->route('material_categories.index')->with('error', 'can not create record');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('material_categories.index')->with('error', 'something_went_wrong');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return $this->MaterialCategoryService->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return $this->MaterialCategoryService->edit($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updateMaterialCategoryRequest $request,$id)
    {
        try {
            $data = MaterialCategory::find($id);
            if (!$data) {
                return redirect()->route('material_categories.index')->with('error', 'record not found');
            }
            $updateRecord = DB::transaction(function () use ($request, $data) {
                $updateRecord = $this->MaterialCategoryService->update($request, $data);
                return [
                    'updateRecord' => $updateRecord,
                ];
            });
            if ($updateRecord['updateRecord']) {
                DB::commit();
                return redirect()->route('material_categories.index')->with('success', 'record updated successfully');
            }
            DB::rollback();
            return redirect()->route('material_categories.index')->with('error', 'can not update record');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('material_categories.index')->with('error', 'something_went_wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $data = MaterialCategory::find($id);
            if (!$data) {
                return redirect()->route('material_categories.index')->with('error', 'record not found');
            }
            $deleteRecord = DB::transaction(function () use ($data) {
                $deleteRecord = $this->MaterialCategoryService->destroy($data);
                return [
                    'deleteRecord' => $deleteRecord,
                ];
            });
            if ($deleteRecord['deleteRecord']) {
                DB::commit();
                return redirect()->route('material_categories.index')->with('success', 'record deleted successfully');
            }
            DB::rollback();
            return redirect()->route('material_categories.index')->with('error', 'can not delete record');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('material_categories.index')->with('error', 'something_went_wrong');
        }
    }
}
