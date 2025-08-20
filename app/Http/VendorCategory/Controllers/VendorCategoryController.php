<?php

namespace App\Http\VendorCategory\Controllers;

use App\DataTables\VendorCategoryDataTable;
use App\Http\Controllers\Controller;
use App\Http\VendorCategory\Services\VendorCategoryService;
use App\Http\VendorCategory\Requests\createVendorCategoryRequest;
use App\Http\VendorCategory\Requests\updateVendorCategoryRequest;
use App\Http\VendorCategory\Models\VendorCategory;
use Exception;
use Illuminate\Support\Facades\DB;

class VendorCategoryController extends Controller
{ 
    private $VendorCategoryService;

    public function __construct(VendorCategoryService $VendorCategoryService){
        $this->VendorCategoryService = $VendorCategoryService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(VendorCategoryDataTable $dataTable)
    {
        return $dataTable->render('vendor_categories.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->VendorCategoryService->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(createVendorCategoryRequest $request)
    {
        try {
            $createRecord = DB::transaction(function () use ($request) {
                $createRecord = $this->VendorCategoryService->store($request);
                return [
                    'createRecord' => $createRecord,
                ];
            });
            if ($createRecord['createRecord']) {
                DB::commit();
                return redirect()->route('vendor_categories.index')->with('success', 'record created successfully');
            }
            DB::rollback();
            return redirect()->route('vendor_categories.index')->with('error', 'can not create record');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('vendor_categories.index')->with('error', 'something_went_wrong');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return $this->VendorCategoryService->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return $this->VendorCategoryService->edit($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updateVendorCategoryRequest $request,$id)
    {
        try {
            $data = VendorCategory::find($id);
            if (!$data) {
                return redirect()->route('vendor_categories.index')->with('error', 'record not found');
            }
            $updateRecord = DB::transaction(function () use ($request, $data) {
                $updateRecord = $this->VendorCategoryService->update($request, $data);
                return [
                    'updateRecord' => $updateRecord,
                ];
            });
            if ($updateRecord['updateRecord']) {
                DB::commit();
                return redirect()->route('vendor_categories.index')->with('success', 'record updated successfully');
            }
            DB::rollback();
            return redirect()->route('vendor_categories.index')->with('error', 'can not update record');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('vendor_categories.index')->with('error', 'something_went_wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $data = VendorCategory::find($id);
            if (!$data) {
                return redirect()->route('vendor_categories.index')->with('error', 'record not found');
            }
            $deleteRecord = DB::transaction(function () use ($data) {
                $deleteRecord = $this->VendorCategoryService->destroy($data);
                return [
                    'deleteRecord' => $deleteRecord,
                ];
            });
            if ($deleteRecord['deleteRecord']) {
                DB::commit();
                return redirect()->route('vendor_categories.index')->with('success', 'record deleted successfully');
            }
            DB::rollback();
            return redirect()->route('vendor_categories.index')->with('error', 'can not delete record');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('vendor_categories.index')->with('error', 'something_went_wrong');
        }
    }
}
