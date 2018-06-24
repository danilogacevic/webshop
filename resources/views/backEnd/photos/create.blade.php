@extends('admin.app')

@section('styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css">

@stop

@section('content')

    <h1>Upload photos for {{$product->product_title}}</h1>

    {!! Form::open(['method'=>'POST','action'=>'PhotosController@store','files'=>'true', 'class'=>'dropzone']) !!}

    {!! Form::close() !!}

@stop

@section('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>

@stop


