@extends('layouts.admin')

@section('admin-content')
    <div class="container py-4 justify-content-center d-flex">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome to {{ config('app.name', 'Laravel') }}!</h1>
                                </div>
                                <div class="text-center">
                                    <p class="text-gray-900 mb-4">
                                        Here is where we can add indicators from all the sections in the app.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection