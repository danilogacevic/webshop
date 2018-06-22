@extends('admin.app')
@section('title')
Create new Product
@stop

@section('content')

    <h1>Create New Product</h1>
    <hr/>

    {!! Form::open(['url' => 'admin/products', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('product_title') ? 'has-error' : ''}}">
                {!! Form::label('product_title', 'Product Title: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('product_title', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('product_title', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
                {!! Form::label('category_id', 'Category: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('category_id',[''=>'Select Category'] + $categories,null,['class'=>'form-control'])!!}
                    {!! $errors->first('category', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('product_price') ? 'has-error' : ''}}">
                {!! Form::label('product_price', 'Product Price: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('product_price', null, ['class' => 'form-control','step'=>'0.1']) !!}
                    {!! $errors->first('product_price', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('product_quantity') ? 'has-error' : ''}}">
                {!! Form::label('product_quantity', 'Product Quantity: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('product_quantity', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('product_quantity', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('product_description') ? 'has-error' : ''}}">
                {!! Form::label('product_description', 'Product Description: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('product_description', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('product_description', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('short_description') ? 'has-error' : ''}}">
                {!! Form::label('short_description', 'Short Description: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('short_description', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('short_description', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection