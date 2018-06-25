@extends('admin.app')
@section('title')
Product
@stop

@section('content')

    <h1>Products <a href="{{ url('admin/products/create') }}" class="btn btn-primary pull-right btn-sm">Add New Product</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tbladmin/products">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Product Title</th><th>Category</th><th>Product Price</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($products as $item)
                <tr><td>{{$item->id}}</td>

                    <td><a href="{{ url('admin/products', $item->id) }}">{{ $item->product_title }}</a></td><td>{{ $item->category->title }}</td><td>{{ $item->product_price }}</td>
                    <td>
                        <a href="{{ url('admin/products/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/products', $item->id],
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
<script type="text/javascript">
    $(document).ready(function(){
        $('#tbladmin/products').DataTable({
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