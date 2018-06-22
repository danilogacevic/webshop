@extends('admin.app')
@section('title')
Photo
@stop

@section('content')

    <h1>Photo</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Product</th><th>File</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $photo->id }}</td> <td> {{ $photo->product }} </td><td> {{ $photo->file }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection