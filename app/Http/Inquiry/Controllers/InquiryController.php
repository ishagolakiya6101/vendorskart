<?php

namespace App\Http\Inquiry\Controllers;

use App\DataTables\InquiryDataTable;
use App\Http\Controllers\Controller;
use App\Http\Inquiry\Services\InquiryService;
use App\Http\Inquiry\Requests\createInquiryRequest;
use App\Http\Inquiry\Requests\updateInquiryRequest;
use App\Http\Inquiry\Models\Inquiry;
use Exception;
use Illuminate\Support\Facades\DB;

class InquiryController extends Controller
{ 
    private $InquiryService;

    public function __construct(InquiryService $InquiryService){
        $this->InquiryService = $InquiryService;
        // $this->middleware('permission:view-inquiry')->only(['index']);
        // $this->middleware('permission:create-inquiry')->only(['create', 'store']);
        // $this->middleware('permission:edit-inquiry')->only(['edit', 'update']);
        // $this->middleware('permission:delete-inquiry')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(InquiryDataTable $dataTable)
    {
        return $dataTable->render('inquiries.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->InquiryService->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(createInquiryRequest $request)
    {
        try {
            $createRecord = DB::transaction(function () use ($request) {
                $createRecord = $this->InquiryService->store($request);
                return [
                    'createRecord' => $createRecord,
                ];
            });
            if ($createRecord['createRecord']) {
                DB::commit();
                return redirect()->route('inquiries.index')->with('success', 'record created successfully');
            }
            DB::rollback();
            return redirect()->route('inquiries.index')->with('error', 'can not create record');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('inquiries.index')->with('error', 'something_went_wrong');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return $this->InquiryService->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return $this->InquiryService->edit($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updateInquiryRequest $request,$id)
    {
        try {
            $data = Inquiry::find($id);
            if (!$data) {
                return redirect()->route('inquiries.index')->with('error', 'record not found');
            }
            $updateRecord = DB::transaction(function () use ($request, $data) {
                $updateRecord = $this->InquiryService->update($request, $data);
                return [
                    'updateRecord' => $updateRecord,
                ];
            });
            if ($updateRecord['updateRecord']) {
                DB::commit();
                return redirect()->route('inquiries.index')->with('success', 'record updated successfully');
            }
            DB::rollback();
            return redirect()->route('inquiries.index')->with('error', 'can not update record');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('inquiries.index')->with('error', 'something_went_wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $data = Inquiry::find($id);
            if (!$data) {
                return redirect()->route('inquiries.index')->with('error', 'record not found');
            }
            $deleteRecord = DB::transaction(function () use ($data) {
                $deleteRecord = $this->InquiryService->destroy($data);
                return [
                    'deleteRecord' => $deleteRecord,
                ];
            });
            if ($deleteRecord['deleteRecord']) {
                DB::commit();
                return redirect()->route('inquiries.index')->with('success', 'record deleted successfully');
            }
            DB::rollback();
            return redirect()->route('inquiries.index')->with('error', 'can not delete record');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('inquiries.index')->with('error', 'something_went_wrong');
        }
    }
}
