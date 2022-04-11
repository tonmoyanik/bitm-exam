@extends('master.front.master')

@section('title')
    Details Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body">
                        <img src="{{ asset($product->image) }}" alt="">
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="card card-body">
                        <h4>{{ $product->name }}</h4>
                        <hr/>
                        <h4>{{ $product->category_name }}</h4>
                        <hr/>
                        <h4>{{ $product->brand_name }}</h4>
                        <hr/>
                        <h4>{{ $product->description }}</h4>
                        <hr/>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
