<?php

namespace App\Http\Vendor\Controllers;

use App\DataTables\VendorDataTable;
use App\Http\Controllers\Controller;
use App\Http\Vendor\Services\VendorService;
use App\Http\Vendor\Requests\createVendorRequest;
use App\Http\Vendor\Requests\updateVendorRequest;
use App\Http\Vendor\Models\Vendor;
use Exception;
use Illuminate\Support\Facades\DB;

class VendorController extends Controller
{ 
    private $VendorService;

    public function __construct(VendorService $VendorService){
        $this->VendorService = $VendorService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(VendorDataTable $dataTable)
    {
        return $dataTable->render('vendors.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->VendorService->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(createVendorRequest $request)
    {
        try {
            $createRecord = DB::transaction(function () use ($request) {
                $createRecord = $this->VendorService->store($request);
                return [
                    'createRecord' => $createRecord,
                ];
            });
            if ($createRecord['createRecord']) {
                DB::commit();
                return redirect()->route('vendor_list.index')->with('success', 'record created successfully');
            }
            DB::rollback();
            return redirect()->route('vendor_list.index')->with('error', 'can not create record');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('vendor_list.index')->with('error', 'something_went_wrong');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return $this->VendorService->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return $this->VendorService->edit($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updateVendorRequest $request,$id)
    {
        try {
            $data = Vendor::find($id);
            if (!$data) {
                return redirect()->route('vendor_list.index')->with('error', 'record not found');
            }
            $updateRecord = DB::transaction(function () use ($request, $data) {
                $updateRecord = $this->VendorService->update($request, $data);
                return [
                    'updateRecord' => $updateRecord,
                ];
            });
            if ($updateRecord['updateRecord']) {
                DB::commit();
                return redirect()->route('vendor_list.index')->with('success', 'record updated successfully');
            }
            DB::rollback();
            return redirect()->route('vendor_list.index')->with('error', 'can not update record');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('vendor_list.index')->with('error', 'something_went_wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $data = Vendor::find($id);
            if (!$data) {
                return redirect()->route('vendor_list.index')->with('error', 'record not found');
            }
            $deleteRecord = DB::transaction(function () use ($data) {
                $deleteRecord = $this->VendorService->destroy($data);
                return [
                    'deleteRecord' => $deleteRecord,
                ];
            });
            if ($deleteRecord['deleteRecord']) {
                DB::commit();
                return redirect()->route('vendor_list.index')->with('success', 'record deleted successfully');
            }
            DB::rollback();
            return redirect()->route('vendor_list.index')->with('error', 'can not delete record');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('vendor_list.index')->with('error', 'something_went_wrong');
        }
    }
}
