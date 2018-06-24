@extends('admin.app')

@section('styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css">

@stop

@section('content')

    <h1>Upload photos for {{$product->product_title}}</h1>

    {!! Form::open(['method'=>'POST','action'=>'PhotosController@store','files'=>'true', 'class'=>'dropzone','id'=>'drop']) !!}

    {!! Form::close() !!}

@stop

@section('scripts')

    <script src="{{asset('/js/dropzone.js')}}"></script>



@stop


