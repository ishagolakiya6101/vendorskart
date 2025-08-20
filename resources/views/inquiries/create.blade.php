@extends('layout.app')
@section('title')
<title>Inquiry | KeyTech</title>
@endsection
@section('content')
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Inquiry</h5>
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
                            <h5>Inquiry</h5>

                        </div>
                        <div class="card-block p-3">
                            {!! Form::open(['route' => 'inquiries.store', 'method' => 'POST']) !!}
                                @csrf
                                @if(isset($data))
                                {!! Form::hidden('id', $data->id) !!}
                                @endif
                                <div class="form-group row mb-2">
<div class="col-sm-3">

{!! Form::label('material', 'material', ['class' => 'control-label']) !!}
</div>
<div class="col-sm-9">

                    {!! Form::select('material',$materials ,null, ['class' => 'form-control', 'required']) !!}
</div>
</div>
<div class="form-group row mb-2">
<div class="col-sm-3">

{!! Form::label('quantity', 'quantity', ['class' => 'control-label']) !!}
</div>
<div class="col-sm-9">

                    {!! Form::number('quantity', null, ['class' => 'form-control', 'required']) !!}
</div>
</div>
<div class="form-group row mb-2">
<div class="col-sm-3">

{!! Form::label('company_id', 'company_id', ['class' => 'control-label']) !!}
</div>
<div class="col-sm-9">

                    {!! Form::select('company_id',$companies ,null, ['class' => 'form-control', 'required']) !!}
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