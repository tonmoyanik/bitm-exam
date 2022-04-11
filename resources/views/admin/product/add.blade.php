@extends('master.admin.master')

@section('body')

    <section class="py-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Add Product Form</h4>
                        <p class="text-center text-success">{{ Session::get('message') }}</p>
                        <form action="{{ route('new-product') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name" id="horizontal-firstname-input">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Category Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="category_name" id="horizontal-firstname-input">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Brand Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="brand_name" id="horizontal-firstname-input">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="description" id="horizontal-firstname-input"></textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Image</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control-file" name="image" id="horizontal-firstname-input">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <input type="radio" name="status" value="1"> Active
                                    <input type="radio" name="status" value="0"> Inactive
                                </div>
                            </div>

                            <div class="form-group row justify-content-end">
                                <div class="col-sm-9">
                                    <div>
                                        <button type="submit" class="btn btn-primary w-md">Add Product</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

