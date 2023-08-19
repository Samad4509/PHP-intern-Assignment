@extends('master')

@section('title')
    String Word Count Program
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        <h1 class="text-center text-success">String Word Count Program</h1>
                        <hr/>
                        <form action="{{route('string-word-count')}}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Enter Your String</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="given_string"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Total Word</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{session('word')}}" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Total Character</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{session('character')}}" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" value="Submit"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
