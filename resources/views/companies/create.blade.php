@extends('layout.app')
@section('title')
<title>Company | KeyTech</title>
@endsection
@section('content')
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Company</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="row">
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-header">
                            <h5>Company</h5>

                        </div>
                        <div class="card-block p-3">
                            {!! Form::open(['route' => isset($data) ? ['companies.update','company'=>$data->id] : 'companies.store', 'method' => isset($data) ? 'PUT' : 'POST']) !!}
                                @csrf
                                @if(isset($data))
                                {!! Form::hidden('id', $data->id) !!}
                                @endif
                                <div class="form-group row mb-2">
<div class="col-sm-3">

{!! Form::label('name', 'name', ['class' => 'control-label']) !!}
</div>
<div class="col-sm-9">

                    {!! Form::text('name', (isset($data) && $data->name) ? old('name', $data->name) : old('name'), ['class' => 'form-control', 'required']) !!}
</div>
</div>
<div class="form-group row mb-2">
<div class="col-sm-3">

{!! Form::label('company_code', 'company_code', ['class' => 'control-label']) !!}
</div>
<div class="col-sm-9">

                    {!! Form::text('company_code', (isset($data) && $data->company_code) ? old('company_code', $data->company_code) : old('company_code'), ['class' => 'form-control', 'required']) !!}
</div>
</div>
<div class="form-group row mb-2">
<div class="col-sm-3">

{!! Form::label('logo', 'logo', ['class' => 'control-label']) !!}
</div>
<div class="col-sm-9">

                    {!! Form::text('logo', (isset($data) && $data->logo) ? old('logo', $data->logo) : old('logo'), ['class' => 'form-control', 'required']) !!}
</div>
</div>
<div class="form-group row mb-2">
<div class="col-sm-3">

{!! Form::label('address', 'address', ['class' => 'control-label']) !!}
</div>
<div class="col-sm-9">

                    {!! Form::textarea('address', (isset($data) && $data->address) ? old('address', $data->address) : old('address'), ['class' => 'form-control', 'required']) !!}
</div>
</div>
<div class="form-group row mb-2">
<div class="col-sm-3">

{!! Form::label('contact_person', 'contact_person', ['class' => 'control-label']) !!}
</div>
<div class="col-sm-9">

                    {!! Form::select('contact_person',['' => 'Select a Contact person']+$users ,(isset($data) && $data->contact_person) ? old('contact_person', $data->contact_person) : old('contact_person'), ['class' => 'form-control', 'required']) !!}
</div>
</div>
<div class="form-group row mb-2">
<div class="col-sm-3">

{!! Form::label('industry_id', 'industry_id', ['class' => 'control-label']) !!}
</div>
<div class="col-sm-9">

                    {!! Form::select('industry_id',['' => 'Select an Industry']+$industries  ,(isset($data) && $data->industry_id) ? old('industry_id', $data->industry_id) : old('industry_id'), ['class' => 'form-control', 'required']) !!}
</div>
</div>

                                <div class="form-group row mb-2">
                                    <div class="col-sm-10">
                                 {!! Form::submit('Submit', ['class' => 'btn btn-primary m-b-0 waves-effect waves-light save_category']) !!}
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection