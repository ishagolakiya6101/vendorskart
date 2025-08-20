@extends('layout.app')
@section('title')
    <title>VendorCategory | KeyTech</title>
@endsection
@section('content')
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12 d-flex justify-content-between">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Vendor Categories</h5>
                        </div>
                        <a class="btn btn-primary mb-2 VendorCategory_btn" href="{{route('vendor_categories.create')}}">Add VendorCategory</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-block p-3">
                        {{$dataTable->table()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
{{$dataTable->scripts()}}
<script>
    function deleteVendorCategory(id)
    {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
        
                    type:"POST",
        
                        url: "{{route('vendor_categories.destroy', ['vendor_category' => ':id'])}}".replace(':id',id) ,
        
                        data:{"id":id, "_token": "{{ csrf_token() }}" },
        
                        success:function(result)
                        {
                            if(result['success']){
                                toastr.success(result['success'], 'Success');
                                window.LaravelDataTables['vendorcategory-table'].ajax.reload();
                            }else if(result['error']){
                                toastr.error(result['error'], 'Error')
                            }
                        }
                    });
                
            }
            });
    }
</script>
@endsection