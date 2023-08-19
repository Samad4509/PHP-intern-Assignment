@extends('master')

@section('title')
    Product Detail
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <img src="{{asset($product['product_image'])}}" alt=""/>
                        <div class="card-img-overlay"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body">
                        <h1>{{$product['product_name']}}</h1>
                        <h4>TK. {{$product['product_price']}}</h4>
                        <p> {{$product['product_description']}} </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
