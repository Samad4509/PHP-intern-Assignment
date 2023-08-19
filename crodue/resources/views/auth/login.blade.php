@extends('master')
@section('titte')
    Login Page
@endsection
@section('body')
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-center">Login Page</div>
                        <div class="card-body">
                            <form action="{{route('login')}}"method="POST">
                                @csrf
                                <div class="row mb-4">
                                    <label class="col-md-3">Email Address</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" required/>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-md-3">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" required/>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-danger" value="Login" required/>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
