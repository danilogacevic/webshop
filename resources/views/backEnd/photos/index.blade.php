@extends('admin.app')
@section('title')
Photo
@stop

@section('content')

    <h1>Photos </h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tbladmin_photos">
            <thead>
                <tr>
                    <th>ID</th><th>Product</th><th>File</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($photos as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('admin/photos', $item->id) }}">{{ $item->product->product_title }}</a></td><td>
                        <img src="{{ $item->file }}" alt="" width="50px"></td>
                    <td>
                        <a href="{{ url('admin/photos/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/photos', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('scripts')

    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#tbladmin_photos').DataTable({
                columnDefs: [{
                    targets: [0],
                    visible: false,
                    searchable: false
                },
                ],
                order: [[0, "asc"]],
            });
        });
    </script>
@endsection