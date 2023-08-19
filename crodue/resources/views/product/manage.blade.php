@extends('master')

@section('title')
    Manage Product Page
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mx-auto">
                    <div class="card card-body">
                        <h1 class="text-center text-success">All Product Info</h1>
                        <p class="text-success text-center">{{session('message')}}</p>
                        <hr/>
                        <table class="table-responsive-sm table-hover">
                            <thead>
                                <tr class="">
                                    <th class="">Sl</th>
                                    <th class="">Name</th>
                                    <th class="">Category</th>
                                    <th class="">Brand</th>
                                    <th class="">Price</th>
                                    <th class="">Image</th>
                                    <th class="">Description</th>
                                    <th class="">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr class="">
                                    <td class="">{{$loop->iteration}}</td>
                                    <td class="" contenteditable="true">{{$product->product_name}}</td>
                                    <td class="">{{$product->product_category}}</td>
                                    <td class="">{{$product->product_brand}}</td>
                                    <td class="">{{$product->product_price}}</td>
                                    <td class="">
                                        <img src="{{asset($product->product_image)}}" alt="" class="" height="60" width="80">
                                    </td>
                                    <td class="">{{$product->product_description}}</td>
                                    <td class="">
                                        <a href="{{route('edit-product', ['id' => $product->id])}}" class="btn btn-success btn-sm">Edit</a>
                                        <a href="{{route('delete-product', ['id' => $product->id])}}" onclick="return confirm('Are you sure you want to delete this product?')" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
