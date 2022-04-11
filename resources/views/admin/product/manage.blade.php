@extends('master.admin.master')

@section('body')
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Manage User</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Brand</th>
                            <th width="8%">Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category_name }}</td>
                                <td>{{ $product->brand_name }}</td>
                                <td><img src="{{ $product->image }}" alt="" width="100%"></td>
                                <td>{{ $product->status == 1 ? 'Active' : 'Inactive' }}</td>
                                <td>
                                    <a href="{{ route('edit-product', ['id'=> $product->id]) }}" class="btn btn-success btn-sm">Edit</a>
                                    <a href="{{ route('delete-product',['id'=> $product->id]) }}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
